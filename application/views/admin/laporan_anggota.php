<?php
	$pdf = new Pdf('P', 'mm', 'f1', true, 'UTF-8', false);
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
        $pdf->Cell(190,7,'DATA ANGGOTA ',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
       /* $pdf->SetFont('Arial','B',10);*/
        $pdf->Cell(10,6,'ID',1,0);
        $pdf->Cell(30,6,'NAMA ',1,0);
        $pdf->Cell(27,6,'TGL LAHIR',1,0);
        $pdf->Cell(10,6,'JK',1,0);
        $pdf->Cell(27,6,'AGAMA',1,0);
        $pdf->Cell(20,6,'DARAH',1,0);
        $pdf->Cell(27,6,'ALAMAT',1,0);
        $pdf->Cell(30,6,'PENDIDIKAN',1,1);
   
        $sekolah = $this->db->get('tb_anggota')->result();
        foreach ($sekolah as $row){
            $pdf->Cell(10,6,$row->id_anggota,1,0);
            $pdf->Cell(30,6,$row->nama_lengkap,1,0);
            $pdf->Cell(27,6,$row->tgl_lahir,1,0);
            $pdf->Cell(10,6,$row->jk,1,0);
            $pdf->Cell(27,6,$row->agama,1,0);
            $pdf->Cell(20,6,$row->gol_darah,1,0);
            $pdf->Cell(27,6,$row->alamat,1,0);
            $pdf->Cell(30,6,$row->tkt_pendidikan,1,1); 
        }
        $pdf->Output();
?>
 