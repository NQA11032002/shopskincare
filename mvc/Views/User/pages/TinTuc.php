    <div class="closeSearch">
        <?php require_once "./mvc/Views/User/blocks/BreadCrum.php"?>

        <section class="MainProduct">
            <div class="MainProduct__Menu">
                <div class="MainProduct__Item MainProduct__Menu--Border">
                    <ul>
                        <h3>Danh mục tin tức</h3>
                        <div>
                            <?php foreach($data["sidebar"] as $item)
                            {?>
                            <li><a href=""><?php echo $item["category"] == 1 ? "Chăm sóc da" : "Góc làm đẹp" ?></a></li>
                            <?php } ?>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__pacePrice MainProduct__Menu--Border">
                    <ul>
                        <h3>Từ khóa</h3>
                        <div class="keyWords">
                            <div>
                                <i class="fa-solid fa-tag"></i>
                                <a href="SanPham&title=Làm sạch da&page=0&IDLoai=2">LÀM SẠCH DA</a>
                            </div>
                            <div>
                                <i class="fa-solid fa-tag"></i>
                                <a href="SanPham&title=Dưỡng da&page=0&IDLoai=3">DƯỠNG DA</a>
                            </div>
                            <div>
                                <i class="fa-solid fa-tag"></i>
                                <a href="SanPham&title=Trang điểm&page=0&IDLoai=7">TRANG ĐIỂM</a>
                            </div>
                            <div>
                                <i class="fa-solid fa-tag"></i>
                                <a href="SanPham&title=Mặt nạ&page=0&IDLoai=1">MẶT NẠ</a>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__Brand MainProduct__Menu--Border">
                    <ul>
                        <h3>Bài viết nôi bật</h3>
                        <div>
                            <?php foreach($data["topNews"] as $item)
                            {?>
                            <div class="newsHot">
                                <div class="newsHot__Img">
                                    <a href=""><img src="<?php echo $item["image"] ?>" alt=""></a>
                                </div>
                                <div class="newsHot__Content">
                                    <a href=""><?php echo $item["title"] ?></a>
                                    <div>
                                        <span><i
                                                class="fa-solid fa-calendar-days"></i><?php echo $item["date_at"] ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__pacePrice MainProduct__Menu--Border">
                    <ul>
                        <h3>Từ khóa</h3>
                        <div>
                            <?php
                                    $i = 0;

                                    while($i < 4)
                                    {
                                        $row = mysqli_fetch_array($data["productHot"]);
                                        if($row == null)
                                        {
                                            break;
                                        }
                                        $reduce = $row["giaSP"] * ($row["giaGiam"] / 100);
                                        $total = $row["giaSP"] - $reduce;
                                        $i++;
                                    ?>
                            <div class="newsProductHot newsHot">
                                <div class="newsProductHot__Img">
                                    <a href=""><img src="<?php echo $row["image"] ?>" alt=""></a>
                                </div>
                                <div class="newsHot__Content">
                                    <a
                                        href="<?php echo 'ChiTietSanPham&title=Chi Tiết Sản Phẩm&tenSP='.$row["tenSP"].'&IDLoai='.$row["IDLoai"].'&ID='.$row["ID"].''?>">
                                        <?php echo $row["tenSP"] ?></a>
                                    <div class="product__Total newsHot__Total">
                                        <div class="reduce__Price"><?php echo number_format($total, 0, ',', '.');?><span
                                                class="total">đ</span></div>
                                        <?php
                                                        if($row["giaGiam"] > 0)
                                                        {?>
                                        <div class="original__price newsHot__price">
                                            <?php if($row["giaGiam"] >0) {echo number_format($row['giaSP'], 0, ',', '.');}?><span
                                                class="total">đ</span></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php }
                                ?>
                        </div>
                    </ul>
                </div>
            </div>
            <div class="newsContain">
                <div class="newsContain__Body">
                    <div class="TitleItem">
                        <b></b>
                        <span>Chăm sóc da</span>
                        <b></b>
                    </div>

                    <div class="section__8__News__Contain">
                        <div class="newsContain__Items">
                            <?php foreach($data["newsOne"] as $item)
                            {?>
                            <div class="NewItem NewItem--Papper">
                                <div class="NewItem__Image newsContain__Items--Img">
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
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="newsContain__Makup">
                    <div class="TitleItem">
                        <b></b>
                        <span>Góc làm đẹp</span>
                        <b></b>
                    </div>

                    <div class="section__8__News__Contain">
                        <div class="newsContain__Items">
                            <?php foreach($data["newsTwo"] as $item)
                            {?>
                            <div class="NewItem NewItem--Papper">
                                <div class="NewItem__Image newsContain__Items--Img">
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
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>