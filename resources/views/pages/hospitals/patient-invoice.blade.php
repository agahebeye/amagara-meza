<x-layouts.app>
    <x-slot name='title'>Patient Invoice</x-slot>


    <div class="row" id="invoice">
        <div class="col-md-12">
            <div class="white-box">
                <h3><b>INVOICE</b> <span class="pull-right">#5669626</span></h3>
                <hr>
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
                                <h4 class="font-bold">Richard Nixon</h4>
                                <p class="text-muted m-l-30">E 104, Dharti-2, <br />
                                    Nr' Viswakarma Temple, <br />
                                    Talaja Road, <br />
                                    Bhavnagar - 364002</p>
                                <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> 23rd Jan 2017</p>
                                <p><b>Due Date :</b> <i class="fa fa-calendar"></i> 25th Jan 2017</p>
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
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>Visiting Charges</td>
                                        <td class="text-right">-</td>
                                        <td class="text-right">$100</td>
                                        <td class="text-right">$100</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>Medicines</td>
                                        <td class="text-right">10</td>
                                        <td class="text-right">$100</td>
                                        <td class="text-right">$1000</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>X-ray Reports</td>
                                        <td class="text-right">2</td>
                                        <td class="text-right">$600</td>
                                        <td class="text-right">$1200</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>Other Charges</td>
                                        <td class="text-right">-</td>
                                        <td class="text-right">-</td>
                                        <td class="text-right">$300</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="pull-right m-t-30 text-right">
                            <p>Sub - Total amount: $1600</p>
                            <p>vat (10%) : $160 </p>
                            <hr>
                            <h3><b>Total :</b> $1760</h3>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div class="text-right">
                            <button class="btn btn-danger" type="submit"> Proceed to payment </button>
                            <button onClick="printInvoice()" class="btn btn-default btn-outline" type="button"> <span><i class="fa fa-print"></i> Print</span> </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name='moreScripts'>
        <script>
            function printInvoice() {
                var divElements = document.getElementById('invoice').innerHTML;
                //Get the HTML of whole page
                var oldPage = document.body.innerHTML;
                //Reset the page's HTML with div's HTML only
                document.body.innerHTML =
                    "<html><head><title></title></head><body>" +
                    divElements + "</body>";
                //Print Page
                window.print();
                //Restore orignal HTML
                document.body.innerHTML = oldPage;
            }
        </script>
    </x-slot>
</x-layouts.app>