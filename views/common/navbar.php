<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="/">Musafir</a>
  <div class="ml-auto d-flex align-items-center">
    <?php if(Session::get('user')): ?>
      <p class="m-0 mr-2"><?php echo Session::get('user')['name']?></p>
    <a class="btn" href=<?php echo BASE_URL."/auth/logout" ?>>Logout</a>
    <?php else: ?>
    <a class="btn" href=<?php echo BASE_URL."/auth/login?redirect=/".Request::get('url') ?>>Login</a>
    <?php endif; ?>
  </div>
</nav>