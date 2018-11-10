<?php
    $weight= $_POST["weight"];
    $amount= $_POST["amount"];
    $where= $_POST["where"];
    if ($where == 0){
        $locate= "ภายในประเทศ";
        $nor= "3-5 วัน";
        $fast= "1-3 วัน";
    }else{
        $locate= "ภายนอกประเทศ";
        $nor= "7-14 วัน";
        $fast= "3-5 วัน";
    }
    if ($weight <= 0.25)
        {$total1= (25*$amount) + ($where * $amount);
        $total2= (38*$amount) + ($where * $amount);
    }
    elseif ($weight > 0.25 && $weight <= 0.5)
        {$total1= (30*$amount) + ($where * $amount);
        $total2= (45*$amount) + ($where * $amount);
    }
    elseif ($weight > 0.5 && $weight <= 1)
        {$total1= (50*$amount) + ($where * $amount);
        $total2= (65*$amount) + ($where * $amount);
        }
    elseif ($weight > 1 && $weight <= 2)
        {$total1= (64*$amount) + ($where * $amount);
        $total2= (80*$amount) + ($where * $amount);
        }
    elseif ($weight > 2 && $weight <= 5)
        {$total1= (100*$amount) + ($where * $amount);
        $total2= (135*$amount) + ($where * $amount);
        }
    elseif ($weight > 5 && $weight <= 10)
        {$total1= (160*$amount) + ($where * $amount);
        $total2= (190*$amount) + ($where * $amount);
        }
    elseif ($weight > 10)
        {$total1= "ไม่สามารถจัดส่งได้";
        $total2= "ไม่สามารถจัดส่งได้";
        $nor= "-";
        $fast= "-";
        }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Total Price</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>
<body>
<div class="center-box mg-t">
        <br><br><br><br><br><br><br><br><br>
    <table align="center">
        <tr>
            <td><h2 align="center">จำนวนพัสดุ</h2></td>
            <td><h2 align="center">น้ำหนัก (kg)</h2></td>
            <td><h2 align="center">จัดส่ง</h2></td>
        </tr>
        <tr>
            <td><h2 align="center"><?php echo $amount;?></h2></td>
            <td><h2 align="center"><?php echo $weight;?></h2></td>
            <td><h2 align="center"><?php echo $locate;?></h2></td>
        </tr>
    </table>
    <br>
    <table align="center">
        <tr>
            <td><h2 align="center">บริการ</h2></td>
            <td><h2 align="center">ค่าบริการ</h2></td>
            <td><h2 align="center">ระยะเวลา</h2></td>
        </tr>
        <tr>
            <td><h2 align="center">Normal</h2></td>
            <td><h2 align="center"><?php echo $total1;?></h2></td>
            <td><h2 align="center"><?php echo $nor;?></h2></td>
        </tr>
        <tr>
            <td><h2 align="center">Fast</h2></td>
            <td><h2 align="center"><?php echo $total2;?></h2></td>
            <td><h2 align="center"><?php echo $fast;?></h2></td>
            <br><br>
        </tr>
    </table>
    <br><br>
    <button class="btn" type="button" onclick="window.history.back()" value="Back">กลับไปที่หน้าหลัก</button><br><br>
  </div>

</table>
</body>
</html>
