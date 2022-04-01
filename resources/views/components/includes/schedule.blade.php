<div class="col-lg-12">
    <div class="card">
        <div class="card-header box-header box-bordered">
            <h3 class="pull-left">{{ __($classRoutings->GetScheduleByGrade(Request('viewSchedule'))->first()->grade->name ?? '') }}</h3>
            <a class="btn btn-primary btn-sm btn-flat pull-right" href="#">
                {{ __('Schedules') }}</a>
        </div>
        <div class="card-body mt-2">
            <div class="bootstrap-data-table-panel">
                <div class="table-responsive">
                    <table id="datatable-export" class="table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th>{{ __('Days') }} <br> <label for="">{{ __('Time') }}</label></th>
                                <th>{{ __('Class') }}</th>
                                <th>{{ __('Subjects') }}</th>
                                <th>{{ __('Shifts') }}</th>
                                <th>{{ __('Sections') }}</th>
                                <th>{{ __('Teachers') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($classRoutings->GetScheduleByGrade(Request('viewSchedule')) as $classRouting)
                                <tr>
                                    <td>{{ $classRouting->day->name }} <br>
                                       <label for="" class="mt-2">
                                        {{ $classRouting->time->start_from . ' to ' . $classRouting->time->end_from }}
                                    </label></td>
                                    <td>{{ $classRouting->class->name }}</td>
                                    <td>{{ $classRouting->subject->name }}</td>
                                    <td>{{ $classRouting->shift->name }}</td>
                                    <td>{{ $classRouting->section->name }}</td>
                                    <td>{{ $classRouting->teacher->name }}</td>
                                    <td class="{{ Helper::getStatusClass($classRouting->status) }}">
                                        {{ Helper::getStatusvalue($classRouting->status) }}
                                    </td>

                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('classRoutings.edit',$classRouting->id) }}"
                                                class="btn btn-info btn-flat "> <i class="fa fa-edit"></i> Edit</a>
                                                <a href="#deleteConfirmation" data-toggle="modal"
                                                data-url="{{ route('classRoutings.destroy',$classRouting->id) }}"
                                                    class="btn btn-danger btn-flat "> <i class="fa fa-trash">
                                                        </i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @empty

                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /# card -->
</div>

{{-- Delete Modal section --}}
<x-modals.delete :title="'Class Routings'"></x-modals.delete>
