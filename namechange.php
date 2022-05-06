<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>NameChange Form</title>
	<link rel="stylesheet" href="styleandimage/name&land.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      NameChange Form
    </div>
				
    <div class="form">
				<form id="login"  action="Query_Action.php" method="post" enctype="multipart/form-data">
       <div class="inputfield">
          <label>Current Name</label>
          <input type="text" class="input" name="cname" required>
       </div>  
        <div class="inputfield">
          <label>New Name</label>
          <input type="text" class="input" name="nname" required>
       </div> 
        <div class="inputfield">
          <label>Any  id Proof</label>
          <div class="custom_select">
            <select name="idtype">
              <option value="">Select</option>
              <option value="pancard">Pancard</option>
			   <option value="aadhar">Aadhar</option>
              <option value="licende">License</option>
			  <option value="ration">Ration card</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Above specified  id Number</label>
          <input type="text" class="input" name="inum" required>
       </div> 
	   <div class="inputfield">
          <label>Above specified id details</label>
            <input type="file" id="myFile" name="idproof">
       </div>
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="phno2" pattern="\d*" maxlength="10" minlength="10">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address" ></textarea>
       </div> 
      <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" name="pin" required>
       </div> 
	   <div class="inputfield">
          <label>Year of Birth</label>
          <input type="Text" class="input" name="yob1" placeholder="Year Of Birth "[0-9]{4}" " required >
       </div>
	   <div class="inputfield">
          <label>Photo</label>
            <input type="file" id="myFile" name="photo">
       </div>
	   
      <div class="inputfield">
        <input type="submit" value="Submit" class="btn" name="btnc">
      </div>
	  </form>
    </div>
</div>	
	
</body>
</html>