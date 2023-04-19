<div class="modal fade" id="orientation-modal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModal" data-backdrop='false' aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
        <div class="modal-content px-4 pb-4 rounded-md">
            <div class="modal-header m-0">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>

            <ul class="nav customtab nav-tabs d-flex justify-content-between" role="tablist">
                <li role="presentation" class="nav-item"><a href="#profile" class="nav-link" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Profile</span></a></li>
                <li role="presentation" class="nav-item"><a href="#complaint" class="nav-link active" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> Complaints</span></a></li>
                <li role="presentation" class="nav-item"><a href="#orientation" class="nav-link" aria-controls="orientation" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">Orientation</span></a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">

                <div role="tabpanel" class="tab-pane fade" id="profile">
                    <div id="show-patient" class="px-5" style="font-size: 1.25rem;">
                        <div class="row">
                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Lastname</p>
                                <p id="last_name"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Postname</p>
                                <p id="post_name"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Firstname</p>
                                <p id="first_name"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Place of Birth</p>
                                <p id="birth_place"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Date of Birth</p>
                                <p id="birth_date"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Gender</p>
                                <p id="gender"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Marital Status</p>
                                <p id="marital_status"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Father's name</p>
                                <p id="father_name"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Mother's name</p>
                                <p id="mother_name"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Relative</p>
                                <p id="relative"></p>
                            </div>


                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Relative's contact
                                </p>
                                <p id="relative_contact">
                                </p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Nationality</p>
                                <p id="nationality"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Country</p>
                                <p id="country"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold" for="province">Province</p>
                                <p id="province"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Town</p>
                                <p id="town"></p>
                            </div>


                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Municipality</p>
                                <p id="municipality"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Neighborhood
                                </p>
                                <p id="neighborhood"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Avenue
                                </p>
                                <p id="avenue"></p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold" for="house_number">House number
                                </p>
                                <p id="house_number">
                                </p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold">Profession
                                </p>
                                <p id="profession">
                                </p>
                            </div>

                            <div class="col-md-4">
                                <p class="mt-4 font-weight-bold" for="phone">Phone
                                </p>
                                <p id="phone_number">
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <div role="tabpanel" class="tab-pane fade active in px-5" id="complaint">
                    <x-partials.forms.patient-complaint />
                </div>


                <div role="tabpanel" class="tab-pane fade px-5" id="orientation">
                    <x-partials.forms.patient-orientation />
                </div>

            </div>
        </div>
    </div>
</div>