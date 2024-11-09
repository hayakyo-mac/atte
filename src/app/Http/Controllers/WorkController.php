<?php

namespace App\Http\Controllers;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{
    public function workStart(){
        $id = Auth::id();
        $now_date = Carbon::now()->format('Y-m-d');
        $now_time = Carbon::now()->format('H:i:s');
        \DB::table('works')->insert([
        'user_id' => $id,
        'work_date' => $now_date,
        'work_start' => $now_time,
        ]);
        return 'work_start';
    }
    public function workEnd(){
        $id = Auth::id();
        $now_date = Carbon::now()->format('Y-m-d');
        $now_time = Carbon::now()->format('H:i:s');
        \DB::table('works')
        ->where('user_id',$id)
        ->where('work_date',$now_date)
        ->whereNull('work_end')
        ->update([
        'work_end' => $now_time
        'updated_at' => Carbon::now(),
        ]);
        return 'work_end';
    }
}
