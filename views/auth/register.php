<div class="card w-75 mx-auto mt-3">
    <div class="card-header">
        <h5>Register new user</h5>
    </div>
    <div class="card-body">
        <form method="post" action="<?php echo BASE_URL.'/auth/register' ?>" enctype="multipart/form-data">
            <div class="form-group">
                    <label for="pf_image">Profile Image:</label>
                    <input required id="pf_image" type="file" accept="image/*" placeholder="Profile image" class="form-control" name="pf_image" />
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input required id="name" type="text" placeholder="Name" class="form-control" name="name" />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input required id="email" type="text" placeholder="Email" class="form-control" name="email" />
            </div>
            <div class="form-group">
                <label for="city">City:</label>
                <input required id="city" type="text" placeholder="City" class="form-control" name="city" />
            </div>
            <div class="form-group">
                <label for="email">Gender:</label>
              <select name="gender" required class="form-control">
                <option value="">Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
              </select>
            </div>
            <div class="form-group">
                <label for="dob">Date of birth:</label>
                <input required id="dob" type="date" class="form-control" name="dob" />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input required id="password" type="password" placeholder="Password" class="form-control" name="password" />
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm password:</label>
                <input required id="confirm-password" type="password" placeholder="Confirm password" class="form-control" name="confirm-password" />
            </div>
            <div class="form-group">
                <input required class="btn btn-success" type="submit" name="submit" value="Register" />
                <input required class="btn btn-secondary" type="reset" name="reser" value="Reset" />
            </div>
        </form>
    </div>
</div>