


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
      <title>Scanner</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <!-- fevicon -->
       <link rel="icon" href="images/fe1.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
     
      <!-- weare -->
      <div id="why" class="weare">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Image <span class="white">Uploaded </span></h2>
                  </div>
               </div>
            </div>
            <?php
if(isset($_FILES['image'])){
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"images/".$file_name);

echo '<img src="images/'.$file_name.'" style="width:100%">';

shell_exec('"C:\\Program Files (x86)\\Tesseract-OCR\\tesseract" "C:\\xampp\\htdocs\\scanner\\images\\'.$file_name.'" out');?>



			 
			 
			 
                     </div>
                  </div>
              
            
        
     
      <!-- end weare -->
	   
	   
	   <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Converted<span class="white">Text</span></h2>
                     <?php
                 

$myfile = fopen("out.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("out.txt"));
fclose($myfile);
echo "</pre>";
}
?>
                        </div>
                     </div>
                  </div>
               </div>
          
         </div>
     
	   
    
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>© 2019 All Rights Reserved. <a href="https://html.design/">Smitusoft</a></p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 3
               }
             }
           })
         })
      </script>
      
      <script>
         $('.content').hide();
         
         $('.slider').click(function() {
         $(this).next('.content').slideToggle();
         this.toggle = !this.toggle;
         $(this).children("span").text(this.toggle ? "-" : "+");
         return false;
         });
      </script>
   </body>
</html>

