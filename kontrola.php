<?php include_once 'school_template/header.php'; ?>	
<!-- Header -->
	<header id="head">
		<div class="container">
                    <div class="heading-text">							
			<h1 class="animated flipInY delay1">Online pre žiakov</h1> <br/>
			<p>Kontrolujte si úlohy, rozvrh a známky na jednom mieste!</p>
                    </div>
                    <div class="fluid_container">                       
                        <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                            <div data-thumb="assets/images/slides/thumbs/img1.jpg" data-src="assets/images/slides/img1.jpg">
                            </div> 
                            <div data-thumb="assets/images/slides/thumbs/img2.jpg" data-src="assets/images/slides/img2.jpg">
                            </div>
                            <div data-thumb="assets/images/slides/thumbs/img3.jpg" data-src="assets/images/slides/img3.jpg">
                            </div> 
                        </div><!-- #camera_wrap_3 -->
                    </div><!-- .fluid_container -->
		</div>
</header>
<body>
	<center><form method="post" action="kontrola.php">
  	<select name="taskOption">
    	<option value="first">Prváci</option>
    	<option value="second">Druháci</option>
    	<option value="third">Tretiaci</option>
	<option value="third">Štvrtáci</option>
  	</select>
  	<input type="submit" value="Zobraz"/>
	</form></center>
	<?php
		$option = isset($_POST['taskOption']) ? $_POST['taskOption'] : false;
   		if ($option) {
     		 echo htmlentities($_POST['taskOption'], ENT_QUOTES, "UTF-8");
   		} else {
     		echo "task option is required";
     		exit; 
   		}
	?>
</body>

<?php include_once'school_template/footer.php'; ?>
