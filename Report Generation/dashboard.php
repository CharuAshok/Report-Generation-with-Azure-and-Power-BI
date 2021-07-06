<?php include('loginheader.php'); ?>
<div>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 15px;
  text-align: center;
  font-size: 35px;
  color: white;
}
img{
height:500px;
width:1000px;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}



/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 50px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header>
 <h2>Welcome to Everest Insurance page</h2>
</header>
<section>
<center>
<img src="./img/appimg.jpg" usemap="#workmap">
<map name="workmap">
  <area shape="rect" coords="62,146,295,356"  href="https://portal.azure.com/#home">
  <area shape="rect" coords="370,146,607,397" href="https://app.powerbi.com/home?noSignUpCheck=1">
  <area shape="rect" coords="691,146,922,365" href="https://accounts.google.com/signin/v2/identifier?hl=en&continue=https%3A%2F%2Fmail.google.com%2Fmail&service=mail&ec=GAlAFw&flowName=GlifWebSignIn&flowEntry=AddSession">
  
</map>
</center>
</section>
</div>
<?php include('footer.php'); ?>