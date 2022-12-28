<?php
namespace App\Helpers\Link;

class ProductLink
{
    public static function getSupplierLink($id)
    {
        return route('user_supplier/index',['id' => $id]);
    }
    public static function getLinkProductDetail($id)
    {
        return route('user_product/detail',['id' => $id]);
    }
}
