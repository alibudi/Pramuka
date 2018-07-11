
<!-- start: Content -->
         <div id="content" class="profile-v1">
            <div class="col-md-12 col-sm-12 profile-v1-wrapper">
               <div class="col-md-9  profile-v1-cover-wrap" style="padding-right:0px;">
                   <div class="profile-v1-pp">
                     <img src="<?php echo base_url()?>asset/img/avatar.jpg"/>
                     <h2>User pramuka</h2>

                   </div>
                   <div class="col-md-12 profile-v1-cover">
                     <img src="<?php echo base_url()?>asset/img/bg1.jpg" class="img-responsive">
                   </div>
               </div>
               <div class="col-md-3 col-sm-12 padding-0 profile-v1-right">
                   <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                     <div class="col-md-12 padding-0 sub-profile-v1-right text-center sub-profile-v1-right1">

                     </div>
                   </div>
                   <div class="col-md-6 col-sm-4 profile-v1-right-wrap padding-0">
                       <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right2">

                       </div>
                   </div>
                   <div class="col-md-12 col-sm-4 profile-v1-right-wrap padding-0">
                       <div class="col-md-12 sub-profile-v1-right text-center sub-profile-v1-right3">
                       </div>
                   </div>
               </div>
            </div>
                  <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info'); ?>
                </div>
            <?php } ?>

          
            <div class="col-md-12 col-sm-12 profile-v1-body">
               <div class="col-md-12">
    <?php
                $name = array(
                    'name'=>'edit_Profil',
                    'class'=>'form-horizontal'
                    );  
              echo form_open('user/editProfil/'.$anggota->id_anggota,$name);
            ?> 
                 <div class="form-element">
                <div class="col-md-12 padding-0">
                  <div class="col-md-12">
                    <div class="panel form-element-padding">
                      <div class="panel-heading">
                       <h4>Edit Profile</h4>
                      </div>
            
              <div class="panel-body" style="padding-bottom:30px;">
                        <div class="col-md-12">
                          <div class="form-group"><label class="col-sm-2 control-label text-right">Nama Lengkap</label>
                            <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" value="<?php echo $profil->nama_lengkap;?>" class="form-control" disabled></div>
                          </div>
                          <div class="form-group"><label class="col-sm-2 control-label text-right">Username</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?php echo $profil->username;?>" name="username" id="username"></div>
                          </div>
                          <div class="form-group"><label class="col-sm-2 control-label text-right">Password</label>
                            <div class="col-sm-10">
                            <input type="password" id="password" name="password" value="<?php echo $profil->password;?>" class="form-control"></div><br><br>
                            <div class="form-group text-center"><div class="col-md-12">
                                 <a href="#"><button name="submit" value="submit" class="btn ripple-infinite btn-gradient btn-info">
                            <div>
                                <span>Save</span>
                            </div>
                              </button></a></br></br>
                              <hr/>
                            </div>
                          </div>
                          <?php 
            echo form_close()?>
                        </div>
                      </div>
                    </div>
                  </div>
               </div>

            </div>
            
         </div>
         <!-- end: content -->
       </div>
