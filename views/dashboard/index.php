<div class="row mt-4">
    <div class="col-12">
        <h2>Know more about destinations:</h2>
    </div>
    <?php for($i=1; $i < 9; $i++){?>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-4">
        <div class="card">
            <img class="card-img-top" height= "200px" src="<?php echo STATIC_FILES."/assets/images/city-$i.jpg"?>" alt="city-image"/>
            <div class="card-body p-2">
                <h5>Bikaner</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sit?</p>
                <button class="btn btn-block btn-primary">Show more</button>
            </div>
        </div>
    </div>
    <?php } ?>
</div>

<div class="row my-4">
    <div class="col-12">
        <h2>Most visited cities:</h2>
    </div>
    <?php for($i=1; $i < 9; $i++){?>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mt-3">
        <div class="row">
            <div class="col-5 pr-0 pt-0 pb-0">
                <img width="100%" height="80px" class="rounded-left" src="<?php echo STATIC_FILES."/assets/images/city-$i.jpg"?>" alt="city-image"/>
            </div>
            <div class="col-7 d-flex flex-column justify-content-center border-right border-top border-bottom rounded-right">
                <h5>Bikaner</h5>
                <button class="btn btn-sm btn-success w-max">Book now</button>
            </div>
        </div>
    </div>
    <?php } ?>
</div>