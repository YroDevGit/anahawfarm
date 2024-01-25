<?php
$data = $_GET['q'];
$user = $_GET['user'];
include '../../db/connections.php';




function countCrop($us)
{
  $sql = "select * from cropp where uzer = $us and stat=0";
  $res = setQuery($sql);
  $ret = 0;
  if($col = getData($res)){
    $ret = 1;
  }
  else{
    $ret = 0;
  }
  return $ret;
}



$count = countCrop($user);
if($count==0){
?>
<div align="center">
  <div class="main-body">
    <div>
      <div class="pd main-text">
        No data to display
      </div>
      <div class="pd text">
        User does need site interaction
      </div>
      <div class="pd cta">
          <a href="afarm.php"><button>Get started</button></a>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
  .main-body{width: 100%;padding-top: 50px; padding-bottom: 50px;}
  .pd{padding-top: 5px;padding-bottom: 5px;}
  .cta a button{border:solid 1px #dedede;border-radius: 5px;width: 120px; height: 30px;}
</style>
<?php

}
else{
function getProduction($crop)
{
  $sql = "select * from cropp where cropid = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[5];
  }
  return $ret;
}
function getSackWeight($crop)
{
  $sql = "select * from cropp where cropid = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[6];
  }
  return $ret;
}
function getFertilizer($crop)
{
  $sql = "select * from resource where crop = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[4];
  }
  return $ret;
}

function getBags($crop)
{
  $sql = "select * from resource where crop = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[3];
  }
  return $ret;
}
function getFertilizerCost($crop)
{
  $sql = "select * from finance where croppid = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[5];
  }
  return $ret;
}
function getChemicalCost($crop)
{
  $sql = "select * from finance where croppid = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[7];
  }
  return $ret;
}
function getSeedCost($crop)
{
  $sql = "select * from finance where croppid = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[3];
  }
  return $ret;
}
function getIncome($crop)
{
  $sql = "select * from finance where croppid = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[10];
  }
  return $ret;
}
function getPerHectare($crop)
{
  $sql = "select * from finance where croppid = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[9];
  }
  return $ret;
}
function getHarvestOut($crop)
{
  $sql = "select * from inventory where crop = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[3]+$col[4]+$col[5];
  }
  return $ret;
}
function getConsume($crop)
{
  $sql = "select * from inventory where crop = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[6];
  }
  return $ret;
}

function getChemical($crop)
{
  $sql = "select * from resource where crop = $crop";
  $res = setQuery($sql);
  $ret = "No Data";
  if($col = getData($res)){
    $ret = $col[5];
  }
  return $ret;
}


 ?>

                    <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Harvest Production
                          </div>
                          <div class="body">
                            <?php echo getProduction($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Sack weight
                          </div>
                          <div class="body">
                            <?php echo getSackWeight($data)."Kg."; ?>
                          </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Fertilizer
                          </div>
                          <div class="body">
                            <?php echo getFertilizer($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Number of bags/Hectare
                          </div>
                          <div class="body">
                            <?php echo getBags($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>

                      <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Chemical applied
                          </div>
                          <div class="body">
                            <?php echo getChemical($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Fertilizer cost
                          </div>
                          <div class="body">
                            <?php echo getFertilizerCost($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Seed Cost
                          </div>
                          <div class="body">
                            <?php echo getSeedCost($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Chemical cost
                          </div>
                          <div class="body">
                            <?php echo getChemicalCost($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Marketing income
                          </div>
                          <div class="body">
                            <?php echo "₱".getIncome($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Production per hectare
                          </div>
                          <div class="body">
                            <?php echo getPerHectare($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Total ng partida
                          </div>
                          <div class="body">
                            <?php echo getHarvestOut($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div align="center">
                          <div class="card">
                          <div class="head">
                            Kunsomo
                          </div>
                          <div class="body">
                            <?php echo getConsume($data); ?>
                          </div>
                        </div>
                        </div>
                    </div>

                  </div>


                  

                  <?php } ?>