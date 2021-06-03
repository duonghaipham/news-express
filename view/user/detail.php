<div id="profile">
    <?php
    echo "<img src='" . 'test' . "' alt='Profile picture'>";
    echo "<ul>";
    echo "<li><span>Name:</span> " . $data['name'] . "</li>";
    echo "<li><span>Email:</span> " . $data['email'] . "</li>";
    echo "<li><span>Phone:</span> " . $data['phone'] . "</li>";
    echo "<li><span>Birthday:</span> " . $data['birthday'] . "</li>";
    echo "<li><span>Gender:</span> " . $data['gender'] . "</li>";
    echo "</ul>";
    ?>
</div>