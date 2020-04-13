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
                     
            <button type="button" class="btn bg-gradient-primary btn-sm" style="color: white;">Create</button>
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
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Number</th>
                      <th>Status</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td><i class="fas fa-user-circle" style="font-size:40px; color:gray;"></i></td>
                      <td>Jacket</td>
                      <td>4.000.000</td>
                      <td>40</td>
                      <td>active</td>
                      
                      <td><button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>2</td>
                      <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                      <td>Hoodie</td>
                      <td>2.000.000</td>
                      <td>20</td>
                      <td>active</td>
                      <td><button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>3</td>
                      <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                      <td>Sweater</td>
                      <td>2.000.000</td>
                      <td>20</td>
                      <td>active</td>
                      <td><button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>4</td>
                      <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                      <td>Dress</td>
                      <td>2.500.000</td>
                      <td>25</td>
                      <td>active</td>
                      <td><button type="button" class="btn btn-outline-success btn-sm">Edit</button>
                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></td>
                    </tr>

                    <tr>
                      <td>5</td>
                      <td><i class="fas fa-user-circle" style="font-size:40px; color:grey;"></i></td>
                      <td>Short Skirt</td>
                      <td>1.500.000</td>
                      <td>15</td>
                      <td>active</td>
                      <td><button type="button" class="btn btn-outline-success btn-sm">Edit</button>
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