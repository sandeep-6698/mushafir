<div class="card w-50 mx-auto mt-3">
    <div class="card-header">
        <h5>Login</h5>
    </div>
    <div class="card-body">
        <form method="post" action="<?php echo BASE_URL."/auth/login"?>">
            <div class="form-group">
                <label for="email">Email:</label>
                <input id="email" type="text" placeholder="Email" class="form-control" name="email" />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input id="password" type="password" placeholder="Password" class="form-control" name="password" />
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" name="login" value="Login" />
            </div>
        </form>
    </div>
</div>