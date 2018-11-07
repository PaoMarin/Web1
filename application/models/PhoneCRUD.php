<?php


class PhoneCRUDModel extends CI_Model{


    public function get_phoneCRUD(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
        $query = $this->db->get("phones");
        return $query->result();
    }


    public function insert_phone()
    {    
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description')
        );
        return $this->db->insert('phones', $data);
    }


    public function update_phone($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('phones',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('phones',$data);
        }        
    }


    public function find_phone($id)
    {
        return $this->db->get_where('phones', array('id' => $id))->row();
    }


    public function delete_phone($id)
    {
        return $this->db->delete('phones', array('id' => $id));
    }
}
?>