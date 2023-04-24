<x-layouts.app>
    <x-slot name='title'>Consultations</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/jquery.toast.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/selectize.min.css" rel="stylesheet" type="text/css" />
    </x-slot>


    <div class="d-flex align-items-center justify-content-between">
        <h3 class="m-0">Patients to consult</h3>
    </div>

    <div class="table-responsive mt-5">
        <table id="consultationTable" class="display compact">
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

    <x-slot name='moreScripts'>
        <script src="/app/js/jquery.toast.js"></script>
        <script src="/app/js/jquery.dataTables.min.js"></script>
        <script src="/app/js/selectize.min.js"></script>

        <script>
            $(document).ready(function() {
                const table = $('#consultationTable').DataTable({
                    serverSide: true,
                    ajax: "{{route('api.v1.consultations.index')}}",
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
                                return `<a title="Show Details" role="button"
                                            data-complaint-id="${row.latest_complaint.id}"
                                            data-toggle="modal" data-target="#consultation-modal"
                                            class="view-button">
                                                <x-icons.eye />
                                        </a>`;
                            }
                        }

                    ],
                    columnDefs: [{
                        orderable: false,
                        searchable: false,
                        targets: [-1]
                    }],
                });

                $('#consultation-modal').on('show.bs.modal', function(event) {
                    const button = $(event.relatedTarget);

                    $('#patient-consultation').load(
                        "{{route('api.v1.consultations.show', ':id')}}".replace(':id', button.data('complaintId'))
                    );
                });


            });

            // $('select.examinations').select2({
            //     placeholder: 'Select examinations',
            //     ajax: {
            //         url: "{{route('api.v1.services.index')}}",
            //         dataType: 'json',
            //         processResults: (data) => {
            //             const results = []

            //             results.push({
            //                 text: 'Laboratory Examination',
            //                 children: data.filter(x => x.category === 'Laboratory').map(x => ({
            //                     id: x.id,
            //                     text: x.name
            //                 }))
            //             }, {
            //                 text: 'Imaging Examination',
            //                 children: data.filter(x => x.category === 'Imaging').map(x => ({
            //                     id: x.id,
            //                     text: x.name
            //                 }))
            //             });

            //             return {
            //                 results
            //             }
            //         }
            //     }
            // })
        </script>
    </x-slot>

    <div class="modal fade" id="consultation-modal" tabindex="-1" role="dialog" aria-labelledby="newConsultationModal" data-backdrop='false' aria-hidden="true">
        <div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
            <div class="modal-content px-4 pb-4 rounded-md">
                <div class="modal-header m-0">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>

                <div id="patient-consultation"></div>
            </div>
        </div>
    </div>
</x-layouts.app>