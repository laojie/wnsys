<?php
namespace App\Module\Blog\Controllers;
use App\Http\Controllers\Controller;
use App\Model\TopicModel;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/26 0026
 * Time: 11:36
 */
class AdminController extends Controller{
    function index(){

        return view("blog.admin.list");
    }
    function addBlog(){
        
        return view("blog.admin.add");
    }
}