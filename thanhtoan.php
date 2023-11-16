<!DOCTYPE html>
<html lang="en">

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
	<link href="css/checkout.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>

	<div id="page">
		<main class="bg_gray">

			<div class="container margin_30">
				<div class="page_header">
					<h1>Hóa đơn thanh toán</h1>
				</div>
				<!-- /page_header -->
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="step first">
							<h3>1. Thông tin người dùng và địa chỉ thanh toán</h3>
							<div class="tab-content checkout">
								<!-- Phần đăng ký -->
								<div class="tab-pane fade show active" id="tab_1" role="tabpanel"
									aria-labelledby="tab_1">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Tên*">
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="email" id="email_2"
											placeholder="Email*">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Địa chỉ đầy đủ*">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Điện thoại *">
									</div>
									<div class="form-group">
										<button class="btn_1" type="reset">Sửa lại</button>
									</div>
									<!-- Phần địa chỉ thanh toán khác -->
									<!-- /other_addr_c -->
									<hr>
								</div>
							</div>
						</div>
						<!-- /step -->
					</div>

					<div class="col-lg-4 col-md-6">
						<!-- Bước 2: Thanh toán và vận chuyển -->
						<div class="step middle payments">
							<h3>2. Thanh toán và Vận chuyển</h3>
							<!-- Phương thức thanh toán -->
							<ul>
								<li>
									<label class="container_radio">Thẻ tín dụng<a href="#0" class="info"
											data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="payment" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Paypal<a href="#0" class="info"
											data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="payment">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Thanh toán khi nhận hàng<a href="#0" class="info"
											data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="payment">
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Chuyển khoản ngân hàng<a href="#0" class="info"
											data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="payment">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
							<!-- Thông tin thanh toán -->

							<h6 class="pb-2">Phương thức vận chuyển</h6>

							<!-- Phương thức vận chuyển -->
							<ul>
								<li>
									<label class="container_radio">Vận chuyển tiêu chuẩn<a href="#0" class="info"
											data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="shipping" checked>
										<span class="checkmark"></span>
									</label>
								</li>
								<li>
									<label class="container_radio">Vận chuyển nhanh<a href="#0" class="info"
											data-bs-toggle="modal" data-bs-target="#payments_method"></a>
										<input type="radio" name="shipping">
										<span class="checkmark"></span>
									</label>
								</li>
							</ul>
						</div>
						<!-- /step -->
					</div>

					<div class="col-lg-4 col-md-6">
						<!-- Bước 3: Tóm tắt đơn hàng -->
						<div class="step last">
							<h3>3. Tóm tắt đơn hàng</h3>
							<div class="box_general summary">
								<ul>
									<li class="clearfix"><em>1x Armor Air X Fear</em> <span>$145.00</span></li>
									<li class="clearfix"><em>2x Armor Air Zoom Alpha</em> <span>$115.00</span></li>
								</ul>
								<ul>
									<li class="clearfix"><em><strong>Tổng cộng</strong></em> <span>$450.00</span></li>
									<li class="clearfix"><em><strong>Vận chuyển</strong></em> <span>$0</span></li>
								</ul>
								<div class="total clearfix">TỔNG CỘNG <span>$450.00</span></div>
								<a href="confirm.html" class="btn_1 full-width">Xác nhận và Thanh toán</a>
							</div>
							<!-- /box_general -->
						</div>
						<!-- /step -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</main>
		<!--/main-->
	</div>

	<!-- page -->

	<!-- COMMON SCRIPTS -->
	<script src="js/common_scripts.min.js"></script>
	<script src="js/main.js"></script>

	<script>
		// Other address Panel
		$('#other_addr input').on("change", function () {
			if (this.checked)
				$('#other_addr_c').fadeIn('fast');
			else
				$('#other_addr_c').fadeOut('fast');
		});
	</script>

</body>

</html>