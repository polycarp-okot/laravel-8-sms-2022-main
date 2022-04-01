<div class="modal fade modal-fs" id="files" data-backdrop-bg="bgc-grey-tp4" data-blur="true" tabindex="-1"
    aria-labelledby="exampleModal2Label" style="display: none;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content border-0 shadow radius-1">
            <div class="modal-header">
                <h5 class="modal-title text-primary-d2" id="exampleModal2Label">
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="fa fa-times-circle fa-2x text-danger"></span>
                </button>
            </div>

            <div class="modal-body modal-scroll">
                <strong>Note:</strong>
            </div>

            <div class="modal-footer bgc-default-l5">

                <button type="button" class="btn btn-danger px-4" data-dismiss="modal">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-fs {
        padding-right: 0 !important;
        top: 0;
    }

    .modal-fs .modal-dialog {
        width: 100%;
        height: 100%;
        max-width: calc(100vw - 1rem);
        max-height: calc(100vh - 1rem);
    }

    .modal-fs .modal-dialog .modal-content {
        min-height: 100%;
    }

    @media (min-width: 576px) {
        .modal-fs .modal-dialog {
            max-width: calc(100vw - 3.5rem);
            max-height: calc(100vh - 3.5rem);
        }
    }

</style>
