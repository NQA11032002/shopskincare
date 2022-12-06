<ul class="Personally-PC">
    <h3>THÔNG TIN CÁ NHÂN</h3>
    <li>
        <div class="Logined__Menu--Infor">
            <form class="submitFile" method="POST" action="./Ajax/changedAvatar" enctype="multipart/form-data">
                <img class="Personally-Avatar" src="<?php echo $_SESSION["logined"][0]["image"] ?>" alt="">
                <input type="file" name="Avatar" id="files" hidden accept="image/*,.pdf">
                <input type="submit" id="submitFile" hidden>
                <p class="Image-error"></p>
                <div class="Logined__Menu-File">
                    <label class="changeAvatar Logined__Menu--Control" for="files">Chọn ảnh
                    </label>
                </div>
            </form>
        </div>
    </li>
    <li><a class="Personally__Active" href="CaNhan&title=Thông tin cá nhân">Tài khoản</a></li>
    <li><a class="Personally__Active" href="TheoDoiDonHang&title=Theo dõi đơn hàng">Theo dõi đơn hàng</a></li>
    <li><a href="DanhSachYeuThich&title=Danh sách yêu thích">Danh sách yêu thích</a></li>
    <li><a class="Logined__Menu--Logout">Đăng xuất</a></li>
</ul>
<ul class="Personally-Mobile">
    <li>
        <div class="Personally-Mobile__Title">
            <div class="Logined__Menu--Infor">
                <img class="Personally-Avatar Personally-Avatar_Mobile"
                    src="<?php echo $_SESSION["logined"][0]["image"] ?>" alt="">
            </div>
            <div class="Personally-Mobile__Title-Infor">
                <form class="submitFile" method="POST" action="./Ajax/changedAvatar" enctype="multipart/form-data">
                    <input type="file" name="Avatar" id="files" hidden accept="image/*,.pdf">
                    <input type="submit" id="submitFile" hidden>
                    <div class="Logined__Menu-File File-Mobile">
                        <label class="changeAvatar Logined__Menu--Control" for="files">Chọn ảnh
                        </label>
                        <label class="changeAvatar Logined__Menu--Control" for="submitFile">Đổi
                            ảnh</label>
                    </div>
                    <p class="Image-error"></p>

                </form>
            </div>
        </div>
    </li>
    <li><a class="Personally__Active" href="CaNhan&title=Thông tin cá nhân">Tài khoản</a></li>
    <li><a class="Personally__Active" href="TheoDoiDonHang&title=Theo dõi đơn hàng">Theo dõi đơn hàng</a></li>
    <li><a href="DanhSachYeuThich&title=Danh sách yêu thích">Danh sách yêu thích</a></li>
    <li><a class="Logined__Menu--Logout">Đăng xuất</a></li>
</ul>