<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo BASE_URL."/dashboard"?>"><b>Musafir</b></a>
  <div class="ml-auto d-flex align-items-center">
    <?php if(Session::get('user')){
      if(Session::get('user')['role'] == 'admin'){
      ?>
      <div class="m-0 mr-2 rounded-circle flow-hidden">
        <a class="p-0" href=<?php echo BASE_URL."/admin/dashboard" ?>>
          <img height="50px" width="50px" src="<?php echo STATIC_FILES.Session::get('user')['pf_image']?>"/>
        </a>  
      </div>
      <?php } ?>
    <a class="btn" href=<?php echo BASE_URL."/auth/logout" ?>>Logout</a>
    <?php } else{
      $redirect = in_array(Request::get('url'), ['auth/login', 'auth/register']) ? 'dashboard' : Request::get('url');
      ?>
    <a class="btn" href=<?php echo BASE_URL."/auth/login?redirect=/$redirect"?>>Login</a>
    <?php } ?>
  </div>
</nav>