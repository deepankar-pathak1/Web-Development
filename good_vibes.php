<html>
<head>
<title>GOOD VIBES</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia|Trirong">
  <style>

<style>
body {
  margin: 0;
}
.form-group{
	margin-bottom:5px;
	
}
body {
  background: url(a.png);
   background-position: center;
   background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
}


.header {
  background-color: ;

  padding: 5px;
  text-align: center;
  font-family: "Sofia", sans-serif;
}

.master-div{
	margin:auto;
	width:800px;
	background-color:white;
	border-radius:10px;
	padding:15px 15px;
	opacity: 0.9;
	
}

p{
	font-size:35px;
	display: block;
	
	font-family: Trirong;
	
}
form{
	display:block;
}

.footer {
	
   position: fixed;
   left: 0;
   bottom: 0;
width:100%;
   background-color: black;
   color: white;
   text-align: center;
}

h1 {
	 font-weight: bold;
	 z-index: -1000;
	 font-size:300%;
}

</style>

<script>
function myFunction() {
  location.replace("https://www.w3schools.com")
}
</script>



</head>



<body>


<div class="header">
<h1>GOOD VIBES FORM</h1><br><br>
</div>
<div class="master-div">
<p id="description">Wana Tell Something?</p>

<form action="good_vibes_insert.php" target="" method="POST">
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Name">
    
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control"  placeholder="Enter Email">
  </div>
  
  <div class="form-group">
    <label for="contact">Contact No</label>
    <input name="number" type="number" class="form-control"  placeholder="Enter Number">
  </div>
  
  <div class="form-group">
  <h3>Please Select gender</h3>
  <input name="gender" id="male" type="radio" value="male">
  <label for="male">Male</label><br>
  <input type="radio" name="gender" id="female" value="female">
  <label for="female">Female</label><br>
  <input type="radio" name="gender" id="other" value="other">
  <label for="other">Other</label>
  </div>
  
  <div class="form-group">
  <h3>Select age group</h3>
  <input type="radio" name="age" id="below" value="below">
  <label for="below">Below 18</label><br>
  <input type="radio" name="age" id="above" value="above">
  <label for="above">Above 18</label>
  </div>
  
  

<button  name="submit" id="myButton" type="submit" class="float-left submit-button">Submit</button>




</form>
</div>
</div>

</body>
</html>
