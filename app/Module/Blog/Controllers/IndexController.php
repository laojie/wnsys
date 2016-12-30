<?php
namespace App\Module\Blog\Controllers;
use App\Module\Blog\Model\BlogArticleModel;
use App\Module\Web\Controllers\WebController;
use Illuminate\Support\Facades\Response;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/26 0026
 * Time: 11:36
 */
class IndexController extends WebController
{
    function show($id)
    {
        $blog = BlogArticleModel::find($id);
        return view("blog.web.show", [
            "blog" => $blog,
        ]);
    }
}