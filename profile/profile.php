<html lang="en">
<?php
include_once 'dbconfig.php';
session_start();
?>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>
	<link rel="stylesheet" href="styles2.css">
</head>
<body>
<script>
!(function () {
  let e = document.createElement("script"),
    t = document.head || document.getElementsByTagName("head")[0];
  (e.src =
    "https://cdn.jsdelivr.net/npm/rasa-webchat@1.0.1/lib/index.js"),
    // Replace 1.x.x with the version that you want
    (e.async = !0),
    (e.onload = () => {
      window.WebChat.default(
        {
          initPayload: '/greet',
          customData: { language: "en" },
          title: 'Bot',
          socketUrl: "http://localhost:5005",
        },
        null
      );
    }),
    t.insertBefore(e, t.firstChild);
    localStorage.clear()
})();
</script>




<script>

function editble()
{

alert('xxxxxxxxxxxxxxxxxxxxx');


}

</script>

<div id="wrapper2">


<div class="wrapper"  >
<?php
   $userid=$_SESSION['userid'];
   
  


$sqlp = "SELECT * FROM tb_user where id=".$userid;
//echo $sql;
$resultp = $conn->query($sqlp);

  // output data of each row
 $row = $resultp->fetch_assoc();
	  
?>	 



   <div class="title">
      PROFILE
    </div>
    <div class="form">
	
	<form action="../Query_Action.php" method="post">
       <div class="inputfield">
          <label>FULL Name</label>
          <input type="text" class="input" readonly="readonly" value="<?php echo $row['name']; ?> ">
       </div>  
          
         
	   <div class="inputfield">
          <label>Aadhar Number   </label>
          <input type="text" class="input" readonly="readonly" value="<?php echo $row['aadhar']; ?>">
       </div> 

         
        
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" readonly="readonly" value="<?php echo $row['phno']; ?>">
       </div>  
	   <div class="inputfield">
          <label>Year of Birth</label>
          <input type="Text" class="input" readonly="readonly" value="<?php echo $row['yob']; ?>">
       </div>
	    
      
	  <div class="inputfield">
	  
        <input type="submit" value="logout" name="bt_logout" class="btn">
      </div>
	  </form>
    </div>
	 <div class="title" style="margin-top:30px;">
      Notifications
    </div>
		
	
<?php	
	
	
	
    //echo $userid;
	
$sql = "SELECT * FROM tb_transaction where tidus=".$userid;

$sql2 = "SELECT * FROM tb_nc where idus=".$userid;
$result2 = $conn->query($sql2);

//echo $sql;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  if($row['status']==0)
	  {
		 $status="Submitted"; 
		
	  }
	  if($row['status']==1)
	  {
		 $status="Approved"; 
		
	  }
	  if($row['status']==2)
	  {
		 $status="Denied"; 
		
	  } 


?>

<div  class="noti">
	
<?php	
 echo "your  application for landownership change application No: " . $row['idt']." is " .$status."<br>";
	
?>	

</div>	

<?php

  }
} 



if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
	  if($row['status']==0)
	  {
		 $status="Submitted"; 
		
	  }
	  if($row['status']==1)
	  {
		 $status="Approved"; 
		
	  }
	  if($row['status']==2)
	  {
		 $status="Denied"; 
		
	  }


?>

<div  class="noti2">
	
<?php	
 echo "your  application for name change application No: " . $row['idnc']." is " .$status."<br>";
	
?>	

</div>	

<?php

  }
} 









$conn->close();
?>














	
</div>	


  <div id="right">

  
  
  
  
  </div>
</div>


	
</body>
</html>