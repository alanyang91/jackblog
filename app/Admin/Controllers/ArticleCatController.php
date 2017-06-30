<?php

namespace App\Admin\Controllers;

use App\Models\articleCatModel;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ArticleCatController extends AdminController
{
    use ModelForm;
    public $header = '文章分类';

    public function grid()
    {
        return Admin::grid(articleCatModel::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name();
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        return Admin::form(articleCatModel::class, function (Form $form) {
            $form->text('name', '文章分类');
        });
    }
}
