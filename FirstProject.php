<!DOCTYPE html>
<html>
<head>   
  <title> my first project</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
  .logo{
	border: 5px solid red;
              border-radius: 20px;
	margin:auto;
	background-color:lightblue;
	width: 100%;
	text-align: center;
	}
.menu {
  float: left;
  width: 20%;
}
.menuitem {
  padding: 8px;
  margin-top: 7px;
  border-bottom: 1px solid #f1f1f1;
  font-size:25px;
  }



.center{
              float:left;
               padding:35px;
             width:65%;
              height: 450px;
	font-size:20px;
	border-style:solid;
	background-color:lightblue;
	background:url('home.jpg');
	background-repeat: no-repeat;
	background-position: right bottom, left top;
  }
.footer {
    background-color: lightblue;
    padding: 65px;
    text-align: center;
    border: 3px solid red;
    border-radius: 20px;
    font-size:20px;
}
</style>
</head>







<body>
  <header>
		 <canvas id="myCanvas" width="1000" height="100" class="logo" ></canvas>
        <script>
           var c = document.getElementById("myCanvas");
           var ctx = c.getContext("2d");
          ctx.shadowOffsetX = 5;
            ctx.shadowOffsetY = 5;
            ctx.shadowColor = "rgba(0,0,0,0.3)";
            ctx.fillStyle = 'red';
            ctx.font     = '20px Arial';
            ctx.fillText ('Hiba Web Design & Development ',400,50); 
            ctx.font     = '30px Arial';
            ctx.textAlign = 'left';
            ctx.strokeText('Professional, Creative Website Design for Business',150,80); 
			
   </script> 
</header>
	 

<div style="overflow:auto">
    <div class="menu">
      <div class="menuitem"><a href="#">Home</a></div>
      <div class="menuitem"><a href="#">Gallery</a></div>
      <div class="menuitem"><a href="#">Services</a></div>
      <div class="menuitem"><a href="#">Contact Me</a></div>
    </div>
    <div class="center">
	 <h2><b>About Me:</b></h2>
	 <p style="font-family:courier;color:black;"> 
	<b> Hi my name is hiba welcome <br> this is my Business for Design and Develope     webpages,<br>
	i'm looking to help my<br>customers to build and developer their own modern <br>
	personal or business Web pages,i'm seeking to be more <br>involved than creating an
    <br>attractive website Consideration of user experience, <br> search engine optimization, 
	ease of use,and technical <br>details are just a few elements that are involved
	in <br>developing a website  that is designed to perform in <br> today’s competitive marketplace.<b></p>
   </div>
   </div>
<footer class="footer">
Hiba Abbas <br>
Email:Hibaalshammary@yahoo.com 
</footer>
</body>
</html>
