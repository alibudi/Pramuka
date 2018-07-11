<div class="container-fluid mimin-wrapper">

    <!-- start:Left Menu -->
    <div id="left-menu">
      <div class="sub-left-menu scroll">
        <ul class="nav nav-list">
            <li><div class="left-bg"></div></li>
            <li class="time">
              <h1 class="animated fadeInLeft">21:00</h1>
              <p class="animated fadeInRight">Sat,October 1st 2029</p>
            </li>

            <li><a href="<?php echo base_url()?>admin/index"><span class="fa-home fa"></span>Dashboard</a></li>

            <li class="ripple">
              <a class="tree-toggle nav-header">
                <span class="fa-database fa"></span> Data
                <span class="fa-angle-right fa right-arrow text-right"></span>
              </a>
              <ul class="nav nav-list tree">
                <li><a href="<?php echo base_url()?>admin/data_anggota"><span class="fa-user fa margin= 5px"></span>Data Anggota</a></li>
                <li><a href="<?php echo base_url()?>admin/data_sekolah"><span class="fa-building fa"></span>Data Sekolah</a></li>
              </ul>
            </li>
            <li class="ripple">
              <a class="tree-toggle nav-header">
                <span class="fa-print fa"></span> Report
                <span class="fa-angle-right fa right-arrow text-right"></span>
              </a>
              <ul class="nav nav-list tree">
                <li><a href="#"><span class="fa-file-pdf-o fa"></span>Export to PDF</a></li>
                <li><a href="#"><span class="fa-file-excel-o fa"></span>Export to Excel</a></li>
              </ul>
            </li>
            <li class="ripple">
              <a class="tree-toggle nav-header">
                <span class="fa-rocket fa"></span> Posting
                <span class="fa-angle-right fa right-arrow text-right"></span>
              </a>
              <ul class="nav nav-list tree">
                <li><a href="#">Posting Kegiatan</a></li>
                <li><a href="#">Posting Penghargaan</a></li>
              </ul>
            </li>
            <li><a href="#"><span class="fa-sign-out fa"></span>Logout</a></li>
            <!-- <li><a href="#"><span class="fa-home fa"></span>Dashboard</a></li> -->
          </ul>
        </div>
    </div>
    <!-- end: Left Menu -->


<!-- start: Content -->
  <div id="content">
      <div class="panel box-shadow-none content-header">
        <div class="panel-body">
          <div class="col-md-12">
              <h3 class="animated fadeInLeft">Form Element</h3>
              <p class="animated fadeInDown">
                Form <span class="fa-angle-right fa"></span> Form Element
              </p>
          </div>
        </div>
      </div>
      <div class="form-element">
        <div class="col-md-12 padding-0">
          <div class="col-md-12">
            <div class="panel form-element-padding">
              <div class="panel-heading">
               <h4>Basic Element</h4>
              </div>
               <div class="panel-body" style="padding-bottom:30px;">
                <div class="col-md-12">
                  <div class="form-group"><label class="col-sm-2 control-label text-right">Normal</label>
                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label text-right">Border Bottom</label>
                    <div class="col-sm-10"><input type="text" class="form-control border-bottom"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label text-right">Border Left</label>
                    <div class="col-sm-10"><input type="text" class="form-control border-left"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label text-right">Android Like</label>
                    <div class="col-sm-10"><input type="text" class="form-control android"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label text-right">Password</label>
                    <div class="col-sm-10"><input type="password" class="form-control"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label text-right">Placeholder</label>
                    <div class="col-sm-10"><input type="text" class="form-control" placeholder="Textbox"></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label text-right">Disabled</label>
                    <div class="col-sm-10"><input type="text" class="form-control" disabled></div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label text-right">Radio</label>
                    <div class="col-sm-10">
                      <div class="col-sm-12 padding-0">
                        <input type="radio" name="option"> Option One
                      </div>
                      <div class="col-sm-12 padding-0">
                        <input type="radio" name="option"> Option two
                      </div>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label text-right">Checkbox</label>
                    <div class="col-sm-10">
                      <div class="col-sm-12 padding-0">
                        <input type="checkbox" name="option"> Checkbox One
                      </div>
                      <div class="col-sm-12 padding-0">
                        <input type="checkbox" name="option"> Checkbox two
                      </div>
                    </div>
                  </div>
                  <div class="form-group"><label class="col-sm-2 control-label text-right">Select Option</label>
                    <div class="col-sm-10">
                      <div class="col-sm-12 padding-0">
                        <select class="form-control">
                          <option>option one</option>
                          <option>option two</option>
                          <option>option three</option>
                          <option>option four</option>
                        </select>
                      </div>
                      <div class="col-sm-12 padding-0">
                        <select class="form-control" multiple>
                          <option>option one</option>
                          <option>option two</option>
                          <option>option three</option>
                          <option>option four</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
