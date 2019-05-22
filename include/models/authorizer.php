<?php
/* Authorrizer håller koll på alla funktionalitet kring kontroll av sidor och
 inlogg. Så att endast rätt användare kan vara på ställen. */
class Authorizer {



  //checks if a user is logged in or not
  // if page requires login and user is not logged in, it redirects user to login-page.
  public function checkLogin($require_login, $page_title) {

    if (isset($require_login) && $require_login == true) {
      if (!isset($_SESSION['logged_in'])) {
        header("Location: login.php?action=please_login");
      }     // if user already logged in and on page login or Register, redirects to index-page.
      else if (isset($page_title) && ($page_title == "Login" || $page_title == "Register")) {
        if(isset($_SESSION['access_level']) && $_SESSION['access_level'] == "User"){
          header("Location: index.php?action=already_logged_in");
        }
      }
    }  // page does not require login, and user can stay on the page.
    else { /* Nothing happens. */  }
  }



}


 ?>
