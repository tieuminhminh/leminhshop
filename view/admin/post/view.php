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
          
         
        <div class="row">
          <div class="col-12">
            <div class="card">
            <nav class="navbar navbar-expand navbar-secondary navbar-dark">

                <a href="<?=BASE_URL?>/adminCreatePost"><button type="button" class="btn bg-gradient-primary btn-sm" style="color: white;">Create</button></a>
                      <!-- SEARCH FORM -->
                      <form class="form-inline" style="margin-left:auto;">
                      
                        <div class="input-group input-group-sm">
                          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                          
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
                      <th>Avatar</th>
                      <th>Title</th>
                      <th>Writer</th>
                      <th>Time</th>
                      <th>Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><i class="fas fa-user-circle" style="font-size:40px; color:gray;"></i></td>
                      <td>Post1</td>
                      <td>Minh Hang</td>
                      <td>08/04/2020</td>
                      <td>active</td>
                        <td><a href="<?=BASE_URL?>/adminEditPost"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                      <td>Post2</td>
                      <td>Minh Hang</td>
                      <td>08/04/2020</td>
                      <td>active</td>
                        <td><a href="<?=BASE_URL?>/adminEditPost"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                      <td>Post3</td>
                      <td>Minh Hang</td>
                      <td>08/04/2020</td>
                      <td>active</td>
                        <td><a href="<?=BASE_URL?>/adminEditPost"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                      <td>Post4</td>
                      <td>Minh Hang</td>
                      <td>08/04/2020</td>
                      <td>active</td>
                        <td><a href="<?=BASE_URL?>/adminEditPost"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>5</td>
                      <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                      <td>Post5</td>
                      <td>Minh Hang</td>
                      <td>08/04/2020</td>
                      <td>active</td>
                        <td><a href="<?=BASE_URL?>/adminEditPost"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
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