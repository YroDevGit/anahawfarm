<?php
include '../db/connections.php';
$todaysdate = mysqldatenow("%Y-%m-%d");
session_start();



 ?>

<head>
    <title>My Calendar</title>
</head>


<input type="hidden" name="" value="<?php echo $todaysdate; ?>" id="fortoday">

<div>
   
    <style type="text/css">
       .back{position: absolute;top: 15; left: 10;} 
       .backc{text-decoration: none;font-size: 18px;}
       .backc span:hover{color: orange;}
    </style>
</div>

<div align="center">
    <div>
        <div class="calendarttl">
            <span>Farm calendar</span>
        </div>
    </div>

    <style type="text/css">
        .calendarttl{
            margin-top: 10px;
        }
        .calendarttl span{font-size: 20px; font-weight: 900; font-family: cursive;color: #0ead0b;}
    </style>
</div>


<div id="insert">
    
</div>
<div align="center" style="margin-top: 25px;">

<?php

$user = $_SESSION['userid'];
$_SESSION['xsched'] =2;
// Set the timezone
date_default_timezone_set('UTC');

$month = date('m');
$year = date('Y');

// Get the number of days in the month
echo '<form method="get"><div align="center">';
echo '<select name="month" id="month" onchange="changeDate()">';
for ($i = 1; $i <= 12; $i++) {
    $month_name = date('F', mktime(0, 0, 0, $i, 1, $year));
    echo '<option value="' . sprintf('%02d', $i) . '"';
    if ($i == $month) {
        echo ' selected';
    }
    echo '>' . $month_name . '</option>';
}
echo '</select>';
echo '<select name="year" id="year" onchange="changeDate()">';
for ($i = date('Y'); $i <= date('Y') + 100; $i++) {
    echo '<option value="' . $i . '"';
    if ($i == $year) {
        echo ' selected';
    }
    echo '>' . $i . '</option>';
}
echo '</select></div>';

echo '</form>';

// Create the calendar table
echo '<table border="1">';

// Create the table header with a drop-down menu for selecting the year and month
echo '<thead>';
echo '<tr>';
echo '<th colspan="7">';

echo '</th>';
echo '</tr>';
echo '<tr>';
echo '<th>Sun</th>';
echo '<th>Mon</th>';
echo '<th>Tue</th>';
echo '<th>Wed</th>';
echo '<th>Thu</th>';
echo '<th>Fri</th>';
echo '<th>Sat</th>';
echo '</tr>';
echo '</thead>';

// Create the table body
?>
<tbody id="arg">
    
</tbody>
<?php
echo '</table>';
?>
</div>

<style type="text/css">
    table{width: 80%;height: 87%;border-collapse: collapse;}
   table { 
    border-collapse: separate;
    empty-cells: hide;
    border:solid 1px #d0cdcd;
    background-color: white;
}

select{
    width: 150px;
    margin-right: 2px; margin-left: 2px;
    border-radius: 5px;
    height: 25px;
    font-family: cursive;
    cursor: pointer;
    
    outline: none;
    font-size: 17px;
    height: 33px;
}
th{background-color: black; color: white;}
table td{border:solid 1px #c9c9c9;}

</style>

<script type="text/javascript">
    window.onload = function(){
        changeDate();
    }


    function changeDate(){
        var month = document.getElementById('month').value;
        var year = document.getElementById('year').value;
        var xt = new XMLHttpRequest();
        xt.onload = function(){
            document.getElementById('arg').innerHTML = this.responseText;
        }
        xt.open("GET",'calendart.php?month='+month+"&year="+year+"&user="+<?php echo $user; ?>);
        xt.send();

    }



</script>


 <script type="text/javascript">
    window.addEventListener("load", pause);

    function pause(){
            setTimeout(getff,500);
    }

    function getff(){
        var fvalue = document.getElementById('fff').value;
        var datenowz = document.getElementById('fortoday').value;
        if(fvalue==1){
           pop(datenowz);
        }
    }
    
    function pop(str){
        var jdate = str;
        var user = <?php echo $user; ?>;

        var htp = new XMLHttpRequest();
        htp.onload = function(){
            document.getElementById('insert').innerHTML = this.responseText;
        }
        htp.open("GET","calpop.php?jdate="+jdate+"&juser="+user);
        htp.send();

    }

 </script>

 <style type="text/css">
 body{
background-color: #ebffeb;
 }
     .table{
        border-collapse: collapse;
        height: unset;
        border:solid 1px #d2d5d2;
     }
     .td{border-collapse: collapse;vertical-align: center;height: 50px;padding-left: 10px; padding-right: 10px;border:none; font-size: 16px;font-family: cursive; border-top: solid 1px #d9d9d9; border-bottom: 1px #d9d9d9;}
     .td-l{border-top: solid 1px #d9d9d9; border-bottom: 1px #d9d9d9;}
     .td-f{border-top: solid 1px #d9d9d9; border-bottom: 1px #d9d9d9;}
     .act-btn{
        width: 100px;
        height: 30px;
        background-color: #97fb83;
        border:solid 1px #97fb83;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
     }
     .act-btn:hover{
        background-color: orange;
        border-color: orange;

     }
 </style>