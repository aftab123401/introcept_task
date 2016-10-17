<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{url('css/csv.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}"/>
    </head>
    <script type="text/javascript" src="{{url("js/jQuery-1.10.2.js")}}"></script>
    <body>
        @section('sidebar')
        <div class="headerr">

            <div class="col-lg-12">
                <div class="col-lg-2">
                    <a href="{{url('/')}}" ><img src="{{url('css/intro.png')}}" /> </a>
                </div>
                <div class="col-lg-3 col-md-offset-2">
                    <h3 ><center>Introcept's Task</center></h3>
                </div>
            </div>
        </div>
        <br/><br/>
        @show
        @yield('content')
        <div class="footerfix">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="col-lg-3 col-md-offset-4"><p><center>Copy right@ Introcept's Task</center></p></div>
                    <div class="col-lg-2 pull-right ar" style="margin-top: 10px">
                        <a href="{{url('https://www.facebook.com/IntroCept/?fref=ts')}}" target="_blank" class="fb">
                            <img src="css/fb.png" height="30" width="30" alt="facebook" id="fb"/>
                            <div class="b">
                                Follow us on Facebook
                            </div>
                        </a> 
                        <a href="{{url('https://twitter.com/theintercept')}}" class="twt">
                            <img src="css/t.png" height="30" width="30" alt="twitter" id="twt"/>
                            <div class="t">
                                Follow us on Twitter
                            </div>
                        </a> 
                        <a href="" class="ins">
                            <img src="css/ins.png" height="30" width="30" alt="instagram" id="ins"/>
                            <div class="i">
                                Follow us on Instagram
                            </div>
                        </a> 
                    </div>
                </div>
            </div>
    </div>
</body>
</html>
