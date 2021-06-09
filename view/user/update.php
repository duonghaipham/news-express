<form id="update-form"
      action="<?php echo URLROOT . '?controller=user&action=update&username=' . $_SESSION['username']; ?>"
      enctype="multipart/form-data"
      method="POST">
    <h1>Cập nhật thông tin</h1>
    <div id="avatar">
        <label for='img-upload'>
            <img src='<?php echo URLWEB . 'asset/svg/exchange.svg'; ?>' alt='Change'>
        </label>
        <input type='file' name='image' id='img-upload' accept='image/*'>
        <img src='<?php echo URLWEB . 'data/img/' . $profile['avatar']; ?>' alt='Profile picture' id='img-preview'>
    </div>
    <input type='text' name='name' placeholder='Họ tên' value='<?php echo $profile['name']; ?>' required/>
    <input type='email' name='email' placeholder='Email' value='<?php echo $profile['email']; ?>' required/>
    <input type='tel' name='phone' placeholder='Điện thoại' value='<?php echo $profile['phone']; ?>' required/>
    <input type='date' name='birthday' placeholder='Ngày sinh' value='<?php echo $profile['birthday']; ?>' required>
    <div id="gender">
        <span>Giới tính </span>
        <input type='radio' name='gender' value='male' <?php if ($profile['gender'] == 1) echo 'checked' ?>>
        <label for="male">Nam</label>
        <input type="radio" name="gender" value="female" <?php if ($profile['gender'] == 0) echo 'checked' ?>>
        <label for="female">Nữ</label>
    </div>
    <button type="submit" id="btn-save">Lưu thay đổi</button>
</form>