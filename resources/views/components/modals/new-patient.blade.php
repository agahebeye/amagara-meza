<div class="modal fade" id="new-patient-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-md">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h2 class="modal-title text-center" id="myModalLabel">Add new patient</h2>
            </div>

            <div class="modal-body">
                <form id="identification-form" class="form-material px-5" style="font-size: 1.25rem;">

                    <div class="row no-gutters">
                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="lastname">Lastname*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="lastname" name="last_name" class="form-control" placeholder="enter lastname">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="postname">Postname*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="postname" name="post_name" class="form-control" placeholder="enter postname">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="firstname">Firstname*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="firstname" name="first_name" class="form-control" placeholder="enter firstname">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="birthplace">Place of Birth*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="birthplace" name="birth_place" class="form-control" placeholder="enter place of birth">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="bdate">Date of Birth*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="date" id="bdate" name="birth_date" class="form-control mydatepicker" placeholder="enter birth date">
                            </div>
                        </div>

                        <div class="form-group col-md-6 align-self-end ">
                            <label class="col-sm-12">Gender*</label>
                            <div class="col-sm-12">
                                <select class="form-control" name='gender' required>
                                    <option value="" selected="selected">--Select Gender--</option>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-6 align-self-end ">
                            <label class="col-sm-12">Marital Status*</label>
                            <div class="col-sm-12">
                                <select class="form-control" name="marital_status" required>
                                    <option value="" selected="selected" disabled>--Select marital status--</option>
                                    <option value="Bachelor">Bachelor</option>
                                    <option value='Married'>Married</option>
                                    <option value="Divorced">Divorced</option>
                                    <option value="Widowed">Widowed</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="father_name">Father's name*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="father_name" name="father_name" class="form-control" placeholder="enter father's name">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="mother_name">Mother's name*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="mother_name" name="mother_name" class="form-control" placeholder="enter mother's name">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="relative">Relative*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="relative" name="relative" class="form-control" placeholder="enter firstname">
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="relative_contact">Relative's contact*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="tel" id="relative_contact" name="relative_contact" class="form-control" placeholder="enter firstname">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="nationality">Nationality*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="nationality" name="nationality" class="form-control" placeholder="enter nationality">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="country">Country*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="country" name="country" class="form-control" placeholder="enter country">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="province">Province*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="province" name="province" class="form-control" placeholder="enter province">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="town">Town*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="town" name="town" class="form-control" placeholder="enter town">
                            </div>
                        </div>


                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="municipality">Municipality*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="municipality" name="municipality" class="form-control" placeholder="enter municipality">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="neighborhood">Neighborhood*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="neighborhood" name="neighborhood" class="form-control" placeholder="enter neighborhood">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="avenue">Avenue*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="avenue" name="avenue" class="form-control" placeholder="enter avenue">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="house_number">House number*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="house_number" name="house_number" class="form-control" placeholder="enter house_number">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="profession">Profession*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="text" id="profession" name="profession" class="form-control" placeholder="enter profession">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="col-md-12 mt-4" for="phone">Phone*</span>
                            </label>
                            <div class="col-md-12">
                                <input required type="tel" id="phone" name="phone_number" class="form-control" placeholder="(+257)">
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center mt-5">
                        <button type="submit" class="btn btn-info px-5 rounded-md" id='submit-patient'> <i class="fa fa-check"></i> Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>