@extends('layouts.app')

@section('content')

    @include('layouts.bread_crumb', ['title' => '', 'param1' => request()->segment(1), 'param2' => request()->segment(1)])

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="{{ route('levels.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="edit_id" id="edit_id" value="{{ $level->id }}" >
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
