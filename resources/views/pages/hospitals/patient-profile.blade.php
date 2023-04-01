<x-layouts.app>
    <x-slot name='title'>Patient Profile</x-slot>

    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user" src="/app/plugins/images/big/img2.jpg"> </div>
                <div class="user-btm-box">
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-6 b-r"><strong>Name</strong>
                            <p>Jonathan Doe</p>
                        </div>
                        <div class="col-md-6"><strong>Occupation</strong>
                            <p>Engineer</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-6 b-r"><strong>Email ID</strong>
                            <p>jondoe@gmail.com</p>
                        </div>
                        <div class="col-md-6"><strong>Phone</strong>
                            <p>+123 456 789</p>
                        </div>
                    </div>
                    <!-- /.row -->
                    <hr>
                    <!-- .row -->
                    <div class="row text-center m-t-10">
                        <div class="col-md-12"><strong>Address</strong>
                            <p>E104, Dharti-2, Chandlodia Ahmedabad
                                <br /> Gujarat, India.
                            </p>
                        </div>
                    </div>
                    <hr>
                    <!-- /.row -->
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-purple"><i class="ti-facebook"></i></p>
                        <h1>258</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-blue"><i class="ti-twitter"></i></p>
                        <h1>125</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <p class="text-danger"><i class="ti-google"></i></p>
                        <h1>140</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <div class="white-box">
                <div class="row">
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                        <br>
                        <p class="text-muted">Johnathan Deo</p>
                    </div>
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                        <br>
                        <p class="text-muted">(123) 456 7890</p>
                    </div>
                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                        <br>
                        <p class="text-muted">john@admin.com</p>
                    </div>
                    <div class="col-md-3 col-xs-6"> <strong>Disease</strong>
                        <br>
                        <p class="text-muted">Fever</p>
                    </div>
                </div>
                <hr>
                <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries </p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <h4 class="m-t-30">General Report</h4>
                <hr>
                <h5>Heart Beat <span class="pull-right">80</span></h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> <span class="sr-only">50% Complete</span> </div>
                </div>
                <h5>Blood Pressure<span class="pull-right">90</span></h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-custom" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;"> <span class="sr-only">50% Complete</span> </div>
                </div>
                <h5>Sugar<span class="pull-right">50</span></h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%;"> <span class="sr-only">50% Complete</span> </div>
                </div>
                <h5>Haemoglobin<span class="pull-right">70%</span></h5>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%;"> <span class="sr-only">50% Complete</span> </div>
                </div>
                <h4 class="m-t-30">ECG Report</h4>
                <hr>
                <div class="stats-row">
                    <div class="stat-item">
                        <h6>Pulse</h6> <b>85</b>
                    </div>
                    <div class="stat-item">
                        <h6>BP</h6> <b>120</b>
                    </div>
                </div>
                <div style="height: 280px;">
                    <div id="placeholder" class="demo-placeholder"></div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>