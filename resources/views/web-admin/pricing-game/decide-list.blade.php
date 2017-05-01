
@extends('master')


@section('styles')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/widgets/datatable/datatable.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/widgets/charts/morris/morris.css')}}">
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                     Values Range bargraph
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
    <div></div>

<div class="panel">
    <div class="panel-body">
        <h3 class="title-hero">
            Player Input
        </h3>
        <div class="example-box-wrapper">

            <div class="dataTable_wrapper">
                <table id="admindataTables" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr role="row">
                        <th  >Player</th>
                        <th  rowspan="1" colspan="1" style="width: 253.2px;" >Final Value($)</th>
                        <th  rowspan="1" colspan="1" style="width: 228.2px;" >Submitted Date</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($scores as $score)
                    <tr class="gradeA even" role="row">
                        <td >{{$score->player->username}}</td>
                        <td>{{$score->final_value}}</td>
                        <td>{{$score->created_at}}</td>

                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

    @stop

@section('scripts')
    <script type="text/javascript" src="{{URL::asset('backend/widgets/datatable/datatable.js')}}"></script>
    <!-- Morris -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script type="text/javascript" src="{{URL::asset('backend/widgets/charts/morris/morris.js')}}"></script>




    <script>
        $(document).ready(function () {
            $('#admindataTables').DataTable({

                responsive: true

            });

            Morris.Bar({
                element: 'morris-bar-chart',
                data:{!! json_encode($graphdata) !!},
                xkey: 'range',
                ykeys: ['val'],
                labels: ['count']
            });
        });

    </script>
    @stop