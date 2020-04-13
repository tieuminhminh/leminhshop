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
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Create Product</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?=BASE_URL?>/createProduct">
                        <div class="card-body">
                            <!-- Product Name -->
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="enter product name"
                                           required>
                                </div>
                            </div>
                            <!-- Product Name -->
                            <!-- Product Category -->
                            <div class="form-group row">
                                <label for="color" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select size="2" multiple="multiple" class="form-control" id="category" name="category">

                                            <option value="1">Man</option>
                                            <option value="2">Woman</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Product Category -->
                            <!-- Product description -->
                            <div class="form-group row">
                                <label for="description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="textarea" placeholder="Place some text here" name="description" id="description"
                                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"></textarea>
                                </div>
                            </div>
                            <!-- Product Description -->
                            <!-- Product Price -->
                            <div class="form-group row">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="prices" name="prices"
                                           placeholder="enter product price" required>
                                </div>
                            </div>
                            <!-- Product Price -->

                            <!-- Product Color -->
                            <div class="form-group row">
                                <label for="size" class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <select class="form-control" size="3" id="colors" name="colors" multiple>

                                            <option value="red">Red </option>
                                            <option value="blue">Blue </option>
                                            <option value="black">Black</option>
                                            <option value="white">White</option>
                                            <option value="green">Green</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Product Color -->
                            <!-- Product Size -->
                            <div class="form-group row">
                                <label for="size" class="col-sm-2 col-form-label">Size</label>
                                <div class="col-sm-10">
                                    <select multiple="" class="form-control" id="sizes" name="sizes">

                                            <option>X</option>
                                            <option>M</option>
                                            <option>L</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Product Size -->
                            <!-- Product Image -->
                            <div class="form-group row">
                                <label for="image" class="col-sm-2 col-form-label">Image</label>
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image"
                                                   required>
                                            <label class="custom-file-label" for="image">Choose file</label>

                                        </div>

                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>

                                    </div>
                                    <p id="error" style="color:red"></p>
                                </div>
                            </div>
                            <!-- Product Image -->
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-info" name="btnSubmit" id="btnSubmit">Submit</button>
                            <button type="submit" href="#" class="btn btn-default float-right">Cancel</button>
                        </div>
                    </form>

                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <script>
        function submit() {
            let data = new FormData();
            data.append("name", $('#name').val());
            data.append("category", $('#category').val());
            data.append("description", $('#description').val());
            data.append("prices", $('#prices').val());
            data.append("colors", $('#colors').val());
            data.append("sizes", $('#sizes').val());
            data.append("image", $('#image').prop('files')[0]);

            $.ajax({
                url: "<?=BASE_URL?>/createProduct",
                type: "POST",
                enctype: 'multipart/form-data',
                processData: false,  // Important!
                contentType: false,
                cache: false,
                data: data,
                success: function (result) {
                    if (result != null && result != '') {
                        try {
                            $('#error').text(JSON.parse(result));

                            return;
                        } catch (e) {
                            $('#btnSubmit').delay(100).fadeOut('slow');
                            $('#btnSubmit').delay(1000).fadeIn('slow');


                            $('#name').val('');
                            $('#prices').val('');
                            $('#description').val('');
                            $('#image').val('');
                        }
                    }

                }
            });
        }

    </script>
<?php require_once 'view/admin/layout/footer.php' ?>