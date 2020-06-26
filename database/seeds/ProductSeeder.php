<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $product = new Product();
       $product->name="Chào mào Long Phụng";
        $product->price=150000000;
        $product->oldprice=190000000;
       $product->quantity="1";
       $product->source="Nghệ nhân Long";
        $product->status="Còn";
       $product->id_category="1";
       $product->image="public/1WjJw4MK9ZeFFHgxFh7gR1y5SVdGrkT5T1R5fyFH.jpeg";
       $product->description="Tuyệt vời";
       $product->save();
       $product1 = new Product();
       $product1->name="Chích chòe lửa bông";
        $product1->price=170000000;
        $product1->oldprice=190000000;
       $product1->quantity="1";
       $product1->source="Nghệ nhân Vinh";
        $product1->status="Còn";
       $product1->id_category="2";
       $product1->image="public\ivpg1USLvvCB07Cn5GsEn4L5dsn8Tjo6erU9FLfG.jpeg";
       $product1->description="Tuyệt vời";
       $product1->save();
       $product2 = new Product();
       $product2->name="Chào mào Kim Long";
        $product2->price=150000000;
        $product2->oldprice=190000000;
       $product2->quantity="1";
       $product2->source="Nghệ nhân Lực";
        $product2->status="Còn";
       $product2->id_category="1";
       $product2->image="\public\M4iSrpuWkdDLrGUgdkOP9MdRF7UxQ0JMdX3KMkgQ.jpeg";
       $product2->description="Tuyệt vời";
       $product2->save();
    }
}