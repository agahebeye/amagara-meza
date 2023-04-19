<x-layouts.app>
    <x-slot name='title'>Patients</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/jquery.toast.css" rel="stylesheet" type="text/css" />


    </x-slot>

    <div class="d-flex justify-content-between align-items-center">
        <h3 class="m-0">Registered patients</h3>
        <div class="">
            <a data-toggle="modal" data-target="#new-patient-modal" class="btn btn-info rounded-md">Add new patient</a>

            <x-partials.modals.new-patient />

        </div>
    </div>


    <div class="table-responsive mt-5">
        <table id="patientTable" class="display compact">
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

    <div class="modal fade" id="show-patient-modal" tabindex="-1" role="dialog" aria-pledby="showPatientModal" data-backdrop='false' aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-md">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title text-center" id="myModalp">Patient Details</h2>
                </div>

                <div class="modal-body" id='patient-content'></div>
            </div>
        </div>
    </div>

    <x-partials.modals.confirmation title="Delete confirmation" message='Do you really want to delete this patient?' />

    <x-slot name='moreScripts'>
        <script src="/app/js/jquery.toast.js"></script>
        <script src="/app/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                let selectId;

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
                                <a title="Show Details" role="button" data-id="${row.id}" data-value="${value}" data-toggle="modal" data-target="#show-patient-modal" class="view-button"><x-icons.eye /></a>
                                <a title="Edit Patient" role="button" data-id="${row.id}" data-value="${value}" data-toggle="modal" data-target="#show-patient-modal" class="edit-button mx-3"><x-icons.pencil /></i></a>
                                <a title="Delete Patient" role="button" data-id="${row.id}" data-toggle="modal" data-target="#confirmation" class="delete-button"><x-icons.trash /></i></a>
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

                    $('#patient-content')
                        .load(
                            `{{route('api.v1.patients.show', ':id')}}
                        `.replace(':id', button.data('id'))
                        )
                })


                $('#confirmation').on('show.bs.modal', function(event) {
                    const button = $(event.relatedTarget);
                    selectId = button.data('id');
                })

                $('#confirm-button').on('click', () => {
                    let route = `{{route('api.v1.patients.destroy', ':id')}}`;

                    fetch(route.replace(':id', selectId), {
                            method: 'DELETE'
                        })
                        .then(res => {
                            notify('Delete notification', 'Patient deleted succefully.');
                            table.ajax.reload();
                        })
                        .catch(reason => notify('Delete notification', 'Error deleting a patient.'))
                        .finally(() => $('#confirmation').modal('hide'));
                })
            });
        </script>
    </x-slot>


</x-layouts.app>