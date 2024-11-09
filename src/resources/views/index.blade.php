@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection @section('content')
<div class="time_acction">
  <a href= "{{ url('work_start') }}">勤務開始</a>
  <a href= "{{ url('work_end') }}">勤務終了</a>
  <a href= "{{ url('rest_begin') }}">休憩開始</a>
  <a href= "{{ url('rest_end') }}">休憩終了</a>
</div>
@endsection