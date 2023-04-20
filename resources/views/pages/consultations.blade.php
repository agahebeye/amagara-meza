<x-layouts.app>
    <x-slot name='title'>Consultations</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/jquery.toast.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/select2.min.css" rel="stylesheet" type="text/css" />

    </x-slot>


    <div class="d-flex align-items-center justify-content-between">
        <h3 class="m-0">Patients to orient</h3>
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
        <script src="/app/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                $('select.examinations').select2({
                    placeholder: 'Select examinations',
                    ajax: {
                        url: "{{route('api.v1.services.index')}}",
                        dataType: 'json',
                        processResults: (data) => {
                            const results = []

                            results.push({
                                text: 'Laboratory Examination',
                                children: data.filter(x => x.category === 'Laboratory').map(x => ({
                                    id: x.id,
                                    text: x.name
                                }))
                            }, {
                                text: 'Imaging Examination',
                                children: data.filter(x => x.category === 'Imaging').map(x => ({
                                    id: x.id,
                                    text: x.name
                                }))
                            });

                            return {
                                results
                            }
                        }
                    }
                })

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
                                const value = encodeURIComponent(JSON.stringify({
                                    id: row.id, // id of patient
                                    complaint_id: row.latest_complaint.id,
                                    chief_complaint: row.latest_complaint.complaint,
                                    consultation_date: row.latest_complaint.date
                                }));

                                return `<a title="Show Details" role="button" data-value="${value}" data-toggle="modal" data-target="#consultation-modal" class="view-button"><x-icons.eye /></a>`;
                            }
                        }

                    ],
                    columnDefs: [{
                        orderable: false,
                        searchable: false,
                        targets: [-1]
                    }],
                });
            });
        </script>
    </x-slot>

    <x-partials.modals.new-consultation />
</x-layouts.app>