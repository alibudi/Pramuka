  <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Tambah Anggota</h3>
                             <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info'); ?>
                </div>
            <?php } ?>

            <?php
                $name = array(
                    'name'=>'addAnggota',
                    'class'=>'form-horizontal'
                    );  
                echo form_open_multipart('admin/addAnggota/',$name);
            ?>
                    </div>
                  </div>
                </div>
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-12">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Anggota</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">
                          <div class="col-md-12">
                            <div class="form-group">
                            <label class="col-md-2 control-label text-right">Nama</label>
                              <div class="col-md-10">
                              <input type="text" name="nama_lengkap" class="form-control">
                                     <?php echo form_error('nama_lengkap');?>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label text-right">Username</label>
                              <div class="col-md-10">
                              <input type="text" name="username" class="form-control">
                                   <?php echo form_error('username');?>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label text-right">Tanggal Lahir</label>
                              <div class="col-md-10">
                              <input type="date" name="tgl_lahir" class="form-control">
                                   <?php echo form_error('tgl_lahir');?>
                              </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="jk" value="L"> Laki-Laki
                                       <?php echo form_error('jk');?>
                                   <input type="radio" name="jk" value="P"> Perempuan
                                       <?php echo form_error('jk');?>
                                </div>
                              </div>
                            </div>
                             <div class="form-group">
                            <label class="col-md-2 control-label text-right">Sekolah</label>
                              <div class="col-md-10">
                              <input type="text" name="sekolah_id" class="form-control">
                                   <?php echo form_error('sekolah_id');?>
                              </div>
                            </div>
                         <div class="form-group"><label class="col-sm-2 control-label text-right">Agama</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="agama" value="islam"> Islam
                                       <?php echo form_error('islam');?>
                                   <input type="radio" name="agama" value="kristen"> Kristen
                                       <?php echo form_error('kristen');?>
                                    <input type="radio" name="agama" value="budha"> Budha<br>
                                      <?php echo form_error('budha');?>
                                    <input type="radio" name="agama" value="hindu"> Hindu
                                      <?php echo form_error('hindu');?>
                                    <input type="radio" name="agama" value="katholik"> Katholik
                                      <?php echo form_error('katholik');?>
                                    <input type="radio" name="agama" value="konghucu"> Konghuchu
                                      <?php echo form_error('konghucu');?>
                                </div>
                              </div>
                            </div>
                             </div>
                              <div class="form-group">
                                 <label class="col-md-2 control-label text-right">Alamat</label>
                             <div class="col-md-10">
                         <div class="col-md-3">
                           <select name="nama_provinsi" id="nama_provinsi" class="form-control" data-live-search="true">
                               <option style="margin: 50px;" class="selectpicker form-control">--Pilih Provinsi--</option>
                              <?php foreach($provinsi as $k):?>
                                <option  value="<?php echo $k->id_provinsi;?>"><?php echo $k->nama_provinsi;?></option>
                                    <?php endforeach;?>
                             </select>
                      </div>    
                       <div class="col-md-3">
                        <select name="nama_kabupaten" id="nama_kabupaten" class="form-control" data-live-search="true">
                               <option style="margin: 50px;" class="selectpicker form-control">--Pilih Kabupaten--</option>
                              <?php foreach($kabupaten as $k):?>
                                <option  value="<?php echo $k->id_kabupaten;?>"><?php echo $k->nama_kabupaten;?></option>
                                    <?php endforeach;?>
                             </select>
                   
                    </div>
                 
                       <div class="col-md-3">
                         <select name="nama_kecamatan" id="nama_kecamatan" class="form-control" data-live-search="true">
                               <option style="margin: 50px;" class="selectpicker form-control">--Pilih Kecamatan--</option>
                              <?php foreach($kecamatan as $k):?>
                                <option  value="<?php echo $k->id_kecamatan;?>"><?php echo $k->nama_kecamatan;?></option>
                                    <?php endforeach;?>
                             </select>
                        <br>
                      </div>
                      <div class="col-md-3">
                         <select name="nama_desa" id="nama_desa" class="form-control" data-live-search="true">
                               <option style="margin: 50px;" class="selectpicker form-control">--Pilih Desa--</option>
                              <?php foreach($desa as $k):?>
                                <option  value="<?php echo $k->id_desa;?>"><?php echo $k->nama_desa;?></option>
                                    <?php endforeach;?>
                             </select>
                        <br>
                      </div>
                      </div>
                    </div>
                    <div class="form-group">
                            <label class="col-md-2 control-label text-right"></label>
                              <div class="col-md-10">
                              <input type="text" name="alamat" class="form-control">
                                   <?php echo form_error('alamat');?>
                              </div>
                            </div>
                             <div class="form-group"><label class="col-sm-2 control-label text-right">Golongan Darah</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="gol_darah" value="A"> A
                                       <?php echo form_error('A');?>
                                   <input type="radio" name="gol_darah" value="B"> B
                                       <?php echo form_error('B');?><br>
                                    <input type="radio" name="gol_darah" value="O"> O
                                    <input type="radio" name="gol_darah" value="AB"> AB
                                    <br>
                                </div>
                              </div>
                            </div>
                               <div class="form-group">
                            <label class="col-md-2 control-label text-right">Password</label>
                              <div class="col-md-10">
                              <input type="text" name="password" class="form-control">
                                   <?php echo form_error('password');?>
                              </div>
                            </div><br>
                            <div class="form-group"><label class="col-sm-2 control-label text-right">Level</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <select name="level" class="form-control">
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                                  </select>
                                </div>
                                </div>
                                </div> 
                              <div class="form-group"><label class="col-sm-2 control-label text-right">Tingkat Pendidikan</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <select name="tkt_pendidikan" class="form-control">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA/SMA</option>
                                   
                                  </select>
                                </div>
                                </div>
                                </div><br>s        
                               <label class="col-md-2 control-label text-right"></label>
                                <div class="form-group">
                                  <label class="col-md-2 control-label text-right"></label>
                                <div class="col-md-5">
                                       <button type="submit" class="btn btn-3d btn-success" value="submit">Save</button>
                                        <a href="<?php echo base_url('admin/data_anggota');?>" class="btn btn-3d btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    </div>
                                  </div>
                              </div>      
                              
                              