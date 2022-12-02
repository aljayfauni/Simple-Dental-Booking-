<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Simple Dental Booking</title>
      <link rel="stylesheet" href="materialize/css/materialize.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.6.1.min.js"  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="  crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <style>
         * {
         box-sizing: border-box;
         }
         html {
         font-family: GillSans, Calibri, Trebuchet, sans-serif;
         }
         input[type="text"],input[type="password"],input[type="email"]{
         width: 100%;
         padding: 12px;
         border: 1px solid #ccc;
         margin:3px 0px;
         resize: vertical;
         }
         .submit-btn{
         margin:5px 0px;
         padding:10px;
         width:100%;
         font-size:16px;
         color:#eee;
         background:#2da2d8;
         border:none;
         cursor: pointer;
         }
         h4{
         color:#2da2d8;
         }
         a.active {
         background-color: #2da2d8;
         }
      </style>
   </head>
   <body>
      <div class="header " style="background:#2da2d8;">
         <nav class="#0288d1 light-blue darken-2 navbar-fixed "  id="menu">
            <div class="container" >
               <div class="nav-wrapper ">
                  <span style="font-size:32px;">Dental Booking</span>
                  <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                  <i class="material-icons">menu</i>
                  </a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down ">
                     <li><a href="#home" active>Home</a></li>
                     <li><a href="#about">About</a></li>
                     <li><a href="#services">Services</a></li>
                     <li><a href="#book_appt">Contact Us</a></li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>
      <ul class="sidenav" id="mobile-nav">
         <li><a href="#home" active>Home</a></li>
         <li><a href="#about">About</a></li>
         <li><a href="#services">Services</a></li>
         <li><a href="#book_appt">Contact Us</a></li>
      </ul>
      <ul class="sidenav" id="mobile-nav">
         <li><a href="#">Home</a></li>
         <li><a href="#">Video</a></li>
         <li><a href="#">Service</a></li>
         <li><a href="#">About</a></li>
         <li><a href="#">Contact</a></li>
      </ul>
      <div id="home" class="row section scrollspy" style="margin-bottom:0;border:px solid red;height:480px;background-image:url('img/dentisk-kv.jpg');background-attachment:fixed;background-position:center;background-size:cover;background-repeat:no-repeat;" >
         <div class="col s12">
            <span class="">
               <h4 class="center-align" style="margin:200px auto;color:white;" >Dental Booking Website</h4>
            </span>
         </div>
         <div class="col s12">
            <span class="">
               <h6 class="center-align" style="margin-top:-170px;color:white;" >Visit your dentist</h6>
            </span>
         </div>
         <div class="col s12">
            <span class="">
               <h5 class="center-align" style="margin-top:-120px;color:white;" ><a href="#book_appt"class="waves-effect waves-light btn #00b0ff light-blue accent-3">Book Appointment</a></h5>
            </span>
         </div>
      </div>
      <div id="about"class="row section scrollspy" style="border:px solid red;height:450px;background:#fff;" >
         <div class="col s12">
            <span class="">
               <h4 class="center-align" style="margin-top:40px;padding:40px; auto;color:#2da2d8;" >About Us</h4>
            </span>
         </div>
         <div class="col s12">
            <div class="container">
               <p class="" style="color:black;font-size:16px;" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. </p>
            </div>
         </div>
      </div>
      <div id="services"class="row section scrollspy" style="border:px solid red;height:450px;background:#fafafa;" >
         <div class="col s12">
            <span class="">
               <h4 class="center-align" style="margin-top:40px;padding:40px; auto;color:#2da2d8;" >Our Services</h4>
            </span>
         </div>
         <div class="col s12">
            <div class="container">
               <p class="" style="color:black;font-size:16px;" >Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. </p>
            </div>
         </div>
      </div>
      <div id="book_appt"class="form-wrapper section scrollspy"style="box-shadow:1px 1px 5px 1px #eee;overflow:hidden;width:400px;height:auto;padding:20px; margin:100px auto;border:1px solid #eee;background:#ffff;">
         <form action="functions/insert_func.php" style="max-width:100%;border:px solid red;" method="post">
            <h4>Book Appointment</h4>
            <input type="text" placeholder="Firstname" name="fname"><br>
            <input type="text" placeholder="Lastname" name="lname"><br>
            <input type="email" placeholder="Email" name="email"><br>
            <input type="number" placeholder="Mobile" name="phone"><br>
            <select name="service_type" id="">
               <option value="" disabled selected >Select service type</option>
               <option value="Tooth Extraction">Tooth Extraction</option>
               <option value="New Dental Braces">New Dental Braces</option>
               <option value=" Braces Adjustment">Braces Adjustment</option>
            </select>
            <input type="date" placeholder="Date" name="appt_date"><br>
            <select name="appt_time" id="">
               <option value="" disabled selected >Select Time</option>
               <option value="08:00">8:00 AM</option>
               <option value="09:00">9:00 AM</option>
               <option value=" 10:00">10:00 AM</option>
               <option value="11:00">11:00 AM</option>
               <option value="12:00">12:00 PM</option>
               <option value=" 13:00">01:00 PM</option>
               <option value=" 14:00">02:00 PM</option>
               <option value=" 15:00">03:00 PM</option>
               <option value=" 16:00">04:00 PM</option>
            </select>
            <input type="submit" value="Submit" name="submit"class="submit-btn">
         </form>
      </div>
      <div class=" footer col s12" style="background:#2da2d8;padding:15px;">
      <div class="container">
         <div class="col s12">
            <h6 class="center-align" style="color:white;" >&copy; All Rights Reserved 2022</h6>
         </div>
      </div>
      <script src="materialize/js/materialize.min.js"></script>
      <script>
         $(document).ready(function () {
             $('select').material_select();
         });
         // $('.scrollspy').scrollSpy({
         //     scrollOfffset: 5
         //   });
         
           $(document).ready(function(){
             $('#menu').pushpin({
             top: $('#menu').offset().top
           });
             $('.scrollspy').scrollSpy();
             
           });
           $(document).ready(function(){
          		$('.sidenav').sidenav();
          	});
                 
      </script>
   </body>
</html>