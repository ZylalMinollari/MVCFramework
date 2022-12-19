<?php ?>

<h1>Register</h1>

<form action="" method="post">
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label>First Name</label>
                <input type="text" name="firstname" value="<?php echo $model->firstname ?>"
                    class="form-control <?php echo $model->hasError('firstname') ? ' is-invalid ' : '' ?>">
                <div class="invalid-feedback">
                    <?php echo $model->getFirstError($attribute) ?>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="mb-3">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control">
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>
    <div class="mb-3">
        <label>Confirm Password</label>
        <input type="password" name="passwordConfirm" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>