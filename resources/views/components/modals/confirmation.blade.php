@props(['title', 'message'])

<div class="modal fade" id="confirmation-modal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModal" data-backdrop="false" data-keyboard="false" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded-md">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title text-center" id="title">{{ $title }}</h2>
            </div>

            <div class="modal-body">
                <div class="d-flex flex-column align-items-center">
                    <p class="text-center my-3" id='message'>{{ $message }}</p>
                    <button id='confirm-button' class="btn btn-danger rounded-md px-5">confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>