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
    public static function getDiscount($price = 0, $template = "1")
    {
        $xthml = null;
        $model = new UserGroupModel();
        $items = $model->listItems([], ['task' => 'list']);

        if (count($items) > 0) {
            foreach ($items as $item) {
                $name = $item['name'] ?? "-";
                $discount = $item['discount'] ?? 0;
                $discount_money = round($price * $discount / 100);
                $discount_money = $discount_money > 0 ? number_format($discount_money) : 0;
                $xthml .= self::discount_template($name, $discount, $discount_money, $template);
            }
        }
        return $xthml;
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
    public static function getGallery($gallery)
    {
        $result = ($gallery) ? explode(",", $gallery) : [];
        return $result;
    }
    public static function discount_template($name, $discount_percent, $discount_money, $template)
    {
        $xthml = null;
        if ($template == '1') {
            $xthml = sprintf(
                '<div class="product-price-discount-item">
            <span>%s</span>
            <span class="text-feature">%s</span>
            <span>%s</span>
        </div>',
                $name . ":",
                "({$discount_percent}%)",
                $discount_money . " đ",
            );
        } elseif ($template == '2') {
            $xthml = sprintf(
                '<div>
                    <span>Chiết khấu %s</span>
                    <span>:</span>
                    <span>%s</span>
                </div>',
                $name . ":",
               
                $discount_money . " đ",
            );
        }

        return $xthml;
    }
    public static function getPriceOfPercent($price, $percent, $format = true) {
        $result = 0;
        if($percent && $percent > 0) {
            $result = round($price * $percent / 100);
            if($format == true) {
                $result = number_format($result) . " đ";
            }
            
        }
        return $result;

    }
}
