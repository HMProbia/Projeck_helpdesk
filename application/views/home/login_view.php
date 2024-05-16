<section class="vh-100" style="background-color: #414142;">
  <div class="container py-5 h-100">
    
    <div class="row d-flex justify-content-center align-items-center h-100">
      
      <div class="col col-xl-10">
        
        <div class="card" style="border-radius: 1rem;">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d6d4d0; border-radius: 1rem; ">
        <a class="navbar-brand" href="<?= site_url('');?>">HelpDesk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('');?>">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('form/allcase');?>">ติดตามงาน</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?= site_url('login');?>">Login</a>
            </li>
          </ul>
        </div>
      </nav>
          <div class="row g-0">
            
            
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="<?= site_url('login/authen');?>" method="post" class="form-horizontal">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <center><img src="<?= base_url('./asset/logo/'.'logo_atta.png'); ?>"width="50%"></center>
                    
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email"  name="admin_email" class="form-control form-control-lg" required minlength="3" placeholder="Email" value="<?= set_value('admin_email'); ?>" />
                    <label class="form-label" for="typeEmailX">Email</label>
                    <span class="fr"><?= form_error('admin_email'); ?></span>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="admin_pwd" class="form-control form-control-lg" required  placeholder="*Password" value="<?= set_value('admin_pwd'); ?>" />
                    <label class="form-label" for="typePasswordX">Password</label>
                    <span class="fr"><?= form_error('admin_pwd'); ?></span>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                  </div>

                  
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>