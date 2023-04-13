<x-layouts.app>
    <x-slot name='title'>Patients</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/jquery.toast.css" rel="stylesheet" type="text/css" />


    </x-slot>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box rounded-md">
                <div class="d-flex align-items-center justify-content-between">
                    <h3 class="m-0">Patients to orient</h3>

                    <a href='#' class="font-weight-bold text-primary"><u>Oriented patients</u></a>

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


            </div>
        </div>
    </div>


    <x-slot name='moreScripts'>
        <script src="/app/js/jquery.toast.js"></script>
        <script src="/app/js/jquery.dataTables.min.js"></script>

        <script>
            $(document).ready(function() {
                let complaint;

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
                                const value = encodeURIComponent(JSON.stringify(row))
                                return `<a title="Show Details" role="button"  data-value="${value}" data-toggle="modal" data-target="#consultation-modal" class="view-button"><x-icons.eye /></a>`;
                            }
                        }

                    ],
                    columnDefs: [{
                        orderable: false,
                        searchable: false,
                        targets: [-1]
                    }],
                });

                //populate patient details
                $('#consultation-modal').on('show.bs.modal', function(event) {
                    const button = $(event.relatedTarget);
                    const value = JSON.parse(decodeURIComponent(button.data('value')))
                    $('.patient_id').val(value.id);

                    $.map(value, function(v, i) {
                        $('#show-patient').find(`#${i}`).text(v)
                    })
                })

                //TODO submit consultation with its complaint
                $('#consultation-form').on('submit', function(e) {
                    e.preventDefault();

                    // const consultation = Object.fromEntries(new FormData(this).entries());

                    fetch("{{route('api.v1.orientations.store')}}", {
                            method: 'POST',
                            body: JSON.stringify({}),
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