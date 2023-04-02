<x-layouts.app>
    <x-slot name='title'>Edit Patient</x-slot>


    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Basic Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="example-text" class="form-control" placeholder="enter your name" value="Jonathan Doe">
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
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="white-box">
                <h3 class="box-title">Patient's Account Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="example-email">Email</span>
                        </label>
                        <div class="col-md-12">
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="enter your email" value="jondoe@ex.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-phone">Phone</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-phone" name="example-phone" class="form-control" placeholder="enter your phone" data-mask="(999) 999-9999" value="(123) 456-7890">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="pwd">Password</span>
                        </label>
                        <div class="col-md-12">
                            <input type="password" id="pwd" name="pwd" class="form-control" placeholder="enter your password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="cpwd">Confirm Password</span>
                        </label>
                        <div class="col-md-12">
                            <input type="password" id="cpwd" name="cpwd" class="form-control" placeholder="confirm your password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="white-box">
                <h3 class="box-title">Patient's Social Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="furl">Facebook URL</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="furl" name="furl" class="form-control" value="http://www.facebook.com/username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="turl">Twitter URL</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="turl" name="turl" class="form-control" value="http://www.twitter.com/username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="gurl">Google Plus URL</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="gurl" name="gurl" class="form-control" value="http://www.plus.google.com/username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="inurl">LinkedIN URL</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="inurl" name="inurl" class="form-control" value="http://www.linkedin.com/username">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

</x-layouts.app>