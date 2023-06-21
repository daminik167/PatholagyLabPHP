<nav class="navbar navbar-expand-lg navbar-dark custom-nav fixed">
  <div class="container-fluid">
    <!-- <a class="navbar-brand" href="index.php">Pathlogy Lab</a> -->
    <a class="navbar-brand" href="index.php">
      <img class="mb-0" src="proimages/p-logo.png" width="40px">
      <strong>Pathlogy Lab</strong>
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse f-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <?php
        if($_SESSION['pid']==null){
          ?>
        <a class="nav-link" href="register.php">Sign Up</a>
        <a class="nav-link" href="login.php">Sign In</a>
        
        <?php
        }
        else{

        ?>
       <a class="nav-link" href="appointment.php">Appointment</a>
        <a class="nav-link" href="viewmyappt.php">View Appointment </a>
         <a class="nav-link" href="welcome.php">Reports</a>
        <a class="nav-link" href="cartdemo1.php">Cart</a>
        <a class="nav-link" href="feedback.php">Feedback</a>
         <a class="nav-link" href="logout.php">Logout</a>

        <?php
      }
      ?>
       
       
      </div>
    </div>
  </div>
</nav>