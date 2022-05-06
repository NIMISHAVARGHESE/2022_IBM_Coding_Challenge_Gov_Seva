<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Land Ownership Form</title>
	<link rel="stylesheet" href="styleandimage/name&land.css">
</head>
<body>

<div class="wrapper"> 
    <div class="title">
      BUYER DETAILS
    </div>
    <div class="form">
	<form id="login"  action="Query_Action.php" method="post" enctype="multipart/form-data">
        
        <div class="inputfield">
          <label> Name</label>
          <input type="text" class="input" name="bname" required>
       </div>  
       <div class="inputfield">
          <label>Aadhar Number</label>
          <input type="Text" class="input" name="baadhar" maxlength="12" minlength="12" required>
       </div>  

        <div class="inputfield">
          <label>Any other id Proof</label>
          <div class="custom_select" >
            <select name="bidtype">
              <option value="">Select</option>
              <option value="pancard">Pancard</option>
              <option value="license">License</option>
			  <option value="ration">Ration Card</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Above specified  id Number</label>
          <input type="text" class="input" name="binum" required>
       </div> 
	   <div class="inputfield">
          <label>Above specified  id DETAILS</label>
          <input type="file" id="myFile" name="bidproof">
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="bphno3"  pattern="\d*" maxlength="10" minlength="10"  required>
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="baddress" required></textarea>
       </div> 
	   <div class="inputfield">
          <label>Photo</label>
           <input type="file" id="myFile" name="bphoto" required>
       </div> 
      
	  
	  <div class="title">
      SELLER DETAILS	  
    </div>
	<div class="inputfield">
          <label> Name</label>
          <input type="text" class="input" name="sname" required>
       </div>  
        <div class="inputfield">
          <label>Aadhar Number</label>
          <input type="text" class="input" name="saadhar" maxlength="12" minlength="12" required>
       </div>
       <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="sphno3" pattern="\d*" maxlength="10" minlength="10"  required>
       </div>

        <div class="inputfield">
          <label>Any other id Proof</label>
          <div class="custom_select" >
            <select name="sidtype">
              <option value="">Select</option>
              <option value="pancard">Pancard</option>
              <option value="license">License</option>
			  <option value="ration">Ration Card</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Above specified id Number</label>
          <input type="text" class="input" name="sinum" required>
       </div> 
	   
	   
	   <div class="inputfield">
          <label>Above specified id Details</label>
           <input type="file" id="myFile" name="sidproof" required>
       </div>
	   
      <div class="inputfield">
          <label>Latest Karam payed Number</label>
          <input type="text" class="input" name="knum" required>
       </div> 
	   <div class="inputfield">
          <label>Latest Karam payed proof</label>
          <input type="file" id="myFile" name="kproof" required>
       </div> 
	   <div class="inputfield">
          <label>Survey Number of property</label>
           <input type="text" class="input" name="snum" required>
       </div> 
	   <div class="inputfield">
          <label>Postal Code</label>
          <input type="text" class="input" name="spin">
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="saddress" required></textarea>
       </div> 
	         <div class="inputfield">
          <label>Photo</label>
           <input type="file" id="myFile" name="sphoto" required>
       </div>

       
      <div class="inputfield">
        <input type="submit" value="Submit" class="btn" name="btlc">
      </div>
	  </form>
    </div>
</div>	
	
</body>
</html>