<form id="update-form"
      action="<?php echo URLROOT . '?controller=user&action=update_password&username=' . $_SESSION['username']; ?>"
      method="POST">
    <h1>Cập nhật mật khẩu</h1>
    <div id="change-password">
        <input type="password" name='old_password' placeholder="Mật khẩu cũ" required/>
        <input type="password" name='new_password' placeholder='Mật khẩu' required/>
        <input type="password" name='re_new_password' placeholder='Nhập lại mật khẩu' required/>
    </div>
    <button type="submit" id="btn-save">Lưu thay đổi</button>
</form>