@props(['title'])


<div class="modal fade " id="deleteConfirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title">
                    <h5 class="modal-title">Delete {{ $title }}</h5>
                </div>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    <p class="text-center"> Are you sure you want to delete ? <span class="username"></span></p>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat"> Yes</button>
                <button data-dismiss="modal" class="btn btn-danger btn-flat"> Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>


{{-- Update Status Modal --}}


<div class="modal fade " id="modalConfirmation">
    <div class="modal-dialog">
        <div class="modal-content modal-dialog-top">
            <div class="modal-header">
                <div class="title">
                    <h5 class="modal-title"><span class="updateStatus"></span> {{ $title }}</h5>
                </div>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="statusForm">
                    @csrf
                    @method('PUT')
                    <p class="text-center"> Are you sure you want to update ? <span class="username"></span></p>
                    <input type="hidden" name="update_status" id="update_status">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success btn-flat"> Yes</button>
                <button data-dismiss="modal" class="btn btn-danger btn-flat"> Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>

@push('script')
    <script>
        $('.deletebtn').on('click', function() {
            $('#deleteForm').attr('action', $(this).data('url'));
            $('.username').text($(this).data('subject'));
        });

        $('.modalConfirm').on('click', function() {
            $('#statusForm').attr('action', $(this).data('url'));
            $('.username').text($(this).data('subject'));
            $('.updateStatus').text($(this).data('title'));
            $('#update_status').val($(this).data('status'));
        })


    </script>
@endpush
