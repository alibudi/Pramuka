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
                    'name'=>'editAnggota',
                    'class'=>'form-horizontal'
                    );  
              echo form_open('admin/editAnggota/'.$anggota->id,$name);
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
                              <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $anggota->nama;?>">
                                     <?php echo form_error('nama');?>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label text-right">Username</label>
                              <div class="col-md-10">
                              <input type="text" name="username" id="username" class="form-control" value="<?php echo $anggota->username;?>">
                                   <?php echo form_error('username');?>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label text-right">Tanggal Lahir</label>
                              <div class="col-md-10">
                              <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $anggota->tgl_lahir;?>" class="form-control">
                                   <?php echo form_error('tgl_lahir');?>
                              </div>
                            </div>

                            <div class="form-group"><label class="col-sm-2 control-label text-right">Jenis Kelamin</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="jk" value="<?php echo $anggota->jk;?>" id="jk"> Laki-Laki
                                       <?php echo form_error('jk');?>
                                   <input type="radio" name="jk" value="<?php echo $anggota->jk;?>" id="jk"> Perempuan
                                       <?php echo form_error('jk');?>
                                </div>
                              </div>
                            </div>
                             <div class="form-group">
                            <label class="col-md-2 control-label text-right">Sekolah</label>
                              <div class="col-md-10">
                              <input type="text" name="sekolah_id" id="sekolah_id" value="<?php echo $anggota->sekolah_id;?>" class="form-control">
                                   <?php echo form_error('sekolah_id');?>
                              </div>
                            </div>
                         <div class="form-group"><label class="col-sm-2 control-label text-right">Agama</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="agama" value="<?php echo $anggota->agama;?>" id="agama"> Islam
                                       <?php echo form_error('islam');?>
                                   <input type="radio" name="agama" value="<?php echo $anggota->agama;?>" id="agama"> Kristen
                                       <?php echo form_error('kristen');?>
                                    <input type="radio" name="agama" value="<?php echo $anggota->agama;?>" id="agama"> Budha<br>
                                      <?php echo form_error('budha');?>
                                    <input type="radio" name="agama" value="<?php echo $anggota->agama;?>" id="agama"> Hindu
                                      <?php echo form_error('hindu');?>
                                    <input type="radio" name="agama" value="<?php echo $anggota->agama;?>" id="agama"> Katholik
                                      <?php echo form_error('katholik');?>
                                    <input type="radio" name="agama" value="<?php echo $anggota->agama;?>" id="agama"> Konghuchu
                                      <?php echo form_error('konghucu');?>
                                </div>
                              </div>
                            </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label text-right">Alamat</label>
                              <div class="col-md-10">
                              <input type="text" name="alamat" value="<?php echo $anggota->alamat;?>" id="alamat" class="form-control">
                                   <?php echo form_error('alamat');?>
                              </div>
                            </div>
                             <div class="form-group"><label class="col-sm-2 control-label text-right">Golongan Darah</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <input type="radio" name="gol_darah" id="gol_darah" value="A"> A
                                       <?php echo form_error('A');?>
                                   <input type="radio" name="gol_darah" id="gol_darah" value="B"> B
                                       <?php echo form_error('B');?><br>
                                    <input type="radio" name="gol_darah" id="gol_darah" value="O"> O
                                    <input type="radio" name="gol_darah" id="gol_darah" value="AB"> AB
                                </div>
                              </div>
                            </div>
                               <div class="form-group">
                            <label class="col-md-2 control-label text-right">Password</label>
                              <div class="col-md-10">
                              <input type="text" name="password" value="<?php echo $anggota->password;?>" id="password" class="form-control">
                                   <?php echo form_error('password');?>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label text-right">Level</label>
                              <div class="col-md-10">
                              <input type="text" name="level" id="level" value="<?php echo $anggota->level;?>" class="form-control">
                                   <?php echo form_error('level');?>
                              </div>
                            </div>
                            <div class="form-group">
                            <label class="col-md-2 control-label text-right">Tingkat pendidikan</label>
                              <div class="col-md-10">
                              <input type="text" name="tkt_pendidikan" id="tkt_pendidikan" value="<?php echo $anggota->tkt_pendidikan;?>" class="form-control">
                                   <?php echo form_error('tkt_pendidikan');?>
                              </div>
                            </div>
                         <!--     <div class="form-group"><label class="col-sm-2 control-label text-right">Level</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <select name="level" class="form-control">
                                    <option value="admin">admin</option>
                                    <option value="user">user</option>
                                  </select>
                                </div>
                                </div>
                                </div> -->
                        <!--      <div class="form-group"><label class="col-sm-2 control-label text-right">Tingkat Pendidikan</label>
                              <div class="col-sm-10">
                                <div class="col-sm-12 padding-0">
                                  <select name="gol_darah" class="form-control">
                                    <option value="SD">SD</option>
                                    <option value="SMP">SMP</option>
                                    <option value="SMA">SMA/SMA</option>
                                   
                                  </select>
                                </div>
                                </div>
                                </div>              
                              </div>      -->
                               <label class="col-md-2 control-label text-right"></label>
                                <div class="form-group">
                                  <label class="col-md-2 control-label text-right"></label>
                                <div class="col-md-5">
                                       <button type="submit" name="submit" class="btn  btn-3d btn-success" value="submit">Save</button>
                                        <a href="<?php echo base_url('admin/data_anggota');?>" class="btn btn-3d btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
                                    </div>
                                  </div>
                              