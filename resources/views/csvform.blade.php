@extends("layouts.app")
@section("content")
<html>
    <head>
        <title>
            Registration
        </title>
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap-datepicker.css')}}"/>
        <link type="text/css" rel="stylesheet" href="{{url('css/csv.css')}}" />
        <script type="text/javascript" src="{{url('js/jQuery-1.10.2.js')}}"></script>
        <script type="text/javascript" src="{{url('js/bootstrap-datepicker.js')}}"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xs-12 col-md-offset-1">
                    <div class="pull-left" style="margin-top: 20px">
                        <a href="{{url("csvview")}}"><button class="btn btn-primary">View users</button></a>
                    </div>
                    <!-- input form -->
                    <form action="{{url('csv')}}" method="post">
                        <div class="pane panel-table">
                            <div class="panel-body">
                                <table class="table-responsive border">
                                    <th colspan="2"><h4><b>Registration</b></h4></th>
                                    <tr>
                                        <td>
                                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                                            <input type="text" name="name" placeholder="Name" required=true class="form-control"/> 
                                             <span class="validation">{{$errors->first("name")}}</span>
                                        </td>
                                        <td>
                                            <input type="text" name="address" placeholder="Address" required=true class="form-control"/>
                                            <span class="validation">{{$errors->first("address")}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" name="phoneno" placeholder="Phone" required=true class="form-control"/> 
                                            <span class="validation">{{$errors->first("phoneno")}}</span>
                                        </td>
                                        <td>
                                            <input type="text" name="email" placeholder="Email" required=true class="form-control"/> 
                                            <span class="validation">{{$errors->first("email")}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="educationlevel" class="form-control" type="text"> 
                                                <option value="" class="disabled-option   selected" hidden selected required=true >
                                                <span>Select Education</span>
                                                </option>
                                                <option value="it">It</option>
                                                <option value="engineering">Engineering</option>
                                                <option value="management">Management</option>
                                            </select> 
                                             <span class="validation">{{$errors->first("educationlevel")}}</span>
                                        </td>
                                        <td>
                                            <select name="nationality" class="form-control">  
                                                <option value="" class="disabled-option   selected" hidden selected required=true >
                                                <span>Select country</span>
                                                </option>
                                                <option value="nepali" class="form-control"> Nepali</option>
                                                <option value="indian" class="form-control"> Indian</option>
                                                <option value="srilankan" class="form-control"> Srilankan</option>
                                            </select> 
                                             <span class="validation">{{$errors->first("nationality")}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input name="dobb" class="form-control datepicker" type="text" placeholder="Date of birth" required=true/> 
                                             <span class="validation">{{$errors->first("dobb")}}</span>
                                        </td>
                                        <td>
                                            <select name="contactmode" class="form-control"> 
                                                <option value="" class="disabled-option   selected" hidden selected required=true >
                                                <span>Select mode of contact</span>
                                                </option>
                                                <option value="email" class="form-control"> Email</option>
                                                <option value="phone" class="form-control"> Phone</option>
                                                <option value="none" class="form-control"> None</option>
                                            </select>
                                            <span class="validation">{{$errors->first("contactmode")}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select name="genderr" class="form-control"> 
                                                <option value="" class="disabled-option   selected" hidden selected required=true >
                                                <span>Select Gender</span>
                                                </option>
                                                <option value="male" class="form-control"> Male</option>
                                                <option value="female" class="form-control"> Female</option>
                                            </select>
                                             <span class="validation">{{$errors->first("genderr")}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                        </td>

                                    </tr>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 hidden-xs"></div>
            </div>
        </div>
    </body>
</html>

<script type="text/javascript">
$(document).ready(function () {
    $(".datepicker").datepicker({
        format: 'yy-mm-dd',
    }).on('changeDate', function (e) {
        $(this).datepicker('hide');

    });
});
</script>
@endsection
