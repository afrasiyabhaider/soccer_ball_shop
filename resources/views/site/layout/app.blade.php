<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <title>
        @yield('title')
    </title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!--<link rel="icon" href="favicon.ico" type="image/x-icon" />-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700,800" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('site/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('site/fontawesome/css/all.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('site/assets/css/style.css')}}" />
</head>


<body class="home">

<div class="wrapper">

<header class="header">
<div class="header-menus">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="logo">
				<a href="index.html" title="" rel="home">
					<img src="assets/images/logo.png" class="img-fluid" alt="Logo" />
				</a>
				</div>
			</div>
			<div class="col-md-7">
				<div class="fst">
					<ul>
						<li class="login"><a href="login.html">LOGIN</a></li>
						<li class="cont"><a href="javascript:;"><i class="fa fa-envelope-square"></i><span class="sp1">Contact Us</span><br />support@soccerballshop.com</a></li>
					</ul>
				</div>
				<div class="secnd">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="club.html">Club</a></li>
						<li><a href="highschool.html">Highschool</a></li>
						<li><a href="team.html">Team</a></li>
						<li><a href="parent.html">Players</a></li>
						<li><a href="comingsoon.html">Accessories</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</header><!-- HEADER END HERE -->


<div class="banner">
	<div class="banner-in">
		<div class="container">
			<div class="row">
				<div class="col-md-4 text-right">
					<h1>EVERYTHING<br />YOU NEED IN<br />ONE PLACE</h1>
					<div class="btnwrap">
						<a href="contact.html" class="btncust">SHOP NOW</a>
						<span class="bodr"></span>
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <ul class="socials">
        <li><a href="https://www.facebook.com/Soccer-Ball-Shop-194046101490497/" target="_blank"><img src="assets/images/facebook.png" alt="" /></a></li>
        <li><a href="https://www.instagram.com/soccerballshop/" target="_blank"><img src="assets/images/instagram.png" alt="" /></a></li>
        <!--<li><li><a href="javascript:;" target="_blank"><img src="assets/images/pinterest.png" alt="" /></a></li>
        <li><a href="javascript:;" target="_blank"><img src="assets/images/twitter.png" alt="" /></a></li>-->
    </ul>

    <div class="football">
        <img src="assets/images/ball.png" alt="" />
    </div>

</div>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<h5>Contact info</h5>
				<p>
					Address: 3171 West Post Road,<br /> Las Vegas, NV 89118
				</p>
				<p>
					Email: support@soccerballshop.com
				</p>
				<ul class="socials-icos">
					<li><a href="https://www.facebook.com/Soccer-Ball-Shop-194046101490497/" target="blank"><i class="fa fa-facebook-f"></i></a></li>
					<li><a href="https://www.instagram.com/soccerballshop/" target="blank"><i class="fa fa-instagram"></i></a></li>
					<!--<li><a href="javascript:;" target="blank"><i class="fa fa-twitter"></i></a></li>
					<li><a href="javascript:;" target="blank"><i class="fa fa-google"></i></a></li>
					<li><a href="javascript:;" target="blank"><i class="fa fa-vimeo"></i></a></li>
					<li><a href="javascript:;" target="blank"><i class="fa fa-rss"></i></a></li>-->
				</ul>
			</div>
			<div class="col-md-5 offset-md-1 links">
				<h5>Our Stores</h5>
				<ul>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="register.html">Register</a></li>
					<li><a href="login.html">Account</a></li>
					<li><a href="privacypolicy.html">Privacy Policy</a></li>
					<li><a href="termsandconditions.html">Terms and Conditions</a></li>
					<li><a href="shippingpolicy.html">Shipping Policy</a></li>
					<li><a href="returnpolicy.html">Return Policy</a></li>
					<li><a href="referralprogram.html">Referral Program</a></li>
				</ul>
			</div>
			<div class="col-md-3">
				<h5>Contact us</h5>
				<form>
					<input type="email" required="" placeholder="YOUR E-MAIL...">
					<textarea rows="3" placeholder="YOUR TEXT..."></textarea>
					<button type="submit">Send MESSAGE</button>
				</form>
			</div>
		</div>
	</div>
</footer>

</div>

{{-- <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script> --}}
<script src="{{asset('site/customes/jquery.min.js')}}"></script>
<script src="{{asset('site/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('site/fontawesome/js/all.min.js')}}"></script>
<script src="{{asset('site/assets/js/functions.js')}}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5dba0baf154bf74666b6c41a/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>

