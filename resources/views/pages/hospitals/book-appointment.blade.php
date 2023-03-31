<x-layouts.app>
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Book Appointment</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
            <ol class="breadcrumb">
                <li><a href="index.html">Hospital</a></li>
                <li class="active">Book Appointment</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Appointment Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Name</span></label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="example-text" class="form-control" placeholder="enter your name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="bdate">Date of Birth</span></label>
                        <div class="col-md-12">
                            <input type="text" id="bdate" name="bdate" class="form-control mydatepicker" placeholder="enter your birth date">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Gender</label>
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option>Select Gender</option>
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Service</label>
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option>Select Service</option>
                                <option>Dental Checkup</option>
                                <option>Full Body Checkup</option>
                                <option>ENT Checkup</option>
                                <option>Heart Checkup</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="date-time">Date Time</span><span class="text-muted font-12 p-l-20">(e.g. "12/10/2017 05:15 pm")</span></label>
                        <div class="col-md-12">
                            <input type="text" id="date-time" name="date-time" class="form-control" placeholder="enter date and time of appointment" data-mask="99/99/9999 99:99 am">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-email">Email</span></label>
                        <div class="col-md-12">
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="enter your email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-phone">Phone</span></label>
                        <div class="col-md-12">
                            <input type="text" id="example-phone" name="example-phone" class="form-control" placeholder="enter your phone" data-mask="(999) 999-9999">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Note</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</x-layouts.app>