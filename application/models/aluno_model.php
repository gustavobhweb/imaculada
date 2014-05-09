<?php
class Aluno_Model extends CI_Model{

    public function listar($turma)
    {
        $qr = 'SELECT * FROM tbl_alunos WHERE tbl_turmas_cod_turma = ?';
        $bind = array($turma);
        return $this->db->query($qr, $bind)->result();
    }

}
?>