<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Rest;
use App\Models\Work;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function attendance(){
        $id = Auth::id();
        $item = \DB::table('users')
            ->leftJoin('works', 'users.id', '=', 'works.user_id')
            ->leftJoin('rests', 'works.id', '=', 'rests.work_id')
            ->select(
                    'users.name as name',
                    'works.id as work_id',
                    'works.work_date as work_date',
                    'works.work_start as work_start',
                    'works.work_end as work_end',
                    'rests.rest_begin as rest_begin',
                    'rests.rest_end as rest_end'
                    )
            ->get();
        foreach($item as  $key => $value){
            $work_id = $value -> work_id;
            $work_start = $value -> work_start;
            $work_end = $value -> work_end;
            $rest_begin = $value -> rest_begin;
            $diff_work = number_format((strtotime($work_end) - strtotime($work_start))/3600, 2);
        }

        return view('attendance', compact(
            'item',
            'diff_work',
        ));
    }
}