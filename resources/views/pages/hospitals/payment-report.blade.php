<x-layouts.app>
    <x-slot name='title'>Payment Report</x-slot>

    <div class="row">
        <div class="col-sm-6">
            <div class="white-box">
                <h3 class="box-title">Line Chart</h3>
                <div>
                    <canvas id="chart1" height="150"></canvas>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="white-box">
                <h3 class="box-title">Bar Chart</h3>
                <div>
                    <canvas id="chart2" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="white-box">
                <h3 class="box-title">Pie Chart</h3>
                <div>
                    <canvas id="chart3" height="150"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="white-box">
                <h3 class="box-title">Doughnut Chart</h3>
                <div>
                    <canvas id="chart4" height="150"> </canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="white-box">
                <h3 class="box-title">Polar Area Chart</h3>
                <div>
                    <canvas id="chart5" height="150"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="white-box">
                <h3 class="box-title">Radar Chart</h3>
                <div>
                    <canvas id="chart6" height="150"></canvas>
                </div>
            </div>
        </div>
    </div>

    <x-slot name='moreScripts'>
        <script src="/app/plugins/bower_components/Chart.js/chartjs.init.js"></script>
        <script src="/app/plugins/bower_components/Chart.js/Chart.min.js"></script>
    </x-slot>
</x-layouts.app>