<?php   

include 'navbar.php';

 ?><br><br>


<style type="text/css">
		.box{
			border: 1px #402424 solid;
			height :30px;
			width: 35%;
			background-color: black;

		}
		.box1{
			border: 1px #402424 solid;
			height :30px;
			width: 35%;
			background-color: white;

		}
		.box2{
			border: 1px #402424 solid;
			height :30px;
			width: 35%;
			background-color: #402424;

		}
		.box3{
			border: 1px white solid;
			height :30px;
			width: 35%;
			background-color: green;

		}
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
<br><br><br>


	<div class="container-fluid">
			<!-- <h5>Home/New in/Fabrics/Fabrics 2 piece</h5> -->
		<div class="row no-space">
			<div class="col-md-1">

<!-- <img src="ext/img/table3.jpg" width="80%" onclick="one1()" >
<br><br>
<img src="ext/img/table2.jpg" width="80%" onclick="sec()" >
<br><br>
<img src="ext/img/table1.jpg" width="80%" onclick="main()" >
<br><br>
<img src="ext/img/table1.jpg" width="80%" onclick="third()"> -->

</div>
<div class="col-md-5">
<img src="ext/img/bed1/bed1.png" width="98%" height="70%" id="img1">
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
		</div><br><br><br>
<br><br><br>

		<!-- <button class="hammad">hammad</button> -->
		<!-- <div class="col-md-3">
			<div class="box3" onclick="third()"></div>
		</div> -->
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
		document.getElementById('img1').setAttribute("src","ext/img/bed1/bed1.png");
	}
	function sec(){
		document.getElementById('img1').setAttribute("src","ext/img/bed1/bed4.png");
	}
	function main(){
		// document.getElementById('img1').setAttribute("src","ext/img/sofachair2.jpg");
	}
	function third(){
		document.getElementById('img1').setAttribute("src","ext/img/table3.jpg");
	}
	function one4(){
		document.getElementById('img1').setAttribute("src","ext/img/bed1/bed6.png");
	}
	
	
</script>
   <?php   

include 'footer.php';

   ?>