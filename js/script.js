
var image1=new Image()
image1.src="images/slideshow/1.jpg"
var image2=new Image()
image2.src="images/slideshow/2.jpg"
var image3=new Image()
image3.src="images/slideshow/3.jpg"
var image4=new Image()
image4.src="images/slideshow/4.jpg"
var image5=new Image()
image5.src="images/slideshow/5.jpg"
var image6=new Image()
image6.src="images/slideshow/6.jpg"

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
