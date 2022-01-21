<div class="container">
<div class="row p-2 my-3">
        <div class="col-12 d-flex justify-content-end">
            <a href=<?php echo BASE_URL."/admin/plans/create"?> class="btn btn-primary">+ Add</a>
        </div>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Destination</th>
                <th>Valid from</th>
                <th>Valid to</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->plans as $plan): ?>
                <tr>
                    <td><?php echo $plan['name']; ?></td>
                    <td><?php echo $plan['destination']['name']?></td>
                    <td><?php echo $plan['valid_from']; ?></td>
                    <td><?php echo $plan['valid_to']; ?></td>
                    <td>Delete | Edit</td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>