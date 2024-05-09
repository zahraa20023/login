<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet">
    <style>
     body{
        background-color: whitesmoke;
        font-family: 'Tajawal',sans-serif;
     } 
     #mother{
        width: 100px;
        font: size 20px; 
     } 
     main{
        float:right;
        border:1px solid gray;
        padding:5px;
     }
     input{
        padding:4px;
        border:2px solid black;
        text-align:center;
        font-size:17px;
        font-family: 'Tajawal',sans-serif;
     }
     aside{
        text-align:center;
        width:300px; 
        float:left;
        border:1px solid black;
        padding:10px; 
        font: size 20px; 
        background-color:silver;
        color:white;      
     }
     #tbl{
        width:890px; 
        font-size:20px;
     }
     #tbl th{
        background-color:silver;
        color:black;
        font: size 20px;
        padding:10px;
     }
     aside button{
        width:190px;
        padding:8px; 
        margin-top:7px;
        font: size 17px;
        font-family: 'Tajawal',sans-serif;
        font-weight:bold;

     }
    </style>
</head>
<body dir="ltr">
    <?php
     # الاتصال مع قاعده البيانات
    $host='local host';
    $user='root';
    $pass='';
    $db='student1';
    #button veriable--
    $id='';
    $name='';
    $address='';
    if(issset($_POST['id'])){
        $id=$_POST['id'];
    }
    if(issset($_POST['name'])){
        $nane=$_POST['name'];
    }
    if(issset($_POST['address'])){
        $address=$_POST['address'];
    }
    $sqls='';
    if(issset($_POST['add'])){
        $sqls= "insert into student value($id,'$name','$address')";
        mysqli_query($con,$sqls);
        header("location: home.php");
    }
    if(issset($_post['del'])){
        $sqls="delete from student where name='name'";
        mysqli_query($con,$sqls);
        header("location: home.php");
    }



      ?>

<div id='mother'>
<form method="post">
 <!-- لوحه التحكم -->   
<aside>  
<div id= 'div'>
<img src='https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pngwing.com%2Fen%2Fsearch%3Fq%3Dstudent&psig=AOvVaw371tegMLl_thSSAp_ey4fL&ust=1715333373698000&source=images&cd=vfe&opi=89978449&ved=0CBIQjRxqFwoTCJDimv-ggIYDFQAAAAAdAAAAABAE' alt='لوكو الموقع' width="200px">
<h3> لوحه المدير</h3>
<label>  رقم الطالب</label><br>
<input type="text" name="id" id="id"><br>
<label>  اسم الطالب</label><br>
<input type="text" name="name" id="name"><br>
<label> عنوان الطالب</label><br>
<input type="text" name="address" id="adress"><br>
<button name="add"> اضافه طالب</button>
<button name="del"> حذف الطالب</button>
</div>
</aside> 
<!-- عرض بيانات الطلاب -->    
<main>
<table id='tb1'>
<tr>
<th> الرقم التسلسلي</th>
<th> اسم الطالب</th>
<th>عنوان الطالب</th>
</tr> 
<?php
while ( $row= mysqli_array($res))
   echo"<tr>";
   echo"<td>".$row['id']."</td>";
   echo"<td>".$row['name']."</td>";
   echo"<td>".$row['address']."</td>";
   echo"</tr>";


?>
</table>    
</main>
</form>        
</div>       
</body>
</html>