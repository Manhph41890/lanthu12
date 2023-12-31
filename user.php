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
    <link href="css/custom.css" rel="stylesheet">    <script src="js/common_scripts.min.js"></script>
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
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>


</head>

<body>
        <main class="bg_gray">

            <div class="container margin_30">
                <div class="page_header">
                    <h1>Tài khoản của tôi</h1>
                </div>
                <!-- /page_header -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="step first">
                            <h3>Thông tin người dùng và địa chỉ thanh toán</h3>
                            <div class="tab-content checkout">
                                <!-- Phần đăng ký -->
                                <div class="private box">
                                    <div class="row no-gutters">
                                        <div class="form-group">
                                            <label for="">Họ và tên</label>
                                            <input type="text" class="form-control" placeholder="Tên*">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" name="email" id="email_2"
                                                placeholder="Email*">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Địa chỉ của bạn</label>
                                            <input type="text" class="form-control" placeholder="Địa chỉ đầy đủ*">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Số điện thoại</label>
                                            <input type="text" class="form-control" placeholder="Điện thoại *">
                                        </div>
                                    </div>
                                    <button class="btn_1" type="submit">Lưu thông tin</button>
                                    <div class="form-group">
                                        <br><a href="../admin/index.php"><button class="btn_1">Vào trang quản trị</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /step -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <!-- Bước 2: Thanh toán và vận chuyển -->
                        <div class="step last">
                            <h3>Đơn hàng của bạn</h3>
                            <div class="box_general summary">
                                <table style="border: 1px solid black; border-collapse: collapse;">
                                    <th>
                                    <td>Mã đơn hàng</td>
                                    </th>
                                    <th>
                                    <td>Giá đơn hàng</td>
                                    </th>
                                    <th>
                                    <td>Ngày mua</td>
                                    </th>
                                </table>
                            </div>
                        </div>
                        <!-- /step -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="box_general summary">
                            <table>
                                <thead>
                                    <tr>
                                        <th>
                                            <h5>Quyền riêng tư</h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Quên mật khẩu</td>
                                    </tr>
                                    <tr>
                                        <td>Liên hệ</td>
                                    </tr>
                                    <tr>
                                        <td>Đăng xuất</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /box_general -->
                        </div>
                        <!-- /step -->
                    </div>
                </div>


                <!-- /row -->
            </div>
            <!-- /container -->
        </main>
</body>

</html>