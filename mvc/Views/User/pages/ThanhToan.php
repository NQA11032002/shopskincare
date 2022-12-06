<div class="closeSearch">
    <?php require_once "./mvc/Views/User/blocks/BreadCrum.php"?>

    <section class="containPay">
        <div class="tablePay">
            <div class="tablePay__Row1">
                <?php
                        if(!isset($_SESSION["logined"][0]["IDTK"]))
                        {?>
                <span>Bạn đã có tài khoản? <a href="DangNhap"><u>Ấn vào đây để đằng nhập</u></a></span>
                <?php }?>

                <span class="show-Codes">Bạn có mã ưu đãi? <a><u>Ấn vào đây để nhập mã</u></a></span>
                <div class="Codes">
                    <input type="text" placeholder="Mã giảm giá" class="Code-Input">
                    <p class="Code-error"></p>
                </div>
            </div>

            <div class="tablePay__Row2">
                <div class="Row2__Column1">
                    <h3>THANH TOÁN VÀ GIAO HÀNG</h3>
                    <div>
                        <label for="">Họ tên <span>*</span></label>
                        <input type="text" class="nameCustomer" placeholder="Họ tên của bạn"
                            value="<?php if(isset($_SESSION["hoTen"])) echo $_SESSION["hoTen"]; else echo ''?>">
                    </div>
                    <div>
                        <label for="">Địa chỉ <span>*</label>
                        <input type="text" class="addressCustomer" placeholder="Địa chỉ giao hàng"
                            value="<?php if(isset($_SESSION["hoTen"])) echo $_SESSION["diachi"]; else echo ''?>">
                    </div>
                    <div>
                        <label for="">Số điện thoại <span>*</label>
                        <input type="text" class="phoneCustomer" placeholder="Số điện thoại liên hệ"
                            value="<?php if(isset($_SESSION["hoTen"])) echo $_SESSION["sdt"]; else echo ''?>">
                    </div>
                    <div>
                        <label for="">Địa chỉ email <span>*</label>
                        <input type="text" class="emailCustomer" placeholder="Email liên hệ"
                            value="<?php if(isset($_SESSION["hoTen"])) echo $_SESSION["email"];else echo ''?>">
                    </div>
                    <div>
                        <label for="">Ghi chú (tùy chọn) <span>*</span></label>
                        <textarea class="noteCustomer" placeholder="Lưu ý khi giao hàng"></textarea>
                    </div>
                </div>
                <div class="Row2__Column2">
                    <div class="Row2__Column2--Contain">
                        <h3>ĐƠN HÀNG CỦA BẠN</h3>
                        <div class="Row2__Column2--Row1">
                            <p class="Row2__Column2--total">SẢN PHẨM<span>TỔNG</span></p>
                            <div class="Column2__Row1--Contain">

                            </div>
                            <div class="Column2__Row1--Total">

                            </div>
                        </div>
                        <div class="Row2__Column2--Row2">
                            <div>
                                <input type="radio" class="rdPaymentMethod payPalBank" checked="true"
                                    name="rdPaymentMethod" value="1"><span>Chuyển khoản ngân hàng</span></input>
                                <div class="Row2__Column2--Noted Noted__1">
                                    <p>
                                        Bạn vui lòng chờ xác nhận đơn hàng qua email từ nhân viên Inbox/Order <br>
                                        sau khi kiểm tra tình trạng còn hàng tại kho. Vui lòng <b>KHÔNG</b> chuyển
                                        <br>
                                        khoản trước khi nhận được xác nhận từ Nuty. Xin cảm ơn
                                    </p>
                                </div>
                            </div>
                            <div>
                                <input type="radio" class="rdPaymentMethod" name="rdPaymentMethod" value="2"><span>Trả
                                    tiền mặt khi nhận hàng (COD)</span></input>
                                <div class="Row2__Column2--Noted Noted__2">

                                </div>
                            </div>
                            <!-- <div>
                                <button class="paypal_momo paypal__momo--QRCode">Thanh toán bằng MOMO QRCode</button>
                            </div> -->
                        </div>
                        <div class="Row2__Column2--Row3">
                            <input type="button" class="Order" value="ĐẶT HÀNG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="containPayed">

    </section>
</div>