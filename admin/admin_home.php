
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/menu.css">
<link rel="stylesheet" type="text/css" href="../css/home.css">
<html>
  <head>
    <meta charset="utf-8">
    <title>chc puthenchira</title>
    <script type="text/javascript">
      function preventBack() { window.history.forward(); }
      setTimeout("preventBack()", 0);
      window.onunload = function () { null };
  </script>



  </head>
  <body>
    <div class="body" style="height:600px;" >
      <div class="top1">
        <div class="logo">
          <img src="../images/healthcare-bubble.jpg">
        </div>
        <div class="head">
          <center>
            <b style="color:brown;font-size: 30px;">CHC PUTHENCHIRA OP MANAGEMENT</b>
          </center>
        </div>
      </div>
<!------ --->
  <div class="admin_body" style="margin-left: 20px;height: 600px;background-color: #442D96;overflow: hidden;">
    <div class="tab" style="align-items: center;margin-left: 250px;">
      <a href="admin_home.php">
        <b style="color: white;font-size: 22px;">ADMIN HOME</b>
      </a>
      <div class="dropdown">
        <button class="dropbtn"><b>STAFF </b></button>
        <div class="dropdown-content">
          <a href="add_staff.php">ADD </a>
          <a href="remove_staff.php">REMOVE </a>
          <a href="edit2.php">EDIT </a>
          <a href="view_staff.php">VIEW </a>
           <a href="forgot_view.php">REQUESTS </a> 
        </div>
      </div>
        <div class="dropdown">
        <button class="dropbtn"><b>PATIENTS </b></button>
        <div class="dropdown-content">
          <a href="patient_view.php">VIEW </a>
			  </div>
      </div>
         <a href="../logout.php"><b style="color:white;font-size:22px;">LOGOUT</b></a>
    </div>
    <div class="part1" style="margin-left: 250px; margin-top: 80px;background-image: url("images/b2.jpg");">
      <img src="../images/user.png" style="overflow: hidden;margin-top: 50px;"><br>
      <div class="small_content" style="margin-left: 150px;">
        <p style="color:floralwhite;font-size: 25px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome Admin</p>
      </div>
    </div>
  </div>
  <div id="layoutAuthentication_footer">
      <footer class="py-4 bg-light mt-auto">
          <div class="container-fluid">
              <div class="d-flex align-items-center justify-content-between small">
                  <div class="text-muted">Copyright &copy; CHC Puthenchira <?php echo date('Y'); ?></div>
                  <div>
                      <a href="#">Privacy Policy</a>
                      &middot;
                      <a href="#">Terms &amp; Conditions</a>
                  </div>
              </div>
          </div>
      </footer>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="http://localhost/chc1/public/admin-assets/js/scripts.js"></script>
</div>
</div>
</div>
</body>
</html>
