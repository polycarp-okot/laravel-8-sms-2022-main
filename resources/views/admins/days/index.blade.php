@extends('layouts.app')

@section('content')

@include('layouts.bread_crumb', ['title' =>Str::ucfirst(request()->segment(3)), 'param1' => request()->segment(1), 'param2' => request()->segment(1)])
    
    
    @include('admins.academics.header')

@endsection
