<x-layouts.app>
    <x-slot name='title'>Sales Report</x-slot>

    <div class="row">
        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Real Chart</h3>
                <div class="demo-container" style="height:400px;">
                    <div id="placeholder" class="demo-placeholder"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Line Chart</h3>
                <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-line-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Pie Chart</h3>
                <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-pie-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Moving Line Chart Example</h3>
                <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-line-chart-moving"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Bar Chart</h3>
                <div class="flot-chart">
                    <div class="flot-chart-content" id="flot-bar-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">Sales Bar Chart</h3>
                <div class="flot-chart">
                    <div class="sales-bars-chart" style="height: 320px;"> </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name='moreScripts'>
        <script src="/app/plugins/bower_components/flot/excanvas.min.js"></script>
        <script src="/app/plugins/bower_components/flot/jquery.flot.js"></script>
        <script src="/app/plugins/bower_components/flot/jquery.flot.pie.js"></script>
        <script src="/app/plugins/bower_components/flot/jquery.flot.resize.js"></script>
        <script src="/app/plugins/bower_components/flot/jquery.flot.time.js"></script>
        <script src="/app/plugins/bower_components/flot/jquery.flot.stack.js"></script>
        <script src="/app/plugins/bower_components/flot/jquery.flot.crosshair.js"></script>
        <script src="/app/plugins/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

        <script src="/app/js/flot-data.js"></script>
    </x-slot>

</x-layouts.app>