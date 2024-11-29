@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('title', 'index.blade.php')

@section('content')
<table>
  <tr>
    <th>名前</th>
    <th>勤務開始</th>
    <th>勤務終了</th>
    <th>休憩時間</th>
    <th>勤務時間</th>
  </tr>
  @foreach ($item as $data)
  <tr>
    <td>{{$data -> name}}</td>
    <td>{{$data -> work_start}}</td>
    <td>{{$data -> work_end}}</td>
    <td>{{$data -> rest_begin}}</td>
    <td>{{$diff_work}}</td>
  </tr>
  @endforeach
</table>
@endsection