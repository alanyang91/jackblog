<?php

namespace App\Admin\Controllers;

use App\Models\articleModel;
use App\Models\articleCatModel;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class ArticleController extends AdminController
{
    use ModelForm;
    public $header = '文章';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    public function grid()
    {
        return Admin::grid(articleModel::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->cid('文章分类')->value(function($Id) {
                return articleCatModel::find($Id)->name;
            });
            $grid->title('文章标题');
            $grid->content('文章内容');
            $grid->img('文章图片');
            $grid->created_at('创建时间');
            $grid->updated_at('更新时间');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    public function form()
    {
        
        return Admin::form(articleModel::class, function (Form $form) {
            $articlecats = articleCatModel::all()->toArray();
            $arr = array_pluck($articlecats,  'name', 'id');
            $form->select('cid','文章分类')->options($arr);
            $form->text('title','文章标题');
//            $form->textarea('content','文章内容');
            $form->editor('content','文章内容');
            $form->image('img','文章图片');
            $form->display('created_at', '创建时间');
            $form->display('updated_at', '更新时间');
        });
    }
}
