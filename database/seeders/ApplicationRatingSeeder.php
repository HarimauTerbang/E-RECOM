<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ApplicationRating;

class ApplicationRatingSeeder extends Seeder
{
    public function run()
    {
        $ratings = [
            ['business_type' => 'Retail', 'application_name' => 'Tokopedia', 'rating' => 5, 'description' => 'Tokopedia adalah platform e-commerce terbesar di Indonesia dengan berbagai macam produk. Sangat cocok untuk pemilik usaha retail untuk memasarkan produk mereka secara online.'],
            ['business_type' => 'Retail', 'application_name' => 'Shopee', 'rating' => 4, 'description' => 'Shopee juga merupakan platform e-commerce yang sangat populer di Indonesia dengan berbagai promo dan fitur pengiriman. Cocok untuk pemilik usaha retail untuk mencapai pasar yang lebih luas.'],
            ['business_type' => 'Retail', 'application_name' => 'Bukalapak', 'rating' => 3, 'description' => 'Bukalapak menawarkan berbagai produk dari penjual skala kecil hingga besar. Cocok untuk pemilik usaha retail yang ingin memasarkan produk mereka secara online, meskipun tidak sebesar Tokopedia dan Shopee.'],
            ['business_type' => 'Retail', 'application_name' => 'Lazada', 'rating' => 3, 'description' => 'Lazada merupakan platform e-commerce yang dikenal dengan produk dari global hingga lokal. Cocok untuk pemilik usaha retail yang ingin menjangkau pasar luas.'],
            ['business_type' => 'Retail', 'application_name' => 'Blibli', 'rating' => 2, 'description' => 'Blibli fokus pada berbagai kategori produk seperti elektronik dan fashion. Cocok untuk pemilik usaha retail yang produknya sesuai dengan kategori yang ditawarkan Blibli.'],

            ['business_type' => 'Restoran', 'application_name' => 'GoPay', 'rating' => 5, 'description' => 'GoPay adalah dompet digital yang terintegrasi dengan Gojek, sangat cocok untuk pemilik usaha restoran untuk menerima pembayaran secara digital.'],
            ['business_type' => 'Restoran', 'application_name' => 'OVO', 'rating' => 4, 'description' => 'OVO juga merupakan dompet digital yang banyak digunakan untuk pembayaran online dan offline, cocok untuk pemilik usaha restoran.'],
            ['business_type' => 'Restoran', 'application_name' => 'DANA', 'rating' => 3, 'description' => 'DANA adalah dompet digital dari Grab yang bisa digunakan untuk berbagai transaksi keuangan, termasuk pembayaran di restoran.'],
            ['business_type' => 'Restoran', 'application_name' => 'LinkAja', 'rating' => 3, 'description' => 'LinkAja adalah dompet digital hasil gabungan dari beberapa perusahaan telekomunikasi dan perbankan, cocok untuk transaksi pembayaran di restoran.'],
            ['business_type' => 'Restoran', 'application_name' => 'ShopeePay', 'rating' => 2, 'description' => 'ShopeePay adalah dompet digital dari Shopee, lebih cocok untuk transaksi e-commerce daripada pembayaran di restoran.'],

            ['business_type' => 'Fashion', 'application_name' => 'Instagram', 'rating' => 5, 'description' => 'Instagram adalah platform yang sangat cocok untuk pemilik usaha fashion karena fokus pada berbagi foto dan video produk.'],
            ['business_type' => 'Fashion', 'application_name' => 'Facebook', 'rating' => 4, 'description' => 'Meskipun popularitasnya menurun, Facebook masih cocok untuk mempromosikan produk fashion melalui berbagai fitur seperti Facebook Marketplace.'],
            ['business_type' => 'Fashion', 'application_name' => 'TikTok', 'rating' => 3, 'description' => 'TikTok dapat digunakan untuk mempromosikan fashion melalui video pendek, cocok untuk target audiens yang lebih muda.'],
            ['business_type' => 'Fashion', 'application_name' => 'WhatsApp', 'rating' => 3, 'description' => 'WhatsApp dapat digunakan untuk komunikasi langsung dengan pelanggan dan memfasilitasi transaksi, meskipun tidak sefokus Instagram atau Facebook untuk fashion.'],
            ['business_type' => 'Fashion', 'application_name' => 'Twitter', 'rating' => 2, 'description' => 'Twitter lebih cocok untuk berbagi informasi dan berita, kurang fokus untuk promosi produk fashion secara visual.'],

            ['business_type' => 'Travel', 'application_name' => 'WhatsApp', 'rating' => 5, 'description' => 'WhatsApp adalah aplikasi yang sangat cocok untuk komunikasi langsung dengan pelanggan dalam industri travel.'],
            ['business_type' => 'Travel', 'application_name' => 'Facebook', 'rating' => 4, 'description' => 'Facebook dapat digunakan untuk mempromosikan paket perjalanan, ulasan, dan diskusi komunitas dalam industri travel.'],
            ['business_type' => 'Travel', 'application_name' => 'Instagram', 'rating' => 3, 'description' => 'Instagram cocok untuk membagikan foto dan video destinasi wisata, namun tidak sefokus WhatsApp atau Facebook untuk interaksi langsung.'],
            ['business_type' => 'Travel', 'application_name' => 'Twitter', 'rating' => 2, 'description' => 'Twitter lebih cocok untuk berbagi informasi instan dan kurang fokus untuk industri travel yang membutuhkan visualisasi.'],
            ['business_type' => 'Travel', 'application_name' => 'TikTok', 'rating' => 2, 'description' => 'TikTok dapat digunakan untuk konten kreatif terkait travel, namun target audiensnya lebih muda dan kurang fokus pada transaksi atau interaksi langsung.'],
        ];

        foreach ($ratings as $rating) {
            ApplicationRating::create($rating);
        }
    }
}
