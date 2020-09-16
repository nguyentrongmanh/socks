<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('taobao_url', __('Taobao url'));
        $grid->column('taobao_price', __('Taobao price'));
        $grid->column('main_image', __('Main image'));
        $grid->column('stock_quantity', __('Stock quantity'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('taobao_url', __('Taobao url'));
        $show->field('taobao_price', __('Taobao price'));
        $show->field('main_image', __('Main image'));
        $show->field('stock_quantity', __('Stock quantity'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->textarea('name', __('Name'));
        $form->textarea('taobao_url', __('Taobao url'));
        $form->decimal('taobao_price', __('Taobao price'));
        $form->textarea('main_image', __('Main image'));
        $form->number('stock_quantity', __('Stock quantity'));

        return $form;
    }
}
