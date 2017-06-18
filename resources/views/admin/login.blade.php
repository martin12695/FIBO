<!DOCTYPE html>
<html>
<head>
<title>Login - Admin Site</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript">
	addEventListener("load", function() {
		setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){
		window.scrollTo(0,1);
	}
</script>

<link href="/css/cssAdmin/style.css" rel='stylesheet' type='text/css' />

<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<link href="/css/lib/jquery-ui.css" rel="stylesheet">
	<script src="/js/jquery-3.2.0.min.js"></script>
	<script src="/js/lib/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js"></script>
</head>
<body>
<!--start-main-->
<h1>To enter admin site, let's please login...!</h1>
<div class="login-box">
    <form method="post" action="{{ url('/admin/login') }}">
		{{ csrf_field() }}
		<input name="email" id="email" type="text" class="text" placeholder="Email" value="" >
		<input name="password" id="password" type="password" placeholder="Password" value="">
		<div class="remember">
			<h4>Welcome admin site.</h4>
		</div>

		<div class="clear"> </div>
		<div class="btn">
			<input id="btn-submit" type="submit" value="Đăng Nhập" >
		</div>
		<div class="clear"> </div>
    </form>
</div>
</body>
</html>

