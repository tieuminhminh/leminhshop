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

                        <button type="button" class="btn bg-gradient-primary btn-sm" style="color: white;">Create
                        </button>
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
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Color</th>
                                <th>Size</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($data as $item): ?>
                                <tr>
                                    <td><?= $item['id'];?></td>
                                    <td></i>
                                        <img src="<?= $item['image'];?>" alt="product image">
                                    </td>
                                    <td><?= $item['name'];?></td>
                                    <td><?= $item['prices'];?></td>
                                    <td><?= $item['colors'];?></td>
                                    <td><?= $item['sizes'];?></td>

                                    <td>
                                        <button type="button" class="btn btn-outline-success btn-sm">
                                            <a href="<?=BASE_URL?>/updateProduct?id=<?=$item['id'];?>">Edit</a></button>
                                        <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </td>
                                </tr>

                            <?php endforeach ?>
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