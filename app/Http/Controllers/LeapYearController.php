<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeapYearController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function calculate(Request $request)  // Di sini, ganti 'request' menjadi '$request'
    {
        $startYear = $request->input('start_year');
        $endYear = $request->input('end_year');

        $leapYears = $this->calculateLeapYears($startYear, $endYear);

        return view('index', ['leapYears' => $leapYears]);
    }

    private function calculateLeapYears($startYear, $endYear)
    {
        $leapYears = [];
        for ($year = $startYear; $year <= $endYear; $year++) {
            if ($this->isLeapYear($year)) {
                $leapYears[] = $year;
            }
        }
        return $leapYears;
    }

    private function isLeapYear($year)
    {
        return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
    }
}
