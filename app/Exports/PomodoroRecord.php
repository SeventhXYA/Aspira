<?php

namespace App\Exports;

use App\Models\IntervalBp;
use App\Models\Pomodoro;
use Maatwebsite\Excel\Concerns\FromCollection;

class PomodoroRecord implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return IntervalBp::all();
    }
}
