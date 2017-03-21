<?php
namespace App\Module\Shop\Cart;

use App\Core\Framework\Object;

class CartItem extends Object
{
    public $id;//产品id
    public $name;//产品名称
    public $qty;//数量
    public $options;//选项
    public $user_id;//用户id
    function __construct($id,$name,$qty,$price,$options = [],$userid = 0)
    {
        $this->product_id = $id;
        $this->name = $name;
        $this->qty = $qty;
        $this->options = $options;
        $this->user_id = $userid;
    }
    protected function generateRowId($id, array $options)
    {
        ksort($options);
        return md5($id . serialize($options));
    }
    public function toArray()
    {
        return [
            'id'       => $this->id,
            'name'     => $this->name,
            'qty'      => $this->qty,
            'price'    => $this->price,
            'options'  => $this->options,
        ];
    }
}