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


                <div class="table-responsive mt-5">
                    <table id="patientTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>FirstName</th>
                                <th>LastName</th>
                                <th>Actions</th>
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
                let currentId;

                const table = $('#patientTable').DataTable({
                    serverSide: true,
                    ajax: "{{route('api.v1.patients.index')}}",
                    columns: [{
                            data: 'id'
                        },
                        {
                            data: 'first_name'
                        },
                        {
                            data: 'last_name'
                        }, {
                            data: 'actions',
                            render: function(data, type, row, meta) {
                                const value = encodeURIComponent(JSON.stringify(row))
                                return `
                                <a title="Show Details" role="button" data-id="${row.id}" data-value="${value}" data-toggle="modal" data-target="#show-patient-modal" class="view-button"><i class="icon-eye"></i></a>
                                <a title="Edit Patient" role="button" data-id="${row.id}" data-value="${value}" data-toggle="modal" data-target="#show-patient-modal" class="edit-button mx-3"><i class="icon-pencil"></i></a>
                                <a title="Delete Patient" role="button" data-id="${row.id}" data-toggle="modal" data-target="#delete-confirmation-modal" class="delete-button"><i class="icon-trash"></i></a>
                                `;
                            }
                        }

                    ],
                    columnDefs: [{
                        orderable: false,
                        searchable: false,
                        targets: [-1]
                    }],
                });

                $('#show-patient-modal').on('show.bs.modal', function(event) {
                    const button = $(event.relatedTarget);
                    const value = JSON.parse(decodeURIComponent(button.data('value')))
                    $.map(value, function(v, i) {
                        $(`#show-patient #${i}`).text(v)
                    })
                })

                $('#confirmation-modal').on('show.bs.modal', function(event) {
                    const button = $(event.relatedTarget);
                    currentId = button.data('id');
                    const parent = $(this);

                })

                $('#confirm-button').on('click', () => {
                    let route = `{{route('api.v1.patients.destroy', ':id')}}`;

                    fetch(route.replace(':id', currentId), {
                            method: 'DELETE'
                        })
                        .then(res => {
                            notify('Delete notification', 'Patient deleted succefully.');
                            table.ajax.reload();
                        })
                        .catch(reason => notify('Delete notification', 'Error deleting a patient.'))
                        .finally(() => $('#delete-confirmation-modal').modal('hide'));
                })

                $('#identification-form').on('submit', function(event) {
                    event.preventDefault()


                    fetch("{{route('api.v1.patients.store')}}", {
                            method: 'POST',
                            body: new FormData(this),
                        })
                        .then(_ => {
                            notify('Patient registration', 'Patient registered succefully.')
                            table.ajax.reload();
                            $(this).trigger('reset');

                            $('#new-patient-modal').modal('hide');
                        })
                        .catch(reason => notify('Patient registration', 'Error registering new patient.', 'error'));

                })
            });
        </script>
    </x-slot>

    <x-modals.show-patient />
    <x-modals.confirmation />
</x-layouts.app>