
@extends('master')


@section('styles')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('backend/widgets/datatable/datatable.css')}}">
@stop
@section('content')
    <div class="panel">
        <div class="panel-body">
            <h3 class="title-hero">
                STILL WORKING ON THIS
            </h3>
            {{--<div class="example-box-wrapper">--}}

                {{--<div class="dataTable_wrapper">--}}
                    {{--<table id="admindataTables" class="table table-striped table-bordered table-hover">--}}
                        {{--<thead>--}}
                        {{--<tr role="row">--}}
                            {{--<th  >Player</th>--}}
                            {{--<th  rowspan="1" colspan="1" style="width: 253.2px;" >Final Value</th>--}}
                            {{--<th  rowspan="1" colspan="1" style="width: 228.2px;" >Submitted Date</th>--}}

                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<tbody>--}}
                        {{--@foreach($scores as $score)--}}
                            {{--<tr class="gradeA even" role="row">--}}
                                {{--<td >{{$score->player->username}}</td>--}}
                                {{--<td>{{$score->final_value}}</td>--}}
                                {{--<td>{{$score->created_at}}</td>--}}

                            {{--</tr>--}}
                        {{--@endforeach--}}
                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>

    </div>

@stop

@section('scripts')
    <script type="text/javascript" src="{{URL::asset('backend/widgets/datatable/datatable.js')}}"></script>

    <script>
        $(document).ready(function () {
            $('#admindataTables').DataTable({

                responsive: true

            });
        })

    </script>
@stop