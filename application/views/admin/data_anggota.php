
            <!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                     <?php if($this->session->flashdata('info')){ ?>
                <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <?php echo $this->session->flashdata('info'); ?>
                </div>
            <?php } ?>
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Data Anggota</h3>
                        
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Anggota</h3></div>
                  <div class="col-md-6" style="margin-top:5px;">        
                              <div>
                                  <a href="<?php echo base_url()?>admin/add_anggota" ><button class="btn ripple-infinite btn-3d btn-success">
                                <div><i class="fa fa-plus"></i>
                                  <span>Tambah</span>
                                </div>
                                </button>
                              </a> 
                               <a href="<?php echo base_url()?>admin/laporan_anggota" ><button class="btn ripple-infinite btn-3d btn-success">
                                <div><i class="fa fa-print"></i>
                                  <span>Print</span>
                                </div>
                                </button>
                              </a> 
                             </div>
                            </div>
                            <br><br>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama </th>
                          <th>Agama</th>
                          <th>Alamat</th>
                          <th>Jenis Kelamin</th>
                          <th>Tanggal Lahir</th>
                          <th>Golongan Darah</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                  $no = 1;
                  if($anggota!=null){
                    foreach($anggota as $d){                  
                  ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php echo $d->nama_lengkap?></td>
                          <td><?php echo $d->agama?></td>
                          <td><?php echo $d->alamat?></td>
                          <td><?php echo $d->jk?></td> 
                          <td><?php echo $d->tgl_lahir?></td>
                          <td><?php echo $d->gol_darah?></td>
                       
                            <td style="text-align: center;">
                          <a class='btn ripple-infinite btn-round btn-edit' href="<?php echo base_url('admin/editAnggota/'.$d->id_anggota);?>"  class=""><i class="glyphicon glyphicon-edit"></i> </a>
                         <a class='btn ripple-infinite btn-round btn-delete' href="<?php echo base_url('admin/deleteAnggota/'.$d->id_anggota);?>" onclick="functionDelete('<?php echo base_url('admin/deleteAnggota/'.$d->id_anggota);?>')"><i class="glyphicon glyphicon-trash"></i> </a> 
                      </td>
                        </tr>
                         <?php }
                    } else { ?>
                         <td class="text-center" colspan="9"><i>Tidak Ada Data</i></td>
                    </tr>
                  <?php } ?>
                      </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->