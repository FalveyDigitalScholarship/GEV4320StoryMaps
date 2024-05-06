<?php

    class Showcase {

    	public $showcase_data;

        public function __construct() {
			$this->showcase_data = $this->get_data();
        }

        private function get_data(){
        	$data = file_get_contents('');
        	$json =  json_decode($data);
        	return $json->values;

        }

    }

?>
