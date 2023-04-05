<x-layouts.app>
    <x-slot name='title'>Cash Box</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/magnific-popup.css" rel="stylesheet">
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/jquery.toast.css" rel="stylesheet" type="text/css" />


    </x-slot>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="box-title m-b-0">Liste de patients</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <a id="add-patient-btn" class="btn btn-primary" href="#add-patient-form">Open form</a>

                            <x-partials.add-patient />

                        </div>
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
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
        <script src="/app/js/jquery.magnific-popup.min.js"></script>
        <script src="/app/js/jquery.toast.js"></script>
        <script src="/app/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                $("#add-patient-btn").magnificPopup({
                    type: "inline",
                    preloader: false,
                    focus: "#name",
                    // When elemened is focused, some mobile browsers in some cases zoom in
                    // It looks not nice, so we disable it:
                    callbacks: {
                        beforeOpen: function() {
                            if ($(window).width() < 700) {
                                this.st.focus = false;
                            } else {
                                this.st.focus = "#name";
                            }
                        },
                    },
                });


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

                var form = "#add-patient-form"

                $(form).on("submit", function(e) {
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

                            $(form)[0].reset();

                            dataTable.ajax.reload();
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

                    $.magnificPopup.instance.close();
                });
            });
        </script>
    </x-slot>

</x-layouts.app>