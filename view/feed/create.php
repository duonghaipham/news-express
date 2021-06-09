<div id="publish">
    <h1>Tạo bài viết</h1>
    <form action="<?php echo URLROOT . '?controller=feed&action=post'; ?>"
          method="post"
          enctype="multipart/form-data"
          id="form-publish">
        <label for="title">Tiêu đề</label>
        <input type="text" name="title" id="title" required />

        <label for="summary">Tóm tắt</label>
        <textarea name="summary" id="summary" rows="4" required></textarea>

        <label for="content">Nội dung</label>
        <textarea name="content" id="content" rows="20" required></textarea>

        <label for="img-upload">Hình ảnh</label>
        <input type="file" name="image" id="img-upload" accept="image/*" required>
        <img src="#" alt="Description" id="img-preview">

        <button type="submit" id="btn-post">Đăng</button>
    </form>
</div>