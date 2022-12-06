<section class="closeSearch">
    <div class="Personally">
        <div class="Personally--Left">
            <?php require_once "./mvc/Views/User/blocks/MenuPersonally.php"?>
        </div>
        <div class="Personally--Right">
            <div class="Bill-Mobile">
                <h2>Sản phẩm yêu thích</h2>
                <?php
                            foreach($data["Favourite"] as $item)
                            {
                                $giaGiam = $item["giaSP"] * ($item["giaGiam"] / 100);
                                $total = $item["giaSP"] - $giaGiam;
                            ?>
                <div class="Bill-Mobile__Item">
                    <div class="Bill-Mobile__Item--Top">
                        <img class="Favourite-Image" src="<?php echo $item["image"] ?>" alt="">
                        <p>Sản phẩm: <span><?php echo $item["tenSP"] ?></span></p>
                        <p>Giá tiền: <span><?php echo number_format($total, 0, ',', '.') ?></span></p>
                        <p>Tình trạng: <span><?php echo $item["status"] ?></span></p>
                    </div>
                    <div class="Bill-Mobile__Item--Bottom">
                        <span data-idloai="<?php echo $item["IDLoai"] ?>" data-id="<?php echo $item["IDSP"] ?>"
                            class="detailProduct detailProduct--Favourite"><i class="fa-solid fa-eye"></i>
                            Xem</span>
                        <span data-id="<?php echo $item["ID"] ?>" class="cancelFavourite"><i
                                class="fa-solid fa-trash"></i> Xóa</span>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="Bill">
                <table>
                    <thead>
                        <tr>
                            <th>Hình ảnh</th>
                            <th>Sản phẩm</th>
                            <th>Giá tiền</th>
                            <th>Tình trạng</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                foreach($data["Favourite"] as $item)
                                {
                                    $giaGiam = $item["giaSP"] * ($item["giaGiam"] / 100);
                                    $total = $item["giaSP"] - $giaGiam;
                                ?>
                        <tr class="Favourite__Items">
                            <td><img src="<?php echo $item["image"] ?>" alt=""></td>
                            <td>
                                <p><?php echo $item["tenSP"] ?></p>
                            </td>
                            <td>
                                <p><?php echo number_format($total, 0, ',', '.') ?><u>đ</u> <span
                                        class="inforProduct__Origin--total"><?php echo number_format($item["giaSP"], 0, ',', '.') ?>
                                        <u>đ</u></span></p>
                            </td>
                            <td>
                                <p><?php echo $item["status"] ?></p>
                            </td>
                            <td>
                                <input type="button" class="detailProduct detailProduct--Favourite"
                                    data-idloai="<?php echo $item["IDLoai"] ?>" data-id="<?php echo $item["IDSP"] ?>"
                                    value="Xem chi tiết">
                                <input type="button" class="cancelFavourite" data-id="<?php echo $item["ID"] ?>"
                                    value="Xóa">
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>