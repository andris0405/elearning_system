<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Elearning System">
	<meta property="og:title" content="Elearning System">
	<meta property="og:description" content="Elearning System">
	{{-- <meta property="og:image" content="https:/fillow.dexignlab.com/xhtml/social-image.png"> --}}
	<meta name="format-detection" content="telephone=no">

	<!-- PAGE TITLE HERE -->
	<title>Elearning System</title>

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{asset('assets/images/favicon.png')}}">
	<link href="{{asset('assets/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
	<link href="{{asset('assets/vendor/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/vendor/nouislider/nouislider.min.css')}}">

	<!-- Style css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>
<body>

    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>

    <div id="main-wrapper">
        @include('layouts.general_topbar')
        @include('layouts.general_sidebar')

        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-12">
						<div class="row">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('layouts.general_footer')
    </div>

    <script src="{{asset('assets/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

	<!-- Apex Chart -->
	<script src="{{asset('assets/vendor/apexchart/apexchart.js')}}"></script>

	<script src="{{asset('assets/vendor/chart.js/Chart.bundle.min.js')}}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{asset('assets/vendor/peity/jquery.peity.min.js')}}"></script>
	<!-- Dashboard 1 -->
	<script src="{{asset('assets/js/dashboard/dashboard-1.js')}}"></script>

	<script src="{{asset('assets/vendor/owl-carousel/owl.carousel.js')}}"></script>

    <script src="{{asset('assets/js/custom.min.js')}}"></script>
	<script src="{{asset('assets/js/dlabnav-init.js')}}"></script>
	<script src="{{asset('assets/js/demo.js')}}"></script>
	<script>
		function cardsCenter()
		{

			/*  testimonial one function by = owl.carousel.js */



			jQuery('.card-slider').owlCarousel({
				loop:true,
				margin:0,
				nav:true,
				//center:true,
				slideSpeed: 3000,
				paginationSpeed: 3000,
				dots: true,
				navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
				responsive:{
					0:{
						items:1
					},
					576:{
						items:1
					},
					800:{
						items:1
					},
					991:{
						items:1
					},
					1200:{
						items:1
					},
					1600:{
						items:1
					}
				}
			})
		}

		jQuery(window).on('load',function(){
			setTimeout(function(){
				cardsCenter();
			}, 1000);
		});

	</script>

</body>
</html>
