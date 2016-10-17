@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Introcept</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="{{url('css/bootstrap.css')}}" />
        <link type="text/css" rel="stylesheet" href="{{url('css/csv.css')}}" />
        <!-- Styles -->

    </head>
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{url('js/jQuery-1.10.2.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
    <body>

        
            <div class="container">
                <div class="row">
                    <br/><br/><br/>
                    <div class="col-lg-12">
                        <a href="{{url('csv')}}" class="mainlink">
                            <div id="mainlink">
                                <img src="aus.png"/>
                                <p><center>Register Users</center></p>
                            </div>
                        </a>

                        <a href="{{url('csvview')}}" class="mainlink">
                            <div id="mainlink">
                                <img src="i.png"/>
                                <p><center>View Users</center></p>
                            </div>
                        </a>
                    </div>
                    
                </div>
                <br/><br/><br/>
            </div>

        
    </body>
</html>
@endsection
