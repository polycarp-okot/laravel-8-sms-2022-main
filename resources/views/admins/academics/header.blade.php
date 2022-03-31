<div class="col-md-12" col-lg-12>
    <div class="card">
        <div class="card-body">
            <!-- Nav tabs -->
            <div class="vtabs customvtab">
                <ul class="nav nav-tabs tabs-horizontal" role="tablist">
                    <li class="nav-item"> <a class="nav-link{{ Request::segment('3') == "levels"? 'active': '' }}" href="{{ route('levels.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Levels') }}</span> </a> </li>
                    <li class="nav-item"> <a class="nav-link{{ Request::segment('3') == "grades"? 'active': '' }}"  href="{{ route('grades.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Grades') }}</span></a> </li>
                    <li class="nav-item"> <a class="nav-link{{ Request::segment('3') == "classes"? 'active': '' }}"  href="{{ route('classes.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Classes') }}</span></a> </li>
                    <li class="nav-item"> <a class="nav-link{{ Request::segment('3') == "shifts"? 'active': '' }}"  href="{{ route('shifts.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Shifts') }}</span></a> </li>
                    <li class="nav-item"> <a class="nav-link{{ Request::segment('3') == "subjects"? 'active': '' }}"  href="{{ route('subjects.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Subjects') }}</span></a> </li>
                    <li class="nav-item"> <a class="nav-link{{ Request::segment('3') == "sections"? 'active': '' }}"  href="{{ route('sections.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Sections') }}</span></a> </li>
                    <li class="nav-item"> <a class="nav-link{{ Request::segment('3') == "time"? 'active': '' }}"  href="{{ route('times.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Time Slot') }}</span></a> </li>
                    <li class="nav-item"> <a class="nav-link{{ Request::segment('3') == "days"? 'active': '' }}"  href="{{ route('days.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Days') }}</span></a> </li>
                    <li class="nav-item"> <a class="nav-link{{ Request::segment('3') == "sessions"? 'active': '' }}"  href="{{ route('sessions.index') }}" role="tab"><span class="hidden-sm-up"><i class="fa fa-plus-circle"></i></span> <span class="hidden-xs-down">{{ __('Sessions') }}</span></a> </li>

                </ul>
            </div>
        </div>
    </div>
</div>



