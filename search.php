<html lang="en">
  <head>
    <title>EyeBank &mdash; Leave A Vision Behind! </title>
    <meta charset="utf-8">
    <meta name="eyebank" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar container py-0 " role="banner">

      <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="#" class="text-white mb-0">Eyebank</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">


               

                <li><a href="editing.php" class="cta"><span class="bg-primary text-white rounded">Back</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      <!-- </div> -->
      
    </header>

  
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/eye12.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  


    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>








<?php
require "config.php";
?>
<html>
<body>
   <form name="Check" action="#" method="post">
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5"  data-aos="fade">

            <h2 class="mb-5 text-black">Search by Blood group</h2>

    
     <form action="#" class="p-5 bg-white" method="post">
				
        <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Blood group</label> 
                  <input type="text" name="Bloodgroup" placeholder="Enter blood group to search" id="Bloodgroup" class="form-control">
                </div>
              </div>
         <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Town</label> 
                  <input type="text" name="Town" placeholder="Enter town  to search" id="town" class="form-control">
                </div>
              </div>
        <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Search" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>
    
    </form>
              </div>
        </div>
      </div>
    </div> 
    
    </form>
    </body>
</html>
<?php
if(isset($_POST['submit']))
{
$Bloodgroup=$_POST['Bloodgroup'];
    $Town=$_POST['Town'];
$query="select * from donar where Bloodgroup='$Bloodgroup' and Town='$Town'";
$result_qry=$conn->query($query);
}
?>


<html>
<body>
    <br><br>
<table align="center" border="1px" style="width:1200px;line-height:30px;">
<tr>
<t>
<th>Name</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Bloodgroup</th>
    <th>Email</th>
<th>Phonenumber</th>
<th>Doornumber</th>
<th>Street</th>
<th>Town</th>
    <th>Pincode</th>
    <th>State</th>
</t>
<?php
    if(isset($result_qry))
    {
    if($result_qry->rowCount()>0)
    {
        $result=$result_qry->fetchAll();
      foreach($result as $res_arr)
      {
    
?>
<tr>
<td><?php echo $res_arr['Name']; ?></td>
    <td><?php echo $res_arr['Gender']; ?></td>
    <td><?php echo $res_arr['Age']; ?></td>
    <td><?php echo $res_arr['Bloodgroup']; ?></td>
    <td><?php echo $res_arr['Email']; ?></td>
<td><?php echo $res_arr['Phonenumber']; ?></td>
<td><?php echo $res_arr['Doornumber']; ?></td>
<td><?php echo $res_arr['Street']; ?></td>
<td><?php echo $res_arr['Town']; ?></td>
    <td><?php echo $res_arr['Pincode']; ?></td>
    <td><?php echo $res_arr['State']; ?></td>
</tr>
<?php
      }
}
    else
{
?>
<script>
    alert( "Data not found.");
    window.location='search.php';
    </script>
<?php
}}
?>
</table>
</body>
</html>
