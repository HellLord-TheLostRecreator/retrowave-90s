<?php
$link = mysqli_connect("localhost","root","mysql","php_specials");
$result = mysqli_query($link,"SELECT = FROM comments ORDER BY id DESC
    LIMIT 3");
if(mysqli_num_rows($result)>0)
{
     while($row=mysql_fetch_object($result))
     {
         ?>
         <div class="col-mid-3"><?php echo $row->name;?></div>
         <div class="col-mid-7"><i><?php echo $row->comment;?></i></div>
         <div class="clearfix"></div>
         <p>&nbsp;</p>
         <?php
     }
}
?>
