<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL('assets/css/styles.css')}}">
    <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="{{URL('assets/engine1/style.css')}}" />
<script type="text/javascript" src="{{URL('assets/engine1/jquery.js')}}"></script>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<!-- End WOWSlider.com HEAD section -->
<style media="screen">
/* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
section {
  padding: 60px 0;
}

section .section-title {
  text-align: center;
  color: #007b5e;
  margin-bottom: 50px;
  text-transform: uppercase;
}
#footer {
  background: #003580 !important;
  font-size: 12px;
}
#footer h5{
padding-left: 10px;
  border-left: 3px solid #eeeeee;
  padding-bottom: 6px;
  margin-bottom: 20px;
  color:#ffffff;
}
#footer a {
  color: #ffffff;
  text-decoration: none !important;
  background-color: transparent;
  -webkit-text-decoration-skip: objects;
}
#footer ul.social li{
padding: 3px 0;
}
#footer ul.social li a i {
  margin-right: 5px;
font-size:25px;
-webkit-transition: .5s all ease;
-moz-transition: .5s all ease;
transition: .5s all ease;
}
#footer ul.social li:hover a i {
font-size:30px;
margin-top:-10px;
}
#footer ul.social li a,
#footer ul.quick-links li a{
color:#ffffff;
}
#footer ul.social li a:hover{
color:#eeeeee;
}
#footer ul.quick-links li{
padding: 3px 0;
-webkit-transition: .5s all ease;
-moz-transition: .5s all ease;
transition: .5s all ease;
}
#footer ul.quick-links li:hover{
padding: 3px 0;
margin-left:5px;
font-weight:700;
}
#footer ul.quick-links li a i{
margin-right: 5px;
}
#footer ul.quick-links li:hover a i {
  font-weight: 700;
}

@media (max-width:767px){
#footer h5 {
  padding-left: 0;
  border-left: transparent;
  padding-bottom: 0px;
  margin-bottom: 10px;
}
}

</style>
    @yield('style')
  </head>
  <body>
    @include('includes.header')
    @yield('content')



    @include('includes.footer')
    <script src="{{URL('assets/js/jquery-3.3.1.js')}}"></script>
    <script src="{{URL('assets/js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
  AOS.init();
</script>
  </body>

  @yield('scripts')
</html>
