<?php
include_once 'connection.php';   
class Maincore extends Modelcore{  
/* Login */
function select_data($tb_name,$tb_field,$tb_data)
{
	$fsize = sizeof($tb_field);
	
	$dsize = sizeof($tb_data);
	
		if($fsize==$dsize){
			$this->qry = "SELECT * FROM ".$tb_name." WHERE ";
			for($i=0;$i<$fsize;$i++){
				$this->qry .= $tb_field[$i]." = '".$tb_data[$i]."'";
				if(($fsize>1)&&($i<$fsize-1)){					$this->qry .=" AND ";				}
			}
			
			$result = $this->execute();
			return $result;
			
		}
}

/*User Register*/
function insert_data($tb_name,$tb_field,$tb_data){
	
	$fsize=sizeof($tb_field);
	$dsize=sizeof($tb_data);
	if($fsize==$dsize)
	{
		$this->qry = "INSERT INTO ".$tb_name."(";
		foreach($tb_field as $fkey=>$fdata){
		  $this->qry .= $fdata;
		  if(($fsize > 1 ) && ($fkey < $fsize-1)){
		  $this->qry .=", "; }
		  
		}
		 
		 $this->qry .=") VALUES (";
		 foreach($tb_data as $dkey=>$ddata){
			 $this->qry .="'". $ddata ."'";
			 if(($dsize > 1) && ($dkey < $dsize-1)){
				 $this->qry .=" , ";
			 }
		 }
		 $this->qry .=" )";
	
		$result = $this->execute();
		
		return $result;
	}
}

function select_last($tb_name,$s_field)
{

$this->qry = "SELECT MAX( `".$s_field."`) from ".$tb_name;
//echo $this->qry;

$result = $this->execute();
		return $result;


}









































function update_data($tb_name,$tb_field,$tb_data,$tb_id,$tb_field_name)
	{	
		
			$this->qry = "UPDATE ".$tb_name." SET ".$tb_field." = '".$tb_data."' "." WHERE ".$tb_field_name."=".$tb_id;
			
		   // $this->qry .= $tb_field." = '".$tb_data."' ";
		
	        //$this->qry .= " WHERE ".$tb_field_name."=".$tb_id;
		/*foreach($tb_id as $ikey=>$idata){			$this->qry .= $ikey." = '".$idata."'";		}*/	//echo $this->qry;
		//echo $this->qry;
		$result = $this->execute();
		return $result;
	}


function update_dataa($tb_name,$tb_field,$tb_data,$tb_id,$tb_field_name)
	{	//echo $tb_id;
		$fsize = sizeof($tb_field);
	    $dsize = sizeof($tb_data);
		$this->qry  = "UPDATE ".$tb_name." SET ";
		/*foreach($tb_data as $key=>$data){
			$this->qry .= $data." = '".$data."'";
			$loop_count++;
			$loop_count_dec--;
			if(($loop_count>0)&&($loop_count_dec!=0)){		$this->qry .= " , ";	}
		}*/
		
		if($fsize==$dsize){
			$this->qry = "UPDATE ".$tb_name." SET ";
			for($i=0;$i<$fsize;$i++){
				$this->qry .= $tb_field[$i]." = '".$tb_data[$i]."' ";
				if(($fsize>1)&&($i<$fsize-1)){					$this->qry.=", " ;				}
			}
		
		$this->qry .= " WHERE ".$tb_field_name."=".$tb_id;
		/*foreach($tb_id as $ikey=>$idata){			$this->qry .= $ikey." = '".$idata."'";		}*/	//echo $this->qry;
		//echo $this->qry;
		$result = $this->execute();
		return $result;
	}

}	


}
?>