<x-layouts.app>
    <x-slot name='title'>Patients</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/magnific-popup.css" rel="stylesheet">
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    </x-slot>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="box-title m-b-0">Liste de patients</h3>
                    <div class="row">
                        <!-- .col -->
                        <div class="col-sm-12">
                            <h3 class="box-title m-b-0">Form Popup</h3>
                            <a class="popup-with-form btn btn-success" href="#test-form">Open form</a>
                            <!-- form itself -->
                            <form id="test-form" class="mfp-hide white-popup-block">

                                <div class="form-group">
                                    <label class="control-label" for="inputName">Name</label>
                                    <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="inputEmail">Email</label>
                                    <input type="email" class="form-control" id="inputEmail" name="email" placeholder="example@domain.com" required="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="inputPhone">Phone</label>
                                    <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Eg. +447500000000" required="">
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="textarea">Textarea</label>
                                    <br>
                                    <textarea class="form-control" id="textarea">Try to resize me to see how popup CSS-based resizing works.</textarea>
                                </div>
                            </form>

                        </div>
                        <!-- .col -->
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table id="patientTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Patient</th>
                                <th>Doctor</th>
                                <th>Date</th>
                                <th>Charges</th>
                                <th>Discount</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($patients as $patient)
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>Steve Gection</td>
                                <td>2011/04/25</td>
                                <td>$610</td>
                                <td>15%</td>
                                <td>$320</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="modal fade none-border" id="add-new-patient">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Ajouter un nouveau patient</h4>
                </div>
                <div class="modal-body">-->
    <!-- <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <form class="mfp-hide white-popup-block row gx-5" id='test-form'>
                    <div class="col">
                        <div class="form-group">
                            <label class="col-md-12" for="lastname">Lastname</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="enter your lastname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="postname">Postname</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="postname" name="postname" class="form-control" placeholder="enter your postname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="firstname">Firstname</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="enter your firstname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="birthplace">Place of Birth</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="birthplace" name="birthplace" class="form-control" placeholder="enter your place of birth">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="bdate">Date of Birth</span>
                            </label>
                            <div class="col-md-12">
                                <input type="date" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="enter your birth date">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Gender</label>
                            <div class="col-sm-12">
                                <select class="form-control">
                                    <option>Select Gender</option>
                                    <option selected="selected">Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Marital Status</label>
                            <div class="col-sm-12">
                                <select class="form-control">
                                    <option disabled>Select marital status</option>
                                    <option selected="selected">Bachelor</option>
                                    <option>Married</option>
                                    <option>Divorced</option>
                                    <option>Widowed</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="father_name">Father's name</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="father_name" name="father_name" class="form-control" placeholder="enter your father's name">
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <label class="col-md-12" for="mother_name">Mother's name</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="mother_name" name="mother_name" class="form-control" placeholder="enter your mother's name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="relative">Relative</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="relative" name="relative" class="form-control" placeholder="enter your firstname">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="nationality">Nationality</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="nationality" name="nationality" class="form-control" placeholder="enter your nationality">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="country">Country</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="country" name="country" class="form-control" placeholder="enter your country">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="province">Province</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="province" name="province" class="form-control" placeholder="enter your province">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="town">Town</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="town" name="town" class="form-control" placeholder="enter your town">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="municipality">Municipality</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="municipality" name="municipality" class="form-control" placeholder="enter your municipality">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="neighborhood">Neighborhood</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="neighborhood" name="neighborhood" class="form-control" placeholder="enter your neighborhood">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label class="col-md-12" for="avenue">Avenue</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="avenue" name="avenue" class="form-control" placeholder="enter your avenue">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="house_number">house_number</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="house_number" name="house_number" class="form-control" placeholder="enter your house_number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="profession">Profession</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="profession" name="profession" class="form-control" placeholder="enter your profession">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12" for="phone">Phone</span>
                            </label>
                            <div class="col-md-12">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="enter your phone">
                            </div>
                        </div>
                    </div> -->


    <!-- <div class="form-group">
                                        <label class="col-sm-12">Profile Image</label>
                                        <div class="col-sm-12"> <img class="img-responsive" src="/images/users/varun.jpg" alt="" style="max-width:120px;"> </div>
                                        <div class="col-sm-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea class="form-control" rows="3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</textarea>
                                        </div>
                                    </div> -->

    <!-- </form>
            </div>
        </div>
    </div> -->
    <!--                   </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                </div>
            </div>
        </div>
    </div> -->

    <x-slot name='moreScripts'>
        <script src="/app/js/jquery.magnific-popup.min.js"></script>
        <script src="/app/js/jquery.magnific-popup-init.js"></script>

        <script src="/app/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#patientTable').DataTable();
            });
        </script>
    </x-slot>

</x-layouts.app>