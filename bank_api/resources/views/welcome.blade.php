<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <base href="/">
	<link href="assets/admin/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/admin/css/datepicker3.css" rel="stylesheet">
	<link href="assets/admin/css/styles.css" rel="stylesheet">

	<!--[if lt IE 9]>
<script src="assets/admin/js/html5shiv.js"></script>
<script src="assets/admin/js/respond.min.js"></script>
<![endif]-->

</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
                <div class="panel-heading">THANH TOÁN</div>

                @if (session("thongbao"))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ session("thongbao") }}</strong>
                </div>
                @endif

                @if ($errors->any())
                @component('admin.layouts.components.alert')
                @slot('type', 'danger')
                @slot('stroke', 'cancel')
                {{ $errors->first() }}
                @endcomponent
                @endif

				<div class="panel-body">
					<form method="POST" action="/payment">
						@csrf
						<fieldset>
							<div class="form-group">
							<input class="form-control" placeholder="Số tài khoản" name="acc_num" type="text" autofocus="" >
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Mật khẩu" name="password" type="password" >
                            </div>
                            <div class="form-group">
								<input class="form-control" placeholder="Số tiền" name="amount" type="text" >
							</div>
							<button type="submit" class="btn btn-primary">Thanh toán</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->



	<script src="assets/admin/js/jquery-1.11.1.min.js"></script>
	<script src="assets/admin/js/bootstrap.min.js"></script>
	<script src="assets/admin/js/chart.min.js"></script>
	<script src="assets/admin/js/chart-data.js"></script>
	<script src="assets/admin/js/easypiechart.js"></script>
	<script src="assets/admin/js/easypiechart-data.js"></script>
	<script src="assets/admin/js/bootstrap-datepicker.js"></script>
	<script>
		! function ($) {
			$(document).on("click", "ul.nav li.parent > a > span.icon", function () {
				$(this).find('em:first').toggleClass("glyphicon-minus");
			});
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
			if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
			if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>

</html>
