<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_model extends CI_Model {

    //FUNÇÃO DB PARA SELECIONAR TODOS OS DADOS
    public function getClientes(){
        
        //QUERY PARA SELECIONAR A TABELA 'cliente' NO DB
        $query = $this->db->get('cliente');
        return $query->result();

    }

    //FUNÇÃO DB PARA ADICIONAR NOVO
    public function addClient($dados = NULL){

        //INSERE DADOS NA TABELA CLIENTE
        if($dados != NULL){
            $this->db->insert('cliente', $dados);
        }

    }

    //FUNÇÃO DB PARA SELECIONAR POR ID
    public function getClienteByID($id = NULL){

        if($id != NULL){
            //QUERYS PARA SELECIONAR O ID, E LIMITAR A 1 REGISTRO
            $this->db->where('idCliente', $id);
            $this->db->limit(1);
            $query = $this->db->get('cliente');
            return $query->row();
        }
    }

    //FUNÇÃO DB PARA EDITAR CLIENTE
    public function editClient($dados = NULL, $id = NULL){

        if ($dados != NULL && $id != NULL){
            //EDITA OS DADOS NO DB
            $this->db->update('cliente', $dados, array('idCliente'=>$id));
        }
    }

    //FUNÇÃO DB PARA APAGAR UM CLIENTE
    public function deleteCliente($id = NULL){

        if($id != NULL){
            //DELETA DADOS DA TABELA
            $this->db->delete('cliente', array('idCliente'=>$id));
        }
    }

    public function limpaTudo(){

        $this->db->truncate('cliente');
    }

}