
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
        <li> <a class="button border-main icon-plus-square-o" href=<?php echo "add.php?table=".$_GET["table"];?>> 添加内容</a> </li>
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
            //mysql中limit使用方法；
            //初始记录行的偏移量是 0
            //SELECT * FROM table LIMIT 5,10; // 检索记录行 6-15  
           //$_SERVER['PHP_SELF']获取当前页面的地址
        header("Content-type: text/html; charset=utf-8");
        include "../util/mysqlConn.php";
        $tableName = $_GET["table"];
        $Page_size=5;
        $sql1 = "select * from {$tableName}";
        $result1 = mysqli_query($conn,$sql1);
        $count = mysqli_num_rows($result1);//返回结果集行数
        $page_count = ceil($count/$Page_size);//向上取整

        $init=1;
        $page_len=7;
        $max_p=$page_count;
        $pages=$page_count;

        //判断当前页码 
        if(empty($_GET['page'])||$_GET['page']<0){
            $page=1;
        }else {
            $page=$_GET['page'];
        }

        $offset=$Page_size*($page-1);

        $sql2 = ("select * from {$tableName} order by id desc limit $offset,$Page_size");
        $result2 = mysqli_query($conn,$sql2);
        //迭代出数据
        if ($result2->num_rows>0) {
          while($row = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
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

        $page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数
        $pageoffset = ($page_len-1)/2;//页码个数左右偏移量

        $key='<div class="page">';
        $key.="<span>$page/$pages</span> "; //第几页,共几页
        if($page!=1){
            $key.="<a href=\"".$_SERVER['PHP_SELF']."?page=1&table={$tableName}\">第一页</a> "; //第一页
            $key.="<a href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."&table={$tableName}\">上一页</a>"; //上一页
        }else {
            $key.="第一页 ";//第一页
            $key.="上一页"; //上一页
        }
        if($pages>$page_len){
            //如果当前页小于等于左偏移
            if($page<=$pageoffset){
                $init=1;
                $max_p = $page_len;
            }else{//如果当前页大于左偏移
            //如果当前页码右偏移超出最大分页数
                if($page+$pageoffset>=$pages+1){
                    $init = $pages-$page_len+1;
                }else{
          //左右偏移都存在时的计算
                    $init = $page-$pageoffset;
                    $max_p = $page+$pageoffset;
                }
            }
        }
        for($i=$init;$i<=$max_p;$i++){
            if($i==$page){
                $key.=' <span>'.$i.'</span>';
            } else {
                $key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".$i."&table={$tableName}\">".$i."</a>";
            }
        }
        if($page!=$pages){
            $key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."&table={$tableName}\">下一页</a> ";//下一页
            $key.="<a href=\"".$_SERVER['PHP_SELF']."?page={$pages}&table={$tableName}\">最后一页</a>"; //最后一页
        }else {
            $key.="下一页 ";//下一页
            $key.="最后一页"; //最后一页
        }
        $key.='</div>';
        ?>
        

      

      <tr>
        <td colspan="8">
            <div class="pagelist">
              <?php echo $key ?>
            </div>
        </td>
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