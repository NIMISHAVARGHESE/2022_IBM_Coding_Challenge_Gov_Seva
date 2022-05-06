<?php

include_once 'query_functions.php';
session_start();
$con = new Maincore(); 

/* LOGIN */
if(isset($_POST['btn_login']))
{	
	$adno1=$_POST['adno1'];
	$phno1=$_POST['phno1'];
	 $tb_name = 'tb_user';
	$tb_field = array('aadhar', 'phno');
	$tb_data = array($adno1,$phno1);
	$sel_data=$con->select_data($tb_name,$tb_field,$tb_data);
	 $row=mysqli_fetch_array($sel_data);
	 //echo $row[0];
	
 if(mysqli_num_rows($sel_data) == 1)
	{
			$_SESSION['userid']=$row['0'];
		header('location:profile/profile.php');
		
	
	}
 else
	 {
		
	  header("location:index.php");
	 }
}



/*User SIGN UP */



if(isset($_POST['btn_register']))
{	

	
	$name=$_POST['name'];
	$phone=$_POST['phno'];
	$aadhar=$_POST['adhno'];
	$yob=$_POST['yob'];
	
	
	
	$tb_name='tb_user';
	$tb_field = array('name','phno','aadhar','yob');
	$tb_data = array($name,$phone,$aadhar,$yob);
	

	
	$ins_data=$con->insert_data($tb_name,$tb_field,$tb_data);
	
	
	
	if($ins_data==1)
	{
		$flag=1;
		header("location:index.php?m=1");
	}
} 





/*name change*/

if(isset($_POST['btnc']))
{	

	$cname=$_POST['cname'];
	$nname=$_POST['nname'];
	$idtype=$_POST['idtype'];
	$inum=$_POST['inum'];
	
	$phno2=$_POST['phno2'];
	$addr=$_POST['address'];
	$pin=$_POST['pin'];
	$yob1=$_POST['yob1'];
	
	
	if(isset($_FILES['idproof']))
		 {
			
$uploaddir = 'ncuploads/';
$uploadfile = $uploaddir . basename($_FILES['idproof']['name']);
move_uploaded_file($_FILES['idproof']['tmp_name'], $uploadfile);		
$idproof=$_FILES['idproof']['name'];	

		}
			if(isset($_FILES['photo']))
		 {
			
$uploaddir = 'ncuploads/';
$uploadfile = $uploaddir . basename($_FILES['photo']['name']);
move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);		
$photo=$_FILES['photo']['name'];	

		}
		
	

	
	$userid=$_SESSION['userid'];
	$tb_name='tb_nc';
	$tb_field = array('cname','nname','idtype','inum','idproof','phno2','addr','pin','yob1','photo','idus');
	$tb_data = array($cname,$nname,$idtype,$inum,$idproof,$phno2,$addr,$pin,$yob1,$photo,$userid);
	

	
	$ins_data=$con->insert_data($tb_name,$tb_field,$tb_data);

	
	
	if($ins_data==1)
		
	{
		$flag=1;
		header("location:profile/profile.php?m=1");
	}
} 



/*land ownership change buying*/
if(isset($_POST['btlc']))
{	

	$bname=$_POST['bname'];
	$baadhar=$_POST['baadhar'];
	$bidtype=$_POST['bidtype'];
	$binum=$_POST['binum'];
	$bphno3=$_POST['bphno3'];
	$baddress=$_POST['baddress'];
	
	
	
	if(isset($_FILES['bidproof']))
		 {
			
$uploaddir = 'lcuploads/';
$uploadfile = $uploaddir . basename($_FILES['bidproof']['name']);
move_uploaded_file($_FILES['bidproof']['tmp_name'], $uploadfile);		
$bidproof=$_FILES['bidproof']['name'];	

		}
			if(isset($_FILES['bphoto']))
		 {
			
$uploaddir = 'lcuploads/';
$uploadfile = $uploaddir . basename($_FILES['bphoto']['name']);
move_uploaded_file($_FILES['bphoto']['tmp_name'], $uploadfile);		
$bphoto=$_FILES['bphoto']['name'];	

		}
		
	

	
	$userid=$_SESSION['userid'];
	$tb_name='tb_buyer';
	$tb_field = array('bname','baadhar','bidtype','binum','bidproof','bphno3','baddress','bphoto','idus');
	$tb_data = array($bname,$baadhar,$bidtype,$binum,$bidproof,$bphno3,$baddress,$bphoto,$userid);
	

	
	$ins_data=$con->insert_data($tb_name,$tb_field,$tb_data);
	//$row=mysqli_fetch_array($ins_data);
	
	
    $s_field='idb';
	$sel_data=$con->select_last($tb_name,$s_field);
	$row=mysqli_fetch_array($sel_data);
	$tbid=$row[0];
	
	
	
	
	$sname=$_POST['sname'];
	$saadhar=$_POST['saadhar'];
	
	$sphno3=$_POST['sphno3'];
	$sidtype=$_POST['sidtype'];
	
	$sinum=$_POST['sinum'];
	$knum=$_POST['knum'];
	
	
	$snum=$_POST['snum'];
	
	$spin=$_POST['spin'];
	$saddress=$_POST['saddress'];
	
	
	
	if(isset($_FILES['sidproof']))
		 {
			
$uploaddir = 'lcuploads/';
$uploadfile = $uploaddir . basename($_FILES['sidproof']['name']);
move_uploaded_file($_FILES['sidproof']['tmp_name'], $uploadfile);		
$sidproof=$_FILES['sidproof']['name'];	

		}
			if(isset($_FILES['kproof']))
		 {
			
$uploaddir = 'lcuploads/';
$uploadfile = $uploaddir . basename($_FILES['kproof']['name']);
move_uploaded_file($_FILES['kproof']['tmp_name'], $uploadfile);		
$kproof=$_FILES['kproof']['name'];	

		}
			if(isset($_FILES['sphoto']))
		 {
			
$uploaddir = 'lcuploads/';
$uploadfile = $uploaddir . basename($_FILES['sphoto']['name']);
move_uploaded_file($_FILES['sphoto']['tmp_name'], $uploadfile);		
$sphoto=$_FILES['sphoto']['name'];	

		}
		
	

	
	$userid=$_SESSION['userid'];
	$tb_name='tb_seller';
	$tb_field = array('sname','saadhar','sphno3','sidtype','sinum', 'sidproof','knum','kproof','snum','spin','saddress','sphoto','idus');
	$tb_data = array($sname,$saadhar, $sphno3 ,$sidtype ,$sinum,$sidproof ,$knum, $kproof, $snum ,$spin,$saddress ,$sphoto,$userid);
	

	
	$ins_data=$con->insert_data($tb_name,$tb_field,$tb_data);
	//$row=mysqli_fetch_array($ins_data);
	
	
	
	$s_field='ids';
	$sel_data=$con->select_last($tb_name,$s_field);
	 $row=mysqli_fetch_array($sel_data);
	

	$tsid=$row[0];
	
	$tb_name='tb_transaction';
	$tb_field=array('tbid', 'tsid', 'tidus');
	$tb_data=array($tbid,$tsid,$userid);
	$ins_data=$con->insert_data($tb_name,$tb_field,$tb_data);
	
	if($ins_data==1)
	{
		$flag=1;
		header("location:profile/profile.php?m=1");
	}
} 



if(isset($_POST['bt_logout']))
{
session_destroy();
header("location:index.php");

}








?>