<div id="profile">
    <div id="edit">
        <div id="edit-header">Cập nhật</div>
        <ul id="edit-list">
            <li>
                <a href='<?php echo URLROOT . '?controller=user&action=load_update' ?>'>Sửa thông tin</a>
            </li>
            <li>
                <a href='<?php echo URLROOT . '?controller=user&action=load_update_password' ?>'>Đổi mật khẩu</a>
            </li>
        </ul>
    </div>
    <div id="main-profile">
        <div id="avatar">
            <img src='<?php echo URLWEB . 'data/img/' . $profile['avatar']; ?>' alt='Profile picture'>
        </div>
        <ul id='info'>
            <li><span>Họ tên:</span> <?php echo $profile['name']; ?></li>
            <li><span>Email:</span> <?php echo $profile['email']; ?></li>
            <li><span>Điện thoại:</span> <?php echo $profile['phone']; ?></li>
            <li><span>Ngày sinh:</span> <?php echo $profile['birthday']; ?></li>
            <li><span>Giới tính:</span> <?php echo ($profile['gender'] == 1 ? 'Nam' : 'Nữ') ?></li>
        </ul>
    </div>
</div>