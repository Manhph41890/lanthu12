<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Ansonika">
	<title>Majestic | Nội thất cao cấp </title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/brands/z4871992908279_16a19fc978221fc75541dc94d278ae60-removebg-preview (1).png"
		type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="css/account.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">
	<!-- COMMON SCRIPTS -->
	<script src="js/common_scripts.min.js"></script>
	<script src="js/main.js"></script>

	<script>
		// Client type Panel
		$('input[name="client_type"]').on("click", function () {
			var inputValue = $(this).attr("value");
			var targetBox = $("." + inputValue);
			$(".box").not(targetBox).hide();
			$(targetBox).show();
		});
	</script>

</head>

<body>

		<main class="bg_gray">

			<div class="container margin_30">
				<div class="page_header">
					<h1>Đăng nhập hoặc tạo một tài khoản</h1>
				</div>
				<!-- /page_header -->
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-6 col-md-8">
						<div class="box_account">
							<h3 class="client">Đã là khách hàng</h3>
							<div class="form_container">
								<div class="row no-gutters">
									<div class="col-lg-6 pr-lg-1">
										<a href="#0" class="social_bt facebook">Đăng nhập với Facebook</a>
									</div>
									<div class="col-lg-6 pl-lg-1">
										<a href="#0" class="social_bt google">Đăng nhập với Google</a>
									</div>
								</div>
								<div class="divider"><span>Hoặc</span></div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" id="email"
										placeholder="Email*">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password_in" id="password_in"
										value="" placeholder="Password*">
								</div>
								<div class="clearfix add_bottom_15">
									<div class="checkboxes float-start">
										<label class="container_check">Ghi nhớ
											<input type="checkbox">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="float-end"><a id="forgot" href="javascript:void(0);">Quên Mật Khẩu?</a>
									</div>
								</div>
								<div class="text-center"><input type="submit" value="Đăng Nhập"
										class="btn_1 full-width">
								</div>
								<div id="forgot_pw">
									<div class="form-group">
										<input type="email" class="form-control" name="email_forgot" id="email_forgot"
											placeholder="Nhập email của bạn">
									</div>
									<p>Một mật khẩu mới sẽ được gửi trong thời gian ngắn.</p>
									<div class="text-center"><input type="submit" value="Đặt lại Mật Khẩu"
											class="btn_1">
									</div>
								</div>
							</div>
							<!-- /form_container -->
						</div>
						<!-- /box_account -->
						<div class="row">
							<div class="col-md-6 d-none d-lg-block">
								<ul class="list_ok">
									<li>Tìm địa điểm</li>
									<li>Kiểm tra vị trí chất lượng</li>
									<li>Bảo vệ dữ liệu</li>
								</ul>
							</div>
							<div class="col-md-6 d-none d-lg-block">
								<ul class="list_ok">
									<li>Thanh toán an toàn</li>
									<li>Hỗ trợ 24H</li>
								</ul>
							</div>
						</div>
						<!-- /row -->
					</div>
					<div class="col-xl-6 col-lg-6 col-md-8">
						<div class="box_account">
							<h3 class="new_client">Khách hàng mới</h3> <small class="float-right pt-2">*Phần bắt
								buộc</small>
							<div class="form_container">
								<div class="form-group">
									<input type="text" class="form-control" name="hoten" id="hoten"
										placeholder="Tài khoản*">

								</div>
								<div class="form-group">
									<input type="password" class="form-control" name="password_in_2" id="password_in_2"
										value="" placeholder="Password*">
								</div>
								<hr>
								<div class="form-group">
									<label class="container_radio" style="display: inline-block; margin-right: 15px;">Cá
										Nhân
										<input type="radio" name="client_type" checked value="private">
										<span class="checkmark"></span>

									</label>
									<label class="container_radio" style="display: inline-block;">Quản trị


										<input type="radio" name="client_type" value="company">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="private box">
									<div class="row no-gutters">
										<div class="col-6 pl-1">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Tên*">
											</div>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" name="email" id="email_2"
												placeholder="Email*">
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Địa chỉ đầy đủ*">
											</div>
										</div>
									</div>
									<div class="row no-gutters">
										<div class="col-6 pl-1">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Điện thoại *">
											</div>
										</div>
									</div>
								</div>
								<!-- /private -->
								<div class="company box" style="display: none;">
									<div class="row no-gutters">

										<div class="col-12">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Tên Công Ty*">
											</div>
										</div>
										<div class="form-group">
											<input type="email" class="form-control" name="email" id="email_2"
												placeholder="Email*">

										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Địa chỉ đầy đủ">
											</div>
										</div>
									</div>
									<div class="col-6 pl-1">
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Điện thoại *">
										</div>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /company -->
							<hr>
							<div class="form-group">
								<label class="container_check">Chấp nhận <a href="#0">Điều khoản và điều
										kiện</a>
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
							<div class="text-center"><input type="submit" value="Đăng Ký" class="btn_1 full-width">
							</div>
						</div>
						<!-- /form_container -->
					</div>
					<!-- /box_account -->
				</div>
			</div>
			<!-- /row -->
	</div>
	<!-- /container -->
	</main>
	<!--/main-->


</body>

</html>