<?php
include 'inc/header.php';
// include 'inc/slider.php';
?>
<?php
//    if(isset($_GET['cartid'])){
//        $cartid = $_GET['cartid']; 
//        $delcart = $ct->del_product_cart($cartid);
//    }
// if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
//        // LẤY DỮ LIỆU TỪ PHƯƠNG THỨC Ở FORM POST
//        $cartId = $_POST['cartId'];
//        $quantity = $_POST['quantity'];
//        $update_quantity_Cart = $ct -> update_quantity_Cart($cartId, $quantity); // hàm check catName khi submit lên
//    	if ($quantity <= 0) {
//    		$delcart = $ct->del_product_cart($cartId);
//    	}
//    } 
?>
<?php
$login_check = Session::get('customer_login');
if ($login_check == false) {
    header('Location:login.php');
}
?>
<?php
if (isset($_GET['confirmid'])) {
    $id = $_GET['confirmid'];
    $time = $_GET['time'];
    $price = $_GET['price'];
    $shifted_confirm = $ct->shifted_confirm($id, $time, $price);
}
?>
<div class="main">
    <div class="content">
        <div class="cartoption">		
            <div class="cartpage">
                <h2 style="width: 100%;">Chi tiết của bạn đã đặt hàng</h2>
                <table class="tblone">
                    <tr>
                        <th width="0%">STT</th>
                        <th width="25%">Tên sản phẩm</th>
                        <th width="20%">Hình ảnh</th>
                        <th width="15%">Giá</th>
                        <th width="15%">Số lượng</th>
                        <th width="10%">Ngày</th>
                        <th width="10%">Trạng thái</th>
                        <th width="10%">Xử lý</th>
                    </tr>                  	
                </table>						
            </div>
            <div class="shopping">
                <div class="shopleft">
                    <a href="index.php"> <img src="images/shop.png" alt="" /></a>
                </div>
                <div class="shopright">
                    <a href="index.php"> <img src="images/check.png" alt="" /></a>
                </div>
            </div>
        </div>  	
        <div class="clear"></div>
    </div>
</div>

<?php
include 'inc/footer.php';
?>
