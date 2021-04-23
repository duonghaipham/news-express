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
                echo "<li class='up-head-item'>" . $_SESSION['name'] . "</li>";
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
        <form id="login-form" class="animate" action="http://localhost/news-express/index.php?controller=User&action=login" method="POST">
            <h1>Đăng nhập</h1>
            <input type="text" name="username" placeholder="Tài khoản" required/>
            <input type="password" name="password" placeholder="Mật khẩu" required/>
            <button type="submit" value="submit">Đăng nhập</button>
            <div id="sub-feature">
                <label>
                    <input type="checkbox">Nhớ đăng nhập
                </label>
                <a>Quên mật khẩu?</a>
            </div>
        </form>
    </div>

    <div id="modal-signup">
        <form id="signup-form" class="animate" action="" method="POST">
            <h1>Kết nối với chúng tôi</h1>
            <input type="text" placeholder="Tài khoản" required/>
            <input type="password" placeholder="Mật khẩu" required/>
            <input type="password" placeholder="Nhập lại mật khẩu"/>
            <input type="text" placeholder="Họ tên"/>
            <input type="email" placeholder="Email"/>
            <input type="text" placeholder="Ngày sinh" onfocus="(this.type='date')">
            <span>Giới tính </span>
            <label>
                <input type="radio" name="gender" value="male">
                <span>Nam</span>
            </label>
            <label>
                <input type="radio" name="gender" value="male">
                <span>Nữ</span>
            </label>
            <button type="submit">Đăng ký</button>
        </form>
    </div>
</div>