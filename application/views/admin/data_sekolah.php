
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
                        <h3 class="animated fadeInLeft">Data Sekolah</h3>
                        
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Data Sekolah</h3></div>
                  <div class="col-md-6" style="margin-top:5px;">        
                              <div>
                                  <a href="<?php echo base_url()?>admin/add_sekolah" ><button class="btn ripple-infinite btn-3d btn-success">
                                <div><i class="fa fa-plus"></i>
                                  <span>Tambah</span>
                                </div>
                                </button>
                              </a> 
                        <!--        <a href="<?php echo base_url()?>admin/excel" ><button class="btn ripple-infinite btn-3d btn-success">
                                <div><i class="fa fa-file-excel-o"></i>
                                  <span>Eksport to Excel</span>
                                </div>
                                </button>
                              </a>  -->
                             </div>
                            </div>
                            <br><br>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Sekolah</th>
                          <th>No Gudep</th>
                          <th>Alamat</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                  $no = 1;
                  if($sekolah!=null){
                    foreach($sekolah as $d){                  
                  ?>
                        <tr>
                          <td><?php echo $no++?></td>
                          <td><?php echo $d->nama_sekolah?></td>
                          <td><?php echo $d->no_gudep?></td>
                          <td><?php echo $d->alamat?></td>
                            <td style="text-align: center;">
                          <a class='btn ripple-infinite btn-round btn-edit' href="<?php echo base_url('admin/editSekolah/'.$d->id);?>"  class=""><i class="glyphicon glyphicon-edit"></i> </a>
                         <a class='btn ripple-infinite btn-round btn-delete' href="<?php echo base_url('admin/deleteSekolah/'.$d->id);?>" onclick="functionDelete('<?php echo base_url('admin/deleteSekolah/'.$d->id);?>')"><i class="glyphicon glyphicon-trash"></i> </a> 
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