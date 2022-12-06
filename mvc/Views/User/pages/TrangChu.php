<dive class="Main">
    <section class="section__1">
        <i class="fa-solid fa-angle-left left left__Banner"></i>

        <div class="section__1--slide">
            <div class="slide--subItem">
                <div class="section__1--Title">
                    <span>Làm đẹp tự nhiên</span>
                    <h2>Mỹ phẩm xuất xứ từ Hàn Quốc</h2>
                    <p>Giảm 20% khi mua bất kì sản phẩm</p>
                    <a href="">Mua ngay</a>
                </div>
            </div>
            <div class="slide--subItem">
                <div class="section__1--Title">
                    <span>Làm đẹp tự nhiên</span>
                    <h2>Mỹ phẩm xuất xứ từ Hàn Quốc</h2>
                    <p>Giảm 20% khi mua bất kì sản phẩm</p>
                    <a href="">Mua ngay</a>
                </div>
            </div>
            <div class="slide--subItem">
                <div class="section__1--Title">
                    <span>Làm đẹp tự nhiên</span>
                    <h2>Mỹ phẩm xuất xứ từ Hàn Quốc</h2>
                    <p>Giảm 20% khi mua bất kì sản phẩm</p>
                    <a href="">Mua ngay</a>
                </div>
            </div>
        </div>

        <i class="fa-solid fa-angle-right right right__Banner"></i>
    </section>

    <input type="checkbox" id="modal-cart__overplay" class="modal-cart__Input">
    <input type="checkbox" id="quickView__overplay" class="quickView__Input">

    <label for="modal-cart__overplay" class="cart-overplay"></label>
    <label for="quickView__overplay" class="quickView-overplay"></label>

    <input hidden checked="true" type="checkbox" id="check-event">
    <label for="check-event" class="label-event"></label>

    <div class="event">
        <i class="fa-regular fa-circle-xmark close-banner__event"></i>
        <img class="event-image" src="" alt="">
    </div>

    <div class="modal-cart"></div>

    <div class="quickView"></div>

    <div class="notifyFavourite"></div>

    <section class="section__2">
        <div class="section__2__Brand">
            <div class="section__2__Brand__Name Title__All">
                <div class="Title__Name">
                    <span>Mỹ phẩm</span>
                    <h2>Thương hiệu</h2>
                </div>
            </div>

            <div class="section__2__Brand__Contain">

                <i class="fa-solid fa-angle-left left leftBrand"></i>

                <div class="Iteams__Brand">
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand1_ea4f5ee840ff4f8188e70db81dd062e0.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand4_f1b4ed755c3f4ba28e996a0316c87fd9.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand3_de97619a12cd47a7bd4796d99dd9d6f9.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand6_fca2b08e8f8a4314a50b9898848e28b2.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand2_ebcd27d7dd61405da0cf5cfff9b46b9c.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand5_192461e3d71a4852be4c012ccf604103.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand3_de97619a12cd47a7bd4796d99dd9d6f9.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand1_ea4f5ee840ff4f8188e70db81dd062e0.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand4_f1b4ed755c3f4ba28e996a0316c87fd9.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand2_ebcd27d7dd61405da0cf5cfff9b46b9c.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand5_192461e3d71a4852be4c012ccf604103.png"
                            alt="">
                    </div>
                    <div class="subItem__Brand">
                        <img src="https://file.hstatic.net/200000259653/file/brand3_de97619a12cd47a7bd4796d99dd9d6f9.png"
                            alt="">
                    </div>
                </div>

                <i class="fa-solid fa-angle-right right rigthBrand"></i>

            </div>
        </div>
    </section>

    <section class="section__3">
        <div class="section__3__Contain">
            <div class="section__3__Contain__Left">
                <div class="Title__All">
                    <div class="Title__Name">
                        <span>Đang bán chạy</span>
                        <h2>Hot trong tuần qua</h2>
                    </div>
                </div>
                <div class="section__3__Contain__Left--Image">
                    <img src="https://file.hstatic.net/200000259653/file/img-19_b4446ec9-ebc9-45ea-8d6f-e_ff8ec716043b40508650470bfd556d3e.jpg"
                        alt="">
                </div>
            </div>
            <div class="section__3__Contain__Right">
                <i class="fa-solid fa-angle-left left left__Sale"></i>

                <div class="Contain__ProductSale Contain__ProductSale--Mobile">
                    <?php
                                while($row =  mysqli_fetch_array($data['product']))
                                {
                                    $giaGiam = $row["giaSP"] * ($row["giaGiam"] / 100);
                                    $total = $row["giaSP"] - $giaGiam;
                                    ?>
                    <div class="prodDuct__sale prodDuct__sale--PageMain">
                        <div class="User__Choose">
                            <div class="Choose User__Choose__Cart">
                                <a data-value='<?php echo $row["IDSP"] ?>' data-size='<?php echo $row["size"] ?>'
                                    class='Cart--shopping'>
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </div>

                            <div class="Choose User__Choose__Look">
                                <a data-idsp='<?php echo $row["IDSP"] ?>' class='Cart--Look'>
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </div>
                            <div class="Choose User__Choose__Love">
                                <a data-id="<?php echo $row["IDSP"] ?>" class="choose--Love">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                            </div>
                        </div>
                        <?php
                                            if($row["giaGiam"] > 0)
                                            {?>
                        <div id="total__Sale--Hot" class="total__Sale"><?php echo $row["giaGiam"]; ?>%</div>
                        <?php }?>

                        <div class="product-Contain">
                            <div class="product-Contain__Image">
                                <a
                                    href="ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=<?php echo $row["tenSP"]?>&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"]?>">
                                    <img class="prodDuct__sale__Image" src="<?php echo $row['image'] ?>" alt="">
                                </a>
                            </div>

                            <div class="product-Contain__Content">
                                <a class="product-Contain__Content--Top"
                                    href="ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=<?php echo $row["tenSP"]?>&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"]?>">
                                    <?php echo $row['tenSP'] ?>
                                </a>
                                <div class="product__Total product-Contain__Content--Bottom">
                                    <div class="reduce__Price"><?php echo number_format($total, 0, ',', '.');?><span
                                            class="total">đ</span></div>
                                    <?php
                                                        if($row["giaGiam"] > 0)
                                                        {?>
                                    <div class="original__price">
                                        <?php if($row["giaGiam"] >0) {echo number_format($row['giaSP'], 0, ',', '.');}?><span
                                            class="total">đ</span></div>
                                    <?php } ?>
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
                                                            foreach($data["star"] as $item)
                                                            {
                                                                if($row["ID"] == $item["IDSP"])
                                                                {?>
                                        <p>( <?php echo $item["amountStar"]?> )</p>
                                        <?php }
                                                            }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <i class="fa-solid fa-angle-right right right--new right__Sale"></i>
            </div>
        </div>
    </section>
    <section class="section__4">
        <div class="section__4__Banner">
            <div class="section__4__Content">
                <span>Điểm đến mỹ phẩm</span>
                <h2>Giảm giá cho tất cả các gói mỹ phẩm</h2>
                <p>Chúng tôi cung cấp các sản phẩm làm đẹp và mỹ phẩm hữu cơ, chất lượng cao. Tất cả các sản phẩm
                    của chúng tôi đều giàu chất dinh dưỡng và có mùi thơm ngon. Chắc chắn, nó sẽ mang lại cho bạn
                    cảm giác sang trọng. Chúng tôi cung cấp các sản phẩm mỹ phẩm chất lượng với giá cả phải chăng.
                </p>
                <a href="">Xem chi tiết</a>
            </div>
        </div>
    </section>

    <section class="section__5">
        <div class="section__5__Contain">
            <div class="Title__All Title__All--title">
                <div class="Title__Name">
                    <span>Khuyến mãi</span>
                    <h2>Giảm giá</h2>
                </div>
            </div>

            <div class="section__5__Product__Sale">
                <div class="section__5__Items">
                    <i class="fa-solid fa-angle-left left product__Left"></i>
                    <div class="Item__Sale">
                        <?php
                                    while($row =  mysqli_fetch_array($data['productSale']))
                                    {
                                        $giaGiam = $row["giaSP"] * ($row["giaGiam"] / 100);
                                        $total = $row["giaSP"] - $giaGiam;
                                        ?>
                        <div class="prodDuct__sale proDuct__Lenght">
                            <div class="User__Choose">
                                <div class="Choose User__Choose__Cart">
                                    <a data-value='<?php echo $row["IDSP"] ?>' data-size='<?php echo $row["size"] ?>'
                                        class='Cart--shopping'>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>

                                <div class="Choose User__Choose__Look">
                                    <a data-idsp='<?php echo $row["IDSP"] ?>' class='Cart--Look'>
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </div>
                                <div class="Choose User__Choose__Love">
                                    <a class='choose--Love' data-id='<?php echo $row["IDSP"] ?>'>
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="total__Sale total__Sale--newTotal"><?php echo $row["giaGiam"]."%" ?></div>

                            <div class="product-Contain product-Contain__Sale">
                                <div class="product-Contain__Image">
                                    <a
                                        href="ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=<?php echo $row["tenSP"]?>&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"]?>">
                                        <img class="prodDuct__sale__Image prodDuct__sale__Image--sale prodDuct__sale__Image--new"
                                            src="<?php echo $row['image'] ?>" alt="">
                                    </a>
                                </div>

                                <div class="product-Contain__Content">
                                    <a class="product-Contain__Content--Top"
                                        href="ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=<?php echo $row["tenSP"]?>&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"]?>">
                                        <?php echo $row['tenSP'] ?>
                                    </a>

                                    <div class="product__Total">
                                        <div class="reduce__Price">
                                            <?php echo number_format($total, 0, ',', '.');?><span class="total">đ</span>
                                        </div>
                                        <div class="original__price">
                                            <?php echo number_format($row['giaSP'], 0, ',', '.');?><span
                                                class="total">đ</span></div>
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
                                                                foreach($data["star"] as $item)
                                                                {
                                                                    if($row["ID"] == $item["IDSP"])
                                                                    {?>
                                            <p>( <?php echo $item["amountStar"]?> )</p>
                                            <?php }
                                                                }
                                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php    } ?>
                    </div>

                    <i class="fa-solid fa-angle-right right product__Right"></i>

                </div>
            </div>
        </div>
    </section>

    <section class="section__6">
        <div class="section__6__Banner">
            <div class="section__6__Content section__4__Content">
                <span>Chiếu sáng vẻ đẹp</span>
                <h2>Mua hàng chất lượng sản xuất từ Hàn</h2>
                <p>Chúng tôi cung cấp các sản phẩm làm đẹp và mỹ phẩm hữu cơ, chất lượng cao. Tất cả các sản phẩm
                    của chúng tôi đều giàu chất dinh dưỡng và có mùi thơm ngon. Chắc chắn, nó sẽ mang lại cho bạn
                    cảm giác sang trọng. Chúng tôi cung cấp các sản phẩm mỹ phẩm chất lượng với giá cả phải chăng.
                </p>
                <a href="">Mua ngay</a>
            </div>
        </div>
    </section>

    <section class="section__7">
        <div class="section__7__Contain">
            <div class="Title__All Title__All--title">
                <div class="Title__Name">
                    <span>Mỹ phẩm</span>
                    <h2>Bán chạy</h2>
                </div>
            </div>

            <div class="section__5__Product__Sale">
                <div class="section__5__Items">
                    <div class="Item--Sale">
                        <?php
                                    while($row =  mysqli_fetch_array($data['bestProSelling']))
                                    {
                                        $giaGiam = $row["giaSP"] * ($row["giaGiam"] / 100);
                                        $total = $row["giaSP"] - $giaGiam;
                                        ?>
                        <div class="prodDuct__sale Item__proDuct--sale">
                            <div class="User__Choose">
                                <div class="Choose User__Choose__Cart">
                                    <a data-value='<?php echo $row["ID"] ?>' data-size='<?php echo $row["size"] ?>'
                                        class='Cart--shopping'>
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </a>
                                </div>

                                <div class="Choose User__Choose__Look">
                                    <a data-idsp='<?php echo $row["ID"] ?>' class='Cart--Look'>
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </a>
                                </div>
                                <div class="Choose User__Choose__Love">
                                    <a class='choose--Love' data-id='<?php echo $row["ID"] ?>'>
                                        <i class="fa-solid fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <?php
                                                if($row["giaGiam"] > 0)
                                                {?>
                            <div class="total__Sale total__Sale--newTotal"><?php echo $row["giaGiam"]."%" ?></div>
                            <?php }
                                            ?>

                            <div class="product-Contain product-Contain__BestSeller">
                                <div class="product-Contain__Image">
                                    <a
                                        href="ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=<?php echo $row["tenSP"]?>&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["ID"]?>">
                                        <img class="prodDuct__sale__Image prodDuct__sale__Image--sale prodDuct__sale__Image--new"
                                            src="<?php echo $row['image'] ?>" alt="">
                                    </a>
                                </div>

                                <div class="product-Contain__Content">
                                    <a
                                        href="ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=<?php echo $row["tenSP"]?>&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["ID"]?>">
                                        <?php echo $row['tenSP'] ?>
                                    </a>

                                    <div class="product__Total">
                                        <div class="reduce__Price">
                                            <?php echo number_format($total, 0, ',', '.');?><span class="total">đ</span>
                                        </div>

                                        <?php
                                                        if($row["giaGiam"] > 0)
                                                        {?>
                                        <div class="original__price">
                                            <?php echo number_format($row['giaSP'], 0, ',', '.');?><span
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
                                                                foreach($data["star"] as $item)
                                                                {
                                                                    if($row["ID"] == $item["IDSP"])
                                                                    {?>
                                            <p>( <?php echo $item["amountStar"]?> )</p>
                                            <?php }
                                                                }
                                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php    }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section__8">
        <div class="section__8__Contain">
            <div class="Contain__Banner">
                <div class="Contain__Banner__Left">
                    <div class="Title__All Title__All--title">
                        <div class="Title__Name">
                            <span>Phương pháp truyền thống</span>
                            <h2>Lotion thảo dược</h2>
                        </div>
                    </div>
                    <div class="Contain__Banner__Left--Content">Tất cả đều là Mỹ phẩm Thảo dược và nó được bào chế,
                        sử dụng các thành phần mỹ phẩm thảo dược được phép khác nhau, là các sản phẩm 100% từ Thảo
                        dược nguyên chất và an toàn.</div>
                </div>

                <div class="Contain__Banner__Right">
                    <a href="">
                        <img src="https://file.hstatic.net/200000259653/file/2_9e320845e270473dbd46a77cb21c6608.jpeg"
                            alt="">
                    </a>
                </div>
            </div>

            <div class="Contain__Banner Contain__Banner--reveser">
                <div class="Contain__Banner__Right">
                    <a href="">
                        <img src="https://file.hstatic.net/200000259653/file/3_c36448acd2764e8a8d49c4fd740a8523.jpg"
                            alt="">
                    </a>
                </div>
                <div class="Contain__Banner__Left">
                    <div class="Title__All Title__All--title">
                        <div class="Title__Name">
                            <span>Cuộc cách mạng mỹ phẩm</span>
                            <h2>Serum hữu cơ</h2>
                        </div>
                    </div>
                    <div class="Contain__Banner__Left--Content">Thành phần tự nhiên là sản phẩm chăm sóc da, chăm
                        sóc tóc và thảo dược khác tốt nhất. Các thành phần này làm sạch và thanh lọc làn da và mang
                        lại một làn da khỏe mạnh.</div>
                </div>
            </div>

            <div class="Contain__Banner">
                <div class="Contain__Banner__Left">
                    <div class="Title__All Title__All--title">
                        <div class="Title__Name">
                            <span>Công thức bác sĩ</span>
                            <h2>Kem dưỡng thảo dược</h2>
                        </div>
                    </div>
                    <div class="Contain__Banner__Left--Content">Chứa thành phần dưỡng chất của Aloe Vera, Vitamin E
                        và Vitamin B5, do đó nó làm dịu và làm mềm làn da của bạn và mang lại cho bạn một làn da
                        sáng tự nhiên trên khuôn mặt của bạn.</div>
                </div>

                <div class="Contain__Banner__Right">
                    <a href="">
                        <img src="https://file.hstatic.net/200000259653/file/1_b43b5110a90346c6b860cd09ab127476.jpg"
                            alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="section__8">
        <div class="section__8__News">
            <div class="Title__All Title__All--title">
                <div class="Title__Name">
                    <span>Hữu ích</span>
                    <h2>Tin tức</h2>
                </div>
            </div>
            <i class="fa-solid fa-angle-left newLeft"></i>

            <div class="section__8__News__Contain">
                <div class="Contain__New">
                    <?php 
                        foreach($data["news"] as $item)
                        {?>
                    <div class="NewItem">
                        <div class="NewItem__Image">
                            <a href="">
                                <img src="<?php echo $item["image"] ?>" alt="">
                            </a>
                        </div>
                        <div class="NewItem__Content">
                            <h3><a href=""><?php echo $item["title"] ?></a></h3>
                            <span><?php echo $item["date_at"] ?></span>
                            <p><?php echo $item["content"] ?></p>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
            <i class="fa-solid fa-angle-right newRight "></i>
        </div>
    </section>

    <section class="section__9">
        <div class="section__9__Contain">
            <div class="section__9__Contain__Img">
                <a href="">
                    <img src="https://file.hstatic.net/200000259653/file/img-gal5-1_a91d6a2672a54b1bab1a1b24a2ca3ec3.jpg"
                        alt="">
                </a>
            </div>
            <div class="section__9__Contain__Img">
                <a href="">
                    <img src="https://file.hstatic.net/200000259653/file/img-gal9-1_61b9c9cdf34f4059975eff7921b5d769.jpg"
                        alt="">
                </a>
            </div>
            <div class="section__9__Contain__Img">
                <a href="">
                    <img src="https://file.hstatic.net/200000259653/file/img-gal10-1_add65d1fa97a4dd581d813de28ba2b6c.jpg"
                        alt="">
                </a>
            </div>
            <div class="section__9__Contain__Img">
                <a href="">
                    <img src="https://file.hstatic.net/200000259653/file/img-gal2-1_a1435181c26944658ef1f0b2ff518b21.jpg"
                        alt="">
                </a>
            </div>
            <div class="section__9__Contain__Img">
                <a href="">
                    <img src="https://file.hstatic.net/200000259653/file/img-gal8-1_06836180b92e4aef8e96068ee19398f1.jpg"
                        alt="">
                </a>
            </div>
            <div class="section__9__Contain__Img">
                <a href="">
                    <img src="https://file.hstatic.net/200000259653/file/img-gal3-1_b23d9a32015a4ef1941689bac874790f.jpg"
                        alt="">
                </a>
            </div>
            <div class="section__9__Contain__Img">
                <a href="">
                    <img src="https://file.hstatic.net/200000259653/file/img-gal1-1_9e668bc0ef2649e9a682360388ac6dd7.jpg"
                        alt="">
                </a>
            </div>
            <div class="section__9__Contain__Img">
                <a href="">
                    <img src="https://file.hstatic.net/200000259653/file/img-gal4-1_0b05551994514b69a7471cc1e7d1510c.jpg"
                        alt="">
                </a>
            </div>
            <div class="section__9__Contain__Img">
                <a href="">
                    <img src="https://file.hstatic.net/200000259653/file/img-gal7-1_115d77a33684423996ab21e7b55ff43e.jpg"
                        alt="">
                </a>
            </div>
            <div class="section__9__Contain__Img">
                <a href="">
                    <img src="https://file.hstatic.net/200000259653/file/img-gal6-1_f7e85ed4fae845d9b0d074dfcabfd9ba.jpg"
                        alt="">
                </a>
            </div>
        </div>
    </section>

    <section class="section__10">
        <div class="section__10__Support">
            <div class="Support">
                <div>
                    <i class="fa-solid fa-truck-moving"></i>
                </div>
                <div class="Support__Content">
                    <h3>MIỄN PHÍ VẬN CHUYỂN</h3>
                    <p>Nhận hàng trong vòng 3 ngày</p>
                </div>
            </div>

            <div class="Support">
                <div>
                    <i class="fa-solid fa-trophy"></i>
                </div>
                <div class="Support__Content">
                    <h3>CHẤT LƯỢNG ĐẢM BẢO</h3>
                    <p>Top 10 thương hiệu uy tín 2017</p>
                </div>
            </div>

            <div class="Support">
                <div>
                    <i class="fa-solid fa-headphones-simple"></i>
                </div>
                <div class="Support__Content">
                    <h3>HỖ TRỢ 24/7</h3>
                    <p>Gọi điện - Zalo - iMessage - SMS</p>
                </div>
            </div>

            <div class="Support">
                <div>
                    <i class="fa-solid fa-rotate-left"></i>
                </div>
                <div class="Support__Content">
                    <h3>ĐỔI TRẢ DỄ DÀNG</h3>
                    <p>Trả lại hàng nếu không ưng ý</p>
                </div>
            </div>
        </div>
    </section>
</dive>