<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-md">
            <div class="modal-body">
                <div class="vtabs customvtab">
                    <ul class="nav tabs-vertical">
                        <li class="tab nav-item active">
                            <a data-toggle="tab" class="nav-link" href="#patient-tab" aria-expanded="true"> <span class="visible-xs"><i class="ti-home"></i></span> <span class="hidden-xs">Patient</span> </a>
                        </li>
                        <li class="tab nav-item">
                            <a data-toggle="tab" class="nav-link" href="#vprofile3" aria-expanded="false"> <span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">Consulation</span> </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="patient-tab" class="tab-pane active">
                            <form id="add-patient-form" class="mfp-hide form-material white-popup-block">
                                <h2 class="text-center mt-0">Ajouter nouveau patient</h2>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="lastname">Lastname</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="lastname" name="last_name" class="form-control" placeholder="enter your lastname">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="postname">Postname</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="postname" name="post_name" class="form-control" placeholder="enter your postname">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="firstname">Firstname</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="firstname" name="first_name" class="form-control" placeholder="enter your firstname">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="birthplace">Place of Birth</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="birthplace" name="birth_place" class="form-control" placeholder="enter your place of birth">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="bdate">Date of Birth</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="date" id="bdate" name="birth_date" class="form-control mydatepicker" placeholder="enter your birth date">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Gender</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name='gender' required>
                                                    <option>Select Gender</option>
                                                    <option value="0" selected="selected">Male</option>
                                                    <option value="1">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-sm-12">Marital Status</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="marital_status" required>
                                                    <option disabled>Select marital status</option>
                                                    <option value="Bachelor" selected="selected">Bachelor</option>
                                                    <option value='Married'>Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Widowed">Widowed</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="father_name">Father's name</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="father_name" name="father_name" class="form-control" placeholder="enter your father's name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="mother_name">Mother's name</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="mother_name" name="mother_name" class="form-control" placeholder="enter your mother's name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="relative">Relative</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="relative" name="relative" class="form-control" placeholder="enter your firstname">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="nationality">Nationality</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="nationality" name="nationality" class="form-control" placeholder="enter your nationality">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="country">Country</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="country" name="country" class="form-control" placeholder="enter your country">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="province">Province</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="province" name="province" class="form-control" placeholder="enter your province">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="town">Town</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="town" name="town" class="form-control" placeholder="enter your town">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="municipality">Municipality</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="municipality" name="municipality" class="form-control" placeholder="enter your municipality">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="neighborhood">Neighborhood</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="neighborhood" name="neighborhood" class="form-control" placeholder="enter your neighborhood">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="avenue">Avenue</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="avenue" name="avenue" class="form-control" placeholder="enter your avenue">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="house_number">House number</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="house_number" name="house_number" class="form-control" placeholder="enter your house_number">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="profession">Profession</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="profession" name="profession" class="form-control" placeholder="enter your profession">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12 mt-4" for="phone">Phone</span>
                                            </label>
                                            <div class="col-md-12">
                                                <input required type="text" id="phone" name="phone_number" class="form-control" placeholder="enter your phone">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-center mt-5">
                                    <button type="submit" class="btn btn-info px-5 rounded-md" id='submit-patient'>Submit</button>
                                </div>

                            </form>
                        </div>
                        <div id="vprofile3" class="tab-pane">
                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                        </div>
                        <div id="vmessages3" class="tab-pane">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>