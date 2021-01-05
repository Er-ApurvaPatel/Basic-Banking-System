<?php
	if(isset($_POST['submit'])){
		$sname = $_POST['send'];
		$rname = $_POST['rec'];
		$num = $_POST['num'];
		$mysqli = new mysqli("localhost","id15821514_apurva","UyKM7}*TFxFq}=G)");
		mysqli_select_db($mysqli,'id15821514_banksystem');
		$result1=$mysqli -> query("SELECT Balance from bank where Name ='$sname' ");
		$result2=$mysqli -> query("SELECT Balance from bank where Name ='$rname' ");
		$rows1=mysqli_fetch_assoc($result1);
		$rows2=mysqli_fetch_assoc($result2);
		$date = date('Y-m-d H:i:s');
		if (((int)$rows1['Balance']) > ((int)$num))
		{
		$result3=$mysqli -> query("UPDATE bank set Balance = ".(int)((int)$rows1['Balance']-(int)$num)." where Name ='$sname'");
		$result4=$mysqli -> query("UPDATE bank set Balance = ".(int)((int)$rows2['Balance']+(int)$num)." where Name ='$rname'");
		mysqli_select_db($mysqli,'id15821514_banksystem');
		$result5=$mysqli -> query("INSERT INTO transfer VALUES('$date','$sname','$rname',".(int)($num)." )");
		}
		else
		{
			echo '<script>alert("Sender amount is less. please try again.")</script>';
	}
	}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Transfer</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
     
      <link rel="stylesheet" href="css/bootstrap.min.css">
      
      <link rel="stylesheet" href="css/style.css">
     
      <link rel="stylesheet" href="css/responsive.css">
      
     
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
     
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      
   </head>
   <!-- body -->
   <body class="main-layout about_pape">
      
      <!-- header -->
      <header class="section">
         <!-- header inner -->
        <div class="header_main">
         <div class="header_main">
            <div class="container">
               <div class="row">

                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li> <a href="index.php">Home</a> </li>
                                 <li> <a href="about.php">View All Customer</a> </li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
            <!--about -->
       <div class="section about ">
         <div class="container">
             <div class="row">
                <div class="col-12">
                    <div class="titlepage">
                     <h2><strong class="black"> Money </strong> Transfer </h2>
                     <span>We are Here To help You</span>
                  </div>
                </div>
             </div>
         </div>
      </div>



      <div class="container">
          <form action="" method="post">
          Welcome :<?php echo $_GET['name'];?><br>
		  
		 <input type = "hidden" value='<?php echo $_GET['name'];?>' name ="send">
		 
          <br>Please select receiver name :<br>
		  <select name="rec" >
			<option disable>select one</option>
	<option <?php echo ($_GET['name']=='apurva')?'style = "display:none"':'style = "display:block"'; ?> value="apurva">apurva</option>
			<option <?php echo ($_GET['name']=='Vatsal')?'style = "display:none"':'style = "display:block"'; ?>  value="Vatsal">Vatsal</option>
			<option  <?php echo ($_GET['name']=='parth')?'style = "display:none"':'style = "display:block"'; ?> value="parth">parth</option>
			<option <?php echo ($_GET['name']=='Jaydev')?'style = "display:none"':'style = "display:block"'; ?> value="Jaydev">Jaydev</option>
			<option <?php echo ($_GET['name']=='Hariom')?'style = "display:none"':'style = "display:block"'; ?> value="Hariom">Hariom</option>
			<option <?php echo ($_GET['name']=='harshil')?'style = "display:none"':'style = "display:block"'; ?>value="harshil">harshil</option>
			<option <?php echo ($_GET['name']=='kiara')?'style = "display:none"':'style = "display:block"'; ?>value="kiara">kiara</option>
			<option <?php echo ($_GET['name']=='Sam')?'style = "display:none"':'style = "display:block"'; ?>value="Sam">Sam</option>
			<option <?php echo ($_GET['name']=='julia')?'style = "display:none"':'style = "display:block"'; ?>value="julia">julia</option>
			<option <?php echo ($_GET['name']=='Ramesh')?'style = "display:none"':'style = "display:block"'; ?>value="Ramesh">Ramesh</option>
			</select>
		  <br>
          <br>Enter the amount:<input type="number" name="num"><br>
          <input type="submit" name="submit" value="Submit">
          </form>
      </div>
		<p><a href ="data.php">Transfer record</a></p>
		
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
         </div>
      </section>

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
   
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){

         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });

         $(".zoom").hover(function(){

         $(this).addClass('transition');
         }, function(){

         $(this).removeClass('transition');
         });
         });

      </script>

</body>
</html>
