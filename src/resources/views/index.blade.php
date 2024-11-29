@extends('layouts.app') @section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection @section('content')
<div class="time_acction">
  <button class="header-nav__button"><a href= "{{ url('work_start') }}">勤務開始</a></button>
  <button class="header-nav__button"><a href= "{{ url('work_end') }}">勤務終了</a></button>
  <button class="header-nav__button"><a href= "{{ url('rest_begin') }}">休憩開始</a></button>
  <button class="header-nav__button"><a href= "{{ url('rest_end') }}">休憩終了</a></button>
</div>
@endsection