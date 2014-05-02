<!DOCTYPE html>
<head>
<title>MNREGA|Home</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="shortcut icon" href="assets/icons/logo.ico">
<script type="text/javascript">

<!--
var image1=new Image()
image1.src="1.jpg"
var image2=new Image()
image2.src="2.jpg"
var image3=new Image()
image3.src="3.jpg"
var image4=new Image()
image4.src="4.jpg"
var image5=new Image()
image5.src="5.jpg"
var image6=new Image()
image6.src="6.jpg"
//-->
</script>
<style>
    body
    {
    background-color: rgba(155, 188, 147, 0.33);
    font-family: 'Roboto Condensed', sans-serif;
    
    }
    #imgone
{
position: fixed;
bottom:30px;
}
#imgtwo
{
position: fixed;
right:5%;
height:40px;
    width:300px;
bottom:30px;
background-color:"#a59292";

}
    #one
    {
        background-color: ;
        text-align: ;
        margin-left: 200px;
        margin-right: 200px;
        height:100px;
        font-size:30pt;
    
    }
    #two
    {
        background-color: #0099CC;
        margin-left: 200px;
        margin-right: 195px;
        height:50px;
    }
    a
    {
        word-spacing: 5px;
        margin-left:10px;
        font-size:15pt;
        text-decoration: none;
        color:white;
    }
    #p
    {
        word-spacing:15px; 
        letter-spacing: 1px;
        padding-left:150px;
        padding-top:10px;
        padding-right: 150px;
    }
    img
    {
        border:2px white solid;
        width:950px;
        height:300px;
    }
    #three
    {
        margin-left: 200px;
        margin-right: 200px;
    }
    #four
    {
        height:150px;
        margin-left: 200px;
        margin-right: 200px;
        background-color: ;
        
    }
    #five
    {
        padding-top:2px;
        height:450px;
        width:300px;
        text-align: right;
        
        border-right: 2px solid black;
        font-size: 20pt;
        float:left;
    }
    #six
    {
        /*font-family: "Times New Roman";*/
       padding-top: 0px;
       font-size: 18px;
        text-align: left;
        margin-left:320px;
    }
    #sev
    {
        margin-left: 200px;
        margin-right: 200px;
    }
    #i
    {
        height:30px;
    }
    a:hover {
        text-decoration: none;
        height:50px;}

    /*a:active {background-color:#000000;}    
    */</style>
</head>

<body>
<div id="one" ><center>MNREGA</center></div>
    <div id="two">
    <p id="p">
    <a href="mindex.php" "active">Home</a>
    <a href="mscheme.php">Scheme</a>
    <a href="mregistration.php">Register</a>
    <a href="mlogin.php">Administrator login</a>
    <a href="mcontactus.php">Contact Us</a>
    </p>
    </div>
    <img src="1.jpg" name="slide" width="900" height="450" style="margin-left:200px;" />
<script>
<!--
//variable that will increment through the images
var step=1
function slideit(){
//if browser does not support the image object, exit.
if (!document.images)
return
document.images.slide.src=eval("image"+step+".src")
if (step<6)
step++
else
step=1
//call function "slideit()" every 2.5 seconds
setTimeout("slideit()",4000)
}
slideit()
//-->
    </script>
    </br>
    </br>
    <div id="four">
    <div id="five">MNREGA<br></div>
    <div id="six">&nbsp;&nbsp;&nbsp;The Mahatma Gandhi National Rural Employment 
Guarantee Act (MGNREGA) is an Indian law that aims to guarantee the 'right to work' 
and ensure livelihood security in rural areas by providing at least 100 days of guaranteed
 wage employment in a financial year to every household whose adult members volunteer 
to do unskilled manual work.</p><p>The Mahatma Gandhi NREGA guaranteed employment as a legal
 right.According to the Eleventh Five Year Plan (2007–12), the number of Indians living 
on less than $1 a day, called Below Poverty Line (BPL), was 300 million that barely 
declined over the last three decades ranging from 1973 to 2004, although their 
proportion in the total population decreased from 36 per cent (1993–94) to 28 percent 
(2004–05), and the rural working class dependent on agriculture was unemployed for 
nearly 3 months per year which was rising due to a downward trend of the agricultural 
productivity and in turn also aggravating poverty.</p> <p>In large states like Bihar, Madhya 
Pradesh, Maharashtra, Rajasthan and Uttar Pradesh, the number of poor even increased.
 The plan targeted poverty through MGNREGA which promised employment as an 
entitlement.</p></div>
        </div>
    <div id="sev">
    <img src="footer.png" id="i">
    </div>

    <!-- VISITOR COUNT --> 

    <div id="visit" align ="middle">
    <script>
     if (localStorage.pagecount)
        { localStorage.pagecount=Number(localStorage.pagecount) +1; } 
    else 
        { localStorage.pagecount=1; } 
    document.write("Visits: " + localStorage.pagecount + " time(s).");
   </script>
   </div>


</body>
</html>
