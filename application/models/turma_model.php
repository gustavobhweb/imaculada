<?php

class Turma_Model extends CI_Model{

    public function listar()
    {
        $qr = 'SELECT * FROM tbl_turmas';
        return $this->db->query($qr)->result();
    }

}