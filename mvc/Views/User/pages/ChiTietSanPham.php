    <div class="closeSearch">
        <?php require_once "./mvc/Views/User/blocks/BreadCrum.php"?>

        <input type="checkbox" id="modal-cart__overplay" class="modal-cart__Input">
        <input type="checkbox" id="quickView__overplay" class="quickView__Input">
        <input type="checkbox" id="paying__overplay" class="paying__Input">

        <label for="modal-cart__overplay" class="cart-overplay"></label>
        <label for="quickView__overplay" class="quickView-overplay"></label>
        <label for="paying__overplay" class="paying-overplay"></label>

        <div class="modal-cart">

        </div>

        <div class="quickView">

        </div>

        <div class="notifyFavourite">

        </div>

        <div class="paying">

        </div>

        <section class="closeSearch containDetail">
            <div class="detailProduct">
                <div class="detailProduct__containImage">
                    <div class="detailProduct__mainImage">
                        <div class="detailProduct__mainImage--Item">
                            <img class="showMainImage" src="<?php echo $data["data"][0]["image"] ?>" alt="">
                        </div>
                        <div class="detailProduct__mainImage--Item">
                            <img class="showMainImage" src="<?php echo $data["data"][0]["image1"] ?>" alt="">
                        </div>
                        <div class="detailProduct__mainImage--Item">
                            <img class="showMainImage" src="<?php echo $data["data"][0]["image2"] ?>" alt="">
                        </div>
                    </div>

                    <div class="detailProduct__Images">
                        <div class="detailProduct__Images--Item">
                            <img class="detailProduct--Image" src="<?php echo $data["data"][0]["image"] ?>" alt="">
                        </div>

                        <div class="detailProduct__Images--Item">
                            <img class="detailProduct--Image" src="<?php echo $data["data"][0]["image1"] ?>" alt="">
                        </div>

                        <div class="detailProduct__Images--Item">
                            <img class="detailProduct--Image" src="<?php echo $data["data"][0]["image2"] ?>" alt="">
                        </div>
                    </div>
                </div>

                <div class="detailProduct__inforProduct">
                    <h1><?php echo $data["data"][0]["tenSP"] ?></h1>

                    <div class="inforProduct--Row1">
                        <div class="inforProduct--ID">
                            <span>Mã sản phẩm: </span>
                            <strong><?php echo $data["data"][0]["IDSP"] ?></strong>
                        </div>
                        <div class="inforProduct--Brand">
                            <span>Thương hiệu: </span>
                            <a href=""><?php echo $data["data"][0]["tenBrand"] ?></a>
                        </div>
                        <div class="inforProduct--Origin">
                            <span>Xuất sứ: </span>
                            <a href=""><?php echo $data["data"][0]["tenSX"] ?></a>
                        </div>
                        <div class="inforProduct--Category">
                            <span>Loại: </span>
                            <a href=""><?php echo $data["data"][0]["tenTL"] ?></a>
                        </div>
                        <div class="inforProduct--Status">
                            <span>Tình trạng: </span>
                            <a><?php echo $data["data"][0]["status"] == 1 ? "Còn hàng" : "Hết hàng" ?></a>
                        </div>
                    </div>

                    <div class="inforProduct--Row2">
                        <div class="inforProduct--total">
                            <div>Giá:
                                <span><?php echo number_format($data["data"][0]["giaSP"] - ($data["data"][0]["giaSP"] * ($data["data"][0]["giaGiam"] * 0.01))) ?><span
                                        class="unit">đ</span> </span>
                                <?php
                                    if($data["data"][0]["giaGiam"] > 0)
                                    {?>
                                <span class="detailReduce">-<?php echo $data["data"][0]["giaGiam"] ?>%</span>
                                <?php }?>
                            </div>
                            <div>Giá niêm yết: <span
                                    class="inforProduct__Origin--total"><?php echo number_format($data["data"][0]["giaSP"]) ?><span
                                        class="unit">đ</span></span> </div>
                        </div>

                        <div class="contain__funtion">
                            <div class="function__size">
                                <span>Kích thước: </span>
                                <div class="function__size--Contain">
                                    <?php
                                        while($rows = mysqli_fetch_array($data["size"]))
                                        {
                                            if($data["data"][0]["IDSize"] == $rows["ID"])
                                            {
                                            ?>
                                    <input type="radio" checked="true" class="selectSize checkedSelectSize"
                                        name="rdSize"
                                        value="<?php echo $rows["size"] ?>"><Span><?php echo $rows["size"] ?></Span>
                                    <?php }
                                           else
                                           {?>
                                    <input disabled type="radio" class="selectSize" name="rdSize"
                                        value="<?php echo $rows["size"] ?>"><Span><?php echo $rows["size"] ?></Span>
                                    <?php  } ?>
                                    <?php }
                                    ?>
                                </div>
                            </div>

                            <div class="function__Mount">
                                <span>Số Lượng: </span>
                                <input type="button" class="reduce reduce_Increase" value="-"></input>
                                <input type="text" class="mount" value="1" min="1">
                                <input type="button" class="increase reduce_Increase" value="+"></input>
                            </div>

                            <div class="function__BuyOrCart">
                                <input type="button" class="increaseCart" value="Thêm vào giỏ hàng">
                                <input type="button" data-id="<?php echo $data["data"][0]["IDSP"] ?>" class="buyProduct"
                                    value="Mua ngay">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab__section">
                <ul>
                    <li>
                        <h3 class="tab__selection">Mô tả sản phẩm</h3>
                    </li>
                    <li>
                        <h3 class="tab__selection">Hướng dẫn mua hàng</h3>
                    </li>
                    <li>
                        <h3 class="tab__selection">Điều khoảng & dịch vụ</h3>
                    </li>
                </ul>
                <div class="tab__contain">
                    <div class="tabDescription">
                        <div class="tabDescription--content">
                            <p>
                                <?php echo $data["data"][0]["moTa"]?>
                            </p>
                        </div>
                        <div class="tabDescription--benefit">
                            <h4>Công dụng:</h4>
                            <p>
                                <?php echo $data["data"][0]["congDung"]?>
                            </p>
                        </div>
                        <div class="tabDescription--usage">
                            <h4>Hướng dẫn sử dụng:</h4>
                            <p>
                                <?php echo $data["data"][0]["suDung"]?>
                            </p>
                        </div>
                        <div class="tabDescription--inforBrand">
                            <h4>Thông tin thương hiệu:</h4>
                            <p>
                                <?php echo $data["data"][0]["gioiThieuTH"]?>
                            </p>
                        </div>
                    </div>

                    <div class="guideBuyProduct">
                        <div class="guideBuyProduct--Buy">
                            <h4>Cách thức mua hàng:</h4>
                            <p>
                                Bước 1: Chọn sản phẩm mà bạn yêu thích cần mua
                                Bước 2: Chọn số lượng & kích thước
                                Bước 3: Chọn mua ngay hoặc thêm giỏ hàng để lần sau mua lại
                                Bước 4: kiểm tra Email đã đăng ký để nhận được thông báo về thông tin đơn hàng của
                                mình!!!
                            </p>
                        </div>
                        <div class="guideBuyProduct--pay">
                            <h4>Phương án thanh toán:</h4>
                            <p>- Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng
                                phương thức phù hợp:<br>
                                + Cách 1: Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán)<br>
                                + Cách 2: Thanh toán sau (COD - giao hàng và thu tiền tận nơi)<br>
                            </p>
                        </div>
                    </div>

                    <div class="provisionService">
                        <div class="provisionService--exchange">
                            <h4>Đổi trả với điều kiện:</h4>
                            <h5>Quý Khách hàng cần kiểm tra tình trạng hàng hóa và có thể đổi hàng/ trả lại hàng ngay
                                tại thời điểm giao/nhận hàng trong những trường hợp sau:</h5>
                            <p>
                                Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời
                                điểm đặt hàng <br>
                                Không đủ số lượng, không đủ bộ như trong đơn hàng<br>
                                Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…<br>
                                Khách hàng có trách nhiệm trình giấy tờ liên quan chứng minh sự thiếu sót trên để hoàn
                                thành việc hoàn trả/đổi trả hàng hóa
                            </p>
                        </div>

                        <div class="provisionService--exchangeSevenDays">
                            <h4>Đổi trả trong vòng 7 ngày:</h4>
                            <p>
                                Thời gian thông báo đổi : trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản
                                phẩm bị bong tróc hình in , loang màu.
                                Thời gian gửi chuyển trả sản phẩm: trong vòng 7 ngày kể từ khi nhận sản phẩm.
                                Địa điểm đổi sản phẩm: Khách hàng có thể mang hàng trực tiếp đến văn phòng/ cửa hàng của
                                chúng tôi
                                Khách hàng được đổi miễn phí sản phẩm trong vòng 30 ngày kể từ ngày nhận được sản phẩm
                                nếu gặp các vẫn đề liên quan đến in ấn
                                Trong trường hợp Quý Khách hàng có ý kiến đóng góp/khiếu nại liên quan đến chất lượng
                                sản phẩm, Quý Khách hàng vui lòng liên hệ đường dây chăm sóc khách hàng của chúng tôi.
                            </p>
                        </div>

                        <div class="provisionService--genuineGoods">
                            <h4>Hàng chính hãng:</h4>
                            <p>
                                Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn
                                lịch sử của cửa hàng chúng tôi và đang không ngừng phát triển lớn mạnh
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="productInvolve">
                <div class="productInvolve__selection">
                    <div class="productInvolve__selection--Title">
                        <h1>Sản phẩm liên quan</h1>
                    </div>
                    <div class="productInvolve__selection--LeftRight">
                        <i class="fa-solid fa-angle-left productInvolve--Control productInvolveLeft"></i>
                        <i class="fa-solid fa-angle-right productInvolve--Control productInvolveRight"></i>
                    </div>
                </div>

                <div class="productInvolve__contain">
                    <div class="productInvolve__Items">
                        <?php
                            foreach($data["involve"] as $item)
                            {                       
                                $giaGiam = $item["giaSP"] * ($item["giaGiam"] / 100);
                                $total = $item["giaSP"] - $giaGiam;
                                ?>
                        <div class="prodDuct__sale productInvolve--Item">
                            <div class="User__Choose">
                                <div class="Choose User__Choose__Cart">
                                    <a class="Cart--shopping" data-value="<?php echo $item["IDSP"] ?>">
                                        <i class="fa-solid fa-cart-shopping Cart--shopping"></i>
                                    </a>
                                </div>

                                <div class="Choose User__Choose__Look">
                                    <a data-idsp='<?php echo $item["IDSP"] ?>' class='Cart--Look'>
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </div>
                                <div class="Choose User__Choose__Love">
                                    <a class="choose--Love" data-id="<?php echo $item["IDSP"] ?>">
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                            </div>

                            <?php
                                        if($item["giaGiam"] > 0)
                                        {?>
                            <div class="total__Sale total__Sale--newTotal"><?php echo $item["giaGiam"]."%" ?></div>
                            <?php } ?>

                            <div class="product-Contain product-Contain__Sale">
                                <div class="product-Contain__Image product-Contain__Image-Involve">
                                    <a
                                        href="ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=<?php echo $item["tenSP"]?>&IDLoai=<?php echo $item["IDLoai"] ?>&ID=<?php echo $item["IDSP"]?>">
                                        <img class="prodDuct__sale__Image prodDuct__sale__Image--sale prodDuct__sale__Image--new"
                                            src="<?php echo $item['image'] ?>" alt="">
                                    </a>
                                </div>

                                <div class="product-Contain__Content">
                                    <a
                                        href="ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=<?php echo $item["tenSP"]?>&IDLoai=<?php echo $item["IDLoai"] ?>&ID=<?php echo $item["IDSP"]?>">
                                        <?php echo $item['tenSP'] ?>
                                    </a>
                                    <div class="product__Total">
                                        <div class="reduce__Price"><?php echo number_format($total, 0, ',', '.');?><span
                                                class="total">đ</span></div>
                                        <?php
                                                    if($item["giaGiam"] > 0)
                                                    {?>
                                        <div class="original__price">
                                            <?php echo number_format($item['giaSP'], 0, ',', '.');?><span
                                                class="total">đ</span></div>
                                        <?php }?>
                                    </div>

                                    <div class="product-Contain__Review">
                                        <div class="stars">
                                            <input checked=true class='star-show star-show__Review star-show-0'
                                                id='star-show-0' type='radio' />
                                            <label class='star-show star-show__Review star-show-0'
                                                for='star-show-0'></label>
                                            <input checked=true class='star-show star-show__Review star-show-1'
                                                id='star-show-1' type='radio' />
                                            <label class='star-show star-show__Review star-show-1'
                                                for='star-show-1'></label>
                                            <input checked=true class='star-show star-show__Review star-show-2'
                                                id='star-show-2' type='radio' />
                                            <label class='star-show star-show__Review star-show-2'
                                                for='star-show-2'></label>
                                            <input checked=true class='star-show star-show__Review star-show-3'
                                                id='star-show-3' type='radio' />
                                            <label class='star-show star-show__Review star-show-3'
                                                for='star-show-3'></label>
                                            <input checked=true class='star-show star-show__Review star-show-4'
                                                id='star-show-4' type='radio' />
                                            <label class='star-show star-show__Review star-show-4'
                                                for='star-show-4'></label>
                                        </div>
                                        <div class="amount-Stars">
                                            <?php
                                                        foreach($data["star"] as $star)
                                                        {
                                                            if($item["IDSP"] == $star["IDSP"])
                                                            {?>
                                            <p>( <?php echo $star["amountStar"]?> )</p>
                                            <?php }
                                                        }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
                    </div>
                </div>
            </div>

            <div class="productInvolve">
                <div class="productInvolve__selection">
                    <div class="productInvolve__selection--Title">
                        <h1>Đánh giá sản phẩm</h1>
                    </div>
                </div>

                <div class="review">
                    <div class="review__input">
                        <div class="review__Item--Avatar">
                            <img src="<?php if(isset($_SESSION["logined"])) echo $_SESSION["logined"][0]["image"] ?>"
                                alt="">
                        </div>
                        <div class="review__input--Contain">
                            <div class="stars">
                                <input class="star star-1" id="star-1" type="radio" value="5" name="star" />
                                <label class="star star-1" for="star-1"></label>
                                <input class="star star-2" id="star-2" type="radio" value="4" name="star" />
                                <label class="star star-2" for="star-2"></label>
                                <input class="star star-3" id="star-3" type="radio" value="3" name="star" />
                                <label class="star star-3" for="star-3"></label>
                                <input class="star star-4" id="star-4" type="radio" value="2" name="star" />
                                <label class="star star-4" for="star-4"></label>
                                <input class="star star-5" id="star-5" type="radio" value="1" name="star" />
                                <label class="star star-5" for="star-5"></label>
                            </div>
                            <div class="review__input--content">
                                <input type="text" class="review__Content"></input>
                                <button class="review__input--submit">Bình luận</button>
                            </div>
                        </div>
                    </div>

                    <div class="review__Item">

                    </div>

                    <div class="review__More">
                        <input type="button" class="review__More--Than" value="Xem thêm">
                    </div>
                </div>
            </div>
        </section>
    </div>