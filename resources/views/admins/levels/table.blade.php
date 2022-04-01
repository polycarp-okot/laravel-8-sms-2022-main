@push('style')
    <link href="{{ asset('jambasangsang/assets/css/lib/data-table/buttons.bootstrap.min.css') }}" rel="stylesheet" />
@endpush

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <a class="btn btn-primary btn-sm btn-flat" href="{{ route('levels.create') }}">Create New Level</a>
        </div>
        <div class="bootstrap-data-table-panel">
            <div class="table-responsive">
                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($levels as $level)
                            <tr>
                                <td>{{ $level->name }}</td>
                                <td>{{ Str::limit($level->description, 20) }}</td>
                                <td>{{ $level->status == 0 ? 'InActive' : 'Active' }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('levels.edit', $level->id) }}"
                                            class="btn btn-sm btn-info">Edit</a>
                                        <a href="#deleteConfirmation"
                                            data-url="{{ route('levels.destroy', $level->id) }}"
                                            class="btn btn-danger btn-sm btn-flat deletebtn" data-toggle="modal"> <i
                                                class="fa fa-trash"></i>
                                            Delete</a>
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
    <!-- /# card -->
</div>

{{-- Delete Modal section --}}
<x-modals.delete :title="'Level'"></x-modals.delete>

@push('script')
    <!-- scripit init-->
    <script src="{{ asset('jambasangsang/assets/js/lib/data-table/datatables.min.js') }}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/data-table/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/data-table/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/data-table/jszip.min.js') }}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/data-table/pdfmake.min.js') }}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/data-table/vfs_fonts.js') }}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/data-table/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/data-table/buttons.print.min.js') }}"></script>
    <script src="{{ asset('jambasangsang/assets/js/lib/data-table/datatables-init.js') }}"></script>
@endpush
