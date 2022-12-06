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
                <div class="MainProduct__Menu--close">
                    <p>Lọc sản phẩm</p>
                    <i class="fa-solid fa-xmark  MainProduct-Menu__Mobile--Close"></i>
                </div>
                <div class="MainProduct__pacePrice MainProduct__Menu--Border">
                    <ul>
                        <h3>Khoảng giá</h3>
                        <input type="hidden" class="minimum__Price" value="0">
                        <input type="hidden" class="maximum__Price" name="" value="1000000">
                        <div class="spacePrice">
                            <div class="sliderPrice"></div>
                            <div>
                                <p class="price__show"></p>
                                <div id="priceRange"></div>
                            </div>
                        </div>
                        <div class="spacePrice-Mobile">
                            <label for="rdSpacePrice"><input id="rdSpacePrice" type="radio" class="rdSpacePrice"
                                    name="rdSpacePrice" data-min="0" data-max="150000" value=""> Dưới 150.000
                                <u>đ</u></label>
                            <label for="rdSpacePrice1"><input id="rdSpacePrice1" type="radio" class="rdSpacePrice"
                                    name="rdSpacePrice" data-min="150000" data-max="250000" value=""> Từ 150.000
                                <u>đ</u> - 250.000 <u>đ</u></label>
                            <label for="rdSpacePrice2"><input id="rdSpacePrice2" type="radio" class="rdSpacePrice"
                                    name="rdSpacePrice" data-min="250000" data-max="350000" value=""> Từ 250.000
                                <u>đ</u> - 350.000 <u>đ</u></label>
                            <label for="rdSpacePrice3"><input id="rdSpacePrice3" type="radio" class="rdSpacePrice"
                                    name="rdSpacePrice" data-min="350000" data-max="500000" value=""> Từ 350.000
                                <u>đ</u> - 500.000 <u>đ</u></label>
                            <label for="rdSpacePrice4"><input id="rdSpacePrice4" type="radio" class="rdSpacePrice"
                                    name="rdSpacePrice" data-min="500000" data-max="999999999" value=""> Trên 500.000
                                <u>đ</u></label>
                        </div>
                    </ul>
                </div>

                <div class="MainProduct__Item MainProduct__Menu--Border">
                    <ul>
                        <h3>Danh mục sản phẩm</h3>
                        <div class="taskBar--Categories">
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
                                $i = 0;
                                while($rows = mysqli_fetch_assoc($data["brand"]))
                                {?>
                            <li>
                                <input id="rdBrand<?php echo $i?>" type="checkbox" class="common_selector rdBrand"
                                    name="rdBrand" value=<?php echo $rows["ID"]; ?>>
                                <label for="rdBrand<?php echo $i ?>"><?php echo $rows["tenBrand"]; ?></label>
                            </li>
                            <?php $i = $i + 1;
                                }?>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__Produce MainProduct__Menu--Border">
                    <ul>
                        <h3>Xuất xứ</h3>
                        <div class="MainProduct--Flex">
                            <?php
                                $i = 0;
                                while($rows = mysqli_fetch_assoc($data["origin"]))
                                {?>
                            <li>
                                <input id="rdProduce<?php echo $i?>" type="checkbox" class="common_selector rdProduce"
                                    name="rdProduce" value=<?php echo $rows["ID"]; ?>>
                                <label for="rdProduce<?php echo $i ?>"><?php echo $rows["tenSX"]; ?></label>
                            </li>
                            <?php $i = $i + 1;
                            } ?>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__Size MainProduct__Menu--Border">
                    <ul>
                        <h3>Kích thước</h3>
                        <div class="MainProduct--Flex">
                            <?php
                                $i = 0;
                                while($rows = mysqli_fetch_assoc($data["size"]))
                                {?>
                            <li>
                                <input id="rdSize<?php echo $i?>" type="checkbox" class="common_selector rdSize"
                                    name="rdSize" value=<?php echo $rows["ID"]; ?>>
                                <label for="rdSize<?php echo $i ?>"><?php echo $rows["size"]; ?></label>
                            </li>
                            <?php $i = $i + 1;
                                } ?>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__Color MainProduct__Menu--Border">
                    <ul>
                        <h3>Màu sắc</h3>
                        <div class="MainProduct--Flex">
                            <?php
                                $i = 0;
                                while($rows = mysqli_fetch_assoc($data["color"]))
                                {?>
                            <li>
                                <input id="rdColor<?php echo $i?>" type="checkbox" class="common_selector rdColor"
                                    name="rdColor" value=<?php echo $rows["ID"]; ?>>
                                <label for="rdColor<?php echo $i ?>"><?php echo $rows["tenMau"]; ?></label>
                            </li>
                            <?php $i = $i + 1;
                                } ?>
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
                    <div class="MainProduct-Menu__Mobile">
                        <label for="">Bộ lọc</label>
                        <i class="fa-solid fa-ellipsis-vertical"></i>
                    </div>

                    <label for="" class="MainProduct-Menu__Layout"></label>

                </div>
                <div class="MainProduct__Items">
                    <div class="Contain__ProductSale MainProduct__Items--Product">

                    </div>
                </div>

                <div class="MainProduct__Pagination">

                </div>
            </div>
        </section>
    </div>