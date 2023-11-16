<?php 
    include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch ($act) {
            case 'gioithieu':
                include "gioithieu.php";
                break;
            case 'lienhe':
                include "lienhe.php";
                break;
            case 'baiviet':
                include "baiviet.php";
                break;
            case 'noithat':
                include "sanpham.php";
                break;
			case 'noithatct':
				include "sanphamct.php";
				break;
			case 'user':
				include "user.php";
				break;
			case 'dkdn':
				include "dkdn.php";
				break;
			case 'thanhtoan':
				include "thanhtoan.php";
				break;
			case 'trogiup':
				include "trogiup.php";
				break;
			case 'giohang':
				include "giohang.php";
				break;
			case 'htdathang':
				include "htdathang.php";
				break;
			case 'ktdonhang':
				include "ktdonhang.php";
				break;
            case 'baivietct':
				include "baivietct.php";
				break;
            default:
                include "home.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "foooter.php";
?>