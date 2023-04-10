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
                    <h3 class="m-b-0">Oriented patients</h3>

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
                                return `<a title="Show Details" role="button"  data-value="${value}" data-toggle="modal" data-target="#orientation-modal" class="view-button"><i class="icon-eye"></i></a>`;
                            }
                        }

                    ],
                    columnDefs: [{
                        orderable: false,
                        searchable: false,
                        targets: [-1]
                    }],
                });

                $('#orientation-modal').on('show.bs.modal', function(event) {
                    const button = $(event.relatedTarget);
                    const value = JSON.parse(decodeURIComponent(button.data('value')))
                    $('.patient_id').val(value.id);

                    $.map(value, function(v, i) {
                        $('#show-patient').find(`#${i}`).text(v)
                    })
                })

                $('#complaint-form').on('submit', function(e) {
                    e.preventDefault();
                    complaint = Object.fromEntries(new FormData(this).entries());
                    $("a[href='#orientation']").click()

                })

                //TODO submit orientation with its complaint
                $('#orientation-form').on('submit', function(e) {
                    e.preventDefault();
                    $(this).closest('#orientation-modal').modal('hide')

                })
            });
        </script>
    </x-slot>

    <x-modals.new-orientation />
</x-layouts.app>