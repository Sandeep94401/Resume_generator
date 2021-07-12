<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pnumber = $_POST['pnumber'];
$op = $_POST['op'];

$tskills = $_POST['tskills'];
$obj = $_POST['obj'];

$result = $_POST['col'];
$lengthofarray = count($result);

$experience = $_POST['exp'];
$lengthofexp = count($experience);

$tskillarray = explode(',',$tskills);

$projects = $_POST['proj'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title><?php echo $fname; echo "\x20\x20\x20";  echo $lname; ?>  | <?php echo $email; ?> </title>


	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />

</head>
<body>


<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div  class="yui-u first">
					<h1 id="nameop"> <?php echo $fname  ?>  </h1>
					<h1 id="nameop"> <?php echo $lname ?>  </h1>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						<h3><a href="mailto:name@yourdomain.com"><?php echo $email ?></a></h3>
						<h3><?php echo $pnumber ?></h3>
						<h3><a href="<?php echo $op ?>"><?php echo $op ?></a></h3>

					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Objective</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
							<?php echo $obj ?>
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Projects</h2>
						</div>
						<div class="yui-u">

                      <?php
                                for($i=0;$i<count($projects);$i=$i+2){
							echo '<div class="talent">
									<h2>'.$projects[$i].'</h2>
									<p>'.$projects[$i+1].'</p>
								</div>';}
                        ?>
								
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Technical</h2>
						</div>
						<div class="yui-u">
						
						<?php	
						$i=0;
						$count=0;
                  while($i<count($tskillarray))
                     {
                        if($i>count($tskillarray)-3)
						{
							echo '<ul class="talent">
						
							<li>'.ucfirst($tskillarray[$i]).'</li>
						     </ul>';
							 $i++;
							 
							 if($i == count($tskillarray)-1){
							 echo '<ul class="talent">
						
							<li class="">'.ucfirst($tskillarray[$i]).'</li>
						     </ul>';
							 break;
							 }
                        }

                       else
					{
						echo '<ul class="talent">
						
						<li>'.ucfirst($tskillarray[$i]).'</li>
						<li>'.ucfirst($tskillarray[$i+1]).'</li>
						<li class="last">'.ucfirst($tskillarray[$i+2]).'</li>
						</ul>';	
						$i=$i+3;
					}					
                      }

							?>
                          
							
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						
						
						
						<div class="yui-u">

							<?php
                           $i=0;
                      while($i<$lengthofexp)
					  {
						if($i==$lengthofexp-3){
						echo '<div class="job last">
								<h2>'.$experience[$i].'</h2>
								<h3>'.$experience[$i+1].'</h3>
								<p>'.$experience[$i+2].'</p>
							</div>';
						}
						else
						{
							echo '<div class="job">
							<h2>'.$experience[$i].'</h2>
							<h3>'.$experience[$i+1].'</h3>
							<p>'.$experience[$i+2].'</p>
						</div>';
						}
							$i=$i+3;
					  }


?>
							
						</div>   
					</div> 


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">	
					
               <?php
                  $i=0;
	           	while($i < $lengthofarray)
				   {
				
			if($i==$lengthofarray-4)

			{

							echo '<h2> '.$result[$i].'</h2>

							<h3><strong>'.$result[$i+1].' &mdash; '.$result[$i+2].'</strong> </h3>
							
							<div><br>';
			}
			else
			{
							echo '<h2> '.$result[$i].'</h2>
                             <h3><strong>'.$result[$i+1].' &mdash; '.$result[$i+2].'</strong> </h3>
							
							<div><br>';
				
			}
							$i=$i+4;					   
							
						}
						
						?>                        
						</div> 
                    </div>
                 </div	><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

		<div id="ft">
			<p><?php echo $fname,$lname ?> &mdash; <a href="mailto:name@yourdomain.com"><?php echo $op ?></a> &mdash; <?php echo $pnumber ?></p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->
      <!--  <h3 id=""><a id="pdf" >Download PDF</a></h3> -->
<button id="pdf">Download Now</button>


<script src="app.js">
</script>
<script>
var btn = document.querySelector("button");
btn.onclick = () =>{
	window.print();
	console.log("hii hello")
}

</script>
</body>
</html>
