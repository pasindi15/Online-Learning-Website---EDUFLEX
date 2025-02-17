// lakni
  function accepts() {
    var userResponce = confirm('Please login first! Do you want to be redirected to the login page?');
    if (userResponce) {
      window.location.href = 'login.php';
    }
  }

  function accept() {
    window.location.href = 'home.php';
  }


  //term and condition page 
  function decline() {
    alert('You need to accept the Terms and Conditions to continue.');
  }

  //admin page returns
  function returns()
  {
    window.location.href='adminhome.php';

  }


