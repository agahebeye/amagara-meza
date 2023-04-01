<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                <!-- input-group -->
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>

            <li class="user-pro">
                <a href="#" class="waves-effect"><img src="/app/plugins/images/users/d1.jpg" alt="user-img" class="img-circle"> <span class="hide-menu">Dr. Steve Gection<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                    <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </li>

            <li> <a href="{{route('hospitals.index')}}" class="waves-effect"><i class="ti-dashboard p-r-10"></i> <span class="hide-menu">Dashboard</span></a> </li>

            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-envelope p-r-10"></i> <span class="hide-menu"> Mailbox <span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">6</span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{route('hospitals.inbox')}}">Inbox</a></li>
                    <li> <a href="{{route('hospitals.inbox_detail')}}">Inbox detail</a></li>
                    <li> <a href="{{route('hospitals.compose')}}">Compose mail</a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar p-r-10"></i> <span class="hide-menu"> Appointment <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{route('hospitals.doctor_schedule')}}">Doctor Schedule</a> </li>
                    <li> <a href="{{route('hospitals.make_appointment')}}">Book Appointment</a> </li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user-md p-r-10"></i> <span class="hide-menu"> Doctors <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{route('hospitals.doctors')}}">All Doctors</a> </li>
                    <li> <a href="{{route('hospitals.add_doctor')}}">Add Doctor</a> </li>
                    <li> <a href="{{route('hospitals.edit_doctor')}}">Edit Doctor</a> </li>
                    <li> <a href="{{route('hospitals.doctor_profile')}}">Doctor Profile</a> </li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-people p-r-10"></i> <span class="hide-menu"> Patients <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="{{route('hospitals.patients')}}">All Patiens</a> </li>
                    <li> <a href="{{route('hospitals.add_patient')}}">Add Patient</a> </li>
                    <li> <a href="{{route('hospitals.edit_patient')}}">Edit Patient</a> </li>
                    <li> <a href="{{route('hospitals.patient_profile')}}">Patient Profile</a> </li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="waves-effect"><i class="icon-chart p-r-10"></i> <span class="hide-menu"> Reports <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="payment-report.html">Payment Report</a></li>
                    <li> <a href="income-report.html">Income Report</a></li>
                    <li> <a href="sales-report.html">Sales Report</a></li>
                </ul>
            </li>

            <li> <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-inr p-r-10"></i> <span class="hide-menu"> Payments <span class="fa arrow"></span></span></a>
                <ul class="nav nav-second-level">
                    <li> <a href="payments.html">Payments</a></li>
                    <li> <a href="add-payments.html">Add Payment</a></li>
                    <li> <a href="patient-invoice.html">Patient Invoice</a></li>
                </ul>
            </li>
    </div>
</div>