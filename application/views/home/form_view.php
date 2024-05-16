
<section class="h-100 bg-dark">
  <div class="container py-5 h-100">
    
    <div class="row d-flex justify-content-center align-items-center h-100">
      
      <div class="col">
        
        <div class="card card-registration my-4">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d6d4d0;">
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
            <div class="col-xl-6 d-none d-xl-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
            <form action="<?= site_url('form/adding');?>" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">แจ้งเคสได้ที่นี่</h3>

                <div class="form-outline mb-4">
                <select name="type_company" class="form-control" required>
                <?php if(set_value('type_company')!=''){?>
                        <option value="<?= set_value('type_company'); ?>"><?= set_value('type_company'); ?></option>
                        <?php } else{
                        echo '<option value="">Choose...</option>';
                        }
                        ?>
                        <?php 
                        $datacompanycase =$this->data_model->show_type_company();
                        foreach ($datacompanycase as $rsr) { ?>
                        
                        <option value="<?= $rsr->company_name;?>">-<?= $rsr->company_name;?>-</option>
                        <?php } ?>
                        
                        
                      </select>
                      <label>บริษัท</label>
                </div>


                

                <div class="form-outline mb-4">
                      <select name="case_type" class="form-control" required>
                        <?php if(set_value('case_type')!=''){?>
                        <option value="<?= set_value('case_type'); ?>"><?= set_value('case_type'); ?></option>
                        <?php } else{
                        echo '<option value="">Choose...</option>';
                        }
                        ?>
                        
                        <?php 
                        $datacasetype=$this->data_model->show_type_case();
                        foreach ($datacasetype as $rsr) { ?>
                        <option value="<?= $rsr->type_detail_case;?>">-<?= $rsr->type_detail_case;?>-</option>
                        <?php } ?>
                      </select>
                      <label>ประเภทปัญหา</label>
                </div>

                <div class="form-outline mb-4">
                <textarea name="case_detail" class="form-control" required minlength="5" placeholder="*ต้องการข้อมูลให้ครบถ้วน"><?= set_value('case_detail'); ?></textarea>
                      <span class="fr"><?= form_error('case_detail'); ?></span>
                      <label>รายละเอียดปัญหา</label>
                </div>

                

                <div class="form-outline mb-4">
                
                  <textarea name="case_loc" class="form-control" required minlength="5" placeholder="*ระบุตึก ชั้น ห้อง สถานที่ให้ครบถ้วน"><?= set_value('case_loc'); ?></textarea>
                  <span class="fr"><?= form_error('case_loc'); ?></span>
                  <label>สถานที่</label>
                </div>

                

                <div class="form-outline mb-4">
                
                  <input type="text" name="p_name" class="form-control" required minlength="3" placeholder="*ต้องการข้อมูลชื่อ-วรรค-นามสกุล" value="<?= set_value('p_name'); ?>">
                  <span class="fr"><?= form_error('p_name'); ?></span>
                  <label>ชื่อผู้แจ้ง</label>
                </div>

                <div class="form-outline mb-4">
                
                  <input type="email" name="p_email" class="form-control" required  placeholder="*ต้องการข้อมูล Emailที่ติดต่อได้" value="<?= set_value('p_email'); ?>">
                  <span class="fr"><?= form_error('p_email'); ?></span>
                  <label>อีเมลผู้แจ้ง</label>
                </div>


                <div class="form-outline mb-4">
                
                  <input type="tel" name="p_tel" class="form-control" required  placeholder="*ต้องการข้อมูล เบอร์ที่ติดต่อได้" value="<?= set_value('p_tel'); ?>">
                  <span class="fr"><?= form_error('p_tel'); ?></span>
                  <label>เบอร์ติดต่อ</label>
                </div>

              

                <div class="form-outline mb-4">
                   <input type="file" name="p_img" class="form-control"  accept="image/*" required>
                    <span class="fr"><?= $error;?></span>
                    <label>ภาพประกอบ (บังคับ)</label>
                </div>

                <div class="d-flex justify-content-end pt-3">
                  
                  <button type="submit" class="btn btn-warning btn-lg ms-2">แจ้งเคส</button>
                </div>

              </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section