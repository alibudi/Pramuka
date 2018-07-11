<?php
class ModelGrafik extends CI_Model{
 
    function getGrafik(){
        $query = $this->db->query("SELECT merk,SUM(stok) AS stok FROM barang GROUP BY merk");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
 
}