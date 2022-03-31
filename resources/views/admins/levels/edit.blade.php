@extends('layouts.app')

@section('content')

    @include('layouts.bread_crumb', ['title' => '', 'param1' => request()->segment(1), 'param2' => request()->segment(1)])

@endsection
