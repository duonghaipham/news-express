<div id="upper-header" class="full-width">
    <div id="upper-header-block">
        <ul id="upper-header-container">
            <li class="up-head-item">Hotline: 09050159010</li>
            <?php
            if (!isset($_SESSION['username'])) {
                echo "<li class='up-head-item' id='login-btn'>Đăng nhập</li>" .
                    "<li class='up-head-item' id='signup-btn'>Đăng ký</li>";
            }
            else {
                echo "<a href='http://localhost/news-express/index.php?controller=user&action=get_detail'>
                        <li class='up-head-item'>" . $_SESSION['name'] . "</li>
                      </a>";
                echo "<a href='http://localhost/news-express/index.php?controller=feed&action=create'>
                        <li class='up-head-item'>Đăng bài</li>
                      </a>";
                echo "<a href='http://localhost/news-express/index.php?controller=user&action=logout'>
                        <li class='up-head-item' id='logout-btn'>Đăng xuất</li>
                      </a>";
            }
            ?>
        </ul>
    </div>
</div>

<div id="user-section">
    <div id="modal-login">
        <form id="login-form" class="animate" action="http://localhost/news-express/index.php?controller=user&action=login" method="POST">
            <h1>Đăng nhập</h1>
            <?php
            $username = $password = "";
            if (isset($_COOKIE['account'])) {
                $account = explode('_', $_COOKIE['account']);   // split account cookie
                $username = $account[0];
                $password = $account[1];
            }
            echo "<input type='text' name='username' value='$username' placeholder='Tài khoản' required/>";
            echo "<input type='password' name='password' value='$password' placeholder='Mật khẩu' required/>";
            ?>
            <button type="submit" value="submit">Đăng nhập</button>
            <div id="sub-feature">
                <label>
                    <input type="checkbox" name="remember">Nhớ đăng nhập
                </label>
                <a>Quên mật khẩu?</a>
            </div>
        </form>
    </div>

    <div id="modal-signup">
        <form id="signup-form" class="animate" action="http://localhost/news-express/index.php?controller=user&action=signup" method="POST">
            <h1>Kết nối với chúng tôi</h1>
            <input type="text" name='username' placeholder="Tài khoản" id='signup-username' required/>
            <input type="password" name='signup_password' placeholder="Mật khẩu" required/>
            <input type="password" name='re_password' placeholder="Nhập lại mật khẩu" required/>
            <input type="text" name='name' placeholder="Họ tên" required/>
            <input type="email" name='email' placeholder="Email" required/>
            <input type="text" name="birthday" placeholder="Ngày sinh" onfocus="(this.type='date')" required>
            <span>Giới tính </span>
            <input type="radio" name="gender" value="male">
            <label for="male">Nam</label>
            <input type="radio" name="gender" value="female">
            <label for="female">Nữ</label>
            <button type="submit" id="btn-signup" disabled="true">Đăng ký</button>
        </form>
    </div>
</div>