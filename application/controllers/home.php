<?php

class Home extends CI_Controller {

    public function index()
    {
        $this->load->model('Aluno_Model');
        $this->load->model('Turma_Model');
        $viewData = array();

        $turma = $this->input->post('slc_turma') ? (int)$turma : 0;
        $viewData['alunos'] = $turma ? $this->Aluno_Model->listar($turma) : 0;
        $viewData['turmas'] = $this->Turma_Model->listar();

        $this->load->view('home/index', $viewData);
    }

}