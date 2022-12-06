<?php 
        require_once "./mvc/Views/User/blocks/BreadCrum.php"
    ?>

<section class="closeSearch">
    <div class="Personally">
        <div class="Personally--Left">
            <?php require_once "./mvc/Views/User/blocks/MenuPersonally.php"?>
        </div>
        <div class="Personally--Right">
            <div class="InforAccount">
                <div class="InforAccount__Name InforAccount--Item">
                    <input type="text" class="InforAccount--Name login--Input" placeholder=" "
                        value="<?php echo $data["Account"][0]["hoTen"] ?>">
                    <label class="Login-Label" for="Email">Name</label>
                </div>
                <div class="InforAccount__Gender">
                    <label for="">Giới tính: </label>
                    <div>
                        <input type="radio" class="GenderMale" name="Gender" value="Nam"
                            <?php if($data["Account"][0]["gioiTinh"] === "Nam") echo "checked"?>><span>Nam</span>
                    </div>
                    <div>
                        <input type="radio" class="GenderFemale" name="Gender" value="Nữ"
                            <?php if($data["Account"][0]["gioiTinh"] === "Nữ") echo "checked"?>><span>Nữ</span>
                    </div>
                </div>
                <div class="InforAccount__Date InforAccount--Item">
                    <input type="Date" class="InforAccount--Date login--Input" placeholder=" "
                        value="<?php echo $data["Account"][0]["ngaysinh"] ?>">
                    <label class="Login-Label" for="">Birth Date</label>
                </div>
                <div class="InforAccount__Address InforAccount--Item">
                    <input type="text" class="InforAccount--Address login--Input" placeholder=" "
                        value="<?php echo $data["Account"][0]["diachi"] ?>">
                    <label class="Login-Label" for="Email">Address</label>
                </div>
                <div class="InforAccount__Phone InforAccount--Item">
                    <input type="text" class="InforAccount--Phone login--Input" placeholder=" "
                        value="<?php echo $data["Account"][0]["sdt"] ?>">
                    <label class="Login-Label" for="Email">Phone Number</label>
                </div>
                <div class="InforAccount__Email InforAccount--Item">
                    <input type="text" disabled class="InforAccount--Email" placeholder=" "
                        value="<?php echo $data["Account"][0]["email"] ?>">
                    <label class="Login-Label Login-Label--Email" for="">Email</label>
                </div>
                <div class="InforAccount__Password">
                    <fieldset>
                        <legend>Đổi mật khẩu</legend>
                        <div class="InforAccount__Password InforAccount--Item">
                            <input type="password" class="InforAccount--Password login--Input" placeholder=" " value="">
                            <label class="Login-Label" for="">Current Password</label>
                        </div>
                        <div class="InforAccount__newPassword InforAccount--Item">
                            <input type="password" class="InforAccount--newPassword login--Input" placeholder=" "
                                value="">
                            <label class="Login-Label" for="">New Password</label>
                        </div>
                        <div class="InforAccount__confirmNewPassword InforAccount--Item">
                            <input type="password" class="InforAccount--confirmPassword login--Input" placeholder=" "
                                value="">
                            <label class="Login-Label" for="">Confirm New Password</label>
                        </div>
                    </fieldset>
                </div>
                <div>
                    <label for="" class="changedEror"></label>
                </div>
                <div class="InforAccXác nhận munt__Save">
                    <input type="Button" class="save__InforAccount" value="Lưu thay đổi ">
                </div>
            </div>
        </div>
    </div>
</section>