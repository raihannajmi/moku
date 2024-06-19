<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimeController extends Controller
{
    public function index()
    {
        return view('prime-form');
    }

    public function showPrimes(Request $request)
    {
        $request->validate([
            'start' => 'required|integer',
            'end' => 'required|integer|gte:start',
        ]);

        $start = $request->input('start');
        $end = $request->input('end');
        $primes = $this->findPrimes($start, $end);

        return view('prime-result', compact('start', 'end', 'primes'));
    }

    private function findPrimes($start, $end)
    {
        $primes = [];
        for ($i = $start; $i <= $end; $i++) {
            if ($this->isPrime($i)) {
                $primes[] = $i;
            }
        }
        return $primes;
    }

    private function isPrime($num)
    {
        if ($num < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

