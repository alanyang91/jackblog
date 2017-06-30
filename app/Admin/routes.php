<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('users', UserController::class);
    $router->resource('articles', ArticleController::class);
    $router->resource('articleCats', ArticleCatController::class);
    $router->resource('navigations', NavigationController::class);
    $router->resource('pwdCats', PwdCatController::class);
    $router->resource('pwddetails', PwddetailController::class);
});

