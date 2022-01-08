<div class="container-fluid">
    <div class="row side-navbar">
        <div class="col-xs-0 col-sm-2 sider bg-light p-0 pt-2">
            <ul class="list-unstyled">
                <?php $navs = ['Dashboard' => "/dashboard", "Destinations" => "/destinations", "Cities" => "/cites", "Plans" => "/plans" ];
                foreach($navs as $label=>$link):
                ?>
                <li class=<?php echo Request::get('url') == "admin$link" ? 'active' : '' ;?>><a class="btn btn-block text-left text-dark" href="<?php echo BASE_URL."/admin".$link ?>"><?php echo $label; ?></a></li>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-10 layout">
