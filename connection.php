<?php
class Modelcore{
	var $con;
	var $db;
	var $qry;
	var $sql;
	function __construct(){
		
		$this->con = mysqli_connect('localhost','root','') or die('host connection error');	//	==|	for server |==
		
		$this->db = mysqli_select_db($this->con,'govseva') or die('database connection error'.mysql_error());		//	==|	for server |==
	}
	function execute(){
		
		$this->sql = mysqli_query( $this->con,$this->qry) or die('query execution error');
		
		 	return $this->sql;
	}
	
	
}
?>