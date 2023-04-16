<x-layouts.app>
    <x-slot name='title'>Orientations</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/jquery.toast.css" rel="stylesheet" type="text/css" />


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
                                return `
                                <a title="Show Details" role="button"  data-value="${value}" data-toggle="modal" data-target="#orientation-modal" class="view-button"><x-icons.eye /></a>`;
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
                $('#orientation-modal').on('show.bs.modal', function(event) {
                    const button = $(event.relatedTarget);
                    const value = JSON.parse(decodeURIComponent(button.data('value')))
                    $('.patient_id').val(value.id);

                    $.map(value, function(v, i) {
                        $('#show-patient').find(`#${i}`).text(v)
                    })
                })

                // save complaint and switch to orientation tab
                $('#complaint-form').on('submit', function(e) {
                    e.preventDefault();
                    complaint = Object.fromEntries(new FormData(this).entries());
                    $("a[href='#orientation']").click()

                })

                //TODO submit orientation with its complaint
                $('#orientation-form').on('submit', function(e) {
                    e.preventDefault();

                    const orientation = Object.fromEntries(new FormData(this).entries());

                    fetch("{{route('api.v1.orientations.store')}}", {
                            method: 'POST',
                            body: JSON.stringify({
                                complaint,
                                orientation
                            }),
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        }).then(res => res.json())
                        .then(({
                            data
                        }) => {
                            $('#queue-number').text(data);
                            $('#waiting-list-modal').modal('show')
                        })
                        .catch(() => notify('Orientation Notice', 'Error while trying to save orientation', 'error'))
                        .finally(() =>
                            $(this).closest('#orientation-modal').modal('hide')
                        )


                })
            });
        </script>
    </x-slot>

    <x-modals.new-orientation />

    <div class="modal fade" id="waiting-list-modal" tabindex="-1" role="dialog" aria-labelledby="waitingListModal" data-backdrop='false' data-keyboard="false" aria-hidden="true">
        <div class="modal-dialog h-100 d-flex flex-column justify-content-center my-0" role="document">
            <div class="modal-content rounded-md">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title text-center" id="title">Waiting List</h2>
                </div>

                <div class="modal-body">
                    <div class="d-flex flex-column align-items-center">
                        <h1 class="text-center my-3" id='queue-number'></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>