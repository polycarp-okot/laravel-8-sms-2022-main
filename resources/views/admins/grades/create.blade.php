@extends('layouts.app')

@push('style')
<link href="{{ asset('jambasangsang/assets/css/lib/select2/select2.min.css')}}" rel="stylesheet">
    
@endpush

@section('section')

    @include('layouts.bread_crumb', ['title' => '', 'param1' => request()->segment(1), 'param2' => request()->segment(1)])

@endsection

@push('script')

 <!-- bootstrap -->
    <!-- Select2 -->
    <script src="{{ asset('jambasangsang/assets/js/lib/select2/select2.full.min.js')}}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/form-validation/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/form-validation/jquery.validate-init.js')}}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{ asset('jambasangsang/assets/js/scripts.js')}}"></script>
    <!-- scripit init-->
    
@endpush