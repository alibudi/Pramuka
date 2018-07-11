<!-- start: Javascript -->
<script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>asset/js/jquery.ui.min.js"></script>
<script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>


<!-- plugins -->
<script src="<?php echo base_url()?>asset/js/plugins/moment.min.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/fullcalendar.min.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/jquery.nicescroll.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/jquery.vmap.min.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/maps/jquery.vmap.world.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/jquery.vmap.sampledata.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/chart.min.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/jquery.datatables.min.js"></script>
<script src="<?php echo base_url()?>asset/js/plugins/datatables.bootstrap.min.js"></script>

 <script src="<?php echo base_url()?>asset/js/jquery-1.10.2.min.js"></script>
 <script src="<?php echo base_url()?>asset/js/jquery.chained.min.js"></script>
        <script>
            $("#kabupaten").chained("#provinsi"); // disini kita hubungkan kota dengan provinsi
            $("#kecamatan").chained("#kabupaten"); // disini kita hubungkan kecamatan dengan kota
        </script>
 </script>

<!-- custom -->
 <script src="<?php echo base_url()?>asset/js/main.js"></script>
 <script type="text/javascript" src="<?php echo base_url()?>asset/chartjs/chart.min.js"></script>
   
<script>
 var lineChartData = {
                labels : <?php echo json_encode($merk);?>,
                datasets : [
                     
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($stok);?>
                    }
 
                ]
                 
            }
 
        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);
         
    </script>
 <!-- custom -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#datatables-example').DataTable();
  });
</script>
<!-- end: Javascript -->
<!-- end: Javascript -->
</body>
</html>
