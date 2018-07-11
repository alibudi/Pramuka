<?php
	$pdf = new Pdf('P', 'mm', 'A5', true, 'UTF-8', false);
	$pdf->SetTitle('Laporan Data Sekolah');
	$pdf->SetTopMargin(20);
	$pdf->setFooterMargin(20);
	$pdf->SetAutoPageBreak(true);
	$pdf->SetAuthor('Author');
	$pdf->SetDisplayMode('real', 'default');
	$pdf->AddPage();
        // setting jenis font yang akan digunakan
        /*$pdf->SetFont('Arial','B',16);*/
        // mencetak string 
        $pdf->Cell(190,7,'APLIKASI PRAMUKA',0,1,'C');
        /*$pdf->SetFont('Arial','B',12);*/
        $pdf->Cell(190,7,'DATA SEKOLAH ',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
       /* $pdf->SetFont('Arial','B',10);*/
        $pdf->Cell(20,6,'ID',1,0);
        $pdf->Cell(85,6,'NAMA SEKOLAH',1,0);
        $pdf->Cell(27,6,'NO GUDEP',1,0);
        $pdf->Cell(50,6,'ALAMAT',1,1);
   
        $sekolah = $this->db->get('tb_sekolah')->result();
        foreach ($sekolah as $row){
            $pdf->Cell(20,6,$row->id,1,0);
            $pdf->Cell(85,6,$row->nama_sekolah,1,0);
            $pdf->Cell(27,6,$row->no_gudep,1,0);
            $pdf->Cell(50,6,$row->alamat,1,1); 
        }
        $pdf->Output();
?>
 