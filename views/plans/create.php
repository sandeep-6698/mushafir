<div class="container">
<div class="row p-2 my-3">
        <div class="col-12 d-flex justify-content-end">
            <a href=<?php echo BASE_URL."/admin/plans"?> class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="card w-75 mx-auto my-5">
        <div class="card-header">
            <h3>Create plan</h3>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo BASE_URL.'/admin/plans/create' ?>">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input required type="text" id="name" placeholder="Name" name="name" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="destination">Destination:</label>
                    <select required id="destination" name="destination" class="form-control">
                      <option value="">Choose destination</option>
                      <?php foreach($this->destinations as $destination):?>
                        <option value="<?php echo $destination['id']?>"><?php echo $destination['name']?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="from">Valid from:</label>
                    <input required type="datetime-local" name="valid_from" class="form-control"/>
                </div>
                <div class="form-group">
                    <label required for="from">Valid to:</label>
                    <input type="datetime-local" name="valid_to" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="details">Details:</label>
                    <textarea required id="details" rows="5" name="details" class="form-control" placeholder="Details.."></textarea>
                </div>
                <div class="form-group">
                    <input type="reset" class="btn btn-secondary" value="Reset" />
                    <input type="submit" class="btn btn-success" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</div>