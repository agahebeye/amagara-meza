<x-layouts.app>
    <x-slot name='title'>Patients</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    </x-slot>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="box-title m-b-0">Liste de patients</h3>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add-new-patient"><i class="fa fa-plus"></i> Ajouter</button>
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

    <div class="modal fade none-border" id="add-new-patient">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Ajouter un nouveau patient</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="white-box">
                                <form class="form-material form-horizontal">
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
                                            <input type="text" id="father_name" name="father_name" class="form-control" placeholder="enter your father's">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-12" for="mother_name">Mother's name</span>
                                        </label>
                                        <div class="col-md-12">
                                            <input type="text" id="mother_name" name="mother_name" class="form-control" placeholder="enter your father's">
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
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"> <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <x-slot name='moreScripts'>

        <script src="/app/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#patientTable').DataTable();
            });
        </script>
    </x-slot>

</x-layouts.app>