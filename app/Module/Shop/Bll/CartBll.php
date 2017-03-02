<?php
namespace App\Module\Shop\Bll;

use App\Core\Bll\Bll;
use App\Module\Shop\Cart\Cart;
use App\Module\Shop\Model\ShopCartModel;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\EventDispatcher\Event;

class CartBll extends Bll
{
    public $session;
    private $cart;
    function __construct()
    {
        $session = new SessionManager(app());
        $session->driver("cookie");
        $this->cart = new Cart($session,)
    }

    function login(){
        if(cookie("cart")){

        }
    }

    function add($product_id)
    {
        if ($cart = cookie("cart")) {
            $cart = json_decode($cart);
            if ($cart[$product_id]) {
                $cart[$product_id]["count"] += 1;
            } else {
                $cart[$product_id]["count"] = 1;
            }
        } else {
            $cart[$product_id]["count"] = 1;
        }
        cookie("cart", json_encode($cart));
        //登录情况
        if ($userid = Auth::id()) {
            $product = ShopCartModel::where(["user_id" => $userid, "product_id" => $product_id])->first();
            if ($product) {
                $product->count += 1;
                $product->save();
            } else {
                $product = new ShopCartModel();
                $product->user_id = $userid;
                $product->product_id = $product_id;
                $product->save();
            }
        }
        return true;
    }

    function get($skuid, $userid = 0)
    {

    }
}