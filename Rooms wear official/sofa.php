<?php   

include 'navbar.php';

 ?><br><br>


<style type="text/css">
		.box{
			border: 1px white solid;
			height :30px;
			width: 100%;
			background-color: black;

		}
		.box1{
			border: 1px white solid;
			height :30px;
			width: 100%;
			background-color: green;

		}
		.box2{
			border: 1px white solid;
			height :30px;
			width: 100%;
			background-color: brown;

		}
		.box3{
			border: 1px white solid;
			height :30px;
			width: 100%;
			background-color: pink;

		}
		/*.box1{
			border: 1px black solid;
			height :30px;
			width: 10%;	
			text-align: center;
		}*/
		.type{
			width: 10%;
		}
		.btn{
			background-color: black;
			color: white;
			width: 30%;

		}
		.no-space > [class*='col-']{
			padding:0;
			margin: 0;
		}
	</style>
</head>
<body>
	<div class="container-fluid">
			<h5>Home/New in/Fabrics/Fabrics 2 piece</h5>
		<div class="row no-space">
			<div class="col-md-1">

<!-- <img src="ext/img/table3.jpg" width="80%" onclick="one1()" >
<br><br>
<img src="ext/img/table2.jpg" width="80%" onclick="sec()" >
<br><br>
<img src="ext/img/table1.jpg" width="80%" onclick="main()" >
<br><br>
<img src="ext/img/table1.jpg" width="80%" onclick="third()"> -->
<br><br>
</div>
<div class="col-md-5">
<img src="ext/img/sofachair/schair2.png" width="98%" height="70%" id="img1">
</div>
<div class="col-md-6">
	<h4>Customization</h4>
	<!-- 
	<h5>Printed Embroidered Lawn | Top Dupatta</h5>
	<p>Rs. 3,390</p><br>
	<p>Availablity: In stock <br>SKU: MLA23103</p> -->
	<h4>Color</h4>
	<div class="row">
		<div class="col-md-3">
			<div class="box" onclick="one4()"></div>
		</div>
		<div class="col-md-3">
			<div class="box1" onclick="one1()"></div>
		</div>
		<div class="col-md-3">
			<div class="box2" onclick="sec()"></div>
		</div>
		<div class="col-md-3">
			<div class="box3" onclick="third()"></div>
		</div>
	</div>
</div>
	
	<!-- <p>size</p> -->
	<!-- <div class="box1">2PC</div>
	<hr>
	<input type="number" class="type">
	<button class="btn">+ADD TO BAG</button>
	<br><br>
	<hr><p>Top Fabrics:Paste Embroided Lawn|3mm</p>
	<p>Dupatta Fabric:Paste Printed Lawn|2.5mm</p>
	<p>Technique: Printed Embroided</p>
	<p>Description:Essential Printed Embroided Top Dupatta</p> -->




</div>
</div>
</div>
<script type="text/javascript">
	
	


	function one1(){
		document.getElementById('img1').setAttribute("src","ext/img/sofachair/schair1.PNG");
	}
	function sec(){
		document.getElementById('img1').setAttribute("src","ext/img/sofachair/schair4.png");
	}
	function main(){
		document.getElementById('img1').setAttribute("src","ext/img/sofachair/schair3.png");
	}
	function third(){
		document.getElementById('img1').setAttribute("src","ext/img/sofachair/schair5.png");
	}
	function one4(){
		document.getElementById('img1').setAttribute("src","ext/img/sofachair/schair6.png");
	}
	
	
</script>
   <?php   

include 'footer.php';

   ?>