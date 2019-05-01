<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function index(){

		$this->load->model('clientes_model', 'client');

		//PEGA DADOS NA MODEL
		$data['Clientes'] = $this->client->getClientes();

		//ENVIA DADOS PARA A VIEW
		$this->load->view('clientes', $data);
	}

	//FUNÇÃO PARA ADICIONAR NOVO CLIENTE
	public function novo(){

		$this->load->model('clientes_model', 'client');

		$this->load->view('novoCliente');
	}

	//FUNÇÃO PARA ADICIONAR DADOS NO DB
	public function salvar(){

		//VALIDAÇÕES DE FORMULARIOS
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome','Nome','required');
		$this->form_validation->set_rules('sobrenome','Sobrenome','required');
		$this->form_validation->set_rules('CPF','CPF','required|min_length[14]');
		$this->form_validation->set_rules('DNasc','Data de Nascismento','required');
		$this->form_validation->set_rules('tele','Telefone','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('log','Logradouro','required');
		$this->form_validation->set_rules('numero','Numero','required');
		$this->form_validation->set_rules('bairro','Bairro','required');
		$this->form_validation->set_rules('city','Cidade','required');
		
		//VERIFICA SE FORAM CUMPRIDOS AS VALIDAÇÕES
		$valido = $this->form_validation->run();
		if(!$valido){
			$erros = array('mensagens' => validation_errors('<p class="alert alert-danger alert-dismissible fade show">','<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></p>'));
			$this->load->view('novoCliente', $erros);
			//tentar corrigir o editclient $erros
		}else{
		
			//CASO CASO VALIDO CONTINUA O SALVAMENTO
			$this->load->model('clientes_model', 'client');

			//DADOS DO FORM
			$dados['idCliente']= $this->input->post('idCliente');
			$dados['Nome'] = $this->input->post('nome');
			$dados['Sobrenome'] = $this->input->post('sobrenome');
			$dados['CPF'] = $this->input->post('CPF');
			$dados['DNasc'] = $this->input->post('DNasc');
			$dados['Telefone'] = $this->input->post('tele');
			$dados['Celular'] = $this->input->post('cel');
			$dados['Email'] = $this->input->post('email');
			$dados['CEP'] = $this->input->post('CEP');
			$dados['Logradouro'] = $this->input->post('log');
			$dados['Numero'] = $this->input->post('numero');
			$dados['Complemento'] = $this->input->post('Comple');
			$dados['Bairro'] = $this->input->post('bairro');
			$dados['Cidade'] = $this->input->post('city');
			
			//TRATAMENTO DA IMAGEM
			$cpf = $this->input->post('CPF');
			$data = date("d-m-Y h:i:s");
			$hash = $cpf.$data;
			$Foto = $_FILES['Foto'];
			$config = array(
				'upload_path'  => './img/',
				'allowed_types' => 'jpeg|jpg|png',
				'file_name'     => md5($hash).'.png',
				'max_size'      => '5000',
				'max_width'  => '1024',
				'max_height'  => '768'
			);

			//CARREGA A BIBLIOTECA DE UPLOAD
			$this->load->library('upload');
			$this->upload->initialize($config);
			//ARMAZENA A FOTO NO DIRETORIO IMG EM ASSETS
			if(!$this->upload->do_upload('Foto')){
				echo $this->upload->display_errors();
			}

			//CASO SEJA PASSADO UM ID ELE APENAS EDITAR, CASO CONTRARIO CRIA NOVO REGISTRO
			if ($this->input->post('idCliente') != NULL) {
					//PASSA O NOME DA IMG PARA O BANCO
					$dados['Imagem'] = $config['file_name'];
					//PASSA A ID CLIENTE E OS DADOS PARA MODEL
					$this->client->editClient($dados, $this->input->post('idCliente'));
			} else {
				//ARMAZENA O NOME DA IMG NO DB E O RESTANTE DOS DADOS
				$dados['Imagem'] = $config['file_name'];
				$this->client->addClient($dados);
			}
			
			//REDICIONA A PAGINA INICIAL
			redirect("/");
		}
	}

	public function edit($id = NULL){

		//CASO NÃO SEJA PASSADO UM ID A VIEW NÃO IRA ABRIR
		if($id==NULL){
			redirect("/");
		}

		//CARREGA A MODEL
		$this->load->model('clientes_model', 'client');

		//SELECIONA O CLIENTE PELO ID PASSADO
		$sql = $this->client->getClienteByID($id);

		//CASO NENHUM ID SEJA ENCOTNRADO NA TABELA A PAGINA IRÁ RETORNAR
		if($sql == NULL){
			
			redirect("/");
		}

		//GUARDA DADOS DA TABELA NA ARRAY
		$dados['Cliente'] = $sql;

		//PASSA DADOS PARA A PAGINA DE EDIÇÃO
		$this->load->view('editCliente', $dados);
	}

	public function delete($id = NULL){

		//CASO NÃO SEJA PASSADO UM ID A MODEL NÃO IRA ABRIR
		if($id == NULL){
			redirect("/");
		}

		//CARREGA A MODEL
		$this->load->model('clientes_model', 'client');

		//SELECIONA O CLIENTE PELO ID PASSADO
		$sql = $this->client->getClienteByID($id);

		//VERIFICA SE ID FOI ENCOTRADO
		if($sql != NULL){
			
			//DELETE CLIENTE NA MODEL
			$this->client->deleteCliente($id);
			redirect("/");
		} else {
			//SE NÃO FOR ENCOTRADO RETORNA A PAGINA DE LISTA
			redirect("/");
		}
	}

	public function limpar(){

		//CARREGA A MODEL
		$this->load->model('clientes_model', 'client');

		$this->client->limpaTudo();

		redirect("/");
	}

	public function vizualizar($id = NULL){

		//CASO NÃO SEJA PASSADO UM ID A MODEL NÃO IRA ABRIR
		if($id == NULL){
			redirect("/");
		}
	
		//CARREGA A MODEL
		$this->load->model('clientes_model', 'client');

		//SELECIONA O CLIENTE PELO ID PASSADO
		$sql = $this->client->getClienteByID($id);

		//CASO NENHUM ID SEJA ENCOTNRADO NA TABELA A PAGINA IRÁ RETORNAR
		if($sql == NULL){
			redirect("/");
		}

		//GUARDA DADOS DA TABELA NA ARRAY
		$dados['Cliente'] = $sql;

		//PASSA DADOS PARA A PAGINA DE VIZUALIZAÇÃO
		$this->load->view('verCliente', $dados);

	}
}
