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
                    <form class="form-horizontal" enctype="multipart/form-data">
                        <div class="card-body">
                            <!-- Product Name -->
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="enter product name"
                                           required>
                                </div>
                            </div>
                            <!-- Product Name -->
                            <!-- Product Price -->
                            <div class="form-group row">
                                <label for="price" class="col-sm-2 col-form-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="price" name="price"
                                           placeholder="enter product price" required>
                                </div>
                            </div>
                            <!-- Product Price -->
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
                            <!-- Product Category -->
                            <div class="form-group row">
                                <label for="color" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select multiple="" class="form-control" id="category" name="category">
                                        <?php foreach ($data['category_set'] as $item): ?>
                                            <option value="<?= $item['id'] ?>"><?= $item['name'] ?></option>
                                            <?php foreach ($item['childName'] as $child_item): ?>
                                                <option style="padding-left: 20px" value="<?= $child_item['id'] ?>"><?= $child_item['name'] ?></option>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- Product Category -->
                            <!-- Product Color -->
                            <div class="form-group row">
                                <label for="size" class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <select multiple="" class="form-control" id="color" name="color">

                                        <?php foreach ($data['color'] as $item): ?>
                                            <option value="<?= $item['id'] ?>"><?= $item['value'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- Product Color -->
                            <!-- Product Size -->
                            <div class="form-group row">
                                <label for="size" class="col-sm-2 col-form-label">Size</label>
                                <div class="col-sm-10">
                                    <select multiple="" class="form-control" id="size" name = "size">
                                        <?php foreach ($data['size'] as $item): ?>
                                            <option value="<?= $item['id'] ?>"><?= $item['value'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- Product Size -->
                        </div>

                    </form>
                    <div class="card-footer">
                        <button class="btn btn-info" name="btnSubmit" id="btnSubmit" onclick="submit()">Submit</button>
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