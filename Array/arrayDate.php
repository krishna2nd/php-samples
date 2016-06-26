<?php
class DisableDate {
	public $dates; 

	public function DisableDate($data) {

		if(is_array($data)) {
			$this->dates = $data;
		}
		else { 
			$this->dates = explode(',', $data);
		}
	}

	public function json() {
		return  json_encode($this);
	}
	

}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	header('Content-type', 'application/json');
	die((new DisableDate($_REQUEST['dateArray']))->json());
} 

?>