@extends('layouts.master')

@section('content')


<div class="col-md-12 cover">

	<div class="row">

		<div class="col-md-6">

			<div class="row">

				<img src="{{URL('assets/images/home6.jpeg')}}" alt="" class="homeimage">

			</div>
		</div>

		<div class="col-md-6">
			<div class="row">
				<!-- Start WOWSlider.com BODY section -->
				<div id="wowslider-container1">
					<div class="ws_images"><ul>
						<li><a href="http://wowslider.net"><img src="{{URL('assets/data1/images/5.jpg')}}" alt="javascript slider" title="fixedw_large_4x" id="wows1_0"/></a></li>
						<li><img src="{{URL('assets/data1/images/6.jpg')}}" alt="Hiking-trails-around-Ella-Sri-Lanka-Idalgashima-3" title="Hiking-trails-around-Ella-Sri-Lanka-Idalgashima-3" id="wows1_1"/></li>
						<li><a href="http://wowslider.net"><img src="{{URL('assets/data1/images/3.jpg')}}" alt="javascript slider" title="fixedw_large_4x" id="wows1_0"/></a></li>
						<li><img src="{{URL('assets/data1/images/2.jpg')}}" alt="Hiking-trails-around-Ella-Sri-Lanka-Idalgashima-3" title="Hiking-trails-around-Ella-Sri-Lanka-Idalgashima-3" id="wows1_1"/></li>
						<li><a href="http://wowslider.net"><img src="{{URL('assets/data1/images/4.jpg')}}" alt="javascript slider" title="fixedw_large_4x" id="wows1_0"/></a></li>
						<li><a href="http://wowslider.net"><img src="{{URL('assets/data1/images/7.jpg')}}" alt="javascript slider" title="fixedw_large_4x" id="wows1_0"/></a></li>

					</ul></div>
					<div class="ws_bullets"><div>
						<a href="#" title="fixedw_large_4x"><span><img src="{{URL('assets/data1/tooltips/fixedw_large_4x.jpg')}}" alt="fixedw_large_4x"/>1</span></a>
						<a href="#" title="Hiking-trails-around-Ella-Sri-Lanka-Idalgashima-3"><span><img src="{{URL('assets/data1/tooltips/hikingtrailsaroundellasrilankaidalgashima3.jpg')}}" alt="Hiking-trails-around-Ella-Sri-Lanka-Idalgashima-3"/>2</span></a>
					</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">slider jquery</a> by WOWSlider.com v8.8</div>
					<div class="ws_shadow"></div>
				</div>
				<script type="text/javascript" src="{{URL('assets/engine1/wowslider.js')}}"></script>
				<script type="text/javascript" src="{{URL('assets/engine1/script.js')}}"></script>
				<!-- End WOWSlider.com BODY section -->


			</div>
			<div class="col-md-12 banner2">
				<div class="row">



					<img src="{{url('assets/images/home4.jpeg')}}" alt="" class="banner1">

				</div>
			</div>
		</div>

	</div>
</div>





  <div class="col-md-12 partners_title"><h2 data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">Our  Partners</h2></div>
   <section class="customer-logos slider">
      <div class="slide"><img src="{{URL('assets/images/logoslider/logo1.png')}}"></div>
      <div class="slide"><img src="{{URL('assets/images/logoslider/logo2.png')}}"></div>
      <div class="slide"><img src="{{URL('assets/images/logoslider/logo3.png')}}"></div>
      <div class="slide"><img src="{{URL('assets/images/logoslider/logo4.png')}}"></div>
      <div class="slide"><img src="{{URL('assets/images/logoslider/logo5.jpg')}}"></div>
      <div class="slide"><img src="{{URL('assets/images/logoslider/logo6.png')}}"></div>
      <div class="slide"><img src="{{URL('assets/images/logoslider/logo7.png')}}"></div>
      <div class="slide"><img src="{{URL('assets/images/logoslider/logo8.png')}}"></div>
      <div class="slide"><img src="{{URL('assets/images/logoslider/logo9.png')}}"></div>
			<div class="slide"><img src="{{URL('assets/images/logoslider/logo10.png')}}"></div>

   </section>





@endsection

@section('scripts')
<script type="text/javascript" src="{{URL('assets/engine1/wowslider.js')}}"></script>
<script type="text/javascript" src="{{URL('assets/engine1/script.js')}}"></script>
<script type="text/javascript">
$(document).ready(function(){
		$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1500,
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
						breakpoint: 768,
						settings: {
								slidesToShow: 4
						}
				}, {
						breakpoint: 520,
						settings: {
								slidesToShow: 3
						}
				}]
		});
});
</script>

@endsection
