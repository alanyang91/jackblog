<?php

namespace App\Admin\Controllers;

use App\Models\PwdDetailModel;
use App\Models\PwdCatModel;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PwddetailController extends AdminController
{
    use ModelForm;
    public $header = '账号';
    
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    public function grid()
    {
        return Admin::grid(PwdDetailModel::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->pwdcid('账号类型')->value(function($Id) {
                return PwdCatModel::find($Id)->name;
            });
            $grid->name('名称');
            $grid->url('链接地址')->value(function($url) {
                return '<a href="'.$url.'" target="_blank">'.$url.'</a>';
            });
            $grid->content('详情');
//            $grid->detail('描述');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        return Admin::form(PwdDetailModel::class, function (Form $form) {
            $PwdCatModel = PwdCatModel::all()->toArray();
            $arr = array_pluck($PwdCatModel,  'name', 'id');
            $form->select('pwdcid','分类ID')->options($arr);
            $form->text('name','名称');
            $form->url('url','链接地址');
            $form->textarea('content','详情');
            $form->textarea('detail','描述');
        });
    }
}
