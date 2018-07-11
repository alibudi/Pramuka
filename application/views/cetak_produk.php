<?
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
			$pdf->SetTitle('Daftar Produk');
			$pdf->SetHeaderMargin(30);
			$pdf->SetTopMargin(20);
			$pdf->setFooterMargin(20);
			$pdf->SetAutoPageBreak(true);
			$pdf->SetAuthor('Author');
			$pdf->SetDisplayMode('real', 'default');
			$pdf->AddPage();
			$i=0;
			$html='<h3>Daftar Produk</h3>
					<table cellspacing="1" bgcolor="#666666" cellpadding="2">
						<tr bgcolor="#ffffff">
							<th width="5%" align="center">No</th>
							<th width="35%" align="center">Id</th>
							<th width="35%" align="center">Nama Sekolah</th>
							<th width="45%" align="center">No Gudep</th>
							<th width="15%" align="center">Alamat</th>
						</tr>'	;
			foreach ($sekolah as $row) 
				{
					$i++;
					$html.='<tr bgcolor="#ffffff">
							<td align="center">'.$i.'</td>
							<td>'.$row['id'].'</td>
							<td>'.$row['nama_sekolah'].'</td>
							<td>'.$row['no_gudep'].'</td>
							<td>'.$row['alamat'].'</td>
						</tr>';
				}
			$html.='</table>';
			$pdf->writeHTML($html, true, false, true, false, '');
			$pdf->Output('daftar_produk.pdf', 'I');
		?>