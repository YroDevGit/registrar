<?php 
    //Add codes here...
  
    $query = "SELECT s.id, s.coursemajor, t.firstname, t.lastname, t.middlename, t.username, t.contact, s.`subject`, s.`description`, s.date_created,s.`status` FROM `subject` s, teachers t WHERE s.teacher = t.id"


?>