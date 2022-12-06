    <div class="closeSearch">
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

        <section class="MainProduct">
            <div class="MainProduct__Menu">
                <div class="MainProduct__pacePrice MainProduct__Menu--Border">
                    <ul>
                        <h3>Khoảng giá</h3>
                        <div class="spacePrice">
                            <div class="sliderPrice"></div>
                            <div>
                                <input type="hidden" class="minimum__Price" value="0">
                                <input type="hidden" class="maximum__Price" name="" value="1000000">
                                <p class="price__show"></p>
                                <div id="priceRange"></div>
                            </div>
                        </div>
                    </ul>
                </div>

                <div class="MainProduct__Item MainProduct__Menu--Border">
                    <ul>
                        <h3>Danh mục sản phẩm</h3>
                        <div>
                            <?php
                                $i = 0;
                                foreach($data["category"] as $rows)
                                {?>
                            <li>
                                <input id="rdCategory<?php echo $i?>" type="checkbox" class="common_selector rdCategory"
                                    name="rdCategory" value="<?php echo $rows["ID"]; ?>">
                                <label for="rdCategory<?php echo $i ?>"><?php echo $rows["tenTL"]; ?></label>
                            </li>
                            <?php   $i = $i + 1;
                             }?>
                        </div>
                    </ul>
                </div>

                <div class="MainProduct__Brand MainProduct__Menu--Border">
                    <ul>
                        <h3>Thương hiệu</h3>
                        <div class="MainProduct__Brand--Contain">
                            <?php
                                    while($rows = mysqli_fetch_assoc($data["brand"]))
                                    {?>
                            <li><input type="checkbox" class="common_selector rdBrand" name="rdBrand"
                                    value=<?php echo $rows["ID"]; ?>><span><?php echo $rows["tenBrand"]; ?></span></li>
                            <?php }
                                ?>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__Produce MainProduct__Menu--Border">
                    <ul>
                        <h3>Xuất xứ</h3>
                        <div class="MainProduct--Flex">
                            <?php
                                    while($rows = mysqli_fetch_assoc($data["origin"]))
                                    {?>
                            <li><input type="checkbox" class="common_selector rdProduce" name="rdProduce"
                                    value=<?php echo $rows["ID"]; ?>><span><?php echo $rows["tenSX"]; ?></span></li>
                            <?php } ?>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__Size MainProduct__Menu--Border">
                    <ul>
                        <h3>Kích thước</h3>
                        <div class="MainProduct--Flex">
                            <?php
                                    while($rows = mysqli_fetch_assoc($data["size"]))
                                    {?>
                            <li><input type="checkbox" class="common_selector rdSize" name="rdSize"
                                    value=<?php echo $rows["ID"]; ?>><span><?php echo $rows["size"]; ?></span></li>
                            <?php } ?>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__Color MainProduct__Menu--Border">
                    <ul>
                        <h3>Màu sắc</h3>
                        <div class="MainProduct--Flex">
                            <?php
                                    while($rows = mysqli_fetch_assoc($data["color"]))
                                    {?>
                            <li><input type="checkbox" class="common_selector rdColor" name="rdColor"
                                    value=<?php echo $rows["ID"]; ?>><span><?php echo $rows["tenMau"]; ?></span></li>
                            <?php } ?>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="MainProduct__Contain">
                <div class="MainProduct__Task">
                    <div class="MainProduct__Task--section">
                        <select class="MainProduct__select">
                            <option value="All">Tất cả</option>
                            <option value="ASCZ">Từ A-Z</option>
                            <option value="DESCA">Từ Z-A</option>
                            <option value="ASC">Giá từ thấp đến cao</option>
                            <option value="DESC">Giá từ cao đến thấp</option>
                        </select>
                    </div>
                </div>
                <div class="MainProduct__Items">
                    <div class="Contain__ProductSale MainProduct__Items--Product">

                    </div>
                </div>
            </div>
        </section>
    </div>