<?php
$jdate = $_GET['jdate'];
$juser = $_GET['juser'];
include "../db/connections.php";
$datename = getdatenamex($jdate,"%M %d %Y");
$todaysdate111 = mysqldatenow("%Y-%m-%d");





 ?>


<div class="calmodal" id="calmodal">

    <div align="center">
        <div class="modcontent">
            
            <div align="right">
                <div class="forclose">
                    <span onclick="document.getElementById('calmodal').style.display='none';">X</span>
                </div>
            </div>

            <div>
                <div class="header">
                    <span class="schedtoday"><?php
                        if($jdate==$todaysdate111){
                            echo "Schedule for today";
                        }
                            else{
                     echo $datename;} ?></span>
                </div>
                
            </div>

            <div class="content">

                <div>
                    <table class="table" border="0">
                        <tr>
                            <th>Activity</th>
                            <th>Farm #</th>
                            <th>Schedule</th>
                           
                        </tr>

                        <?php
    $resx = setQuery("SELECT s.activity, f.farm_number, s.`schedule` FROM schedule s, farmtbl f WHERE s.farm_id = f.farmid AND s.user_id = $juser AND s.`schedule` LIKE '%$jdate%'");
    $cc1 = "";
    $cc2 = "";
    while($cc3 = getData($resx)){
        $cc1 = $cc3[0];
        $cc2 = $cc3[1];
        $scheddate = $cc3[2];

                         ?>
                        <tr>
                            <td class="td td-f"><?php echo $cc1; ?></td>
                            <td class="td" style="padding-top: 5px; padding-bottom: 5px;"><textarea  style="resize: none; border:solid 1px #d2d5d2; outline: none; width: 300px;height: 60px;" readonly=""><?php echo $cc2; ?></textarea></td>
                            <td class="td"><?php echo $scheddate; ?></td>
                            
                        </tr>

                    <?php } ?>
                    </table>
                </div>
            </div>

            <div>
                <div>
                    
                </div>
            </div>

        </div>
    </div>
</div>
<div></div>

<style type="text/css">
.schedtoday{
    font-size: 19px;
    font-weight: 900;
    font-family: cursive;
    user-select: none;
}
        
    .forclose{
        margin-right: 10px;
       
    }
    .forclose span{
        color: gray;
        font-family: monospace;
        font-size: 25px;
        cursor: pointer;
    }
    .forclose span:hover{
        color:orange;
    }

    .header{
        margin-top: 10px;
    }

    .calmodal{
        background-color: rgb(0,0,0,0.5);
        width: 100%;
        height: 100%;
        position: fixed;
        padding-top: 100px;
        top:0;
        left: 0;
    }
    .modcontent{
        width: 80%;
        padding-top: 15px;
        padding-bottom: 15px;
        background-color: white;
        border-radius: 5px;
        box-shadow: transparent;
        padding-left: 10px;
        padding-right: 10px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .content{
        margin-top: 20px;
        margin-bottom: 20px;
    }
</style>