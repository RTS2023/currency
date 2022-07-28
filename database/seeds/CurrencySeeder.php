<?php 

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder 
{

    public function run()
    {   
        $data = Config::get('currency.currencies');

        foreach ($data as $item) {
           Currency::updateOrCreate($item);
        } 
    }
}