<?php require_once 'view/admin/layout/header.php' ?>
<?php require_once 'view/admin/layout/sidebar.php' ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage Post</h1>
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
                        <h3 class="card-title">Create Post</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-body" style="color:gray;">
                            <!-- Post Name -->
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="enter product name"
                                           required>
                                </div>
                            </div>
                            <!-- Post Name -->
                            <!-- Post Tag -->
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Tag</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name"
                                           placeholder="enter product name"
                                           required>
                                </div>
                            </div>
                            <!-- Post Tag -->
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

                                </div>
                            </div>
                            <!-- Product Image -->
                            <!-- Product Category -->
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>Category1</option>
                                        <option>Category2</option>
                                        <option>Category3</option>
                                        <option>Category4</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Product Category -->
                            <!-- Product Description -->
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <div class="mb-3">
                                        <textarea class="textarea" placeholder="Place some text here"
                                                  style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                                    </div>
                                    </div>
                            </div>
                            <!-- Product Description -->

                            <!-- Product Status -->
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control">
                                        <option>public</option>
                                        <option>private</option>
                                        <option>draft</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Product Status -->
                        </div>

                    </form>
                    <div class="card-footer">
                        <button class="btn btn-info" name="btnSubmit" id="btnSubmit" onclick="submit()">Create</button>
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
            data.append("name", $('#name').val());
            data.append("price", $('#price').val());
            data.append("image", $('#image').prop('files')[0]);
            data.append("category", $('#category').val());
            data.append("color", $('#color').val());
            data.append("size", $('#size').val());

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
                            $('#price').val('');
                        }
                    }

                }
            });
        }

    </script>
<?php require_once 'view/admin/layout/footer.php' ?>