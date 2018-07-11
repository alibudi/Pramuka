<?php
            $objPHPExcel = new PHPExcel();
            $data = $this->db->get($this->nama_tabel);
 
            // Nama Field Baris Pertama
            $fields = $data->list_fields();
            $col = 0;
            foreach ($fields as $field)
            {
                $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, 1, $field);
                $col++;
            }
     
            // Mengambil Data
            $row = 2;
            foreach($data->result() as $data)
            {
                $col = 0;
                foreach ($fields as $field)
                {
                    $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow($col, $row, $data->$field);
                    $col++;
                }
     
                $row++;
            }
            $objPHPExcel->setActiveSheetIndex(0);
 
            //Set Title
            $objPHPExcel->getActiveSheet()->setTitle('Data Absen');
 
            //Save ke .xlsx, kalau ingin .xls, ubah 'Excel2007' menjadi 'Excel5'
            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
 
            //Header
            header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
            header("Cache-Control: no-store, no-cache, must-revalidate");
            header("Cache-Control: post-check=0, pre-check=0", false);
            header("Pragma: no-cache");
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
            //Nama File
            header('Content-Disposition: attachment;filename="absen.xlsx"');
 
            //Download
            $objWriter->save("php://output");
 
        }
        ?>