
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
                        <h3 class="animated fadeInLeft">Data Kegiatan</h3>
                        
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Kegiatan</h3></div>
                  <div class="col-md-6" style="margin-top:5px;">        
                              <div>
                                  <a href="<?php echo base_url()?>admin/add_kegiatan" ><button class="btn ripple-infinite btn-3d btn-success">
                                <div><i class="fa fa-plus"></i>
                                  <span>Tambah</span>
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
                          <th>Nama Kegiatan</th>
                          <th>Tanggal Pelaksanaan</th>
                          <th>Deskripsi</th>
                          <th>Dokumen</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
              <?php 
                  $no = 1;
                  if($kegiatan!=null){
                    foreach($kegiatan as $d){                  
                  ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php echo $d->nama_kegiatan?></td>
                          <td><?php echo $d->tgl_kegiatan?></td>
                          <td><?php echo $d->rincian?></td>
                          <td><img style="width: 100px;" src='<?= base_url().'uploads/'.$d->dokumen ?>'></td>
                            <td style="text-align: center;">
                          <a class='btn ripple-infinite btn-round btn-edit' href="<?php echo base_url('admin/editKegiatan/'.$d->id);?>"  class=""><i class="glyphicon glyphicon-edit"></i> </a>
                         <a class='btn ripple-infinite btn-round btn-delete' href="<?php echo base_url('admin/deleteKegiatan/'.$d->id);?>" onclick=""><i class="glyphicon glyphicon-trash"></i> </a> 
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