<?php
require "config.php";

if(isset($_POST['submit']))
	{
	$Name=$_POST['Name'];
    $Gender=$_POST['Gender'];
    $Age=$_POST['Age'];
    $Bloodgroup=$_POST['Bloodgroup'];
    $Email=$_POST['Email'];
    $Phonenumber=$_POST['Phonenumber'];
    $Doornumber=$_POST['Doornumber'];
   	$Street=$_POST['Street'];
	$Town=$_POST['Town'];
    $Pincode=$_POST['Pincode'];
    $State=$_POST['State'];
    
	if($Name==""||$Gender==""||$Age==""||$Bloodgroup==""||$Email==""|| $Phonenumber==""||$Doornumber==""||$Street==""||$Town==""||$Pincode==""||$State=="")
		{
?>
<script>
    alert( "please fill all info");
</script>
<?php
    }else
    {
		$reg_qry=$conn->query("INSERT INTO donar(Name,Gender,Age,Bloodgroup,Email,Phonenumber,Doornumber,Street,Town,Pincode,State)VALUES('$Name','$Gender','$Age','$Bloodgroup','$Email','$Phonenumber','$Doornumber','$Street','$Town','$Pincode','$State')");
		if ($reg_qry)
			{
            ?>
<script>
			alert ("Congrats!You are giving a vision");
    window.location="#";
    </script>
<?php
            
		}
        
    }
    
         }
        ?>

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
            <h1 class="mb-0 site-logo"><a href="login.php" class="text-white mb-0">Eyebank</a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                
               
                 
                <li><a href="logout.php" class="cta"><span class="bg-primary text-white rounded">Log out</span></a></li>
              </ul>
            </nav>
          </div>


         <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      <!-- </div> -->
      
    </header>

  
    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/eye6.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center mt-5">
              <div class="col-md-8 text-center">
                <h1>Enroll</h1>
                <p class="mb-0">Don't take your eyes to Heaven.Heaven knows we need them here.</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  


    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 mb-5"  data-aos="fade">

            <h2 class="mb-5 text-black">Enroll</h2>

            <form action="#" class="p-5 bg-white" method="post">
				
				<div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Name</label> 
                  <input type="text" name="Name" id="Name" class="form-control">
                </div>
              </div>

             <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Gender</label> 
                  <input type="text" name="Gender" id="Gender" class="form-control">
                </div>
              </div>
                
                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Age</label> 
                  <input type="text" name="Age" id="Age" class="form-control">
                </div>
              </div>
                
                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Bloodgroup</label> 
                  <input type="text" name="Bloodgroup" id="Bloodgroup" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" name="Email" id="Email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Phone Number</label> 
                  <input type="text" name="Phonenumber" id="Phonenumber" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">Address</label> 
                  <input type="text" name="Doornumber" placeholder="Door number"  id="Doornumber" class="form-control">
                </div>
                </div>
                
                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject"></label> 
                  <input type="text" name="Street"  placeholder="Street" id="Street" class="form-control">
                </div>
                </div>
                
                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject"></label> 
                  <input type="text" name="Town"  placeholder="Town/City" id="Town" class="form-control">
                </div>
                </div>
                
                
                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject"></label> 
                  <input type="text" name="Pincode"  placeholder="Pincode" id="Pincode" class="form-control">
                </div>
                </div>
                
                <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="subject">State</label> 
                  <input type="text" name="State" id="State" class="form-control">
                </div>
                </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Enroll" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
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