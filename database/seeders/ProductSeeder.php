<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo 300 bộ dữ liệu sản phẩm điện thoại
        for ($i = 0; $i < 300; $i++) {
            // Lấy ngẫu nhiên một trong 3 tên sản phẩm
            $productName = $this->getRandomProductName();

            // Phát sinh giá theo tên sản phẩm
            $price = $this->getRandomPriceByProductName($productName);

            // Chèn bản ghi vào cơ sở dữ liệu
            DB::table('dienthoai')->insert([
                'tenDT' => $productName . $i,
                'moTa' => 'Mô tả sản phẩm',
                'ngayCapNhat' => now(),
                'gia' => $price,
                'giaKM' => $price * 0.9, // Giả sử giá khuyến mãi là 90% giá gốc
                'urlHinh' => null, // Bổ sung URL hình sau
                'soLuongTonKho' => rand(10, 100), // Số lượng tồn kho ngẫu nhiên từ 10 đến 100
                'hot' => rand(0, 1), // Sản phẩm hot hoặc không ngẫu nhiên
                'anHien' => 1, // Hiển thị sản phẩm
                'baiViet'=>'phan gia thuyên',
                'ghiChu'=>'san pham live new',
                'idLoai' => rand(1,6),
            ]);

        }
    }

    // Phương thức để lấy ngẫu nhiên một trong 3 tên sản phẩm cơ sở
    private function getRandomProductName()
    {
        $productNames = ['Oppo X3A', 'Iphone X3S Max', 'Nokia Pr2o'];
        return $productNames[array_rand($productNames)];
    }

    // Phương thức để phát sinh giá theo tên sản phẩm
    private function getRandomPriceByProductName($productName)
    {
        switch ($productName) {
            case 'Oppo X3A':
                return rand(700000, 1000000);
            case 'Iphone X3S Max':
                return rand(500000, 800000);
            case 'Nokia Pr2o':
                return rand(250000, 500000);
            default:
                return rand(100000, 500000); // Giá ngẫu nhiên từ 100,000 đến 500,000 cho các sản phẩm khác
        }
    }
}
