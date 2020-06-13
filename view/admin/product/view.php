<?php require_once 'view/admin/layout/header.php' ?>
<?php require_once 'view/admin/layout/sidebar.php' ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Product</h1>

                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= BASE_URL ?>">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <!-- /.content-header -->

        <!-- Main content -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <nav class="navbar navbar-expand navbar-secondary navbar-dark">

                        <a href="<?=BASE_URL?>/adminCreateProduct"><button type="button" class="btn bg-gradient-primary btn-sm" style="color: white;">Create</button></a>
                        <!-- SEARCH FORM -->
                        <form class="form-inline" style="margin-left:auto;">

                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                       aria-label="Search">

                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </nav>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="color:gray">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Color</th>
                                <th>Size</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>Dress</td>
                                <td>2.000.000</td>
                                <td>red, white, black</td>
                                <td>S, M, L</td>
                                <td><a href="<?=BASE_URL?>/adminEditProduct"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Dress</td>
                                <td>2.000.000</td>
                                <td>red, white, black</td>
                                <td>S, M, L</td>
                                <td><a href="<?=BASE_URL?>/adminEditProduct"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Dress</td>
                                <td>2.000.000</td>
                                <td>red, white, black</td>
                                <td>S, M, L</td>
                                <td><a href="<?=BASE_URL?>/adminEditProduct"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Dress</td>
                                <td>2.000.000</td>
                                <td>red, white, black</td>
                                <td>S, M, L</td>
                                <td><a href="<?=BASE_URL?>/adminEditProduct"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                            </tr>

                            <tr>
                                <td>1</td>
                                <td>Dress</td>
                                <td>2.000.000</td>
                                <td>red, white, black</td>
                                <td>S, M, L</td>
                                <td><a href="<?=BASE_URL?>/adminEditProduct"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                                    <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

        </section>

    </div>


<?php require_once 'view/admin/layout/footer.php' ?>