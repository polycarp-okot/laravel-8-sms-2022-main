
<div class="modal fade " id="addScoreModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                    <h5 class="modal-title"> </h5>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('subjects.store')}}" method="post" id="deleteForm">
                    <input type="hidden" name="edit_id" id="edit_id">
                    <input type="hidden" name="assign" id="">
                    @csrf
                <div class="row mb-2">
                    <input type="text" name="assignment_percentage" id="assignment_percentage" class="form-control" placeholder="Enter Assinment %">

                </div>
                <div class="row">
                    <input type="text" name="final_percentage" id="final_percentage" class="form-control" placeholder="Enter Final %">
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat">Add</button>
                <button data-dismiss="modal" class="btn btn-danger btn-flat"> Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>

@push('script')
    <script>
        $('.addScorebtn').on('click', function() {
            $('.modal-title').text( 'Add Score To ' +  $(this).data('subject'));
            $('#assignment_percentage').val($(this).data('assignment'));
            $('#final_percentage').val($(this).data('final'));
            $('#edit_id').val($(this).data('id'));
        })
    </script>
@endpush
