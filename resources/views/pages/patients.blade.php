<x-layouts.app>
    <x-slot name='title'>Patients</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/jquery.toast.css" rel="stylesheet" type="text/css" />


    </x-slot>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="m-b-0">Liste de patients enregistrés</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <a data-toggle="modal" data-target="#new-patient-modal" class="btn btn-info rounded-md">Add new patient</a>

                            <x-partials.new-patient />

                        </div>
                    </div>
                </div>

                <div class="table-responsive mt-5">
                    <table id="patientTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <x-slot name='moreScripts'>
        <script src="/app/js/jquery.toast.js"></script>
        <script src="/app/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {

                var dataTable = $('#patientTable').DataTable({
                    serverSide: true,
                    ajax: "{{route('api.v1.patients.index')}}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'first_name',
                            name: 'first_name'
                        }, {
                            data: 'last_name',
                            name: 'last_name'
                        },
                        {
                            data: 'view',
                            name: 'view',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });

                var ifr = "#identification-form"
                var cfr = "#complaint-form"
                var ofr = "#orientation-form"

                $(ifr).on("submit", function(e) {
                    e.preventDefault();


                    $.ajax({
                        url: "{{route('api.v1.patients.store')}}",
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            $.toast({
                                heading: 'Success',
                                text: 'User was added with success',
                                position: 'top-right',
                                loaderBg: '#ff6849',
                                icon: 'success',
                                hideAfter: 2000,
                                stack: 6
                            });
                        },
                        error: function(response) {
                            $.toast({
                                heading: 'Error',
                                text: 'We were unable to add new user',
                                position: 'top-right',
                                loaderBg: '#ff6849',
                                icon: 'error',
                                hideAfter: 2000,
                                stack: 6
                            });
                        }
                    });
                });

                $(cfr).on("submit", function(e) {
                    e.preventDefault();


                    $.ajax({
                        url: "{{route('api.v1.complaints.store')}}",
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            $.toast({
                                heading: 'Success',
                                text: 'User was added with success',
                                position: 'top-right',
                                loaderBg: '#ff6849',
                                icon: 'success',
                                hideAfter: 2000,
                                stack: 6
                            });
                        },
                        error: function(response) {
                            $.toast({
                                heading: 'Error',
                                text: 'We were unable to add new user',
                                position: 'top-right',
                                loaderBg: '#ff6849',
                                icon: 'error',
                                hideAfter: 2000,
                                stack: 6
                            });
                        }
                    });
                });

                $(ofr).on("submit", function(e) {
                    e.preventDefault();


                    $.ajax({
                        url: "{{route('api.v1.orientations.store')}}",
                        method: 'POST',
                        data: new FormData(this),
                        dataType: 'JSON',
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(response) {
                            $.toast({
                                heading: 'Success',
                                text: 'Orientation was added with success',
                                position: 'top-right',
                                loaderBg: '#ff6849',
                                icon: 'success',
                                hideAfter: 2000,
                                stack: 6
                            });
                        },
                        error: function(response) {
                            $.toast({
                                heading: 'Error',
                                text: 'We were unable to orientate this new patient',
                                position: 'top-right',
                                loaderBg: '#ff6849',
                                icon: 'error',
                                hideAfter: 2000,
                                stack: 6
                            });
                        }
                    });
                });
            });
        </script>
    </x-slot>

</x-layouts.app>