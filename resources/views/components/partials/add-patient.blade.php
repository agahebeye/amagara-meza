<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-md">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title text-center" id="myModalLabel">Add new patient</h2>
            </div>
            <div class="modal-body">
                <div class="vtabs customvtab">
                    <ul class="nav tabs-vertical">
                        <li class="tab nav-item active">
                            <a data-toggle="tab" class="nav-link" href="#identification" aria-expanded="true"> <span class="visible-xs"><i class="ti-home"></i></span> <span class="hidden-xs">Identification</span> </a>
                        </li>
                        <li class="tab nav-item">
                            <a data-toggle="tab" class="nav-link" href="#complaint" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Complaint</span> </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="identification" class="tab-pane active">
                            <x-forms.patient-identification />
                        </div>

                        <div id="complaint" class="tab-pane">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>