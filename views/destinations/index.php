<div class="container">
    <div class="row p-2 my-3">
        <div class="col-12 d-flex justify-content-end">
            <a href=<?php echo BASE_URL."/admin/destinations/create"?> class="btn btn-primary">+ Add</a>
        </div>
    </div>
        <div class="row">
        <?php foreach($this->destinations as $destination ){?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="card">
                <img class="card-img-top" height= "200px" src="<?php echo STATIC_FILES.$destination['thumbnail']?>" alt="city-image"/>
                <div class="card-body p-2">
                    <h5><?php echo $destination['name']?></h5>
                    <p><?php echo $destination['short_des']?></p>
                    <a class="btn btn-block btn-primary" href="<?php echo BASE_URL."/admin/destinations/details/".$destination['id']?>">Show more</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>