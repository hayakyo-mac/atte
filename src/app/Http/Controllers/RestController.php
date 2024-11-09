<?php

namespace App\Http\Controllers;
use App\Models\Rest;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RestController extends Controller
{
    public function restBegin(){
        $id = Auth::id();
        $now_date = Carbon::now()->format('Y-m-d');
        $now_time = Carbon::now()->format('H:i:s');
        $work = \DB::table('works')
        ->where('user_id',$id)
        ->where('work_date',$now_date)
        ->whereNull('work_end')
        ->first(['id']);
        $work_id = $work->id;
        \DB::table('rests')->insert([
        'work_id' => $work_id,
        'rest_begin' => $now_time,
        ]);
        return 'rest_begin';
    }
    public function restEnd(){
        $id = Auth::id();
        $now_date = Carbon::now()->format('Y-m-d');
        $now_time = Carbon::now()->format('H:i:s');
        $work = \DB::table('works')
        ->where('user_id',$id)
        ->where('work_date',$now_date)
        ->whereNull('work_end')
        ->first(['id']);
        $work_id = $work->id;
        
        \DB::table('rests')
        ->where('work_id',$work_id)
        ->whereNull('rest_end')
        ->update([
        'rest_end' => $now_time,
        'updated_at' => Carbon::now(),
        ]);
        return 'rest_end';
    }
}




