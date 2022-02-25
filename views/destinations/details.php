<? $photos = $this->destination['photos'];?>
<div class="container">
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
<table class="table table-striped table-bordered my-4">
    <thead>
        <tr>
            <th>Name</th>
            <th>Valid from</th>
            <th>Valid to</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($this->plans as $plan): ?>
            <tr>
                <td><?php echo $plan['name']; ?></td>
                <td><?php echo $plan['valid_from']; ?></td>
                <td><?php echo $plan['valid_to']; ?></td>
                <td><a class="confirmDelete" href="<?php echo BASE_URL.'/admin/plans/delete/'.$plan['id']?>"><i class="fas fa-trash"></i></a> | <i class="fas fa-edit"></i></td>
            </tr>
            <?php endforeach; ?>
    </tbody>
</table>
</div>
