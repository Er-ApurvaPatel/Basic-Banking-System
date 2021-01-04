<?php 
$mysqli = new mysqli("localhost","id15821514_apurva","UyKM7}*TFxFq}=G)");
mysqli_select_db($mysqli,'id15821514_banksystem');
$result=$mysqli -> query("select * from transfer");
?>

<!--<!DOCTYPE html> -->
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Transfer_Details</title>
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
		<div class="container">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-danger">
                        <th scope="col">Date</th>
                        <th scope="col">sender</th>
                        <th scope="col">receiver</th>
                        <th scope="col">amount($)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
						while($rows=mysqli_fetch_assoc($result))
						{
					?>
						<tr>
						    <td><?php echo $rows['date']; ?></td>
							<td><?php echo $rows['sendar']; ?></td>
							<td><?php echo $rows['receiver']; ?></td>
							<td><?php echo $rows['amount']; ?></td>
						</tr>
					<?php 
						}
					?>
                </tbody>
            </table>
        </div>
    </div>


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
