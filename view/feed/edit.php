<div id="publish">
    <h1>Chỉnh sửa bài viết</h1>
    <form action="http://localhost/news-express/index.php?controller=feed&action=edit&id_feed=<?php echo $post['id_feed'] ?>"
          method="post"
          enctype="multipart/form-data"
          id="form-publish">
        <label for="title">Tiêu đề</label>
        <input type="text" name="title" id="title" value="<?php echo $post['title']; ?>" required />

        <label for="summary">Tóm tắt</label>
        <textarea name="summary" id="summary" rows="4" required><?php echo $post['summary']; ?></textarea>

        <label for="content">Nội dung</label>
        <textarea name="content" id="content" rows="20" required><?php echo $post['content']; ?></textarea>

        <label for="image">Hình ảnh</label>
        <input type="file" name="image" id="img-upload" accept="image/*">
        <img src="<?php echo 'http://localhost/news-express/data/img/' . $post['url_figure'] ?>" alt="Description" id="img-preview">

        <button type="submit" id="btn-post">Lưu lại</button>
    </form>
</div>