<x-layouts.app>

    <x-slot name='moreStyles'>
        <link href="/app/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    </x-slot>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-19175540-9', 'auto');
        ga('send', 'pageview');
    </script>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Basic Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="example-text" class="form-control" placeholder="enter your name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="bdate">Date of Birth</span>
                        </label>
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
                        <label class="col-sm-12">Profile Image</label>
                        <div class="col-sm-12">
                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                    <input type="file" name="..."> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="special">Speciality</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="special" name="special" class="form-control" placeholder="e.g. Dentist">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Description</label>
                        <div class="col-md-12">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="url">Website URL</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="url" name="url" class="form-control" placeholder="your website">
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
                <h3 class="box-title">Doctor's Account Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="example-email">Email</span>
                        </label>
                        <div class="col-md-12">
                            <input type="email" id="example-email" name="example-email" class="form-control" placeholder="enter your email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="example-phone">Phone</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-phone" name="example-phone" class="form-control" placeholder="enter your phone" data-mask="(999) 999-9999">
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
                <h3 class="box-title">Doctor's Social Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="furl">Facebook URL</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="furl" name="furl" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="turl">Twitter URL</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="turl" name="turl" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="gurl">Google Plus URL</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="gurl" name="gurl" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="inurl">LinkedIN URL</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="inurl" name="inurl" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>


    <x-slot name='moreScripts'>
        <script src="/app/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript">
            // Date Picker
            jQuery('.mydatepicker').datepicker();
        </script>
        <script src="/app/js/jasny-bootstrap.js"></script>
        <script src="/app/js/mask.js"></script>
    </x-slot>
</x-layouts.app>