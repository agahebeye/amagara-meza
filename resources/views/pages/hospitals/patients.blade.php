<x-layouts.app>
    <x-slot name='title'>Patients</x-slot>


    <x-slot name='moreStyles'>
        <link href="/app/css/magnific-popup.css" rel="stylesheet">
        <link href="/app/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    </x-slot>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="d-flex justify-content-between align-items-center">
                    <h3 class="box-title m-b-0">Liste de patients</h3>
                    <div class="row">
                        <!-- .col -->
                        <div class="col-sm-12">
                            <a id="add-patient-btn" class="btn btn-info" href="#add-patient-form">Open form</a>
                            <!-- form itself -->

                            <x-partials.add-patient />


                        </div>
                        <!-- .col -->
                    </div>
                </div>
                <hr>
                <div class="table-responsive">
                    <table id="patientTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Patient</th>
                                <th>Doctor</th>
                                <th>Date</th>
                                <th>Charges</th>
                                <th>Discount</th>
                                <th>Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($patients as $patient)
                            <tr>
                                <td>1</td>
                                <td>Tiger Nixon</td>
                                <td>Steve Gection</td>
                                <td>2011/04/25</td>
                                <td>$610</td>
                                <td>15%</td>
                                <td>$320</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <x-slot name='moreScripts'>
        <script src="/app/js/jquery.magnific-popup.min.js"></script>
        <script src="/app/js/jquery.magnific-popup-init.js"></script>

        <script src="/app/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#patientTable').DataTable();
            });
        </script>
    </x-slot>

</x-layouts.app>