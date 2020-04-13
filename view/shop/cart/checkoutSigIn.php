<?php include('view/shop/layout/header.php'); ?>

    <!-- MAIN-MENU-AREA END -->
    <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- BSTORE-BREADCRUMB START -->
            <div class="bstore-breadcrumb">
              <a href="view/shop/layout/main.php">HOMe</a>
              <span><i class="fa fa-caret-right "></i></span>
              <span>Sign in / Register</span>
            </div>
            <!-- BSTORE-BREADCRUMB END -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="page-title">Sign in / Register</h2>
          </div>  
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- SHOPING-CART-MENU START -->
            <div class="shoping-cart-menu">
              <ul class="step">
                <li class="step-todo first step-done">
                  <span><a href="view/shop/cart/viewCart.php">01. Summary</a></span>
                </li>
                <li class="step-current second">
                  <span>02. Sign in</span>
                </li>
                <li class="step-todo third">
                  <span>03. Address</span>
                </li>
                <li class="step-todo four">
                  <span>04. Shipping</span>
                </li>
                <li class="step-todo last" id="step_end">
                  <span><em>05.</em> Payment</span>
                </li>
              </ul>                 
            </div>
            <!-- SHOPING-CART-MENU END -->
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <!-- CREATE-NEW-ACCOUNT START -->
            <div class="create-new-account">
              <form class="new-account-box primari-box" id="create-new-account" method="post" action="#">
                <h3 class="box-subheading">Create an account</h3>
                <div class="form-content">
                  <p>Please enter your email address to create an account.</p>
                  <div class="form-group primary-form-group">
                    <label for="email">Email address</label>
                    <input type="text" value="" name="email" id="email" class="form-control input-feild" required>
                  </div>
                  <div class="submit-button">
                    <a href="view/shop/account/registration.php" id="SubmitCreate" class="btn main-btn">
                      <span>
                        <i class="fa fa-user submit-icon"></i>
                        Create an account
                      </span>                     
                    </a>
                  </div>
                </div>
              </form>             
            </div>
            <!-- CREATE-NEW-ACCOUNT END -->
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <!-- REGISTERED-ACCOUNT START -->
            <div class="primari-box registered-account">
              <form class="new-account-box" id="accountLogin" method="post" action="#">
                <h3 class="box-subheading">Already registered?</h3>
                <div class="form-content">
                  <div class="form-group primary-form-group">
                    <label for="loginemail">Email address</label>
                    <input type="text" value="" name="email" id="loginemail" class="form-control input-feild">
                  </div>
                  <div class="form-group primary-form-group">
                    <label for="password">Password</label>
                    <input type="password" value="" name="password" id="password" class="form-control input-feild">
   
                  </div>
                  <div class="forget-password">
                    <p><a href="#">Forgot your password?</a></p>
                  </div>
                  <div class="submit-button">
                    <a href="view/shop/account/myAccount.php" id="signinCreate" class="btn main-btn">
                    <span>
                      <i class="fa fa-lock submit-icon"></i>
                       Sign in
                    </span>
                    </a>
                  </div>
                </div>
              </form>             
            </div>
            <!-- REGISTERED-ACCOUNT END -->
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