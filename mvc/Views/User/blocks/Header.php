<header class="Header">
    <div class="Header__Contain">
        <div class="Header__Top Header--Wrap">
            <div class="Header__Top__Left Header--Wrap">
                <div>
                    <span><i class="fa-solid fa-phone color--Brown"></i></span>
                    <a href="">(+84)934 323 882</a>
                </div>
                <span class="Header__Top-line color--Brown">|</span>
                <div>
                    <span><i class="fa-solid fa-envelope color--Brown"></i></span>
                    <a href="">support@suplo.vn</a>
                </div>
            </div>

            <div class="Header__Top__Right">
                <ul class="Header__Top__Right__Contain Header--Wrap">
                    <li><a href="HeThongCuaHang&title=Hệ thống cửa hàng">Hệ thống cửa hàng</a></li>
                    <span class="Header__Top-line color--Brown">|</span>
                    <?php
                        if(isset($_SESSION["logined"]))
                        {?>
                    <li class="Logined">
                        <a href="ThongTin" class="Logined__showName">
                            <p class="Logined--Name">Chào, <?php echo $_SESSION["logined"][0]["hoTen"] ?></p>
                        </a>
                        <div class="Logined__Menu">
                            <div class="Logined__Menu--Contain">
                                <div class="Logined__Menu--Infor">
                                    <img class="Avatar" src="<?php echo $_SESSION["logined"][0]["image"] ?>" alt="">
                                </div>
                                <div class="Logined__Menu--Pagination">
                                    <input type="Button" class="Logined__Menu--Control Logined__Menu--Information"
                                        name="" value="Thông tin">
                                    <input type="Button" class="Logined__Menu--Control Logined__Menu--Logout" name=""
                                        value="Đăng xuất">
                                </div>
                                <div class="Logined__Menu--SelectPage">
                                    <ul>
                                        <li><a href="TheoDoiDonHang&title=Theo dõi đơn hàng" class="menuFollowBill">Theo
                                                dõi đơn hàng</a></li>
                                        <li><a href="DanhSachYeuThich&title=Danh sách yêu thích"
                                                class="menuFavourite">Danh sách yêu thích</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php } 
                        else
                        {?>
                    <li class="closeLogined"><a href="DangNhap">Đăng nhập</a></li>
                    <span class="closeLogined Header__Top-line color--Brown">|</span>
                    <li class="closeLogined"><a href="DangKy">Đăng ký</a></li>
                    <?php }
                     ?>
                </ul>
            </div>
        </div>

        <div class="Header__Bottom Header--Wrap">
            <div class="Header__Bottom__Left">
                <a href="TrangChu">
                    <img src="//theme.hstatic.net/1000088429/1000650846/14/logo.png?v=77" alt="">
                </a>
            </div>
            <div class="Header__Bottom__Right Header--Wrap">
                <div class="Header__Bottom__Right__Nav">
                    <ul class="Header__Bottom__Right__Contain Header--Wrap">
                        <li><a href="TrangChu">Trang chủ</a></li>
                        <li class="Header__Product"><a href="SanPham&title=Tất cả sản phẩm">Sản phẩm</a>
                            <div class="Categories">
                                <ul class="Categories__Contain">
                                    <a href="SanPham&title=Mặt nạ&page=0&IDLoai=1">MẶT NẠ</a>
                                    <div class="Categories-Mask">

                                    </div>
                                </ul>
                                <ul class="Categories__Contain">
                                    <a href="SanPham&title=Làm sạch da&page=0&IDLoai=2">LÀM SẠCH DA</a>
                                    <div class="Categories-CleanSkin">

                                    </div>
                                </ul>
                                <ul class="Categories__Contain">
                                    <a href="SanPham&title=Dưỡng da&page=0&IDLoai=3">DƯỠNG DA</a>
                                    <div class="Categories-SkinCare">

                                    </div>
                                </ul>
                                <ul class="Categories__Contain">
                                    <a href="SanPham&title=Trang điểm&page=0&IDLoai=7">TRANG ĐIỂM</a>
                                    <div class="Categories-MakeUp">

                                    </div>
                                </ul>
                            </div>
                        </li>
                        <li><a class="SaleProduct" href="Sale&title=Khuyến mãi">Khuyến mãi</a></li>
                        <li><a href="TinTuc&title=Tin Tức">Tin tức</a></li>
                        <li><a href="LienHe&title=Liên Hệ">Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass color--Brown search--Padding openSearch"
                        onclick="openSearch()"></i>
                    <div class="search__Content">
                        <div class="search__Content--Search">
                            <input type="text" class="keySearch" value="" placeholder="Nhập từ tìm kiếm ...">
                        </div>
                        <div class="search__Content--Name">

                        </div>
                        <div class="search__Contain--Items">

                        </div>
                    </div>
                </div>
                <div class="cart">
                    <i class="fa-solid fa-cart-shopping color--Brown" onclick="onpenCart()"></i>
                    <p class="AmountCart"></p>
                    <div class="cart__Contain">
                        <div class="cart__Contain--RowTop">
                            <p>GIỎ HÀNG</p>
                        </div>

                        <div class="cart__Contain--Middle">

                        </div>

                        <div class="cart__Contain--Bottom">
                            <div class="miniCart__Price">
                                <span>Tổng tiền: </span>
                                <span class="miniCart__Price--Total"></span>
                            </div>
                            <div class="miniCart__Control">
                                <a href="GioHang&title=Giỏ hàng&Page=0">
                                    <input type="button" class="watchMiniCart activeMiniCart" name="" id=""
                                        value="Xem giỏ hàng">
                                </a>
                                <input type="button" class="payingMiniCart activeMiniCart PlaceAnOrder" name="" id=""
                                    value="Thanh toán">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Header-Mobile">
        <input type="checkbox" name="" id="Layout-check__Mobile" class="Layout-check__Mobile" value="">
        <label for="Layout-check__Mobile" class="Layout__Mobile"></label>

        <div class="Menu-Mobile__Contain">
            <div class="Menu-Mobile__Contain--Items">
                <ul>
                    <li>
                        <a href="TrangChu">
                            <img src="//theme.hstatic.net/1000088429/1000650846/14/logo.png?v=77" alt="">
                        </a>
                        <i class="fa-solid fa-xmark close-MenuMobile"></i>
                    </li>
                    <li><a href="TrangChu">Trang chủ</a></li>
                    <li class="Header__Product"><a href="SanPham&title=Tất cả sản phẩm">Sản phẩm</a><i
                            class="fa-solid fa-plus more-Categories"></i><i
                            class="fa-solid fa-minus less-Categories"></i>
                        <div class="Categories">
                            <ul class="Categories__Contain">
                                <div class="Categories__Contain-Content">
                                    <a href="SanPham&title=Mặt nạ&page=0&IDLoai=1">MẶT NẠ</a>
                                    <i class="fa-solid fa-plus more-Face"></i><i
                                        class="fa-solid fa-minus less-Face"></i>
                                </div>

                                <div class="Categories-Mask__Mobile Categories--Hidden Categories--Show__Face">

                                </div>
                            </ul>
                            <ul class="Categories__Contain">
                                <div class="Categories__Contain-Content">
                                    <a href="SanPham&title=Làm sạch da&page=0&IDLoai=2">LÀM SẠCH DA</a>
                                    <i class="fa-solid fa-plus more-cleanLeather"></i><i
                                        class="fa-solid fa-minus less-cleanLeather"></i>
                                </div>
                                <div
                                    class="Categories-CleanSkin__Mobile Categories--Hidden Categories--Show__cleanLeather">

                                </div>
                            </ul>
                            <ul class="Categories__Contain">
                                <div class="Categories__Contain-Content">
                                    <a href="SanPham&title=Dưỡng da&page=0&IDLoai=3">DƯỠNG DA</a>
                                    <i class="fa-solid fa-plus more-skinLeather"></i><i
                                        class="fa-solid fa-minus less-skinLeather"></i>
                                </div>
                                <div
                                    class="Categories-SkinCare__Mobile Categories--Hidden Categories--Show__skinLeather">

                                </div>
                            </ul>
                            <ul class="Categories__Contain">
                                <div class="Categories__Contain-Content">
                                    <a href="SanPham&title=Trang điểm&page=0&IDLoai=7">TRANG ĐIỂM</a>
                                    <i class="fa-solid fa-plus more-skinCare"></i><i
                                        class="fa-solid fa-minus less-skinCare"></i>
                                </div>
                                <div class="Categories-MakeUp__Mobile Categories--Hidden Categories--Show__skinCare">

                                </div>
                            </ul>
                        </div>
                    </li>
                    <li><a class="SaleProduct" href="Sale&title=Khuyến mãi">Khuyến mãi</a></li>
                    <li><a href="TinTuc&title=Tin Tức">Tin tức</a></li>
                    <li><a href="LienHe&title=Liên Hệ">Liên Hệ</a></li>
                    <?php
                        if(isset($_SESSION["logined"]))
                        {?>
                    <li><a class="Logined__Menu--Logout">Đăng xuất</a></li>
                    <?php }
                        else
                        {?>
                    <li><a href="DangNhap">Đăng nhập</a></li>
                    <li><a href="DangKy">Đăng ký</a></li>
                    <?php }?>
                </ul>
            </div>
        </div>

        <div class="Header-Mobile__Top">
            <p>Miễn phí free ship với đơn hàng trên 1.000.000đ</p>
        </div>

        <div class="Header-Mobile__Bottom">
            <div class="Header-Mobile__Bottom-Top">
                <label for="Layout-check__Mobile" class="Header-Mobile__Bottom-Top--Left">
                    <i class="fa-solid fa-bars"></i>
                </label>

                <div class="Header-Mobile__Bottom-Top--Middle">
                    <a href="">
                        <img src="//theme.hstatic.net/1000088429/1000650846/14/logo.png?v=77" alt="">
                    </a>
                </div>

                <div class="Header-Mobile__Bottom-Top--Right">
                    <?php
                        if(isset($_SESSION["logined"]))
                        {?>
                    <a href="CaNhan&title=Cá nhân"><i class="fa-solid fa-user user-Login"></i></a>
                    <?php }
                        else
                        {?>
                    <a href="DangNhap"><i class="fa-solid fa-user user-Login"></i></a>
                    <?php }?>
                    <div class="cart">
                        <input type="checkbox" hidden id="Layout-check__Cart" class="Layout-check__Cart">

                        <label for="Layout-check__Cart" class="Layout__Cart"></label>

                        <label for="Layout-check__Cart" class="cart-Mobile">
                            <i class="fa-solid fa-cart-shopping color--Brown"></i>
                            <p class="AmountCart AmountCart-Mobile"></p>
                        </label>

                        <div class="cart__Contain cart-Mobile__Contain">
                            <div class="cart__Contain--RowTop">
                                <label for="Layout-check__Cart">
                                    <i class="fa-solid fa-xmark close-cartMobile"></i></li>
                                </label>
                                <p>GIỎ HÀNG</p>
                            </div>

                            <div class="cart__Contain--Middle">

                            </div>

                            <div class="cart__Contain--Bottom cart-Mobile__Contain--Bottom">
                                <div class="miniCart__Price">
                                    <span>Tổng tiền: </span>
                                    <span class="miniCart__Price--Total"></span>
                                </div>
                                <div class="miniCart__Control">
                                    <a href="GioHang&title=Giỏ hàng&Page=0">
                                        <input type="button" class="watchMiniCart activeMiniCart" name="" id=""
                                            value="Xem giỏ hàng">
                                    </a>
                                    <input type="button" class="payingMiniCart activeMiniCart PlaceAnOrder" name=""
                                        id="" value="Thanh toán">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Header-Mobile__Bottom-Bottom">
                <input type="text" class="keySearch-Mobile" value="" placeholder="Nhập từ tìm kiếm ...">
                <i class="fa-solid fa-magnifying-glass color--Brown search--Padding openSearch"></i>
                <div class="search__Content search__Content--Mobile">
                    <div class="search__Content--Name search__Content--Mobile-Name">

                    </div>
                    <div class="search__Contain--Items search__Content--Mobile-Items">

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>