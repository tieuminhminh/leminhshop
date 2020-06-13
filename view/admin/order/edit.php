<?php require_once 'view/admin/layout/header.php' ?>
<?php require_once 'view/admin/layout/sidebar.php' ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Order</h1>
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
        <section class="content">
            <div class="container-fluid">
                <div class="card card-secondary" style="color:gray;">
                    <div class="card-header">
                        <h3 class="card-title">Update Order</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-body">


                            <p class="m-0 text-gray" style="font-size: 22px; height: 50px;">Customer Information</p>

                            <!-- Customer Name -->
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="enter username"
                                           required>
                                </div>
                            </div>

                            <!-- Customer Name -->


                            <!-- Customer Email -->

                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Email</label>
                                <div class="input-group-prepend col-sm-10">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>

                            </div>
                            <!-- Customer Email -->

                            <!-- Customer Number Phone -->
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Number Phone</label>
                                <div class="input-group-prepend col-sm-10">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>

                                    <input type="text" class="form-control" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" im-insert="true">
                                </div>
                            </div>
                            <!-- Customer Number Phone -->

                            <!-- Customer Address -->
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>Hồ Chí Minh</option>
                                        <option>Hà Nội</option>
                                        <option>Đà Nẵng</option>
                                        <option>Đà Lạt</option>
                                        <option>Cần Thơ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Distric</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>Distric 1</option>
                                        <option>Distric 2</option>
                                        <option>Distric 3</option>
                                        <option>Distric 4</option>
                                        <option>Distric 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Ward</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>Ward 1</option>
                                        <option>Ward 2</option>
                                        <option>Ward 3</option>
                                        <option>Ward 4</option>
                                        <option>Ward 5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="4" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                            <div class="form-check" style="height: 70px;">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Set as default address</label>
                            </div>
                            <!-- Customer Address -->
                            <!-- List of Products -->

                            <!-- List of Products -->
                            <!-- /.card-header -->
                            <p class="m-0 text-gray" style="font-size: 22px; height: 50px;">List of Products</p>
                            <div class="card-body table-responsive p-0" style="color:gray">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Avatar</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Number</th>
                                        <th>Total</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><i class="fas fa-user-circle" style="font-size:40px; color:gray;"></i></td>
                                        <td>Jacket</td>
                                        <td>4.000.000</td>
                                        <td><span class="quantity" style="width: 0px;">
                        <input type="number" class="input-text qty text" title="Qty" min="1" value="1" name="number_product">
                      </span></td>
                                        <td>active</td>

                                        <td><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>

                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                                        <td>Hoodie</td>
                                        <td>2.000.000</td>
                                        <td><span class="quantity" style="width: 0px;">
                        <input type="number" class="input-text qty text" title="Qty" min="1" value="1" name="number_product">
                      </span></td>
                                        <td>active</td>
                                        <td><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>

                                    </tr>

                                    <tr>
                                        <td>3</td>
                                        <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                                        <td>Sweater</td>
                                        <td>2.000.000</td>
                                        <td><span class="quantity" style="width: 0px;">
                        <input type="number" class="input-text qty text" title="Qty" min="1" value="1" name="number_product">
                      </span></td>
                                        <td>active</td>
                                        <td><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>

                                    </tr>

                                    <tr>
                                        <td>4</td>
                                        <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                                        <td>Dress</td>
                                        <td>2.500.000</td>
                                        <td><span class="quantity" style="width: 0px;">
                        <input type="number" class="input-text qty text" title="Qty" min="1" value="1" name="number_product">
                      </span></td>
                                        <td>active</td>
                                        <td><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>

                                    </tr>

                                    <tr>
                                        <td>5</td>
                                        <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                                        <td>Short Skirt</td>
                                        <td>1.500.000</td>
                                        <td><span class="quantity" style="width: 0px;">
                        <input type="number" class="input-text qty text" title="Qty" min="1" value="1" name="number_product">
                      </span></td>
                                        <td>active</td>
                                        <td><button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->


                        </div>

                    </form>
                    <div class="card-footer">
                        <button class="btn btn-info" name="btnSubmit" id="btnSubmit" onclick="submit()">Update</button>
                        <button type="submit" href="#" class="btn btn-default float-right">Cancel</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <script>
        function submit() {
            let data = new FormData();
            data.append("name",$('#name').val());
            data.append("price",$('#price').val());
            data.append("image",$('#image').prop('files')[0]);
            data.append("category",$('#category').val());
            data.append("color",$('#color').val());
            data.append("size",$('#size').val());

            $.ajax({
                url: "<?=BASE_URL?>/createProduct",
                type: "POST",
                enctype: 'multipart/form-data',
                processData: false,  // Important!
                contentType: false,
                cache: false,
                data: data,
                success: function(result) {

                    if(result != null && result != ''){
                        try {
                            $('#error').text(JSON.parse(result));

                            return;
                        } catch (e) {
                            $('#btnSubmit').delay(100).fadeOut('slow');
                            $('#btnSubmit').delay(1000).fadeIn('slow');

                            $('#name').val('');
                            $('#price').val('');
                        }
                    }

                }
            });
        }

    </script>
<?php require_once 'view/admin/layout/footer.php' ?>