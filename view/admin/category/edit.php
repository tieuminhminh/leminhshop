<?php require_once 'view/admin/layout/header.php' ?>
<?php require_once 'view/admin/layout/sidebar.php' ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Category</h1>
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
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Update Category</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-body" style="color:gray;">
                            <!-- Product id -->
                            <p id="productId"><?=$data['id']?></p>
                            <!-- Product id -->

                            <!-- Product Name -->
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="enter product name"
                                       value="<?=$data['name']?>"     required>
                                </div>
                            </div>
                            <!-- Product Name -->
                            <!-- Product Price -->
                            <div class="form-group row">
                                <label for="price" class="col-sm-2 col-form-label">Tag</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="prices" name="prices"
                                           placeholder="enter product price"  value="<?=$data['prices']?>" required>
                                </div>
                            </div>
                            <!-- Product Price -->
                            <!-- Product Image -->
                <!--            <div class="form-group row">
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

                                </div>
                            </div>-->
                            <!-- Product Image -->
                            <!-- Product Category -->
                            <div class="form-group row">
                                <label for="image" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control" id="category" name="category">
                                        <option value="1">Man</option>
                                        <option value="2">Woman</option>

                                    </select>
                                </div>
                            </div>
                            <!-- Product Category -->
                            <!-- Product Description -->
                            <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" rows="10" id="description" name="description"><?=$data['description']?></textarea>
                      </div>
                      </div>
                            <!-- Product Description -->
                            <!-- Product Color -->
                            <div class="form-group row">
                                <label for="colors" class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="colors" name="colors"
                                           placeholder="enter product color" value = "<?=$data['colors']?>" required>
                                </div>
                            </div>
                            <!-- Product Color -->
                            <!-- Product Size -->
                            <div class="form-group row">
                                <label for="sizes" class="col-sm-2 col-form-label">Size</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="sizes" name="sizes"
                                           placeholder="enter product size" value = "<?=$data['sizes']?>" required>
                                </div>
                            </div>
                            <!-- Product Size -->

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
            data.append("id",$('#productId').val());
            data.append("name",$('#name').val());
            data.append("prices",$('#prices').val());
            data.append("category",$('#category').val());
            data.append("colors",$('#colors').val());
            data.append("sizes",$('#sizes').val());

            $.ajax({
                url: "<?=BASE_URL?>/updateProduct",
                type: "POST",
                enctype: 'multipart/form-data',
                processData: false,  // Important!
                contentType: false,
                cache: false,
                data: data,
                success: function(result) {

                    if(result != null){
                        try {
                            $('#error').text(JSON.parse(result));

                            return;
                        } catch (e) {
                            $('#btnSubmit').delay(100).fadeOut('slow');
                             $('#btnSubmit').delay(1000).fadeIn('slow');

                            $('#name').val('');
                            $('#prices').val('');
                        }
                    }

                }
            });
        }

    </script>
<?php require_once 'view/admin/layout/footer.php' ?>