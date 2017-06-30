<?php

namespace App\Admin\Controllers;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class AdminController extends Admin
{
    use ModelForm;
    public $header = 'header';
    public $description = '列表';
    
    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {
            $content->header($this->header);
            $content->description($this->description);
            $content->body($this->grid());
        });
    }
    
    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {
            $content->header($this->header);
            $content->description($this->description);
            $content->body($this->form()->edit($id));
        });
    }
    
    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {
            $content->header($this->header);
            $content->description($this->description);
            $content->body($this->form());
        });
    }
    
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    public function grid()
    {
        return Admin::grid(YourModel::class, function (Grid $grid) {
            $grid->id('ID')->sortable();
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
        return Admin::form(YourModel::class, function (Form $form) {
            $form->display('id', 'ID');
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
    
}
