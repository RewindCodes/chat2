<?php

namespace Database\Seeders;

use App\Models\Plan as ModelsPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

      $plan=[
        [
            'plan_id'=>'price_1MsoPPK5ZdmvG8t0llmitJ8g',
            'name'=>'Regular',
            'billing_method'=>'year',
            'interval_count'=>1,
            'price'=>200
        ],
        [
            'plan_id'=>'price_1MsoOnK5ZdmvG8t0maAf8dSm',
            'name'=>'Advanced',
            'billing_method'=>'year',
            'interval_count'=>1,
            'price'=>300
        ],
        [
            'plan_id'=>'price_1MsoNjK5ZdmvG8t0Dzhv991N',
            'name'=>'Basic',
            'billing_method'=>'year',
            'interval_count'=>1,
            'price'=>150
        ],
        [
            'plan_id'=>'price_1MsoMzK5ZdmvG8t0mShdrGVR',
            'name'=>'Basic',
            'billing_method'=>'month',
            'interval_count'=>1,
            'price'=>20
        ],

        [
            'plan_id'=>'price_1MsoMYK5ZdmvG8t0RjUul9G2',
            'name'=>'Advanced',
            'billing_method'=>'month',
            'interval_count'=>1,
            'price'=>80
        ],
        [
            'plan_id'=>'price_1MsoLLK5ZdmvG8t0HrXrwehn',
            'name'=>'Regular',
            'billing_method'=>'month',
            'interval_count'=>1,
            'price'=>50
        ],
        ];


        foreach($plan as $plans){
            ModelsPlan::create($plans);
        }



    }
}
