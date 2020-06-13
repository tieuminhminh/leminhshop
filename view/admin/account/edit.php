<?php require_once 'view/admin/layout/header.php' ?>
<?php require_once 'view/admin/layout/sidebar.php' ?>
    <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">


    <!-- Old Password -->
    <div class="form-group row">
        <label for="sku" class="col-sm-2 col-form-label">Old Password</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="enter old password" required>
        </div>
    </div>

    <!-- Old Password -->
    <!-- New Password -->
    <div class="form-group row">
        <label for="sku" class="col-sm-2 col-form-label">New Password</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="enter new password" required>
        </div>
    </div>

    <!-- New Password -->


    <!-- New Password -->
    <div class="form-group row">
        <label for="sku" class="col-sm-2 col-form-label">Confirm New Password</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="confirm new password" required>
        </div>
    </div>

    <!-- New Password -->


    <div class="card-footer">
        <button class="btn btn-info" name="btnSubmit" id="btnSubmit" onclick="submit()">Update</button>
        <button type="submit" href="#" class="btn btn-default float-right">Cancel</button>
    </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
<?php require_once 'view/admin/layout/footer.php' ?>