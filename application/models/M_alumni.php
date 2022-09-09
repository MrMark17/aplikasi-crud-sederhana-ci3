<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_alumni extends CI_Model
{
   function getDataAlumni () {
       $query = $this->db->get('tbl_alumni');
       return $query->result();
   }
   function insertDataAlumni($data){
       $this->db->insert('tbl_alumni', $data);
   }
   function getDataAlumniDetail($nim) {
       $this->db->where('nim', $nim);
       $query = $this->db->get('tbl_alumni');
       return $query->row();
   }
   function updateDataAlumni($nim, $data){
       $this->db->where('nim', $nim);
       $this->db->update('tbl_alumni', $data);
   }
   function deleteDataAlumni($nim) {
       $this->db->where('nim', $nim);
       $this->db->delete('tbl_alumni');
   }
   function detailDataAlumni($nim) {
    $this->db->where('nim', $nim);
    $query = $this->db->get('tbl_alumni');
   }
}