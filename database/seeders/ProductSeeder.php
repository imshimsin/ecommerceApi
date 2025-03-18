<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::factory(10)->create();

    //     DB::table('products')->insert([
    //         [
    //             'name' => 'Laptop',
    //             'description' => 'Gaming Laptop',
    //             'price' => 1200.99,
    //             'stock' => 10,
    //             'image' => 'products/2USoF26ICzxLQgDuiBNdkDGqrfMp0r8j5EzHU45n.jpg'
    //         ],
    //         [
    //             'name' => 'Phone',
    //             'description' => 'Smartphone with AMOLED display',
    //             'price' => 599.99,
    //             'stock' => 30,
    //             'image' => 'products/a1b2c3d4e5f6g7h8i9j0k1l2m3n4o5p6q7r8s9t.jpg'
    //         ],
    //         [
    //             'name' => 'Tablet',
    //             'description' => '10-inch screen, high performance',
    //             'price' => 349.99,
    //             'stock' => 15,
    //             'image' => 'products/xyZ12abc345def678ghi90jklmnopqrstu.jpg'
    //         ],
    //         [
    //             'name' => 'Smart Watch',
    //             'description' => 'Waterproof with fitness tracking',
    //             'price' => 199.99,
    //             'stock' => 25,
    //             'image' => 'products/dfhjk87sdhjf23jhkdsfhjk34r23hjsk.jpg'
    //         ],
    //         [
    //             'name' => 'Headphones',
    //             'description' => 'Noise-canceling Bluetooth headphones',
    //             'price' => 129.99,
    //             'stock' => 40,
    //             'image' => 'products/pqwe843jklwer23423nmbxczv09823v.jpg'
    //         ],
    //         [
    //             'name' => 'Gaming Console',
    //             'description' => '4K gaming console with VR support',
    //             'price' => 499.99,
    //             'stock' => 8,
    //             'image' => 'products/wer23mnc98xvc342hjksd872jkhr23.jpg'
    //         ],
    //         [
    //             'name' => 'Wireless Speaker',
    //             'description' => 'Portable speaker with deep bass',
    //             'price' => 89.99,
    //             'stock' => 50,
    //             'image' => 'products/zxc98mnb12asdjh34hjksdfk23hj.jpg'
    //         ],
    //         [
    //             'name' => 'Monitor',
    //             'description' => '27-inch Full HD IPS monitor',
    //             'price' => 179.99,
    //             'stock' => 12,
    //             'image' => 'products/asd34wer98hjksdf234mnbcxzv.jpg'
    //         ],
    //         [
    //             'name' => 'Keyboard',
    //             'description' => 'Mechanical RGB gaming keyboard',
    //             'price' => 89.99,
    //             'stock' => 60,
    //             'image' => 'products/9mnbcv1234wer56sdhjk876asd.jpg'
    //         ],
    //         [
    //             'name' => 'Mouse',
    //             'description' => 'Wireless gaming mouse with fast response',
    //             'price' => 49.99,
    //             'stock' => 70,
    //             'image' => 'products/hjkasd23mnbc45wer098xvcz.jpg'
    //         ]
    //     ]);
    }
}
