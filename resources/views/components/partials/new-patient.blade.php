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

                        <li class="tab nav-item">
                            <a data-toggle="tab" class="nav-link" href="#orientation" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Orientation</span> </a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <div id="identification" class="tab-pane active">
                            <x-forms.patient-identification />
                        </div>

                        <div id="complaint" class="tab-pane">
                            <x-forms.patient-complaint />
                        </div>


                        <div id="orientation" class="tab-pane">
                            <x-forms.patient-orientation />
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>