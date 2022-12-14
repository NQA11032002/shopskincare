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
                            <span>M?? s???n ph???m: </span>
                            <strong><?php echo $data["data"][0]["IDSP"] ?></strong>
                        </div>
                        <div class="inforProduct--Brand">
                            <span>Th????ng hi???u: </span>
                            <a href=""><?php echo $data["data"][0]["tenBrand"] ?></a>
                        </div>
                        <div class="inforProduct--Origin">
                            <span>Xu???t s???: </span>
                            <a href=""><?php echo $data["data"][0]["tenSX"] ?></a>
                        </div>
                        <div class="inforProduct--Category">
                            <span>Lo???i: </span>
                            <a href=""><?php echo $data["data"][0]["tenTL"] ?></a>
                        </div>
                        <div class="inforProduct--Status">
                            <span>T??nh tr???ng: </span>
                            <a><?php echo $data["data"][0]["status"] == 1 ? "C??n h??ng" : "H???t h??ng" ?></a>
                        </div>
                    </div>

                    <div class="inforProduct--Row2">
                        <div class="inforProduct--total">
                            <div>Gi??:
                                <span><?php echo number_format($data["data"][0]["giaSP"] - ($data["data"][0]["giaSP"] * ($data["data"][0]["giaGiam"] * 0.01))) ?><span
                                        class="unit">??</span> </span>
                                <?php
                                    if($data["data"][0]["giaGiam"] > 0)
                                    {?>
                                <span class="detailReduce">-<?php echo $data["data"][0]["giaGiam"] ?>%</span>
                                <?php }?>
                            </div>
                            <div>Gi?? ni??m y???t: <span
                                    class="inforProduct__Origin--total"><?php echo number_format($data["data"][0]["giaSP"]) ?><span
                                        class="unit">??</span></span> </div>
                        </div>

                        <div class="contain__funtion">
                            <div class="function__size">
                                <span>K??ch th?????c: </span>
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
                                <span>S??? L?????ng: </span>
                                <input type="button" class="reduce reduce_Increase" value="-"></input>
                                <input type="text" class="mount" value="1" min="1">
                                <input type="button" class="increase reduce_Increase" value="+"></input>
                            </div>

                            <div class="function__BuyOrCart">
                                <input type="button" class="increaseCart" value="Th??m v??o gi??? h??ng">
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
                        <h3 class="tab__selection">M?? t??? s???n ph???m</h3>
                    </li>
                    <li>
                        <h3 class="tab__selection">H?????ng d???n mua h??ng</h3>
                    </li>
                    <li>
                        <h3 class="tab__selection">??i???u kho???ng & d???ch v???</h3>
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
                            <h4>C??ng d???ng:</h4>
                            <p>
                                <?php echo $data["data"][0]["congDung"]?>
                            </p>
                        </div>
                        <div class="tabDescription--usage">
                            <h4>H?????ng d???n s??? d???ng:</h4>
                            <p>
                                <?php echo $data["data"][0]["suDung"]?>
                            </p>
                        </div>
                        <div class="tabDescription--inforBrand">
                            <h4>Th??ng tin th????ng hi???u:</h4>
                            <p>
                                <?php echo $data["data"][0]["gioiThieuTH"]?>
                            </p>
                        </div>
                    </div>

                    <div class="guideBuyProduct">
                        <div class="guideBuyProduct--Buy">
                            <h4>C??ch th???c mua h??ng:</h4>
                            <p>
                                B?????c 1: Ch???n s???n ph???m m?? b???n y??u th??ch c???n mua
                                B?????c 2: Ch???n s??? l?????ng & k??ch th?????c
                                B?????c 3: Ch???n mua ngay ho???c th??m gi??? h??ng ????? l???n sau mua l???i
                                B?????c 4: ki???m tra Email ???? ????ng k?? ????? nh???n ???????c th??ng b??o v??? th??ng tin ????n h??ng c???a
                                m??nh!!!
                            </p>
                        </div>
                        <div class="guideBuyProduct--pay">
                            <h4>Ph????ng ??n thanh to??n:</h4>
                            <p>- Ng?????i mua c?? th??? tham kh???o c??c ph????ng th???c thanh to??n sau ????y v?? l???a ch???n ??p d???ng
                                ph????ng th???c ph?? h???p:<br>
                                + C??ch 1: Thanh to??n tr???c ti???p (ng?????i mua nh???n h??ng t???i ?????a ch??? ng?????i b??n)<br>
                                + C??ch 2: Thanh to??n sau (COD - giao h??ng v?? thu ti???n t???n n??i)<br>
                            </p>
                        </div>
                    </div>

                    <div class="provisionService">
                        <div class="provisionService--exchange">
                            <h4>?????i tr??? v???i ??i???u ki???n:</h4>
                            <h5>Qu?? Kh??ch h??ng c???n ki???m tra t??nh tr???ng h??ng h??a v?? c?? th??? ?????i h??ng/ tr??? l???i h??ng ngay
                                t???i th???i ??i???m giao/nh???n h??ng trong nh???ng tr?????ng h???p sau:</h5>
                            <p>
                                H??ng kh??ng ????ng ch???ng lo???i, m???u m?? trong ????n h??ng ???? ?????t ho???c nh?? tr??n website t???i th???i
                                ??i???m ?????t h??ng <br>
                                Kh??ng ????? s??? l?????ng, kh??ng ????? b??? nh?? trong ????n h??ng<br>
                                T??nh tr???ng b??n ngo??i b??? ???nh h?????ng nh?? r??ch bao b??, bong tr??c, b??? v??????<br>
                                Kh??ch h??ng c?? tr??ch nhi???m tr??nh gi???y t??? li??n quan ch???ng minh s??? thi???u s??t tr??n ????? ho??n
                                th??nh vi???c ho??n tr???/?????i tr??? h??ng h??a
                            </p>
                        </div>

                        <div class="provisionService--exchangeSevenDays">
                            <h4>?????i tr??? trong v??ng 7 ng??y:</h4>
                            <p>
                                Th???i gian th??ng b??o ?????i : trong v??ng 48h k??? t??? khi nh???n s???n ph???m ?????i v???i tr?????ng h???p s???n
                                ph???m b??? bong tr??c h??nh in , loang m??u.
                                Th???i gian g???i chuy???n tr??? s???n ph???m: trong v??ng 7 ng??y k??? t??? khi nh???n s???n ph???m.
                                ?????a ??i???m ?????i s???n ph???m: Kh??ch h??ng c?? th??? mang h??ng tr???c ti???p ?????n v??n ph??ng/ c???a h??ng c???a
                                ch??ng t??i
                                Kh??ch h??ng ???????c ?????i mi???n ph?? s???n ph???m trong v??ng 30 ng??y k??? t??? ng??y nh???n ???????c s???n ph???m
                                n???u g???p c??c v???n ????? li??n quan ?????n in ???n
                                Trong tr?????ng h???p Qu?? Kh??ch h??ng c?? ?? ki???n ????ng g??p/khi???u n???i li??n quan ?????n ch???t l?????ng
                                s???n ph???m, Qu?? Kh??ch h??ng vui l??ng li??n h??? ???????ng d??y ch??m s??c kh??ch h??ng c???a ch??ng t??i.
                            </p>
                        </div>

                        <div class="provisionService--genuineGoods">
                            <h4>H??ng ch??nh h??ng:</h4>
                            <p>
                                T???i ????y, m???i m???t d??ng ch???, m???i chi ti???t v?? h??nh ???nh ?????u l?? nh???ng b???ng ch???ng mang d???u ???n
                                l???ch s??? c???a c???a h??ng ch??ng t??i v?? ??ang kh??ng ng???ng ph??t tri???n l???n m???nh
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="productInvolve">
                <div class="productInvolve__selection">
                    <div class="productInvolve__selection--Title">
                        <h1>S???n ph???m li??n quan</h1>
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
                                        href="ChiTietSanPham&title=Chi Ti???t S???n Ph???m&tenSP=<?php echo $item["tenSP"]?>&IDLoai=<?php echo $item["IDLoai"] ?>&ID=<?php echo $item["IDSP"]?>">
                                        <img class="prodDuct__sale__Image prodDuct__sale__Image--sale prodDuct__sale__Image--new"
                                            src="<?php echo $item['image'] ?>" alt="">
                                    </a>
                                </div>

                                <div class="product-Contain__Content">
                                    <a
                                        href="ChiTietSanPham&title=Chi Ti???t S???n Ph???m&tenSP=<?php echo $item["tenSP"]?>&IDLoai=<?php echo $item["IDLoai"] ?>&ID=<?php echo $item["IDSP"]?>">
                                        <?php echo $item['tenSP'] ?>
                                    </a>
                                    <div class="product__Total">
                                        <div class="reduce__Price"><?php echo number_format($total, 0, ',', '.');?><span
                                                class="total">??</span></div>
                                        <?php
                                                    if($item["giaGiam"] > 0)
                                                    {?>
                                        <div class="original__price">
                                            <?php echo number_format($item['giaSP'], 0, ',', '.');?><span
                                                class="total">??</span></div>
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
                        <h1>????nh gi?? s???n ph???m</h1>
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
                                <button class="review__input--submit">B??nh lu???n</button>
                            </div>
                        </div>
                    </div>

                    <div class="review__Item">

                    </div>

                    <div class="review__More">
                        <input type="button" class="review__More--Than" value="Xem th??m">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript" src="./Public/js/detailproduct.js"></script>