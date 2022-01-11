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

    public function data_graph(){
        $data = $this->db->get('tbl_graph');
        if ($data->num_rows()>0){
            return $data->result();
        } else{
            return false;
        }
        
     }

    public function transaksiberhasil(){
        $this->db->select('tbl_checkout.*,tbl_user.*')->from('tbl_checkout');
    $this->db->join('tbl_user','tbl_user.username=tbl_checkout.user');
    $this->db->where('tbl_checkout.transaction_status','settlement');
    return $this->db->get()->result();
    }

    public function update($data, $id){
            
            $this->db->where('order_id',$id);
            $this->db->update('tbl_checkout', $data);
            return $this->db->affected_rows();
        }


}


?>