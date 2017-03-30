<?php include ("header.php"); ?>
    <title>The Students Guide to Manchester</title>
    <meta name="description" content="By students, for students. Our comprehensive guide is developed to showcase what makes Manchester such a desirable location to study in.">
    <meta keywords="Manchester, students, MMU, guide,">    

    <?php include ("navigation.php"); ?>
    
<!-- Body Content --> 
    <section class="page-content" id="content" role="main">
		<h1>The Students Guide to Manchester</h1>

<p>Welcome to our comprehensive guide to the city of Manchester by students for students. This site provides you with a vast and insightful resource designed to help you transition smoothly throughout your university experience. Here you can find life hacks and the most essential, up-to-date answers to the questions first year students often have. We strive to cover an extensive range of popular topics to help construct a more pleasant experience whilst attending Manchester Metropolitan such as how to live on a budget, which societies exist and how to join one as well as the easiest way to transverse the city amongst many other matters.</p>
<img src="indeximages/image-1.jpg" id="mainImage">
<div class="thirds">
	<div>hi</div>
	<div>hi</div>
	<div>hi</div>
</div>
    </section>
	
	
<script>
function changeImage(){myImage.setAttribute("src",imageArray[imageIndex]),imageIndex++,imageIndex>=imageArray.length&&(imageIndex=0)}var myImage=document.getElementById("mainImage"),imageArray=["indeximages/image-1.jpg","indeximages/image-2.jpg","indeximages/image-3.jpg","indeximages/image-4.jpg","indeximages/image-5.jpg"],imageIndex=0,intervalHandle=setInterval(changeImage,3e3);myImage.onclick=function(){clearInterval(intervalHandle)};
</script>

    
    <?php include ("footer.php"); ?>
