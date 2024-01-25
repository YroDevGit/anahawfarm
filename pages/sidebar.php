<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="" class="simple-text logo-normal">
          Farmers
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li id="c1">
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>

          <li id="c3">
            <a href="./accounts.php">
              <i class="nc-icon nc-touch-id"></i>
              <p>Accounts</p>
            </a>
          </li>
          
          <li id="c2">
            <a href="">
              <i class="nc-icon nc-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li id="c6">
            <a href="">
              <i class="nc-icon nc-tile-56"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="">
              <i class="nc-icon nc-caps-small"></i>
              <p>Typography</p>
            </a>
          </li>

          <li>
            <a href="../farmhouse1126634412YROLEEEMZ/index.php">
              <i class="nc-icon nc-button-power"></i>
              <p>Log out</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="">
              <i class="nc-icon nc-spaceship"></i>
              <p></p>
            </a>
          </li>
        </ul>
      </div>
    </div>


  <script type="text/javascript">
    window.onload = function(){
      

      var ac = <?php echo $_SESSION['active']; ?>;

      if(ac==1){
        document.getElementById('c1').className = "active";
      }
      if(ac==2){
        document.getElementById('c2').className = "active";
      }
      if(ac==3){
        document.getElementById('c3').className = "active";
      }
      if(ac==4){
        document.getElementById('c4').className = "active";
      }


    }
  </script>