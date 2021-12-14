<?php

class Model_checkout extends CI_Model{


    public function tampil_data(){
       $data = $this->db->get('tbl_checkout');
       if ($data->num_rows()>0){
           return $data->result();
       } else{
           return false;
       }
       
    }

    public function update($data, $id){
            
            $this->db->where('order_id',$id);
            $this->db->update('tbl_checkout', $data);
            return $this->db->affected_rows();
        }


}


?>