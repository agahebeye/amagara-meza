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
                    <h3 class="m-b-0">Registered patients</h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <a data-toggle="modal" data-target="#new-patient-modal" class="btn btn-info rounded-md">Add new patient</a>

                            <x-modals.new-patient />

                        </div>
                    </div>
                </div>

                <x-modals.show-patient />

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
                var patientDetails;

                var table = $('#patientTable').DataTable({
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

                table.on('click', 'td .view-button', function(e) {
                    e.preventDefault();
                    var tr = $(this).closest('tr');
                    patientDetails = table.row(tr).data()

                    // $(this).click();
                })

                $('#identification-form').on('submit', function(event) {
                    event.preventDefault()


                    fetch("{{route('api.v1.patients.store')}}", {
                            method: 'POST',
                            body: new FormData(this),
                        })
                        .then(_ => {
                            console.log('Success');
                            table.ajax.reload();
                            $(this).trigger('reset');

                            $('#new-patient-modal').modal('hide');
                        })
                        .catch(reason => console.log(reason));

                })
            });
        </script>
    </x-slot>

</x-layouts.app>