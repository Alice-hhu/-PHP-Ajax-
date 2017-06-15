
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="../css/pintuer.css">
<link rel="stylesheet" href="../css/admin.css">
<script src="../js/jquery.js"></script>

</head>
<body>

<form method="post" action="" id="listform">
  <div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
    <div class="padding border-bottom">
      <ul class="search" style="padding-left:10px;">
        <li> <a class="button border-main icon-plus-square-o" href=<?php echo "add.php?table=".$_GET["table"]?>> 添加内容</a> </li>
      </ul>
    </div>
    <table class="table table-hover text-center">
      <tr>
        <th width="100" style="text-align:left; padding-left:20px;">ID</th>
        <?php
          include "../util/mysqlConn.php";
          $tableName = $_GET["table"];
          if ($connFlag) {
            if($tableName != "activity"){
              echo "<th>图片</th>";
            }
          }
        ?>
        <th>标题</th>
        <th width="10%">更新时间</th>
        <th width="310">操作</th>
      </tr>
      
      <?php
        include "../util/mysqlConn.php";
        $tableName = $_GET["table"];
        if ($connFlag) {
          $sql = "select * from {$tableName}";
          $result = mysqli_query($conn,$sql);
          if ($result->num_rows>0) {
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
              echo "<tr>
                    <td style='text-align:left; padding-left:20px;'>
                    <input type='checkbox' name='id[]' value='' />".$row["id"]."</td>";
              if ($tableName != "activity") {// 如果不是街区活动，则多加一列图片
                echo "<td width='10%'><img src='../logic/".$row["imgPath"]."' width='70' height='50' /></td>";
              }
              echo "<td>".$row["title"]."</td>
                    <td>".$row["date"]."</td>
                    <td>
                      <div class='button-group'>
                        <a class='button border-main' href='edit.php?id=".$row["id"]."&table={$tableName}"."&title=".$row["title"]."&content=".$row["content"]."'>
                          <span class='icon-edit'></span> 修改</a>
                        <a class='button border-red' href='javascript:void(0)' onclick='return del(".$row["id"].",\"$tableName\")'>
                          <span class='icon-trash-o'></span> 删除</a>
                      </div>
                    </td>
                    </tr>";
            }
          }else{
            echo "<tr><td>查无数据<td></tr>";
          }
        }
      ?>

      <tr>
        <td colspan="8">
            <div class="pagelist">
                  <a href="">上一页</a>
                  <span class="current">1</span>
                  <a href="">  2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a></div></td>
      </tr>

    </table>
  </div>
</form>
  <script type='text/javascript'>
    function del(id,table){
      if(confirm('您确定要删除吗?')){
        location.href='../logic/delete.php?table='+table+'&id='+id;
      }
    }
    </script>";


</body>
</html>