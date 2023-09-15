<section>
  <?php 
  $session = \Config\Services::session();
  ?>
  <?php if (isset($session->success)); ?>
  <div class="alert aler-success text-center alert-dismissible fade mb-0" role="0">
    <?= $session->success ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<div class="jumbotron">
    <div class="container">
  <h1 class="display-4">Ci4 Blog!</h1>
  <p class="lead">I am learning Codeigniter framework</p>
  <hr class="my-4">
  <p>Hey, checkout my first web app buil tith Codeigniter 4.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
</div>
</section>

<section class="blog-section">
  <div class="container" >
    <?php if ($news): ?>
      <?php foreach ($news as $newsItem): ?>
        <h3><a href="/blog/<?=$newsItem['slug']?>"><?=$newsItem['title'] ?></h3>
        <?php endforeach; ?>
        <?php else: ?>
          <p class="text-center">No post have been found</p>
        <?php endif; ?>
  </div>
</section>