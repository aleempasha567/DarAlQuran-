<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 *
 */
class User_model extends CI_Model
{
    public function read()
    {

        $query = $this->db->query("select * from `tbl_users`");
        return $query->result_array();
    }
    public function insert($data)
    {

        $this->user_name    = $data['name']; // please read the below note
        $this->user_password  = $data['pass'];
        $this->user_type = $data['type'];
        if ($this->db->insert('tbl_users', $this)) {
            return 'Data is inserted successfully';
        } else {
            return "Error has occured";
        }
    }
    public function update($id, $data)
    {

        $this->user_name    = $data['name']; // please read the below note
        $this->user_password  = $data['pass'];
        $this->user_type = $data['type'];
        $result = $this->db->update('tbl_users', $this, array('user_id' => $id));
        if ($result) {
            return "Data is updated successfully";
        } else {
            return "Error has occurred";
        }
    }
    public function delete($id)
    {

        $result = $this->db->query("delete from `tbl_users` where user_id = $id");
        if ($result) {
            return "Data is deleted successfully";
        } else {
            return "Error has occurred";
        }
    }
}
