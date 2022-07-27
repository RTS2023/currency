<?php 

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder 
{

    public function run()
    {   
        $data = config('currency.php');

        foreach ($data as $key => $item) {
           Currency::updateOrCreate($item);
        } 
    }
}