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
    <link rel="stylesheet" href="{{asset('assets/css/custome.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body onload="initClock()">
    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>
    <div id="main-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #00a65a">
            <div class="container">
                <a class="navbar-brand me-5 text-white" href="#">
                    <i class="fa fa-graduation-cap" style="font-size: 16pt; color: rgb(2, 231, 155)"></i>
                    <span style="font-size: 14pt"> Siakad</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 nav-home" style="font-size: 10pt;">
                        <li class="nav-item me-3">
                            <a class="nav-link text-white link-success" aria-current="page" href="#">
                                <i class="fa fa-home me-1"></i> Home
                            </a>
                        </li>
                        <li class="nav-item me-3">
                            <a class="nav-link text-white" href="#">
                                <i class="fa fa-globe me-1"></i> Website Akademik
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">
                                <i class="fa fa-link me-1"></i> Portal
                            </a>
                        </li>
                    </ul>
                    <div class="login-home">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="" class="me-3 text-white nav-link" data-bs-toggle="modal" data-bs-target="#login">
                                    <i class="fa fa-sign-in-alt"></i> Login
                                </a>
                                <div class="modal fade" id="login">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-success">
                                                <h3 class="modal-title text-white">
                                                    <i class="fa fa-sign-in-alt"></i> Login Siakad
                                                </h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                </button>
                                            </div>
                                            <form action="">
                                                <div class="modal-body">
                                                    <div class="form-group input-success-o">
                                                        <label>Username</label>
                                                        <input type="text" class="form-control" placeholder="Username">
                                                    </div>
                                                    <div class="form-group input-success-o mt-3">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" placeholder="*******">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            </li>
                            <li class="nav-item">
                                <a href="" class="text-white nav-link">
                                    <i class="fa fa-unlock-alt "></i> Lupa Password ?
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

            <!-- row -->
        <div class="container mt-3">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <div style="font-size: 12pt">
                                        <i class="fa fa-globe"></i> Visi
                                    </div>
                                    <hr>
                                    <div style="text-align: justify">
                                        Menjadi Universitas Islam Terdepan dalam Melahirkan Sumber Daya Manusia Unggul Yang Berilmu, Cendekia, Berakhlakul Karimah Berlandaskan Nilai-nilai Ahlussunnah Wal Jama`ah dalam Pengembangan Iptek Seni Budaya pada tahun 2028
                                    </div>
                                    <div class="mt-4" style="font-size: 12pt">
                                        <i class="fa fa-share-square "></i> Misi
                                    </div>
                                    <hr>
                                    <div>
                                        <ul style="text-align: justify">
                                            <li>
                                                Mengembangkan sumber daya akademik universitas untuk meningkatkan kualitas pembelajaran, penelitian, dan pengabdian masyarakat yang efektif dan efisien.
                                            </li>
                                            <li class="mt-2">
                                                Mengembangkan sistem manajemen yang bermutu, sehat, harmonis, yang berbasis pada nilai-nilai Islam Ahlussunnah Wal Jama`ah.
                                            </li>
                                            <li class="mt-2">
                                                Memperluas jaringan kerjasama secara kontinyu dan selektif untuk mempercepat dan menjaga serta menjamin pencapaian tujuan universitas.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="card">
                                <div class="card-body">
                                    <div style="font-size: 12pt">
                                        <i class="fa fa-info"></i> Informasi Terbaru
                                    </div>
                                    <hr>
                                    <div id="DZ_W_Todo1" class="widget-media dlab-scroll height500">
                                        <ul class="timeline">
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="{{asset('assets/images/online-learning.png')}}">
                                                    </div>
                                                    <div class="media-body" style="text-align: justify">
                                                        <h4 class="mb-1 fw-bold">cara Pendaftaran Sekolah</h4>
                                                        <span>
                                                            Saat ini Unisnu Jepara telah berlangganan layanan SSL untuk mengamankan data transaksi yang dipakai hampir disemua layanan Unisnu (siakad, siama, elearning, web/portal dll), sehingga data/informasi…
                                                        </span>
                                                        <small class="d-block text-light">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="{{asset('assets/images/online-learning.png')}}">
                                                    </div>
                                                    <div class="media-body" style="text-align: justify">
                                                        <h4 class="mb-1 fw-bold">cara Pendaftaran Sekolah</h4>
                                                        <span>
                                                            Saat ini Unisnu Jepara telah berlangganan layanan SSL untuk mengamankan data transaksi yang dipakai hampir disemua layanan Unisnu (siakad, siama, elearning, web/portal dll), sehingga data/informasi…
                                                        </span>
                                                        <small class="d-block text-light">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="{{asset('assets/images/online-learning.png')}}">
                                                    </div>
                                                    <div class="media-body" style="text-align: justify">
                                                        <h4 class="mb-1 fw-bold">cara Pendaftaran Sekolah</h4>
                                                        <span>
                                                            Saat ini Unisnu Jepara telah berlangganan layanan SSL untuk mengamankan data transaksi yang dipakai hampir disemua layanan Unisnu (siakad, siama, elearning, web/portal dll), sehingga data/informasi…
                                                        </span>
                                                        <small class="d-block text-light">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media me-2">
                                                        <img alt="image" width="50" src="{{asset('assets/images/online-learning.png')}}">
                                                    </div>
                                                    <div class="media-body" style="text-align: justify">
                                                        <h4 class="mb-1 fw-bold">cara Pendaftaran Sekolah</h4>
                                                        <span>
                                                            Saat ini Unisnu Jepara telah berlangganan layanan SSL untuk mengamankan data transaksi yang dipakai hampir disemua layanan Unisnu (siakad, siama, elearning, web/portal dll), sehingga data/informasi…
                                                        </span>
                                                        <small class="d-block text-light">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div style="font-size: 12pt">
                                        <i class="fa fa-users"></i> Pengunjung
                                    </div>
                                    <hr>
                                    <div id="DZ_W_TimeLine11" class="widget-timeline dlab-scroll style-1 height500">
                                        <ul class="timeline">
                                            <li class="">
                                                <div class="timeline-badge success"></div>
                                                <div class="timeline-panel text-muted">
                                                    <ul class="list-group list-group-horizontal">
                                                        <li class="col-sm-6">
                                                            <i class="fa fa-clock"></i> Status
                                                        </li>
                                                        <li class="col-sm-6">
                                                            <span style="float: left" class="bg-success text-white rounded-1 text-center pe-1 ps-1">Online</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="timeline-badge info"></div>
                                                <div class="timeline-panel text-muted">
                                                    <ul class="list-group list-group-horizontal">
                                                        <li class="col-sm-6">
                                                            <i class="fa fa-comment"></i> Online
                                                        </li>
                                                        <li class="col-sm-6">
                                                            <span style="float: left" class="bg-info text-white rounded-1 text-center pe-1 ps-1">3 Users ON</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="timeline-badge warning"></div>
                                                <div class="timeline-panel text-muted">
                                                    <ul class="list-group list-group-horizontal">
                                                        <li class="col-sm-6">
                                                            <i class="fab fa-firefox"></i> Browser
                                                        </li>
                                                        <li class="col-sm-6">
                                                            <span style="float: left" class="bg-warning text-white rounded-1 text-center pe-1 ps-1">Chrome</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="">
                                                <div class="timeline-badge primary"></div>
                                                <div class="timeline-panel text-muted">
                                                    <ul class="list-group list-group-horizontal">
                                                        <li class="col-sm-6">
                                                            <i class="fa fa-globe"></i> OS
                                                        </li>
                                                        <li class="col-sm-6">
                                                            <span style="float: left" class="bg-primary text-white  pe-1 ps-1 rounded-1">Windows11</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-4">
                                            <div class="datetime">
                                                <div class="time">
                                                    <span id="hour">00</span>:
                                                    <span id="min">00</span>:
                                                    <span id="sec">00</span>
                                                    <span id="period">AM</span>
                                                </div>
                                                <div class="date">
                                                    <span id="day">Day</span>,
                                                    <span id="num">00</span>
                                                    <span id="month">Month</span>
                                                    <span id="year">Year</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td colspan="2" align="center">Jadwal Sholat Jepara</td>
                                                </tr>
                                                <tr>
                                                    <td>Fajr</td>
                                                    <td>04:27</td>
                                                </tr>
                                                <tr>
                                                    <td>Dhuhr</td>
                                                    <td>11:34</td>
                                                </tr>
                                                <tr>
                                                    <td>Asr</td>
                                                    <td>14:56</td>
                                                </tr>
                                                <tr>
                                                    <td>Magrib</td>
                                                    <td>17:30</td>
                                                </tr>
                                                <tr>
                                                    <td>Isha</td>
                                                    <td>18:37</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="copyright" style="float: left">
                <p>Siakad © 2022 All Rights Reserved. <a href="#" target="_blank">Sistem Akademik</a></p>
            </div>
        </div>

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
    <script src="{{asset('assets/js/digital.js')}}"></script>
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

    <script>
        $(document).ready(function(){
            $(".datetime").show();
        });
    </script>

</body>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</html>
