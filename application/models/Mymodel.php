<?php
class Mymodel extends CI_Model
{

    /**
     * isUser
     *
     * @param  mixed $data
     * @return integer
     */
    public function isUser($data = array())
    {
        $arr = array(
            'email' => $data['email'],
            'password' => $data['password']
        );
        $this->db->select('*');
        $this->db->from('sess_login');
        $this->db->where($arr);
        $query = $this->db->get();
        $num = $query->num_rows();
        return $num;
    }
}
