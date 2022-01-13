<? $photos = $this->destination['photos'];?>
<div class="w-100 mt-4">
<div id="carouselDestinations" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php foreach($photos as $key=>$photo): ?>
    <li data-target="#carouselDestinations" data-slide-to="<?php echo $key;?>" class="<?php echo $key ? '' : 'active'?>"></li>
    <?php endforeach;?>
  </ol>
  <div class="carousel-inner">
      <?php foreach($photos as $key=>$photo): ?>
    <div class="carousel-item <?php echo $key ? '' : 'active'?>">
      <img class="d-block w-100 h-100" src="<?php echo STATIC_FILES.$photo;?>" alt="slide">
    </div>
    <?php endforeach; ?>
  </div>
  <a class="carousel-control-prev" href="#carouselDestinations" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselDestinations" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>