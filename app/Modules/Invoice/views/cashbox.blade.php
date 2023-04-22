<x-layouts.app>
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
                                    <x-icons.bag-check />
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

    <x-partials.modals.show-invoice />
    <x-partials.modals.confirmation title='Payment Cancellation' message='Do you really want to cancel this payment?' />


</x-layouts.app>