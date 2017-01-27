<?php

class Controller_product extends Controller
{	
	public $addgood;
	function __construct($db)
	{	
		$this->model = new Model_product($db);
		$this->view = new View();
	}

	function action_index()
	{	
		$this->view->generate('main_view.php', 'template_view.php');	
	}
	function action_add(){

		$auth = Lib::clearRequest($_POST['auth']);
		if ($auth) {
			$this->addgood = $this->model->good_add();
		}
		$this->view->generate('product_add_view.php', 'template_view.php',$this->addgood);
	}
	function action_del(){

		$auth = Lib::clearRequest($_POST['auth']);
		if ($auth) {
			$this->delgood = $this->model->del_good();

		}
		$this->view->generate('product_del_view.php', 'template_view.php',$this->delgood);
	}

	function action_arrival(){

		$auth = Lib::clearRequest($_POST['auth']);
		if ($auth) {
			$this->arrival = $this->model->arrival_good();

		}
		$this->view->generate('product_arrival_view.php', 'template_view.php',$this->arrival);
	}

	function action_consumption(){
		$auth = Lib::clearRequest($_POST['auth']);
		if ($auth) {
			$push = $this->arrival = $this->model->consumption();

		}
		$this->view->generate('product_consumption_view.php', 'template_view.php');	

	}
	function action_consumption2(){

		$auth = Lib::clearRequest($_POST['auth']);
		if ($auth) {
			$push = $this->arrival = $this->model->getPriceP();

		}
		$this->view->generate('product_consumption_view2.php', 'template_view.php',$push);
	}
}	