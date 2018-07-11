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
                <li><a href="<?php echo base_url()?>admin/laporan_pdf"><span class="fa-file-pdf-o fa"></span>Export to PDF</a></li>
                <li><a href="<?php echo base_url()?>admin/laporan_excel"><span class="fa-file-excel-o fa"></span>Export to Excel</a></li>
                <li><a href="<?php echo base_url()?>admin/report_upload"><span class=" icon-cloud-upload"></span>Data Upload</a></li>
              </ul>
            </li>
            <li class="ripple">
              <a class="tree-toggle nav-header">
                <span class="fa-rocket fa"></span> Posting
                <span class="fa-angle-right fa right-arrow text-right"></span>
              </a>
              <ul class="nav nav-list tree">
                <li><a href="<?php echo base_url()?>admin/kegiatan">Posting Kegiatan</a></li>
                <li><a href="<?php echo base_url()?>admin/penghargaan">Posting Penghargaan</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url()?>admin/logout"><span class="fa-sign-out fa"></span>Logout</a></li>
            <!-- <li><a href="#"><span class="fa-home fa"></span>Dashboard</a></li> -->
          </ul>
        </div>
    </div>
    <!-- end: Left Menu -->