<div class="container">
<div class="row p-2 my-3">
        <div class="col-12 d-flex justify-content-end">
            <a href=<?php echo BASE_URL?> class="btn btn-primary">Home</a>
        </div>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Plan</th>
                <th>Price</th>
                <th>Valid to</th>
                <th>Created at</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($this->bookings as $booking): ?>
                <tr>
                    <td><?php echo $booking['plan']['name']; ?></td>
                    <td><?php echo $booking['price']; ?></td>
                    <td><?php echo $booking['plan']['valid_to']; ?></td>
                    <td><?php echo $booking['created_at']; ?></td>
                    <td><?php echo $booking['status']; ?></td>
                    <?php if($booking['status'] == 'booked'): ?>
                    <td><a class="confirmCancel" href="<?php echo BASE_URL.'/booking/cancel/'.$booking['id']?>">Cancel</a></td>
                    <?php else: ?><td class="text-muted">Cancel</td><?php endif; ?>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</div>