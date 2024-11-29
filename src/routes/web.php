<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\RestController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AttendanceController;

Route::middleware('auth')->group(function () {
    Route::get('/', [IndexController::class, 'index']);
    Route::get('/attendance', [AttendanceController::class, 'attendance']);
    Route::get('/work_start', [WorkController::class, 'workStart']);
    Route::get('/work_end', [WorkController::class, 'workEnd']);
    Route::get('/rest_begin', [RestController::class, 'restBegin']);
    Route::get('/rest_end', [RestController::class, 'restEnd']);
});