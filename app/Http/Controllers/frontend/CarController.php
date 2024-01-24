<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::latest()->get();
        return view('frontend.car', compact('cars'));
    }
    public function bookCar($id)
    {
        $car = Car::find($id);
        if ($car->status == 'ready') {
            session()->flash('success', 'Car booked successfully');
            $this->editCar($car);
            return redirect('/car');
        }

        session()->flash('error', 'Car already booked');
        return redirect('/car');
    }
    public function editCar($car)
    {
        $car->status = 'booked';
        $car->save();
    }
}
