@extends('layouts.app')

@section('content')
    @include('layouts.bread_crumb', [
        'title' => '',
        'param1' => request()->segment(1),
        'param2' => request()->segment(1),
    ])

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    {{-- Where is your route? --}}
                    <form class="form-valide" action="{{ route('levels.store') }}" method="POST">
                        @csrf
                        @include('admins.levels.field')

                        <div class="form-group row">
                            <div class="col-lg-10 ml-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
