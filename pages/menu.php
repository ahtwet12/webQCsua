<!-- Thanh menu -->
<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['user']);
}
?>
<div class="menu">
    <ul class="list-menu">
        <li><a href="index.php?quanly=CSKH">CSKH:
                <b class="number">
                    <i class="menu-icons fa-solid fa-phone icon-phone item-icon"></i>
                    1800 6969</b>
            </a></li>
        <li><a href="index.php">
                <i class="menu-icons fa-solid fa-house"></i>
                Trang chủ</a>
        </li>
        <li><a href="index.php?quanly=thongbao">
                <i class="menu-icons fa-solid fa-bell"></i>
                Thông báo</a>
        </li>
        <li><a href="index.php?quanly=giohang">
                <i class="menu-icons fa-solid fa-cart-shopping"></i>
                Giỏ hàng</a>
        </li>
        <!-- tồn tại đnhap => đăng xuất, kh thì trở laị trang đki -->
        <?php
        if (isset($_SESSION['user'])) {
        ?>
            <li><a href="index.php?dangxuat=1">
                    <i class="menu-icons fa-solid fa-right-from-bracket"></i>
                    Đăng xuất</a>
            </li>
        <?php
        } else {
        ?>
            <li><a href="index.php?quanly=dangnhap">
                    <i class="menu-icons fa-solid fa-user"></i>
                    Đăng nhập</a>
            </li>
        <?php
        }
        ?>
        <li>
            <?php
            if (isset($_SESSION['user'])) {
                echo 'xin chào: ' . '<span style="color: red;">' . $_SESSION['user'] . '</span>';
            }
            ?>
        </li>

    </ul>

</div>