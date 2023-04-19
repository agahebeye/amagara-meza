<x-layouts.app>
    <x-slot name='title'>Consultations</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/jquery.toast.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/select2.min.css" rel="stylesheet" type="text/css" />

    </x-slot>


    <div class="d-flex align-items-center justify-content-between">
        <h3 class="m-0">Patients to orient</h3>

        <!-- <a href='#' class="font-weight-bold text-primary"><u>Oriented patients</u></a> -->

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

    <x-slot name='moreScripts'>
        <script src="/app/js/jquery.toast.js"></script>
        <script src="/app/js/jquery.dataTables.min.js"></script>
        <script src="/app/js/select2.min.js"></script>

        <script>
            $(document).ready(function() {
                let patientId, medicalFormRoute = "{{route('api.v1.medical-form', ':id')}}";

                $('input#examinations').attr('checked', true)
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
                $('select.prescriptions').select2()

                $('input.result').on('click', function(e) {
                    $('div.result').toggleClass('hidden')
                })

                const table = $('#patientTable').DataTable({
                    serverSide: true,
                    ajax: "{{route('api.v1.orientations.index')}}",
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
                                console.log(row);
                                const value = encodeURIComponent(JSON.stringify({
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

                $('#consultation-modal').on('show.bs.modal', function(event) {
                    const button = $(event.relatedTarget);
                    const value = JSON.parse(decodeURIComponent(button.data('value')))
                    patientId = value.patient_id

                    $.map(value, function(v, i) {
                        $(`#consultation-form`).find(`#${i}`).val(v)
                    })


                })

                $('a[href="#medical-form"]').click(function() {
                    $('#medical-form').load(medicalFormRoute.replace(':id', patientId))
                })


                //TODO submit consultation with its complaint
                $('#consultation-form').on('submit', function(e) {
                    e.preventDefault();

                    const consultation = Object.fromEntries(new FormData(this).entries());
                    const examinations = $('select.examinations').val();
                    const prescriptions = $('select.prescriptions').val();

                    fetch("{{route('api.v1.consultations.store')}}", {
                            method: 'POST',
                            body: JSON.stringify({
                                ...consultation,
                                examinations,
                                prescriptions
                            }),
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        }).then(res => res.json())
                        .then(console.log)
                        .catch(console.error)
                        .finally(() =>
                            $(this).closest('#consultation-modal').modal('hide')
                        )
                })
            });
        </script>
    </x-slot>

    <x-modals.new-consultation />
</x-layouts.app>