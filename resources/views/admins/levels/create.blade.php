@extends('layouts.app')

@section('content')

    @include('layouts.bread_crumb', ['title' => '', 'param1' => request()->segment(1), 'param2' => request()->segment(1)])

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-validation">
                    <form class="form-valide" action="#" method="POST">
                         
                        @include('admins.levels.field')


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

@endsection



