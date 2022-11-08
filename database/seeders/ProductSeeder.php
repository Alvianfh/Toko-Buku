<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::query()->insert(
            [
                [
                    "id" => 1,
                    "name" => "Panduan Cepat Belajar HTML, PHP, & MYSQL",
                    "type" => "HTML",
                    "desc" => "HTML, PHP, dan MySQL merupakan tiga komponen pembentuk website kekinian.",
                    "price" => 70000,
                    "image_path" => "https://cdn.gramedia.com/uploads/items/9786230020735_Cov_Panduan_Cepat_Belajar_HTML_PHP_MYSQL.jpg"
                ],
                [
                    "id" => 2,
                    "name" => "111 Kode HTML untuk Belajar Kilat",
                    "type" => "HTML",
                    "desc" => "Teknik menguasai HTML secepat kilat Untuk pemula yang ingin menjadi master HTML",
                    "price" => 56800,
                    "image_path" => "https://cdn.gramedia.com/uploads/items/9786020496863_111_Kode_HTML.jpg"
                ],
                [
                    "id" => 3,
                    "name" => "HTML 5 & Php",
                    "type" => "HTML",
                    "desc" => "HTML5 dan PHP merupakan bahasa pemrograman masa kini dan masa depan. ",
                    "price" => 20000,
                    "image_path" => "https://cdn.gramedia.com/uploads/items/716051209_html_5_dan_php.jpg"
                ],
                [
                    "id" => 4,
                    "name" => "Membuat Website Cantik dan Menarik dengan JQuery",
                    "type" => "JQUERY",
                    "desc" => "JQuery merupakan salah satu library Javascript yang powerful dan sudah banyak digunakan oleh website-website terkenal.",
                    "price" => 50000,
                    "image_path" => "https://cdn.gramedia.com/uploads/items/716051209_html_5_dan_php.jpg"
                ]
            ]
        );
    }
}
