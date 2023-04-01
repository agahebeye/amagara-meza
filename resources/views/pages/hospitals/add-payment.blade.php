<x-layouts.app>
    <x-slot name='title'>Add Payment</x-slot>

    <x-slot name='moreStyles'>
        <link href="/app/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
    </x-slot>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title">Payment Information</h3>
                <form class="form-material form-horizontal">
                    <div class="form-group">
                        <label class="col-md-12" for="example-text">Payment Number</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="example-text" name="example-text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="paydate">Payment Date</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="paydate" name="paydate" class="form-control mydatepicker">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="pname">Patient Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="pname" name="pname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="dname">Doctor Name</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="dname" name="dname" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="toamt">Total Amount</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="toamt" name="toamt" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="toamt">Discount</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="toamt" name="toamt" class="form-control" data-mask="99.99%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12" for="fiamt">Final Amount</span>
                        </label>
                        <div class="col-md-12">
                            <input type="text" id="fiamt" name="fiamt" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Payment Method</label>
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option>Select Method</option>
                                <option>Cash</option>
                                <option>Cheque</option>
                                <option>Credit Card</option>
                                <option>Debit Card</option>
                                <option>Netbanking</option>
                                <option>Insurance</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12">Payment Status</label>
                        <div class="col-sm-12">
                            <select class="form-control">
                                <option>Select Status</option>
                                <option>Complete</option>
                                <option>Pending</option>
                                <option>Partial</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info waves-effect waves-light m-r-10">Submit</button>
                    <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    <x-slot name='moreScripts'>
        <script src="/app/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript">
            // Date Picker
            jQuery('.mydatepicker').datepicker();
        </script>
    </x-slot>
</x-layouts.app>