<?php
class Lang extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'lang';
    }

    public function get_lang()
    {
        $query = $this->db->query('SELECT * FROM lang');
        return $query->row();
    }

    public function update($data)
    {
        $this->db->where('id', '1');
        $this->db->update($this->table, $data);
    }
}