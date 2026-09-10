<?php
// 変数の定義
$product_name = 'ノートパソコン';
$price = 80000;     // 商品単価
$quantity = 2;      // 購入個数
$tax_rate = 0.1;    // 消費税率

// 計算処理
$subtotal = $price * $quantity;         // 小計
$tax_amount = $subtotal * $tax_rate;    // 消費税額
$total = $subtotal + $tax_amount;       // 合計金額

// 結果の出力
echo '商品名：' . $product_name . "<br>";
echo '単価：' . $price . '円' . "<br>";
echo '数量：' . $quantity . '個' . "<br>";
echo "小計：{$subtotal}円<br>";
echo "消費税(10%)：{$tax_amount}円<br>";
echo "合計金額：{$total}円";