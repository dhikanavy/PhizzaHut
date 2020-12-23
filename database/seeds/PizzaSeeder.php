<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            'pizzaname'=>'Pepperoni',
            'pizzadescription'=>'Topping pepperoni, keju mozarella dan saus special PH.',
            'pizzaprice'=>80000,
            'pizzaimage'=>'peperoni.jpg'
        ]);

        DB::table('pizzas')->insert([
            'pizzaname'=>'Hawaian',
            'pizzadescription'=>'Dengan nanas, daging ayam, paprika, keju mozzarella dan saus tomat pedas.',
            'pizzaprice'=>70000,
            'pizzaimage'=>'hawaian.jfif'
        ]);

        DB::table('pizzas')->insert([
            'pizzaname'=>'Cheesy',
            'pizzadescription'=>'Dengan ekstra keju mozzarella, bumbu khas italia dan saus special PHD.',
            'pizzaprice'=>100000,
            'pizzaimage'=>'cheesy.jfif'
        ]);

        DB::table('pizzas')->insert([
            'pizzaname'=>'Meat Lovers',
            'pizzadescription'=>'Dengan burger sapi, daging cincang, daging asap, sosis sapi, keju mozarella dan saus spesial PHD.',
            'pizzaprice'=>90000,
            'pizzaimage'=>'meatlovers.jfif'
        ]);

        DB::table('pizzas')->insert([
            'pizzaname'=>'Pepperoni',
            'pizzadescription'=>'Topping pepperoni, keju mozarella dan saus special PH.',
            'pizzaprice'=>80000,
            'pizzaimage'=>'peperoni.jpg'
        ]);

        DB::table('pizzas')->insert([
            'pizzaname'=>'Pepperoni',
            'pizzadescription'=>'Topping pepperoni, keju mozarella dan saus special PH.',
            'pizzaprice'=>80000,
            'pizzaimage'=>'peperoni.jpg'
        ]);

        DB::table('pizzas')->insert([
            'pizzaname'=>'Pepperoni',
            'pizzadescription'=>'Topping pepperoni, keju mozarella dan saus special PH.',
            'pizzaprice'=>80000,
            'pizzaimage'=>'peperoni.jpg'
        ]);

        DB::table('pizzas')->insert([
            'pizzaname'=>'Pepperoni',
            'pizzadescription'=>'Topping pepperoni, keju mozarella dan saus special PH.',
            'pizzaprice'=>80000,
            'pizzaimage'=>'peperoni.jpg'
        ]);
    }
}
