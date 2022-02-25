<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Create booking</h3>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo BASE_URL.'/booking/create'?>">
            <input type="hidden" name="user_id" value="<?php echo $this->user ? $this->user['id']: '';?>" class="form-control">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" value="<?php echo $this->user ? $this->user['name']: '';?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="adults">Adults:</label>
                    <input type="text" id="adults" pattern="\d{0,1}" value="1" onblur="calculatePrice()" name="adults" class="form-control">
                </div>
                <div class="form-group">
                    <label for="children">Children:</label>
                    <input type="text" id="children" pattern="\d{0,1}" value="0" onblur="calculatePrice()" name="children" class="form-control">
                </div>
                <div class="form-group">
                    <label for="plan">Plan:</label>
                    <br />
                    <?php foreach($this->plans as $plan): ?>
                    <label class="row pointer hover-active">
                        <div class="col-1 d-flex align-items-center justify-content-center">
                            <input type="radio" value="<?php echo $plan['id']; ?>" required onchange="calculatePrice()" data-price="<?php echo $plan['price']; ?>" name="plan" />
                        </div>
                        <div class="col-3">
                            <p class="mb-0"><strong>Plan:</strong> <?php echo $plan['name']; ?></p>
                            <p class="mb-0"><strong>Destination:</strong> <?php echo $plan['destination']['name']; ?></p>
                        </div>
                        <div class="col-4">
                        <p class="mb-0"><strong>Price:</strong> <?php echo $plan['price']; ?></p>
                            <p class="mb-0"><strong>Valid to:</strong> <?php echo $plan['valid_to']; ?></p>
                        </div>
                    </label>
                    <?php endforeach;?>
                </div>
                <div class="form-group">
                    <label for="plan">Price:</label>
                    <input type="text" name="price" id="price" class="form-control" readonly />
                </div>
                <div class="form-group d-flex">
                    <input class="btn btn-secondary ml-auto" type="reset" value="Reset"/>
                    <input class="btn btn-success ml-2" type="submit" value="Create"/>
                </div>
            </form>
        </div>
    </div>
</div>