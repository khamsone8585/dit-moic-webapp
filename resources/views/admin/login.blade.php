<!DOCTYPE html>
<html lang="en">

<head>
   <title>DIT-MOIC | admin | @yield('title') </title>
   <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
   <!-- Favicon icon -->
   <link href="{{asset('frontend/assets/img/dit.ico')}}" rel="icon">
   <link href="{{asset('frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon')}}">

   <!-- Google font-->
   {{-- <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet"> --}}

    <!-- Font laos -->
    <link rel="stylesheet" href="{{asset('backend/assets/css/laos/font-laos.css')}}">

   <!-- themify -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/themify-icons/themify-icons.css')}}">

   <!-- iconfont -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/icofont/css/icofont.css')}}">

   <!-- simple line icon -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/icon/simple-line-icons/css/simple-line-icons.css')}}">

   <!-- Required Fremwork -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

   <!-- Chartlist chart css -->
   <link rel="stylesheet" href="{{asset('backend/assets/plugins/chartist/dist/chartist.css')}}" type="text/css" media="all">

   <!-- Weather css -->
   <link href="{{asset('backend/assets/css/svg-weather.css')}}" rel="stylesheet">


   <!-- Style.css -->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/main.css')}}">

   <!-- Responsive.css-->
   <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/responsive.css')}}">

</head>

<body class="sidebar-mini fixed">


<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					<form class="md-float-material">
						<div class="text-center">
							<img src="{{asset('frontend/assets/img/apple-touch-icon.jpg')}}" alt="logo" class="img-fluid able-logo">
						</div>
						<h2 class="text-center text-info">
							ຍີນດີຕ້ອນຮັບ ໜ້າເຂົ້າສູ່ລະບົບ
						</h2>
						<div class="row">
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="email" class="md-form-control" required="required"/>
									<label>ອີເມລ</label>
								</div>
							</div>
							<div class="col-md-12">
								<div class="md-input-wrapper">
									<input type="password" class="md-form-control" required="required"/>
									<label>ລະຫັດຜ່ານ</label>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
							<div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
								<label class="input-checkbox checkbox-primary">
									<input type="checkbox" id="checkbox">
									<span class="checkbox"></span>
								</label>
								<div class="captions">ຈື່ຂ້ອຍໄວ້</div>

							</div>
								</div>
							<div class="col-sm-6 col-xs-12 forgot-phone text-right">
								<a href="forgot-password.html" class="text-right f-w-600"> ລືມລະຫັດຜ່ານ?</a>
								</div>
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="button" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">ເຂົ້າສູ່ລະບົບ</button>
							</div>
						</div>
						<!-- <div class="card-footer"> -->
						<div class="col-sm-12 col-xs-12 text-center">
							<span class="text-muted">ຍັງບໍ່ມີບັນຊີເທື່ອ ?</span>
							<a href="register2.html" class="f-w-600 p-l-5">ລົງທະບຽນດຽວນີ້</a>
						</div>

						<!-- </div> -->
					</form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>
   <!-- Required Jqurey -->
   <script src="{{asset('backend/assets/plugins/Jquery/dist/jquery.min.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/tether/dist/js/tether.min.js')}}"></script>

   <!-- Required Fremwork -->
   <script src="{{asset('backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

   <!-- Scrollbar JS-->
   <script src="{{asset('backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js')}}"></script>

   <!--classic JS-->
   <script src="{{asset('backend/assets/plugins/classie/classie.js')}}"></script>

   <!-- notification -->
   <script src="{{asset('backend/assets/plugins/notification/js/bootstrap-growl.min.js')}}"></script>

   <!-- Sparkline charts -->
   <script src="{{asset('backend/assets/plugins/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>

   <!-- Counter js  -->
   <script src="{{asset('backend/assets/plugins/waypoints/jquery.waypoints.min.js')}}"></script>
   <script src="{{asset('backend/assets/plugins/countdown/js/jquery.counterup.js')}}"></script>

   <!-- Echart js -->
   <script src="{{asset('backend/assets/plugins/charts/echarts/js/echarts-all.js')}}"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="{{asset('backend/assets/js/main.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('backend/assets/pages/dashboard.js')}}"></script>
   <script type="text/javascript" src="{{asset('backend/assets/pages/elements.js')}}"></script>
   <script src="{{asset('backend/assets/js/menu.min.js')}}"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>

</html>

