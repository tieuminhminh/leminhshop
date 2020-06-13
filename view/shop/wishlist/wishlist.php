      <?php include('view/shop/layout/header.php') ?>

    <!-- MAIN-MENU-AREA END -->
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- BSTORE-BREADCRUMB START -->
            <div class="bstore-breadcrumb">
              <a href="<?=BASE_URL?>">HOMe <span><i class="fa fa-caret-right"></i> </span> </a>
              <a href="<?=BASE_URL?>/myAccount"> my account <span><i class="fa fa-caret-right"></i></span></a>
              <span> My wishlists</span>
            </div>
            <!-- BSTORE-BREADCRUMB END -->
          </div>
        </div>
        <div class="row">         
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <!-- SINGLE SIDEBAR TAG START -->
            <div class="product-left-sidebar">
              <h2 class="left-title pro-g-page-title">Tags </h2>
              <div class="category-tag">
                <a href="#">fashion</a>
                <a href="#">handbags</a>
                <a href="#">men</a>
                <a href="#">Kids</a>
                <a href="#">women</a>
                <a href="#">New</a>
                <a href="#">Accessories</a>
                <a href="#">clothing</a>
                <a href="#">New</a>
              </div>
            </div>  
            <!-- SINGLE SIDEBAR TAG END -->
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <h2 class="page-title">My wishlists</h2>
            <!-- WISHLISTS-AREA START -->
            <div class="wishlists-area">
              <form class="new-wishlists-box primari-box" id="savewishlist" method="post" action="#">
                <h3 class="box-subheading">New wishlist</h3>
                <div class="primary-box-content">
                  <div class="form-group wishlists-form-group primary-form-group">
                    <label for="wishlist">Name</label>
                    <input type="text" value="" name="wishlist" id="wishlist" class="form-control input-feild white">
                  </div>
                  <div class="submit-button">
                    <a href="#" id="savewishlish" class="btn main-btn">Save <i class="fa fa-chevron-right"></i></a>
                  </div>
                </div>
              </form>               
            </div>
            <!-- WISHLISTS-AREA END -->
            <!-- WISHLISTS-CHART START -->
            <div class="wishlists-chart table-responsive">
              <table class="table table-bordered">
                <tr>
                  <th class="wish-name">Name</th>
                  <th class="wish-qty">Qty</th>
                  <th class="wish-view">Viewed</th>
                  <th class="wish-create">Created</th>
                  <th class="wish-link">Direct Link</th>
                  <th class="wish-default">Default</th>
                  <th class="wish-delete">Delete</th>
                </tr>
                <tr>
                  <td>
                    <a href="#">My wishlist </a>
                  </td>
                  <td>
                    <span>3</span>
                  </td>
                  <td>
                    <span>0</span>
                  </td>
                  <td>
                    <span>2015-08-06</span>
                  </td>
                  <td>
                    <a href="#">View </a>
                  </td>
                  <td>
                    <span><i class="fa fa-check-square"></i></span>
                  </td>
                  <td>
                    <a class="dele-wish-list" href="#"><i class="fa fa-close"></i></a>
                  </td>
                </tr>
              </table>
            </div>  
            <!-- WISHLISTS-CHART END -->
            <!-- WISHLISTS-ITEM START -->
            <div class="wishlists-item">
              <div class="wishlists-item-title">
                <a href="#">Hide product show bought products' info <i class="fa fa-close"></i></a>
              </div>
              <div class="Permalink">
                <p>Permalink:</p>
                <input type="text" readonly="readonly" value="htpp://bootexpert.com/product/single-item" class="form-control view-permalink">
                <a href="#" class="send-wish-list">Send this wishlist</a>
              </div>
              <div class="wishlists-all-item">
                <div class="row">
                  <div class="col-md-3 col-sm-4 col-xs-12">
                    <!-- WISHLISTS-SINGLE-ITEM START -->
                    <div class="wishlists-single-item">
                      <div class="wishlist-image">
                        <a href="#"><img src="view/shop/lib/img/wishlist/printed-chiffon-dress.jpg" alt="" /></a>
                      </div>
                      <div class="wishlist-title">
                        <p>Printed Casul Dress <a href="#"><i class="fa fa-close"></i></a></p>
                      </div>
                      <div class="form-group primary-form-group wishlists-form-group">
                        <label>Quantity: </label>
                        <input type="text" value="1" name="quantity" class="form-control input-feild">
                      </div>
                      <div class="form-group primary-form-group wishlists-form-group">
                        <label>Priority: </label>
                        <div class="wish-prioriti">
                          <select name="wishprioriti" id="wishPrioriti1">
                            <option value="">High</option>
                            <option value="">Medium</option>
                            <option value="">Low</option>
                          </select>                       
                        </div>                      
                      </div>  
                      <a class="wish-save" href="#">Save</a>                  
                    </div>
                    <!-- WISHLISTS-SINGLE-ITEM END -->
                  </div>  
                  <div class="col-md-3 col-sm-4 col-xs-12">
                    <!-- WISHLISTS-SINGLE-ITEM START -->
                    <div class="wishlists-single-item">
                      <div class="wishlist-image">
                        <a href="#"><img src="view/shop/lib/img/wishlist/printed-dress.jpg" alt="" /></a>
                      </div>
                      <div class="wishlist-title">
                        <p>Sleeves T-shirt <a href="#"><i class="fa fa-close"></i></a></p>
                      </div>
                      <div class="form-group primary-form-group wishlists-form-group">
                        <label>Quantity: </label>
                        <input type="text" value="1" name="quantity" class="form-control input-feild">
                      </div>
                      <div class="form-group primary-form-group wishlists-form-group">
                        <label>Priority: </label>
                        <div class="wish-prioriti">
                          <select name="wishprioriti" id="wishPrioriti2">
                            <option value="">High</option>
                            <option value="">Medium</option>
                            <option value="">Low</option>
                          </select>                       
                        </div>                      
                      </div>  
                      <a class="wish-save" href="#">Save</a>                
                    </div>
                    <!-- WISHLISTS-SINGLE-ITEM END -->
                  </div>  
                  <div class="col-md-3 col-sm-4 col-xs-12">
                    <!-- WISHLISTS-SINGLE-ITEM START -->
                    <div class="wishlists-single-item">
                      <div class="wishlist-image">
                        <a href="#"><img src="view/shop/lib/img/wishlist/printed-summer-dress.jpg" alt="" /></a>
                      </div>
                      <div class="wishlist-title">
                        <p>Clothing Summer Dresses <a href="#"><i class="fa fa-close"></i></a></p>
                      </div>
                      <div class="form-group primary-form-group wishlists-form-group">
                        <label>Quantity: </label>
                        <input type="text" value="1" name="quantity" class="form-control input-feild">
                      </div>
                      <div class="form-group primary-form-group wishlists-form-group">
                        <label>Priority: </label>
                        <div class="wish-prioriti">
                          <select name="wishprioriti" id="wishPrioriti3">
                            <option value="">High</option>
                            <option value="">Medium</option>
                            <option value="">Low</option>
                          </select>                       
                        </div>                      
                      </div>  
                      <a class="wish-save" href="#">Save</a>                
                    </div>
                    <!-- WISHLISTS-SINGLE-ITEM END -->
                  </div>
                  <div class="col-md-3 col-sm-4 col-xs-12 hidden-sm">
                    <!-- WISHLISTS-SINGLE-ITEM START -->
                    <div class="wishlists-single-item">
                      <div class="wishlist-image">
                        <a href="#"><img src="view/shop/lib/img/wishlist/faded-short-sleeves-tshirt.jpg" alt="" /></a>
                      </div>
                      <div class="wishlist-title">
                        <p>Blouse <a href="#"><i class="fa fa-close"></i></a></p>
                      </div>
                      <div class="form-group primary-form-group wishlists-form-group">
                        <label>Quantity: </label>
                        <input type="text" value="1" name="quantity" class="form-control input-feild">
                      </div>
                      <div class="form-group primary-form-group wishlists-form-group">
                        <label>Priority: </label>
                        <div class="wish-prioriti">
                          <select name="wishprioriti" id="wishPrioriti4">
                            <option value="">High</option>
                            <option value="">Medium</option>
                            <option value="">Low</option>
                          </select>                       
                        </div>                      
                      </div>  
                      <a class="wish-save" href="#">Save</a>                
                    </div>
                    <!-- WISHLISTS-SINGLE-ITEM END -->
                  </div>                    
                </div>
                <!-- WISH-LIST BACT HOME START-->
                <div class="wish-back-link">
                  <a  class="wish-save" href="<?=BASE_URL?>/myAccount"><i class="fa fa-chevron-left"></i> Back to Your Account</a>
                  <a  class="wish-save" href="<?=BASE_URL?>"><i class="fa fa-chevron-left"></i> Home</a>
                </div>
                <!-- WISH-LIST BACT HOME END -->
              </div>
            </div>  
            <!-- WISHLISTS-ITEM END -->
          </div>
        </div>
      </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
    <!-- BRAND-CLIENT-AREA START -->
      <section class="brand-client-area">
      <div class="container">
        <div class="row">
          <!-- BRAND-CLIENT-ROW START -->
          <div class="brand-client-row">
            <div class="center-title-area">
              <h2 class="center-title">BRAND & CLIENTS</h2>
            </div>
            <div class="col-xs-12">
              <div class="row">
                <!-- CLIENT-CAROUSEL START -->
                <div class="client-carousel">
                  <!-- CLIENT-SINGLE START -->
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/1.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/2.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/3.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/4.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/5.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/1.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->                  
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/3.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/2.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/3.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/4.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/5.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/1.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->                  
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/3.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/4.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->
                  <!-- CLIENT-SINGLE START -->                
                  <div class="item">
                    <div class="single-client">
                      <a href="#">
                        <img src="view/shop/lib/img/brand/5.png" alt="brand-client" />
                      </a>
                    </div>                  
                  </div>
                  <!-- CLIENT-SINGLE END -->                  
                </div>
                <!-- CLIENT-CAROUSEL END -->
              </div>
            </div>
          </div>
          <!-- BRAND-CLIENT-ROW END -->
        </div>
      </div>
    </section>
    <!-- BRAND-CLIENT-AREA END -->
    <!-- COMPANY-FACALITY START -->
    <section class="company-facality">
      <div class="container">
        <div class="row">
          <div class="company-facality-row">
            <!-- SINGLE-FACALITY START -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="single-facality">
                <div class="facality-icon">
                  <i class="fa fa-rocket"></i>
                </div>
                <div class="facality-text">
                  <h3 class="facality-heading-text">FREE SHIPPING</h3>
                  <span>on order over $100</span>
                </div>
              </div>
            </div>
            <!-- SINGLE-FACALITY END -->
            <!-- SINGLE-FACALITY START -->
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="single-facality">
                <div class="facality-icon">
                  <i class="fa fa-umbrella"></i>
                </div>
                <div class="facality-text">
                  <h3 class="facality-heading-text">24/7 SUPPORT</h3>
                  <span>online consultations</span>
                </div>
              </div>
            </div>
            <!-- SINGLE-FACALITY END -->
            <!-- SINGLE-FACALITY START -->            
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="single-facality">
                <div class="facality-icon">
                  <i class="fa fa-calendar"></i>
                </div>
                <div class="facality-text">
                  <h3 class="facality-heading-text">DAILY UPDATES</h3>
                  <span>Check out store for latest</span>
                </div>
              </div>
            </div>
            <!-- SINGLE-FACALITY END -->
            <!-- SINGLE-FACALITY START -->            
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
              <div class="single-facality">
                <div class="facality-icon">
                  <i class="fa fa-refresh"></i>
                </div>
                <div class="facality-text">
                  <h3 class="facality-heading-text">30-DAY RETURNS</h3>
                  <span>moneyback guarantee</span>
                </div>
              </div>
            </div>    
            <!-- SINGLE-FACALITY END -->          
          </div>
        </div>
      </div>
    </section>
    <!-- COMPANY-FACALITY END -->
    <!-- FOOTER-TOP-AREA START -->
         <?php include('view/shop/layout/footer.php') ?>
