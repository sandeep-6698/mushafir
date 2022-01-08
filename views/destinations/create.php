<div class="container">
    <div class="row p-2 my-3">
        <div class="col-12 d-flex justify-content-end">
            <a href=<?php echo BASE_URL."/admin/destinations"?> class="btn btn-primary">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Create destination</h3>
                </div>
                <div class="card-body">
                    <form enctype="multipart/form-data" method="post" action="<?php echo BASE_URL.'/admin/destinations/create'?>">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input required name="name" type="text" id="name" placeholder="Name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="short_des">Short description:</label>
                            <textarea required class="form-control" rows="4" placeholder="Short description" id="short_des" name="short_des"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="thumbnail">Thumbnail:</label>
                            <input required type="file" class="form-control" id="thumbnail" name="thumbnail" />
                        </div>
                        <div class="form-group">
                            <label for="photos">Photos:</label>
                            <input required type="file" multiple class="form-control" id="photos" name="photos[]" />
                        </div>
                        <div class="form-group d-flex align-items-center">
                            <label>
                                <input required type="checkbox" value="1" name="most_visited" placeholder="Name" />
                                Most visited
                            </label>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="type" required>
                                <option value="country">Country</option>
                                <option value="state">State</option>
                                <option selected value="city">City</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="location">Location:</label>
                            <textarea required class="form-control" rows="4" placeholder="Location" id="location" name="location"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea required class="form-control" rows="6" placeholder="Description" id="description" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" value="Create" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>