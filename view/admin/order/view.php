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
          
         
        <div class="row">
          <div class="col-12">
            <div class="card">
            <nav class="navbar navbar-expand navbar-secondary navbar-dark">
                     <div class="col-sm-1">
            <button type="button" class="btn btn-outline-primary"><a href="<?= BASE_URL ?>/adminCreateOrder" style="color: white">Create</a></button>

                     </div>

            <div class="col-lg-10">
                          
                      <!-- SEARCH FORM -->
                      
                      <form class="form-inline" style="margin-left:auto;">
                      <div class="col-sm">
                                    <select class="form-control" style="height: 31px; width: 180px; font-size: 15px;">
                                        <option>Pending</option>
                                        <option>Invoice</option>
                                        <option>Shipping</option>
                                        <option>Complete</option>
                                    </select>
                                </div>
                        <div class="input-group input-group-sm">
                          <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                          
                          <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                              <i class="fas fa-search"></i>
                            </button>
                          </div>
                        </div>
                      </form>
            </div>
                    </nav>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="color:gray">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Status</th>
                      <th>Price</th>
                      <th>Shipping Cost</th>
                      <th>Total</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Minh Hang</td>
                      <td>minh.hang.301198@gmail.com</td>
                      <td>Hanoi City</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                      <td>4.000.000</td>
                      <td>40.000</td>
                      <td>4.040.000</td>
                        <td><a href="<?=BASE_URL?>/adminEditOrder"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td>Minh Hang</td>
                      <td>minh.hang.301198@gmail.com</td>
                      <td>Hanoi City</td>
                        <td><span class="badge badge-primary">Shipping</span></td>
                      <td>4.000.000</td>
                      <td>40.000</td>
                      <td>4.040.000</td>
                        <td><a href="<?=BASE_URL?>/adminEditOrder"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td>Minh Hang</td>
                      <td>minh.hang.301198@gmail.com</td>
                      <td>Hanoi City</td>
                        <td><span class="badge badge-warning">Pending</span></td>
                      <td>4.000.000</td>
                      <td>40.000</td>
                      <td>4.040.000</td>
                        <td><a href="<?=BASE_URL?>/adminEditOrder"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td>Minh Hang</td>
                      <td>minh.hang.301198@gmail.com</td>
                      <td>Hanoi City</td>
                        <td><span class="badge badge-success">Complete</span></td>
                      <td>4.000.000</td>
                      <td>40.000</td>
                      <td>4.040.000</td>
                        <td><a href="<?=BASE_URL?>/adminEditOrder"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>5</td>
                      <td>Minh Hang</td>
                      <td>minh.hang.301198@gmail.com</td>
                      <td>Hanoi City</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>4.000.000</td>
                      <td>40.000</td>
                      <td>4.040.000</td>
                        <td><a href="<?=BASE_URL?>/adminEditOrder"><button type="button" class="btn btn-outline-success btn-sm">Edit</button></a>
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