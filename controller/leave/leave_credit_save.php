<?php 
include "../../model/model.php"; 
include "../../model/leave/leave_master.php"; 

$leave_master = new leave_master(); 
$leave_master->leave_credit_save();
?>