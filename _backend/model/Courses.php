<?php 
    class Courses{
        
        public function __construct() {
            // Constructor code here
            // You can initialize properties or perform setup tasks
        }


        static function test(){
            echo 'Hello Basixs user. This is model file';
        }

        static function get($status=1){
            $sql = "SELECT * FROM coursemajor WHERE status = $status order by course, major, year, section";
            $result = execute_select($sql);
            return $result;
        }

    

    }
?>