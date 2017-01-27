<?
class Model_product extends Model{

		function good_add(){

			$price  = $_POST['price'];
			$name   = $_POST['name'];
			$goodid = $_POST['goodid'];
			if (!is_numeric($price)) {
			 	return 2;
			 	header("Location: product/add");
			 	die();
			 }
			if (empty($name) || empty($goodid)) {
				return 2;
				header("Location: product/add");
				die();
			}
			$query = "SELECT * 
					  FROM `allmajorgoods` 
					  WHERE good_id = '".$goodid."'";
			if ($this->db->makeQuery($query)) {
				return 3;
				header("Location: product/add");
				die();
			}

			$query = "INSERT INTO `allmajorgoods`(`good_id`, `name`, `price`) 
					  VALUES 				('".$goodid."','".$name."','".$price."')";
			
			if ($this->db->makeQuery($query)) {
				return 1;
			}else{return 2;}
		}

		function del_good(){
			$idgood= $_POST['id_good'];
			$query = "SELECT `good_id`
					  FROM `allmajorgoods` 
					  WHERE good_id = '".$idgood."'";
			if (!$this->db->makeQuery($query)) {
				return 2;
				header("Location: product/del");
				die();
			}
			$query = "DELETE FROM `allmajorgoods` 
					  WHERE good_id = '".$idgood."'";
			$this->db->makeQuery($query);
			return 1;
				
			
		}

		function arrival_good(){
			$data= getdate();
			$data = $data['mday'].'.'.$data['mon'].'.'.$data['year'];
			$idgood = $_POST['id_good'];
			$quanity = $_POST['quanity'];
			$price_purchase = $_POST['price_purchase'];
			$query = "SELECT *
					  FROM `allmajorgoods` 
					  WHERE good_id = '".$idgood."'";
			$good = $this->db->makeQuery($query)[0];
			if (!$good) {
				return 2;
				header("Location: product/arrival");
				die();
			}

			$summa = $price_purchase * $quanity;
			$minsum = $summa + $summa;
			$summa = $summa - $minsum;
			
			$query = "INSERT INTO `allmajorgistory`(`good_id`, `name`, `price`, `quantity`, `puchasePrice`, `operation`, `data`,`summa`) 		  VALUES ('".$idgood."','".$good['name']."','".$good['price']."','".$quanity."','".$price_purchase."','coming','".$data."','".$summa."')";
			if ($this->db->makeQuery($query)) {
				$quanity = $good['quantity'] + $quanity;
				$query = "UPDATE `allmajorgoods` 
						  SET `quantity`='".$quanity."',`purchasePrice`='".$price_purchase."'
						  WHERE good_id = '".$idgood."'";
				if ($this->db->makeQuery($query)) {
					return 1;
				}
			}else{
				return 2;
				header("Location: product/arrival");
				die();
			}
			
	}

	function getPriceP(){
	$goodid = $_POST['id_good'];

	$query ="SELECT `puchasePrice`,`data`,`good_id`
			 FROM `allmajorgistory` 
			 WHERE good_id = '".$goodid."'";
	$push = $this->db->makeQuery($query);
	if (!$push) {
		header("Location: /product/consumption");
		die();
	}else{
	return $push;}
	}

	function consumption(){
		$data= getdate();
		$data = $data['mday'].'.'.$data['mon'].'.'.$data['year'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
		$puchprice = $_POST['puchprice'];
		$puchprice = explode(' ', $puchprice)[0];
		$idgood = $_POST['idgood'];

		if (empty($quantity) || empty($price)) {
			return 2;
			header("Location: /product/consumption");
			die();
		}
		if (!is_numeric($price)) {
			 	return 2;
			 	header("Location: product/consumption");
			 	die();
		}
		$summa = ($price - $puchprice) * $quantity;
		
		$query = "SELECT * 
				  FROM `allmajorgoods`
				  WHERE good_id = '".$idgood."'";
		$good = $this->db->makeQuery($query)[0];
		

		$query = "INSERT INTO `allmajorgistory`(`good_id`, `name`, `price`, `quantity`, `puchasePrice`, `operation`, `data`, `summa`) VALUES ('".$idgood."','".$good['name']."','".$price."','".$quantity."','".$puchprice."','consumption','".$data."','".$summa."')";
		$this->db->makeQuery($query);


	}
}
?>