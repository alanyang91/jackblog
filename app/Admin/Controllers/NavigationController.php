<?php

namespace App\Admin\Controllers;

use App\Models\navigationModel;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class NavigationController extends AdminController
{
    use ModelForm;
    public $header = '首页导航';
    
    public function grid()
    {
        return Admin::grid(navigationModel::class, function (Grid $grid) {
            
            $grid->id('ID')->sortable();
            $grid->name('导航名称');
            $grid->status('状态')->value(function($Id) {
                return articleCatModel::find($Id)->name;
            });;
            $grid->url('路径');
            $grid->target('target跳转');
        });
    }
    
    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        return Admin::form(navigationModel::class, function (Form $form) {
            $form->text('name', '导航名称');
            $form->radio('name', '状态')->values(['0' => '关闭', '1'=> '开启'])->default('1');
            $form->url('name', '路径');
            $form->text('name', 'target跳转');
        });
    }
}
