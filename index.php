<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/master.css">

    </head>
        <body>
          <header>

            <div class="content-center">
              <a href="" id="logo">The Site</a>
              <nav class = 'small-header-links'>
                <ul>
                  <li><a href="#">menu link</a></li>
                  <li><a href="#">menu link</a></li>
                  <li><a href="#">menu link</a></li>
                </ul>
              <div class="fix-float"></div>
              </nav>

            <div class="menu-block">
              <nav class = 'main-menu'>
                  <ul>
                    <li><a href="#">menu link</a>
                      <ul class="sub-menu">
                        <span id="top-img"><img src="img/sub-menu.png" alt=""></span>
                        <li><a href="#">Integer eget mauris</a></li>
                        <li><a href="#">Pulvinar consectetur</a></li>
                        <li><a href="#">Oget mauris praesent</a></li>
                        <li><a href="#">Interdum justo</a></li>
                        <li><a href="#">Nec neque fringilla</a></li>
                      </ul>
                    </li>
                  <li><a href="#">menu link</a></li>
                  <li><a href="#">menu link</a></li>
                  <li><a href="#">menu link</a></li>
                </ul>
              </nav>
            </div>
            <div class="fix-float"></div>
          </div>
          <div class="fix-float"></div>
        </header>

        <main class="content-center">
            <div class="article-with-aside content-center">
              <div class="article-group-group">
                <article class="main-article">
                  <h2>Aenean ac diam nec neque fringilla</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. nisi ut aliquip ex ea commodo consequat.</p>
                </article>
              <div class="article-group">
                <section class = 'article-left'>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                  </p>
                </section>
                <section class = 'article-right'>
                  <h3>Aenean ac diam nec neque</h3>
                  <ul>
                    <li><a href="#">Integer eget mauris et urna</a></li>
                    <li><a href="#">Pulvinar consectetur hendrerit</a></li>
                    <li><a href="#">Oget mauris praesent</a></li>
                  </ul>
                  <div class="fix-float"></div>
                </section>
              </div>
           </div>

          <aside>
            <article class="">
              <h3>Aenean ac diam nec neque fringilla</h3>
              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Ut enim ad minim veniam.
              </p>
            </article>

            <form name="myForm" action="index.php" onsubmit="return validateForm()" method="get">
              <div class="input-title">First name:</div>
              <input type="text" placeholder="  Enter your name" name="First_name" value="">

              <div class="input-title">Last name:</div>
              <input type="text" placeholder="  Enter your last name" name="Last_name" value="">

              <div class="input-title">Message:</div>
              <textarea rows="1" class="textarea" name="Message" value=""></textarea>

              <button id="submit" type="submit" name="button">SUBMIT</button>
              <div class="zinute"></div>
            </form>
          </aside>
          <div class="fix-float"></div>
        </div>

        <script>
          function validateForm() {
            var x = document.forms["myForm"]["First_name"].value;
            var y = document.forms["myForm"]["Last_name"].value;
            var z = document.forms["myForm"]["Message"].value;
            if (x == "") {
              alert("All fields must be filled out");
              return false;
             return false;
            }
            
            if (y == "") {
              alert("All fields must be filled out");
              return false;
            }
            if (z == "") {
              alert("All fields must be filled out");
              return false;
            }
          }
        </script>

        <section class= 'three-article-blocks'>
            <p class= 'left-down-block'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p class= 'middle-article-block'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <p class= 'right-article-block'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <div class="fix-float"></div>
        </section>
      </main>


          <footer>
            <div class="content-center">
              <nav class = 'small-footer-links'>
                <ul>
                  <li><a href="#">menu link</a></li>
                  <li><a href="#" class="a-border">menu link</a></li>
                  <li><a href="#" class="a-border">menu link</a></li>
                  <li><a href="#" class="a-border">menu link</a></li>
                  <li><a href="#" class="a-border">menu link</a></li>
                  <li><a href="#" class="a-border">menu link</a></li>
                </ul>
              </nav>
              <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            <div class="footer-logo">
              <a href="#">The Site</a>
            </div>
            <div class="fix-float"></div>
          </div>
        </footer>
      </body>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/main.js"> </script>
    </body>
</html>
