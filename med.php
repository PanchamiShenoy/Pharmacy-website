<!DOCTYPE html>
<html>
<head>
	<title>medicines</title>
	<style type="text/css">
		fieldset{
		margin-left: 150px;
		 margin-right: 150px;
		 background-color: #edf3f5;
		}
		span{
			color: red;
		}
      body
      {
         background-image: url('back2.png');
         background-repeat: repeat;
      }
	
	
		nav{
         background-color: white;
         padding: 1px;
      }
      a{
         text-decoration: none;
          color: #4de85a;
         }
      li{
         font-family: "Times New Roman";
         display: inline;
         padding: 50px;
      }
      a:hover{color: #34eb89}
      </style>
	
</head>
<body>
   <div class="nav">
<nav>
   <ul>
      <li><a href="home.html">HOME</a></li>
      <li><a href="">SERVICES</a></li>
      <li><a href="gallery.html">GALLERY</a></li>
      <li><img width="100" height="40" src="logo.jpg"></li>
      <li><a href="career.html">CAREER</a></li>
      <li><a href="med.html">MEDICINES</a></li>
        <li><a href="signuplogin.html">SHOP</a></li>
   </ul>
</nav>
</div>
<br>
<br>
   <form>
   	<fieldset>
   		<legend>DETAILS</legend>
   		<table align="center" cellspacing="10" cellpadding="20">
   	<tr>
   	<td><label>NAME:<span>*</span></label></td>
   	<td><input type="text" name="" required></td>
   	</tr>
   	<tr>
   	<td><label>CONTACT NO:<span>*</span></label></td>
   	<td><input type="text" name="" required></td>
   	</tr>
   	<tr>
   	<td><label>ADDRESS:<span>*</span></label></td>
   	<td><textarea required></textarea></td>
   	</tr>
   	<tr>
   	<td><label>UPLOAD PRESCRIPTION:<span>*</span></label></td>
   	<td><input type="file" name="myimage" accept="image/*" required></td>	
   	</tr>
   	<tr>
   		<td><input type="button" value="SUBMIT" onclick="showmessage()"></td>
   	</tr>
   	</table>
   	</fieldset>
   </form>
   <script>
  
      function showmessage(){
         alert("your medicines will be delivered");
      }
</script>
<? php

</body>
</html>