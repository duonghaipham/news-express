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
        <?php
        echo "<img src='" . URLWEB . 'data/img/' . $profile['avatar'] . "' alt='Profile picture'>";
        echo "<ul id='info'><li><span>Họ tên:</span> " . $profile['name'] . "</li>";
        echo "<li><span>Email:</span> " . $profile['email'] . "</li>";
        echo "<li><span>Điện thoại:</span> " . $profile['phone'] . "</li>";
        echo "<li><span>Ngày sinh:</span> " . $profile['birthday'] . "</li>";
        echo "<li><span>Giới tính:</span> " . ($profile['gender'] == 1 ? 'Nam' : 'Nữ') . "</li></ul>";
        ?>
    </div>
</div>