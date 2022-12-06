    <div class="closeSearch mainSearch">
        <?php require_once "./mvc/Views/User/blocks/BreadCrum.php"?>

        <input type="checkbox" id="modal-cart__overplay" class="modal-cart__Input">
        <input type="checkbox" id="quickView__overplay" class="quickView__Input">

        <label for="modal-cart__overplay" class="cart-overplay"></label>
        <label for="quickView__overplay" class="quickView-overplay"></label>

        <div class="modal-cart">

        </div>

        <div class="quickView">

        </div>

        <div class="notifyFavourite">

        </div>

        <section class="pageSearch">
            <div class="PageTitle--Title">
                <h3>Kết quả tìm được cho: <span><?php echo $_GET["key"] ?></span></h3>
            </div>
            <div class="pageSearch__Contain">
                <?php
                    while($row = mysqli_fetch_array($data["data"]))
                    {
                        $giaGiam = $row["giaSP"] * ($row["giaGiam"] / 100);
                        $total = $row["giaSP"] - $giaGiam;?>
                <div class="prodDuct__sale Item__proDuct--sale pageSearch--Items">
                    <div class="User__Choose">
                        <div class="Choose User__Choose__Cart">
                            <a data-value='<?php echo $row["IDSP"] ?>' data-size='<?php echo $row["size"] ?>'
                                class='Cart--shopping'>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>

                        <div class="Choose User__Choose__Look">
                            <a class="Cart--Look" data-tensp="<?php echo $row["tenSP"] ?>"
                                data-idloai="<?php echo $row["IDLoai"] ?>" data-idsp="<?php echo $row["IDSP"] ?>">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </a>
                        </div>
                        <div class="Choose User__Choose__Love">
                            <a class="choose--Love" data-id="<?php echo $row["IDSP"] ?>">
                                <i class="fa-solid fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <?php
                            if($row["giaGiam"] > 0)
                            {?>
                    <div class="total__Sale total__Sale--newTotal"><?php echo $row["giaGiam"]."%" ?></div>
                    <?php } ?>

                    <div class="product-Contain product-Contain__Sale">
                        <div class="product-Contain__Image product-Contain__Image-Involve">
                            <a
                                href="ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=<?php echo $row["tenSP"]?>&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"]?>">
                                <img class="prodDuct__sale__Image prodDuct__sale__Image--sale"
                                    src="<?php echo $row['image'] ?>" alt="">
                            </a>
                        </div>

                        <div class="product-Contain__Content">
                            <a
                                href="ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP=<?php echo $row["tenSP"]?>&IDLoai=<?php echo $row["IDLoai"] ?>&ID=<?php echo $row["IDSP"]?>">
                                <?php echo $row['tenSP'] ?>
                            </a>

                            <div class="product__Total product__Total--Search">
                                <div class="reduce__Price"><?php echo number_format($total, 0, ',', '.');?><span
                                        class="total">đ</span></div>
                                <?php
                                            if($row["giaGiam"] > 0)
                                            {?>
                                <div class="original__price">
                                    <?php echo number_format($row['giaSP'], 0, ',', '.');?><span class="total">đ</span>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </section>
    </div>