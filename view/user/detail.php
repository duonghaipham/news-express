<div id="profile">
    <a href='http://localhost/news-express/index.php?controller=user&action=load_update'>
        <div id="edit">Cập nhật</div>
    </a>
    <?php
    echo "<img src='" . 'test' . "' alt='Profile picture'>";
    echo "<ul><li><span>Họ tên:</span> " . $profile['name'] . "</li>";
    echo "<li><span>Email:</span> " . $profile['email'] . "</li>";
    echo "<li><span>Điện thoại:</span> " . $profile['phone'] . "</li>";
    echo "<li><span>Ngày sinh:</span> " . $profile['birthday'] . "</li>";
    echo "<li><span>Giới tính:</span> " . ($profile['gender'] == 1 ? 'Nam' : 'Nữ') . "</li></ul>";
    ?>
</div>