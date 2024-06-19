<?php

// app/Http/Controllers/DateController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\CarbonPeriod;

class DateController extends Controller
{
    public function showDates(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $period = CarbonPeriod::create($start_date, $end_date);

        $weekends = [];
        foreach ($period as $date) {
            if ($date->isSaturday() || $date->isSunday()) {
                $weekends[] = $date->format('l, d F Y');
            }
        }

        return view('show_dates', compact('weekends', 'start_date', 'end_date'));
    }
}