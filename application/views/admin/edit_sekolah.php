  <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Edit Data Sekolah</h3>
                        <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info'); ?>
                </div>
            <?php } ?>

            <?php
                $name = array(
                    'name'=>'editSekolah',
                    'class'=>'form-horizontal'
                    );  
                 echo form_open('admin/editSekolah/'.$sekolah->id,$name);
            ?>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-12">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Data Sekolah</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group">
                            <label class="col-md-2 control-label text-right">Nama Sekolah</label>
                              <div class="col-md-10">
                              <input type="text" name="nama_sekolah" id="nama_sekolah" value="<?php echo $sekolah->nama_sekolah;?>" class="form-control">
                              <?php echo form_error('nama_sekolah');?>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label text-right">No gudep</label>
                              <div class="col-md-10">
                              <input type="text" name="no_gudep" id="no_gudep" value="<?php echo $sekolah->no_gudep;?>" class="form-control">
                              <?php echo form_error('no_gudep');?>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label text-right">Alamat</label>
                              <div class="col-md-10">
                              <input type="text" name="alamat" id="alamat" value="<?php echo $sekolah->alamat;?>" class="form-control">
                              <?php echo form_error('alamat');?>
                              </div>
                            </div>
                   <label class="col-md-2 control-label text-right"></label>
                    <div class="form-group">
                      <label class="col-md-2 control-label text-right"></label>
                    <div class="col-md-5">
                        <button type="submit" name="submit" class="btn  btn-3d btn-success" value="submit">Save</button>
                            <a href="<?php echo base_url('admin/data_sekolah');?>" class="btn btn-3d btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                        </div>
                      </div>
                  