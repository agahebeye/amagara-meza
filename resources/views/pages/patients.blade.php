<x-layouts.app>
    <x-slot name='title'>Patients</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/jquery.toast.css" rel="stylesheet" type="text/css" />


    </x-slot>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box rounded-md">
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
                $('#complaint-form #patient-id-wrapper').hide();
                $('#orientation-form #patient-id-wrapper').hide();

                const dataTable = $('#patientTable').DataTable({
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

                $('#identification-form').on("submit", function(e) {
                    e.preventDefault();


                    $('#complaint-tab').click();
                    $('#complaint-form #patient-id-wrapper').show();


                });

                $('#complaint-form').on("submit", function(e) {
                    e.preventDefault();

                    $('#orientation-tab').click();
                    $('#orientation-form #patient-id-wrapper').show();

                });

                $('#orientation-form').on("submit", function(e) {
                    e.preventDefault();

                    $(".patient-form").each(function() {

                        let input = $(this).find(':input').map(e => e.name);
                        console.log(input);

                    });
                    // fetch("{{route('api.v1.orientations.store')}}", {
                    //     method: 'POST',
                    //     headers: {
                    //         'Content-Type': 'Application/json'
                    //     }
                    // }).then(response => {
                    //     let data = new Map();


                    // $("#identification-form")[0].reset();
                    // $("#complaint-form")[0].reset();
                    // $("#orientation-form")[0].reset();

                    // $('#new-patient-modal').modal('hide');

                    // $.toast({
                    //     heading: 'Success',
                    //     text: 'Patient registered successfully.',
                    //     position: 'top-right',
                    //     loaderBg: '#ff6849',
                    //     icon: 'success',
                    //     hideAfter: 2000,
                    //     stack: 6
                    // });
                    // }).catch(response => {
                    //     $.toast({
                    //         heading: 'Error',
                    //         text: 'We were unable to orientate this new patient.',
                    //         position: 'top-right',
                    //         loaderBg: '#ff6849',
                    //         icon: 'error',
                    //         hideAfter: 2000,
                    //         stack: 6
                    //     });
                    // })

                });
            });
        </script>
    </x-slot>

</x-layouts.app>