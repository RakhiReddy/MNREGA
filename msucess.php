<!-- DOCTYPE HTML Version 5 -->
<html>
<head>
	<title>
     Login Successful			
	</title>
	<link rel="shortcut icon" href="assets/icons/logo.ico">
</head>

<body>

<h1 align ="middle" margin-top="400px">Congratulations! Profile Created Sucessfully.<br>

<script>
     if (localStorage.pagecount)
        { localStorage.pagecount=Number(localStorage.pagecount) +1; } 
    else 
        { localStorage.pagecount=1; } 
    document.write("You Are the " + localStorage.pagecount + " user Registerd into MNREGA.");
   </script>


</h1>

</body>
</html>