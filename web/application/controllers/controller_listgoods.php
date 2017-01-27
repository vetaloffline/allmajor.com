<?php

class Controller_listgoods extends Controller
{	
	
	function __construct($db)
	{	
		$this->model = new Model_listgoods($db);
		$this->view = new View();
	}
	function action_index(){

		$this->view->generate('listform_view.php', 'template_view.php',$data);
	}

	function action_listgoods(){
		$data = $this->model->getlistgood();
		$this->view->generate('listgoods_view.php', 'template_view.php',$data);
	}

	function action_listfiltrkod(){
		$idgood = $_POST['idgood'];
		if (empty($idgood)) {
			$list = $this->model->getlistgood();
			$this->view->generate('listgoods_view.php', 'template_view.php',$list);
		}else{
		$list = $this->model->getLiasidgood();
		$this->view->generate('listgoods_view.php', 'template_view.php',$list);}

	}
	function action_deloperation(){
		$this->model->deloperation();
	}
}	