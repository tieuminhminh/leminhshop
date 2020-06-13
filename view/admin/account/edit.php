<?php require_once 'view/admin/layout/header.php' ?>
<?php require_once 'view/admin/layout/sidebar.php' ?>


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
                                <input type="text" class="form-control" id="name" name="name" placeholder="enter new password"required>
                            </div>
                            </div>

                            <!-- New Password -->


                            <!-- New Password -->
                            <div class="form-group row">
                                <label for="sku" class="col-sm-2 col-form-label">Confirm New Password</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="confirm new password"required>
                                </div>
                            </div>

                            <!-- New Password -->





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