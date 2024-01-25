<?php
$type = $_GET['type'];
session_start();
$user = $_SESSION['userid'];
include '../db/connections.php';

 ?>


 <?php
if($type=='crop'){
	$crop = $_GET['crop'];
	$sql = "select * from cropp where cropid=$crop";
	$res = setQuery($sql);
	if($col=getData($res)){
?>
<div align="center">
	<div>
		<div>
			<h2>EDIT CROP</h2>
		</div>
	</div>
	<table>
                <form method="post" action="actions/edits.php?action=1">
                	<input type="" name="cropid" value="<?php echo $col[0]; ?>">
                  <tr>
                <td class="formfield"><label>Farm: </label></td>
                <td class="formfield"><?php farms($user,"memf","crfarm") ?></td>
                </tr>
                <tr>
                <td class="formfield"><label>Cropping: </label></td>
                <td class="formfield"><input class="memf" type="text" name="cropp" value="<?php echo $col[2]; ?>" required=""></td>
                </tr>
                <tr>
                <td class="formfield"><label>Date of plant: </label></td>
                <td class="formfield"><input class="memf" type="date" name="plant" value="<?php echo $col[3]; ?>" required=""></td>
                </tr>
                <tr>
                <td class="formfield"><label>Date of harvest: </label></td>
                <td class="formfield"><input class="memf" type="date" name="harvest" value="<?php echo $col[4]; ?>" required=""></td>
                </tr>
                <tr>
                <td class="formfield"><label>Production harvest: </label></td>
                <td class="formfield"><input class="memf" type="text" name="prod" required="" value="<?php echo $col[5]; ?>"></td>
                </tr>
                <tr>
                <td class="formfield"><label>Sack weight(Kg.): </label></td>
                <td class="formfield"><input class="memf" type="text" name="sack" required="" value="<?php echo $col[6]; ?>"></td>
                </tr>

                <tr>
                	<td colspan="1" align="right" class="formfield pad5"><a href="croprecord.php"><button name="" type="button">Cancel</button></a></td>
                  <td colspan="1" align="right" class="formfield pad5"><button name="cropbtn" type="submit">Save</button></td>
                </tr>
              </form>
              </table>
</div>
<?php
}
}

  ?>




  <style type="text/css">
  .modals{
    position:fixed;
    z-index: 9990;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: rgb(0,0,0,0.5);
    padding-top: 50px;
  }
  .modals *{
    user-select: none;
  }
  .mobody{
    background-color: white;
    display: inline-block;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 25px;
  }
  .formfield button{
    width: 120px;
    background-color:#38d39f;
    border:solid 1px #0dbd0a;
    border-radius: 5px;
    cursor: pointer;
  }
  .pad5{
    padding-top: 5px;
    padding-bottom: 5px;
  }
 .memf{
  width: 300px;
 }
 .formfield{
  padding-left: 10px;
  padding-right: 10px;
 }
 .titlefield{
  padding-top: 15px;
  padding-bottom: 30px;
 }
 .titlefield span{
  font-size: 18px;
  text-transform: uppercase;
 }

 .fclose div span{
  font-size: 23px;
  cursor: pointer;
  color: #969696;
  margin-right:5px;
 }
 .fclose div span:hover{color: orange;}
</style>