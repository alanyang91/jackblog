<?php

namespace App\Admin\Controllers;

use App\Models\PwdCatModel;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PwdCatController extends AdminController
{
    use ModelForm;
    public $header = '账号分类';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    public function grid()
    {
        return Admin::grid(PwdCatModel::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name('分类名称');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        return Admin::form(PwdCatModel::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('name','分类名称');
        });
    }
}
