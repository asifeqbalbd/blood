<?php
    class Upmodel extends CI_Model
    {
        
        public function insertdata($data)
        {
            $sql = $this->db->insert('donor', $data);
            return $sql;
        }
        public function showdata()
        {
            $this->db->order_by('name', 'AESC');
            $sql = $this->db->get('donor');
            return $sql;
        }

        public function delete($id){
            $this->db->where('id',$id);
            $sql = $this->db->delete('donor');
            return $sql;
        }

        public function singlenews($id)
        {
            $this->db->where("id", $id);
            $sql = $this->db->get('donor');
            return $sql;
            
        }
    }