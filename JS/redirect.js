// redirect.js

function redirectToPage() {
  var isLoggedIn = <?php echo (isset($_SESSION['user_name'])) ?>'true' : 'false'; ;

  if (isLoggedIn) {
      window.location.href = "user_page.php";
  } else {
      window.location.href = "login_form.php";
  }
}
