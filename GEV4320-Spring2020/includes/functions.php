<?php

    class Showcase {

    	public $showcase_data;

        public function __construct() {
			$this->showcase_data = $this->get_data();
        }

        private function get_data(){
                $data = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/1ZaufrGyHAfQVwJPbkneBe9mfBsuBwsOvtREBP9PFRL4/values/Sheet1?key=AIzaSyDYEdz0bcXmVlqLYY0z_qSWzXhZTGLUo6w');
                $json =  json_decode($data);
                return $json->values;

        }

    }

?>
