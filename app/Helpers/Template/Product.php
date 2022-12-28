<?php

namespace App\Helpers\Template;

use App\Models\SupplierModel;
use App\Models\UserGroupModel;

class Product
{
    public static function getListSupplier()
    {
        $model = new SupplierModel();
        $items =  $model->listItems([], ['task' => 'list']);
        return $items;
    }
    public static function getPriceProduct($price)
    {

        if ($price == 0) {
            $result = "Liên hệ";
        } else {
            $result = number_format($price) . " đ";
        }

        return $result;
    }
    public static function getDiscount($price = 0)
    {
        $xthml = null;
        $model = new UserGroupModel();
        $items = $model->listItems([], ['task' => 'list']);
        $discount_item = null;
        if (count($items) > 0) {
            foreach ($items as $item) {
                $name = $item['name'] ?? "-";
                $discount = $item['discount'] ?? 0;
                $discount_money = round($price * $discount / 100);
                $discount_money = $discount_money > 0 ? number_format($discount_money) : 0;
                $discount_item .= sprintf(
                    '<div class="product-price-discount-item">
                <span>%s</span>
                <span class="text-feature">%s</span>
                <span>%s</span>
            </div>',
                    $name . ":",
                    "({$discount}%)",
                    $discount_money . " đ",
                );
            }
        }

        echo $discount_item;
        // $discount_item = sprintf('
        // <div class="product-price-discount-item">
        //     <span>Đại lý</span>
        //     <div>
        //         <span class="text-feature">(35%)</span>
        //         <span>122,500₫</span>
        //     </div>
        // </div>
        // ');
    }
}
