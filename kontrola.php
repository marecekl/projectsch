<?php include_once 'school_template/header.php'; ?>	
<?php
if(isset($_POST['select1'])){
    $select1 = $_POST['select1'];
    switch ($select1) {
        case 'value1':
            echo 'this is value1<br/>';
            break;
        case 'value2':
            echo 'value2<br/>';
            break;
        default:
            # code...
            break;
    }
}
?>
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
	<center><form action="" method="post">
    	<select name="select1">
        <option value="value1">Prváci</option>
        <option value="value2">Druháci</option>
	<option value="value3">Tretiaci</option>
        <option value="value4">Štvrtáci</option>
    	</select>
    	<input type="submit" name="submit" value="Go"/>
	</form></center>
</body>

<?php include_once'school_template/footer.php'; ?>
