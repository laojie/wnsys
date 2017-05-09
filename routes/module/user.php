<?php

Route::get("/home","IndexController@home");
Route::get("/user/login","LoginController@showLoginForm");
Route::post("/user/login","LoginController@login");
Route::get("/user/blog/add","BlogController@add");


Route::get("/admin/user","UserController@index");
Route::post("/admin/user/save","UserController@save");
Route::get("/admin/user/get","UserController@get");
Route::get("/admin/user/delete","UserController@delete");