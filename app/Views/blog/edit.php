<div class="container">
    <h1>Update post</h1>
    <?php if ($_POST): ?>
        <?= \Config\Services::validation()->listErrors();?>
    <?php endif; ?>
    <form class="" action="<?= base_url('/blog/update/'.$post['id'])?>" method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title" value="<?= $post['title']?>">
        </div>
        <div class="form-group">
            <label for="title">Body:</label>
        <textarea class= "form-control" name="body" id="body" value="<?= $post['body']?>" ></textarea>        
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </form>
</div>