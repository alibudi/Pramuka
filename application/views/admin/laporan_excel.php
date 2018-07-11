
            <!-- start: Content -->
            <div id="content">
               
              <div class="col-md-12 top-20 padding 10">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Laporan</h3></div>
                    <br>
                  <div class="col-md-12" style="margin-top:5px;">        
                              <div>
                                 <div class="col-md-3">
                       
                        <select class="form-control" name="kecamatan" id="kecamatan">
                            <option value="">Kecamatan</option>
                                                            <!--di sini kita tambahkan class berisi id kota-->
                                <option><a href="<?php echo base_url()?>admin/data_sekolah" >Data Sekolah</a></option>
                        </select>
                        <br>
                      </div>
                                  <a href="<?php echo base_url()?>Excel/export" ><button class="btn ripple-infinite btn-3d btn-success">
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
                    
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->