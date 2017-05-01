@extends("master")
@section("title","DashBoard")

@section("content")




    <!-- Sparklines charts -->

    <script type="text/javascript" src="../../assets/widgets/charts/sparklines/sparklines.js"></script>
    <script type="text/javascript" src="../../assets/widgets/charts/sparklines/sparklines-demo.js"></script>

    <!-- Flot charts -->

    <script type="text/javascript" src="../../assets/widgets/charts/flot/flot.js"></script>
    <script type="text/javascript" src="../../assets/widgets/charts/flot/flot-resize.js"></script>
    <script type="text/javascript" src="../../assets/widgets/charts/flot/flot-stack.js"></script>
    <script type="text/javascript" src="../../assets/widgets/charts/flot/flot-pie.js"></script>
    <script type="text/javascript" src="../../assets/widgets/charts/flot/flot-tooltip.js"></script>
    <script type="text/javascript" src="../../assets/widgets/charts/flot/flot-demo-1.js"></script>

    <!-- PieGage charts -->

    <script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage.js"></script>
    <script type="text/javascript" src="../../assets/widgets/charts/piegage/piegage-demo.js"></script>

    <div id="page-title">
        <h2>Dashboard</h2>
        {{--<p>The most complete user interface framework that can be used to create stunning admin--}}
            {{--dashboards and presentation websites.</p>--}}

    </div>

    <div class="row">

        {{--<div class="col-md-4">--}}
            {{--<a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-success">--}}
                {{--<div class="tile-header">--}}
                    {{--Photo Gallery--}}
                {{--</div>--}}
                {{--<div class="tile-content-wrapper">--}}
                    {{--<div class="chart-alt-10 easyPieChart" data-percent="43" style="width: 100px; height: 100px; line-height: 100px;"><span>42</span>%<canvas width="125" height="125" style="width: 100px; height: 100px;"></canvas></div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="col-md-4">--}}
            {{--<a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-info">--}}
                {{--<div class="tile-header">--}}
                    {{--Subscriptions--}}
                {{--</div>--}}
                {{--<div class="tile-content-wrapper">--}}
                    {{--<div class="chart-alt-10 easyPieChart" data-percent="76" style="width: 100px; height: 100px; line-height: 100px;"><span>75</span>%<canvas width="125" height="125" style="width: 100px; height: 100px;"></canvas></div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}
        {{--<div class="col-md-4">--}}
            {{--<a href="#" title="Example tile shortcut" class="tile-box tile-box-alt btn-warning">--}}
                {{--<div class="tile-header">--}}
                    {{--New Visitors--}}
                {{--</div>--}}
                {{--<div class="tile-content-wrapper">--}}
                    {{--<div class="chart-alt-10 easyPieChart" data-percent="11" style="width: 100px; height: 100px; line-height: 100px;"><span>10</span>%<canvas width="125" height="125" style="width: 100px; height: 100px;"></canvas></div>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}


        <div class="col-md-4">
            <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-primary">
                <span class="bs-badge badge-absolute">{{$players}}</span>
                <div class="tile-header">
                    Registered Players
                </div>
                <div class="tile-content-wrapper">
                    <i class="glyph-icon icon-users"></i>
                </div>
            </a>
        </div>


        <div class="col-md-4">
            <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-success">
                <span class="bs-badge badge-absolute">{{$games}}</span>
                <div class="tile-header">
                    Games
                </div>
                <div class="tile-content-wrapper">
                    <i class="glyph-icon icon-gamepad"></i>
                </div>
            </a>
        </div>
        {{--<div class="col-md-4">--}}
            {{--<a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-info">--}}
                {{--<span class="bs-badge badge-absolute">2</span>--}}
                {{--<div class="tile-header">--}}
                    {{--Subscriptions--}}
                {{--</div>--}}
                {{--<div class="tile-content-wrapper">--}}
                    {{--<i class="glyph-icon icon-download"></i>--}}
                {{--</div>--}}
            {{--</a>--}}
        {{--</div>--}}



    </div>



@stop