<?
class Model_listgoods extends Model{

		function getlistgood(){
		$query = "SELECT * FROM `allmajorgistory`";
		return $this->db->makeQuery($query);
	}

	function getLiasidgood(){
		
		$query = "SELECT *
				  FROM `allmajorgistory`
				  WHERE good_id = '$idgood'";
		$data = $this->db->makeQuery($query);
		if ($data) {
				return $data;
			}else{header("Location: /listgoods");}	

	}
	function deloperation(){
		
	}
}
?>