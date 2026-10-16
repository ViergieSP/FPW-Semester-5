<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Ambang Batas Stok Menipis (Low Stock Threshold)
    |--------------------------------------------------------------------------
    |
    | Menentukan batas jumlah stok minimum sebelum produk diberi indikator
    | peringatan "Menipis". Nilai ini dapat dioverride melalui file .env.
    |
    */
    'low_stock_threshold' => (int) env('LOW_STOCK_THRESHOLD', 10),
];