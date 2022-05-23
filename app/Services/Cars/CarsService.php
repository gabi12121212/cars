<?php

namespace App\Services\Cars;

use App\Models\Cars\Car;

use Illuminate\Support\Facades\DB;

class CarsService
{
    public Car $carModel;
    public function __construct(Car $carModel)
    {
        $this->carModel = $carModel;
    }
    public function list($vin, $color, $minPrice, $description)
    {
        //return DB::table('cars')->where('vin', 'like', '%' . $vin . '%')->where('color', 'like', '%' . $color . '%')->where('price', '>', $minPrice)->get();
        return $this->carModel->filterByVin($vin)->filterByColor($color)->filterByMinPrice($minPrice)->filterByDescription($description)->get();
    }
}
