@extends('layouts.app')
@section('content')
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="{{url('css/csv.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{url('css/bootstrap.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" />
        <script type="text/javascript" src="{{url('js/jQuery-1.10.2.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="pull-left" style="margin-top: 20px">
                        <a href="{{url('csv')}}"><button class="btn btn-primary">Create users</button></a>
                        <?php
                        $fd = "./introcept.csv";
                        if (file_exists($fd)) {
                            ?>
                            <a href="./introcept.csv"><button class="btn btn-primary">Download</button></a>
                        <?php } ?>
                    </div>
                    <div class="pane panel-table">
                        <div class="panel-body">
                            <table class="table table-striped  table-condensed border">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Education</th>
                                    <th>Date of Birth</th>
                                    <th>Nationality</th>

                                    <th>Mode of Contact</th>
                                    <th>Gender</th>
                                </tr> 
                                <tbody>
                                    @if(count($datas)>0) {{-- If there is data then display it --}}
                                    @foreach ($datas as $info)
                                    <tr>
                                        <td>{{ $info->name}}</td>
                                        <td>{{ $info->email}}</td>
                                        <td>{{ $info->address}}</td>
                                        <td>{{ $info->phone}}</td>
                                        <td>{{ $info->education}}</td>
                                        <td>{{ $info->dob}}</td>
                                        <td>{{ $info->nationality}}</td>
                                        <td>{{ $info->contact}}</td>
                                        <td>{{ $info->gender}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            @else
                            <tr>
                                <td colspan="4">
                                    No data available.Please create data to view and download
                                </td>
                            </tr>
                            @endif
                            <div class="pagination pull-right">{!! str_replace('/?', '?', $datas->render()) !!}</div>      
                            <ul></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection