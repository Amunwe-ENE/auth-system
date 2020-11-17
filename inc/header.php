<!DOCTYPE html>
<html>
  <head>
       <meta charset="utf-8">
       <title></title>
       <!--challenges css-->
       <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
       <link rel="stylesheet" type="text/css" href="css/lib/codemirror.css" media="screen" />
       <link rel="stylesheet" type="text/css" href="css/lib/solarized.css" media="screen" />
       <link rel="stylesheet" type="text/css" href="css/editor.css" />
       <link rel="stylesheet" type="text/css" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/green/pace-theme-loading-bar.min.css">
       <link rel="stylesheet" href="assets/css/login.css" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <script type="text/javascript">
        function toggleModal() {
         // get the clock
         var myClock = document.getElementById('myModal');

         // get the current value of the clock's display property
         var displaySetting = myClock.style.display;

         // also get the clock button, so we can change what it says
         var clockButton = document.getElementById('clockButton');

         // now toggle the clock and the button text, depending on current state
         if (displaySetting == 'block') {
           // clock is visible. hide it
           myClock.style.display = 'none';
           // change button text
           clockButton.innerHTML = 'Login';
         }
         else {
           // clock is hidden. show it
           myClock.style.display = 'block';
           // change button text
           clockButton.innerHTML = 'Hide Login';
          }
        }
    </script>
    <style media="screen">
        .Container{
          margin: 16px;
          padding: 16px;

        }

            .btn-primary {
                  background-image: -webkit-gradient(linear, left top, left bottom, from(#54b4eb), color-stop(60%, #2FA4E7), to(#1d9ce5));
                  background-image: linear-gradient(#54b4eb, #2FA4E7 60%, #1d9ce5);
                  background-repeat: no-repeat;

              }
              button {
                  border-radius: 1px;
                  background-color: #98bf21;
                  }
                .navbar1{
                  background-color:#98bf21
                  height: 50px;
                  padding:0;
                  min-width: 100%;
                  border-bottom: 2px solid red;

                }
              .navbar1 ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
              }
            .navbar1   a:link, a:visited{
                display: block;
                front-weight: bold;
                color:#fff;
                background: #179b77;
                font-size: 24px;
                text-align: center;
                padding: 16px;
                text-transform: uppercase;
                text-decoration: none;
                height: 60px;
              }
              a:hover,a:active{
                background-color: #7A991A;
                color: orange;
              }
              .navbar1 li{
                float:left;
                width: 25%;
                height: 60px;
              }
              .pull-right{
                position: absolute;
                right: 28px;
                margin: 4px;
              }
              .padding-0{
          padding-right:0;
          padding-left:0;
          padding-left: auto;
      }
              header {
                font : bold 40px serif;
                  padding-top: 2px;
                    padding-bottom: 12px;
                    padding-left: 6px;
                  margin-left: 16px;
                  text-align: left;
                background: #179b77;
              color: white;
              font-style: bold;
                border-bottom: 2px solid red;
                margin-top: 0;
              }
              .sidebar-nav {
  padding: 9px 0;
}

.dropdown-menu .sub-menu {
  left: 100%;
  position: absolute;
  top: 0;
  visibility: hidden;
  margin-top: -1px;
}

.dropdown-menu li:hover .sub-menu {
  visibility: visible;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.nav-tabs .dropdown-menu,
.nav-pills .dropdown-menu,
.navbar .dropdown-menu {
  margin-top: 0;
}

.navbar .sub-menu:before {
  border-bottom: 7px solid transparent;
  border-left: none;
  border-right: 7px solid rgba(0, 0, 0, 0.2);
  border-top: 7px solid transparent;
  left: -7px;
  top: 10px;
}

.navbar .sub-menu:after {
  border-top: 6px solid transparent;
  border-left: none;
  border-right: 6px solid #fff;
  border-bottom: 6px solid transparent;
  left: 10px;
  top: 11px;
  left: -6px;
}
            </style>

              <?php include 'css/css.html'; ?>

          </head>
          <body>
            <div class="Container">
            <div class="row">

              <div class="col-xs-2 col-md-2 padding-0">
                <header>
                 <span>Zjuum</span>It
                </header>
              </div>

              <div class="col-xs-10 col-md-10 padding-0">
                <?php require('navbar.php'); ?>
              </div>
              <script>
                $('header span').css('color','orange');
              </script>
            </div>
