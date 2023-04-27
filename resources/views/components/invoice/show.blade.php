 <div class="invoice">
     <h3><span class=""><b>INVOICE</b> #{{ $invoice->id }}</span></h3>
     <br>
     <div class="row">
         <div class="col-md-12">
             <div class="pull-left">
                 <address>
                     <h3> &nbsp;<b class="text-danger">Elite Hospital</b></h3>
                     <p class="text-muted m-l-5">E 104, Dharti-2, <br />
                         Nr' Viswakarma Temple, <br />
                         Talaja Road, <br />
                         Bhavnagar - 364002</p>
                 </address>
             </div>
             <div class="pull-right text-right">
                 <address>
                     <h3>To,</h3>
                     <h4 class="font-bold">{{ $invoice->patient->first_name}} {{ $invoice->patient->last_name}}</h4>
                     <p class="m-t-30 mb-0"><b>Invoice Date </b></p>
                     <p class="m-0">
                         <x-core.icons.calendar />
                         <span style="position: relative; bottom: 2px">{{ now()->format('l jS, M Y h:i:s A') }}</span>
                     </p>
                 </address>
             </div>
         </div>

         <div class="col-md-12">
             <div class="table-responsive m-t-40">
                 <table class="table table-hover">
                     <thead>
                         <tr>
                             <th class="text-center">#</th>
                             <th>Item Name</th>
                             <th class="text-right">Quantity</th>
                             <th class="text-right">Charges</th>
                             <th class="text-right">Total</th>
                         </tr>
                     </thead>
                     <tbody>
                         @foreach($invoice->services as $service)
                         <tr>
                             <td class="text-center">{{ $service->id }}</td>
                             <td>{{ $service->name }}</td>
                             <td class="text-right">-</td>
                             <td class="text-right">{{$service->price}} Fbu </td>
                             <td class="text-right">{{$service->price}} Fbu</td>
                         </tr>
                         @endforeach

                         @foreach($invoice->medics as $medic)
                         <tr>
                             <td class="text-center">{{ $medic->id }}</td>
                             <td>{{ $medic->name }}</td>
                             <td class="text-right">{{ $medic->pivot->qty }}</td>
                             <td class="text-right">{{$medic->unit_price}} Fbu </td>
                             <td class="text-right">{{$medic->unit_price}} Fbu</td>
                         </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>
         </div>

         <div class="col-md-12">
             <div class="pull-right m-t-30 text-right">{{ $total }}</div>
             <div class="clearfix"></div>
             <hr>
             <div class="text-right">
                 <button class="btn btn-danger rounded-md d-print-none checkout" data-id="{{ $invoice->id }}" type="button"> Proceed to payment </button>
             </div>
         </div>
     </div>
 </div>

 <script>
     $(document).ready(function() {
         let route = `{{route('api.v1.invoices.update', ':id')}}`;

         $('button.checkout').on('click', function(e) {
             const invoiceId = $(this).data('id');
             const btn = $(this)

             fetch(route.replace(':id', invoiceId), {
                     method: 'PUT',
                     headers: {
                         'Content-type': 'application/json'
                     },
                     body: JSON.stringify({
                         status: 1
                     })
                 })
                 .then(() => {
                     notify('Invoice notice', `Invoice #${invoiceId} was paid succefully.`)
                     $('#invoiceTable').DataTable().ajax.reload();

                     // close parent modal after printing - OK
                     $('.invoice').printThis({
                         pageTitle: "Invoice #{{$invoice->id}}",
                         printDelay: 500,
                         afterPrint() {
                             btn.closest('#show-invoice').modal('hide');
                         }
                     });
                 })
                 .catch(console.error)

         })

     })
 </script>