<?php

use Hanson\LaravelAdminRegister\Http\Controllers\LaravelAdminRegisterController;
use Illuminate\Routing\Router;

Route::group([
                 'prefix' => config('admin.route.prefix'),
                 'as'     => config('admin.route.prefix').'.',
             ], function (Router $router) {
    $router->get('register', LaravelAdminRegisterController::class.'@getRegister');
    $router->post('register', LaravelAdminRegisterController::class.'@postRegister')->name('register');
    $router->post('register/send-code', LaravelAdminRegisterController::class.'@sendCode');
});
