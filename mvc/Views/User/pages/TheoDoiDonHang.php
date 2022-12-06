    <section class="closeSearch">
        <div class="Personally">
            <div class="Personally--Left">
                <?php require_once "./mvc/Views/User/blocks/MenuPersonally.php"?>
            </div>
            <div class="Personally--Right">
                <div class="Bill-Mobile">
                    <h2>Thông tin đơn hàng</h2>
                    <?php
                            foreach($data["Bill"] as $item)
                            {?>
                    <div class="Bill-Mobile__Item">
                        <div class="Bill-Mobile__Item--Top">
                            <p>Mã hàng: <span><?php echo $item["IDDH"] ?></span></p>
                            <p>Ngày đặt: <span><?php echo $item["ngayDat"] ?></span></p>
                            <p>Phí vận chuyển: <span><?php echo number_format($item["phiGD"], 0, ',', '.') ?></span></p>
                            <p>Tổng:
                                <span><?php echo number_format($item["total"] + $item["phiGD"], 0, ',', '.') ?></span>
                            </p>
                            <p>Tình trạng: <span><?php echo $item["tinhTrang"] ?></span></p>
                        </div>
                        <div class="Bill-Mobile__Item--Bottom">
                            <span data-id="<?php echo $item["IDDH"] ?>" class="watchDetailBill"><i
                                    class="fa-solid fa-eye"></i> Xem</span>

                            <?php
                                if(strcmp($item["tinhTrang"],"Đã nhận hàng") == 0 || strcmp($item["tinhTrang"],"Đã hủy hàng") == 0)
                                {?>
                            <span data-id="<?php echo $item["IDDH"] ?>" class="deleteBill"><i
                                    class="fa-solid fa-trash"></i> Xóa</span>
                            <?php }
                                else
                                {?>
                            <span style="display: none"><i class="fa-solid fa-trash"></i> Xóa</span>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="Bill">
                    <table>
                        <thead>
                            <tr>
                                <th>Mã hàng</th>
                                <th>Ngày đặt</th>
                                <th>Tình trạng</th>
                                <th>Phí vận chuyển</th>
                                <th>Tổng</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($data["Bill"] as $item)
                                {?>
                            <tr>
                                <td><?php echo $item["IDDH"] ?></td>
                                <td><?php echo $item["ngayDat"] ?></td>
                                <td><?php echo $item["tinhTrang"] ?></td>
                                <td><?php echo number_format($item["phiGD"], 0, ',', '.') ?><u>đ</u></td>
                                <td><?php echo number_format($item["total"] + $item["phiGD"], 0, ',', '.') ?><u>đ</u>
                                </td>
                                <td>
                                    <input type="button" class="watchDetailBill" name=""
                                        data-id="<?php echo $item["IDDH"] ?>" value="Xem">

                                    <?php
                                if(strcmp($item["tinhTrang"],"Đã nhận hàng") == 0 || strcmp($item["tinhTrang"],"Đã hủy hàng") == 0)
                                {?>
                                    <input type="button" class="deleteBill" name=""
                                        data-id="<?php echo $item["IDDH"] ?>" value="Xóa">
                                    <?php }
                                        else
                                        {?>
                                    <input type="button" style="background: #898989; border: black" disabled
                                        class="deleteBill" name="" data-id="<?php echo $item["IDDH"] ?>" value="Xóa">
                                    <?php }?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>