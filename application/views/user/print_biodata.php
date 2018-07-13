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
        /*$pdf->Cell(190,7,'APLIKASI PRAMUKA',0,1,'C');*/
        /*$pdf->SetFont('Arial','B',12);*/
        $pdf->Cell(190,7,'BIODATA ANGGOTA PRAMUKA ',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,2);
       /* $pdf->SetFont('Arial','B',10);*/
    
        $sekolah = $this->db->get('tb_anggota')->result();
        foreach ($sekolah as $row){
            $pdf->Cell(7,7,'Nama : ',0,0,'C');
            $pdf->Cell(70,7,$row->nama_lengkap,0,1,'C');
            $pdf->Cell(20,7,'Tanggal Lahir : ',0,0,'C');
            $pdf->Cell(50,7,$row->tgl_lahir,0,1,'C');
            $pdf->Cell(20,7,'Jenis Kelamin : ',0,0,'C');
            $pdf->Cell(30,7,$row->jk,0,1,'C');
            $pdf->Cell(7,7,'Agama : ',0,0,'C');
            $pdf->Cell(63,7,$row->agama,0,1,'C');
            $pdf->Cell(25,7,'Golongan Darah : ',0,0,'C');
            $pdf->Cell(18,7,$row->gol_darah,0,1,'C');
            $pdf->Cell(7,7,'Alamat : ',0,0,'C');
            $pdf->Cell(60,7,$row->alamat,0,1,'C');
            $pdf->Cell(7,7,'Sekolah : ',0,0,'C');
            $pdf->Cell(53,7,$row->sekolah_id,0,1,'C');
        
        }
        $pdf->Output();
?>
 