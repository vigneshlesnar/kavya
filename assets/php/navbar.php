<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>KAVYA TRANSPORT</title>
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
      <div class="wrapper">
            <header>

                  <nav>

                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>

                        <div class="logo">
                              <img src="logo/kavyalogo.png" alt="" style="width:100px;height: 80px;margin-top: -5px;">
                        </div>

                        <div class="menu">
                              <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#vis">Vision</a></li>
                                    <li><a href="#ser">Services</a></li>
                                    <li><a href="#cont">Contact</a></li>
                              </ul>
                        </div>
                  </nav>

            </header>

            
      </div>

      <script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


      </script>

</body>
</html>
