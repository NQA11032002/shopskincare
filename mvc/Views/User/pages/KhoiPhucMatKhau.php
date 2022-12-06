    <div class="Login closeSearch">
        <div class="Login-Contain">
            <div>
                <h1>Khôi phục mật khẩu</h1>
            </div>
            <div class="Login__Email recovery__Password InforAccount--Item">
                <input type="text" class="Login--Email login--Input login--Input recovery--Email" placeholder=" ">
                <label class="Login-Label" for="Email">Email</label>
            </div>
            <div class="Login__Password recovery__Code InforAccount--Item">
                <div class="contain--Code">
                    <input type="text" class="Login--PassWord login--Input recovery--Code" value="" placeholder=" ">
                    <label class="Login-Label" for="Email">Recovery</label>
                    <!-- <div>
                        <input type="text" id="codeCapcha" class="Code" readonly name="capcha" value=""></input>
                        <i class="fa-solid fa-arrow-rotate-right recovery"></i></input>
                    </div> -->
                    <div>
                        <input type="button" class="sendCode" value="Gửi mã"></input>
                    </div>
                </div>
            </div>
            <div class="Login__Email recovery__Password InforAccount--Item">
                <input type="password" class="Login--Email login--Input login--Input recovery--newPassword"
                    placeholder=" ">
                <label class="Login-Label" for="Email">New Passwords</label>
            </div>
            <div>
                <p class="Login__Error"></p>
                <input type="Button" class="recovery__Password--Submit" value="Khôi phục mật khẩu">
            </div>
            <div class="User__Account">
                <a href="DangNhap"><i class="fa-solid fa-arrow-left-long"></i>Quay lại đăng nhập</a>
            </div>
        </div>
    </div>