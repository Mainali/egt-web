@extends('master')
@section('styles')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/widgets/charts/morris/morris.css')}}">
    @stop

@section("content")
    <div class="row">
        <div class="col-md-12">
<div class="panel panel-default">
    <div class="panel-heading">
        Decision Game
    </div>
    <div class="panel-body">
        <div class="morris-chart-content">
            <div id="morris-bar-chart">
            </div>
        </div>
    </div>
        </div>
    </div>
</div>


    @stop

@section('scripts')
    <!-- Morris -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script type="text/javascript" src="{{URL::asset('backend/widgets/charts/morris/morris.js')}}"></script>


    <script>
        $(document).ready(function () {
            Morris.Bar({
                element: 'morris-bar-chart',
                data:{!! json_encode($graphdata) !!},
                xkey: 'range',
                ykeys: ['val'],
                labels: ['Value']
            });
        })
    </script>

@stop