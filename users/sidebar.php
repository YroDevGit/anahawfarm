
<link rel="stylesheet" type="text/css" href="../../assets/css/paper-dashboard.css?v=2.0.1">

<div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
          </div>
          <!-- <p>CT</p> -->
        </a>
        <a href="" class="simple-text logo-normal">
          Farm Association
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper" style="width: 350px; overflow: hidden;">
        <ul class="nav">
          <li id="c1" style="">
            <a href="./dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Back to home</p>
            </a>
          </li>
          <?php
            if($_SESSION['userole']!=4){
              ?>
                <li id="c2" style="display: none;">
            <a href="./afarm.php">
              <i class="nc-icon nc-tile-56"></i>
              <p>Farm Management</p>
            </a>
          </li>
              <?php
            }

           ?>
          
          
          <li id="c12" style="display: none;">
            <a href="schedules.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>File insurance</p>
            </a>
          </li>
          <li id="c13">
            <a href="method.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Farming method</p>
            </a>
          </li>
          <li id="c14">
            <a href="croprecord.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Crop monitoring</p>
            </a>
          </li>

          <li id="c17">
            <a href="inventory.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Crop management</p>
            </a>
          </li>
          <li id="c31" style="display: none;">
            <a href="sales.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Production Sales</p>
            </a>
          </li>
          
          
          <li id="c15">
            <a href="financial.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Financial management</p>
            </a>
          </li>
          <li id="c16">
            <a href="resource.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Resource management</p>
            </a>
          </li>
          <li id="c11" style="display: none;">
            <a href="damage.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Notice of loss</p>
            </a>
          </li>
          
          <li id="c3" style="display: none;">
            <a href="schedules.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Records</p>
            </a>
          </li>

          <li id="c60" style="">
            <a href="supinv.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Supply inventory</p>
            </a>
          </li>

         
          <li id="c70">
            <a href="sales.php">
              <i class="nc-icon nc-calendar-60"></i>
              <p>Production Sales</p>
            </a>
          </li>
         
          

          <!-- 
          <li id="c1">
            <a href="./calendar.php">
              <i class="nc-icon nc-bank"></i>
              <p>Calendar</p>
            </a>
          </li>

        -->
          
          
          
          
          <?php
            if($_SESSION['userole']!=4){
              ?>
                <li id="c40">
            <a href="pors.php">
              <i class="nc-icon nc-single-02"></i>
              <p>Porsentador</p>
            </a>
          </li>
              <?php
            }
           ?>

          <li>
            <a href="../index.php">
              <i class="nc-icon nc-button-power"></i>
              <p>Log out</p>
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

      if(ac==11){
        document.getElementById('c11').className = "active";
      }

      if(ac==13){
        document.getElementById('c13').className = "active";
      }
      if(ac==14){
        document.getElementById('c14').className = "active";
      }
      if(ac==15){
        document.getElementById('c15').className = "active";
      }
      if(ac==16){
        document.getElementById('c16').className = "active";
      }
      if(ac==17){
        document.getElementById('c17').className = "active";
      }
       if(ac==40){
        document.getElementById('c40').className = "active";
      }
      if(ac==30){
        document.getElementById('c30').className = "active";
      }
      if(ac==31){
        document.getElementById('c31').className = "active";
      }
      if(ac==50){
        document.getElementById('c50').className = "active";
      }
      if(ac==60){
        document.getElementById('c60').className = "active";
      }
      if(ac==70){
        document.getElementById('c70').className = "active";
      }

    }
  </script>

<style type="text/css">
  .sidebar .sidebar-wrapper li.active > a:not([data-toggle="collapse"]):before, .sidebar .sidebar-wrapper li.active > [data-toggle="collapse"] + div .nav li:before{
    display: none;
  }
  .sidebar .sidebar-wrapper li.active > a:not([data-toggle="collapse"]):after, .sidebar .sidebar-wrapper li.active > [data-toggle="collapse"] + div .nav li:after{
    display: none;
  }


</style>

  <style type="text/css">
      .nav li a p{
        color:black;font-weight:900;
      }
    </style>


  