<?php 
    class students{
        
        public function __construct() {
            // Constructor code here
            // You can initialize properties or perform setup tasks
        }


        static function test(){
            echo 'Hello Basixs user. This is model file';
        }

        static function getStudents($type = ""){
            $t ="";
            if($type == "pending"){
                $t = " and u.status = 0";
            }else if($type == "active"){
                $t = " and u.status = 1";
            }
           $arr = "SELECT u.id, u.username, u.`password`, u.firstname, u.lastname, u.middlename, u.birthdate,u.`status` 'userstat', u.phone, u.address,u.img, c.id 'cid', c.course,c.major,c.`year`,c.section,c.`status` FROM users u, coursemajor c WHERE u.coursemajor = c.id $t and u.type = 'student' ORDER BY u.createdate desc ";

            return execute_select($arr);
        }

    

    }
?>