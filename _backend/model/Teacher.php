<?php 
    class teacher{
        
        public function __construct() {
            // Constructor code here
            // You can initialize properties or perform setup tasks
        }


        static function test(){
            echo 'Hello Basixs user. This is model file';
        }

        static function get($status = 1){
            $sql = "select * from teachers where status = $status";
            return execute_select($sql);
        }

        static function getAll(){
            $sql = "select * from teachers";
            return execute_select($sql);
        }

        static function getActive(){
            $sql = "select * from teachers where status = 1";
            return execute_select($sql);
        }

    

    }
?>