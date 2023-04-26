<x-core.layouts.app>
    <x-slot name='title'>Cashbox</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="/app/css/jquery.toast.css" rel="stylesheet" type="text/css" />
    </x-slot>


    <div class="d-flex justify-content-between align-items-center">
        <h3 class="m-b-0">Indebted patients</h3>
    </div>

    <div class="table-responsive mt-5">
        <table id="invoiceTable" class="display compact">
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
                let invoice_id, status;
                const viewRoute = "{{route('api.v1.invoices.show', ':id')}}"

                const table = $('#invoiceTable').DataTable({
                    serverSide: true,
                    ajax: "{{route('api.v1.invoices.index')}}",
                    columns: [{
                            data: 'id'
                        }, {
                            data: 'first_name'
                        }, {
                            data: 'last_name'
                        },
                        {
                            data: 'actions',
                            render: function(data, type, row) {
                                return `
                                <a title="Mark as paid" role="button" data-id="${row.latest_invoice.id}" data-toggle="modal" data-target="#show-invoice"  class="pay-button">
                                    <x-core.icons.bag-check />
                                </a>
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

                $('#show-invoice').on('show.bs.modal', function(event) {
                    const button = $(event.relatedTarget);
                    $('#invoice-body').load(viewRoute.replace(':id', button.data('id')))
                })

            });
        </script>
    </x-slot>

    <div class="modal fade" id="show-invoice" tabindex="-1" role="dialog" aria-pledby="showPatientModal" data-backdrop='false' aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-md">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>

                <div class="modal-body" id='invoice-body'></div>
            </div>
        </div>
    </div>

    <x-core.modals.confirmation title='Payment Cancellation' message='Do you really want to cancel this payment?' />


</x-core.layouts.app>