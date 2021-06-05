<form id="update-form"
      action="http://localhost/news-express/index.php?controller=user&action=update&username=<?php echo $_SESSION['username']; ?>"
      method="POST">
    <h1>Cập nhật thông tin</h1>
    <?php
    echo "<input type='text' name='name' placeholder='Họ tên' value='" . $profile['name'] . "' required/>";
    echo "<input type='email' name='email' placeholder='Email' value='" . $profile['email'] . "' required/>";
    echo "<input type='tel' name='phone' placeholder='Điện thoại' value='" . $profile['phone'] . "' required/>";
    echo "<input type='date' name='birthday' placeholder='Ngày sinh' value='" . $profile['birthday'] . "' required>";
    ?>
    <div id="gender">
        <span>Giới tính </span>
        <input type='radio' name='gender' value='male' <?php if ($profile['gender'] == 1) echo 'checked' ?>>
        <label for="male">Nam</label>
        <input type="radio" name="gender" value="female" <?php if ($profile['gender'] == 0) echo 'checked' ?>>
        <label for="female">Nữ</label>
    </div>
    <div id="change-password">
        <input type='checkbox' name='change password' value='change' id="check-change">
        <label for='change'>Đổi mật khẩu</label>
        <div id="change-section">
            <input type="password" name='old_password' placeholder="Mật khẩu cũ" required/>
            <input type="password" name='new_password' placeholder='Mật khẩu' required/>
            <input type="password" name='re_new_password' placeholder='Nhập lại mật khẩu' required/>
        </div>
    </div>
    <button type="submit" id="btn-save" disabled="true">Lưu thay đổi</button>
</form>