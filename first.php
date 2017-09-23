<!DOCTYPE html>
<html>
<head>
<title>首页</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/style.css">

</head>
<script type="text/javascript">
  
  function y(){
    alert("您不是会员，不能享用云盘服务，请升级为Vip后再尝试 ！-----o(*￣︶￣*)o------"); 
  }
</script>
<body onselectstart="return false">
<!--==============================
              header
=================================-->
<header id="home" class="page">
  <div class="navigation single-page-nav">
    <div class="container_12">
      <div class="grid_12">
        <h1 class="logo">
         <img src ="images/" style="width:120px;height:90px;left: 0;top:0;position:absolute"/>
        </h1>
        <nav>
          <ul>
           <li><a href="#home" class="current">发现音乐</a></li>
           <li><?php echo '<a href=mysong.php?user='.$_GET['name']."&class=".$_GET['class'].'>我的音乐</a>';?></li>
           <?php  if(isset($_GET['name']))
                  echo '<li><a href="index.php">退出</a></li>';
                  else
                    echo '<li><a href="index.php">登录</a></li>';
           ?>
           <?php 
              if($_GET['class']=='3')
                echo '<li><a href="upload.php?user='.$_GET['name'].'">云盘</a></li>';
              else
                echo  '<li><a  href="" onclick="y()">云盘</a></li>'
            ?>
          <li><form action=<?php echo "play/search.php";?> name="search" method="get">
              <table border="0" align="center" cellpadding="0" cellspacing="0" class="tab_search">
                <tr>
                  <td>
                    <input type="text" name="searchin" title="Search" class="searchinput" id="searchinput"  value="春风十里" size="10"/>
                  </td>
                  <td>
                    <input type="image" width="21" height="17" class="searchaction" onclick="document.forms['search'].searchinput.value='';" alt="Search" src="images/magglass.gif" border="0" hspace="2"/>
                  </td>
                </tr>
              </table>
            </form>
          </li>
          <li><?php echo '<a href=mysong.php?user='.$_GET['name'].'>用户：'.$_GET['name'].'</a>';?></li>
         </ul>
        </nav>
      </div>
    </div>
  </div>
</header>


<!--=====================
          Content
======================-->

  <div class="ic"></div>
  
<section id="portfolio" class="page">

</section>

<section id="portfolio2" class="page">
<ul class="m_list">
  <li><a href=<?php echo"list.php?a=1"."&class=".$_GET['class']."&name=".$_GET['name']."&b=".$_GET['b']; ?> >内地榜</a></li>
  <li><a href=<?php echo"list.php?a=2"."&class=".$_GET['class']."&name=".$_GET['name']."&b=".$_GET['b']; ?> >欧美榜</a></li>
  <li><a href=<?php echo"list.php?a=3"."&class=".$_GET['class']."&name=".$_GET['name']."&b=".$_GET['b']; ?> >日语榜</a></li>
  <li><a href=<?php echo"list.php?a=4"."&class=".$_GET['class']."&name=".$_GET['name']."&b=".$_GET['b']; ?> >韩语榜</a></li>
</ul>
<ul class="s_list">
  <li></li>
  <li><a href="#" >入驻歌手</a></li>
  <li></li>
</ul>
<ul class="h_list">
  <li><a href=<?php echo"list.php?b=1"."&class=".$_GET['class']."&name=".$_GET['name']."&a=".$_GET['a']; ?> >热门</a></li>
  <li><a href=<?php echo"list.php?b=2"."&class=".$_GET['class']."&name=".$_GET['name']."&a=".$_GET['a']; ?> >流行</a></li>
  <li><a href=<?php echo"list.php?b=3"."&class=".$_GET['class']."&name=".$_GET['name']."&a=".$_GET['a']; ?> >摇滚</a></li>
  <li><a href=<?php echo"list.php?b=4"."&class=".$_GET['class']."&name=".$_GET['name']."&a=".$_GET['a']; ?> >电子</a></li>
</ul>

</section>

<!--==============================
              MusicList
=================================-->
<section id="portfolio3" class="page">

<?php 
if($_GET['a']==1)
{
  ?>

  <table>
    <tr >
      <th >
       <a href=<?php echo"list_c.php?which=1&name=告白气球&singer=周杰伦&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/21.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=1&name=告白气球&singer=周杰伦&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >周杰伦-告白气球</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=1&name=告白气球&singer=周杰伦&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=2&name=浮夸&singer=陈奕迅&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/22.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=2&name=浮夸&singer=陈奕迅&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >陈奕迅-浮夸</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=2&name=浮夸&singer=陈奕迅&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=3&name=演员&singer=薛之谦&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/23.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=3&name=演员&singer=薛之谦&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >薛之谦-演员</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=3&name=演员&singer=薛之谦&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=4&name=IF YOU&singer=BIGBANG&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/24.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=4&name=IF YOU&singer=BIGBANG&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >BIGBANG - IF YOU</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=4&name=IF YOU&singer=BIGBANG&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/25.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >林俊杰 - 不为谁而作的歌</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/26.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >陈奕迅,王菲 - 因为爱情</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/27.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >李荣浩 - 李白</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    
  </table>



<?php
}
?>

<?php 
if($_GET['a']==2)
{
  ?>

  <table>
    <tr >
      <th >
       <a href=<?php echo"list_c.php?which=18&name=Sugar&singer=Maroon 5&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/28.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=18&name=Sugar&singer=Maroon 5&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >Maroon 5 - Sugar</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=18&name=Sugar&singer=Maroon 5&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=19&name=Rolling In The Deep&singer=Adele&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/29.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=19&name=Rolling In The Deep&singer=Adele&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >Adele - Rolling In The Deep</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=19&name=Adele&singer=Adele&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=20&name=Marry You&singer=Bruno Mars&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/30.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=20&name=Marry You&singer=Bruno Mars&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >Bruno Mars - Marry You</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=20&name=Marry You&singer=Bruno Mars&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=21&name=Yellow&singer=Coldplay&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/31.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=21&name=Yellow&singer=Coldplay&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >Coldplay - Yellow</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=21&name=Yellow&singer=Coldplay&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/32.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >Brouno mars-Marry You</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/33.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >Alan Walker-Fade</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/34.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >FallOut - Centuries</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    
  </table>

<?php
}
?>

<?php 
if($_GET['a']==3)
{
  ?>

  <table>
    <tr >
      <th >
       <a href=<?php echo"list_c.php?which=18&name=Sugar&singer=Maroon 5&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/35.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=18&name=Sugar&singer=Maroon 5&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >ギミギミ? </a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=18&name=Sugar&singer=Maroon 5&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=19&name=Rolling In The Deep&singer=Adele&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/36.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=19&name=Rolling In The Deep&singer=Adele&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >ユラユラ</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=19&name=Adele&singer=Adele&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=20&name=Marry You&singer=Bruno Mars&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/37.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=20&name=Marry You&singer=Bruno Mars&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >ある愛のカタチ</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=20&name=Marry You&singer=Bruno Mars&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=21&name=Yellow&singer=Coldplay&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/38.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=21&name=Yellow&singer=Coldplay&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >にできなくて </a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=21&name=Yellow&singer=Coldplay&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/39.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >うな恋でした </a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/40.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >誓い 
</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/41.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >がれて </a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    
  </table>

<?php
}
?>

<?php 
if($_GET['a']==4)
{
  ?>

  <table>
    <tr >
      <th >
       <a href=<?php echo"list_c.php?which=18&name=Sugar&singer=Maroon 5&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/42.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=18&name=Sugar&singer=Maroon 5&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >언프리티 </a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=18&name=Sugar&singer=Maroon 5&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=19&name=Rolling In The Deep&singer=Adele&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/43.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=19&name=Rolling In The Deep&singer=Adele&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >우리 만나는 </a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=19&name=Adele&singer=Adele&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=20&name=Marry You&singer=Bruno Mars&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/44.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=20&name=Marry You&singer=Bruno Mars&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >이사람
</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=20&name=Marry You&singer=Bruno Mars&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=21&name=Yellow&singer=Coldplay&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/45.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=21&name=Yellow&singer=Coldplay&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >두근두근</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=21&name=Yellow&singer=Coldplay&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/46.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >그 사람이 </a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=5&name=不为谁而作的歌&singer=林俊杰&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
     <th >
       <a href=<?php echo"list_c.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/47.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >어떨까</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=6&name=因为爱情&singer=陈奕迅,王菲&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    <tr>
      <th >
       <a href=<?php echo"list_c.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 35px;height: 35px;" src="images/48.png" /></a>
        
      </th>
      <th>
        <a href=<?php echo"list_c.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?> >어떨까</a>
      </th>
      <th>
       <a href=<?php echo"store.php?which=7&name=李白&singer=李荣浩&user=".$_GET['name'];?>>收藏</a>
      </th>
    </tr>
    
  </table>


<?php
}
?>
</section>
  
<section id="portfolio4" class="page">
<?php 
if($_GET['b']==1)
{
  ?>

  <table>
    <tr>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/1.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>开学狠闹钟</a></li>
      </th>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/2.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>欧美男声</a></li>
      </th>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/3.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>瞌睡的下午</a></li>
      </th>
    </tr>
    <tr>
     <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/4.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>有识之士的必备歌单</a></li>
      </th>
     <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/5.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>45度仰望天空</a></li>
      </th>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/6.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>那些年的经典唱片</a></li>
      </th>
    </tr>
    <tr>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/7.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>坏</a></li>
      </th>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/8.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>韩语轻柔</a></li>
      </th>
     <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/22.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>陈大哥炫技</a></li>
      </th>
    </tr>
  </table>
<?php }?>

<?php 
if($_GET['b']==2)
{
  ?>

  <table>
    <tr>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/a1.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>优质中文说唱Flow</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/a2.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>Progressive House</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/a3.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>开学季|送给学生</a></li>
      </th>
    </tr>
    <tr>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/a4.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>[欧美]相逢黑夜</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/a5.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>萝莉合唱</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/a6.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>钢琴纯音</a></li>
      </th>
    </tr>
    <tr>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/a7.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>柔情男嗓</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/a8.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>UltraChina现场</a></li>
      </th>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/a9.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>倾听自然</a></li>
      </th>
    </tr>
  </table>
<?php }?>
<?php

if($_GET['b']==3)
{
  ?>

 <table>
    <tr>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/c1.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>摇滚经典</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/c2.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>Music House</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/c3.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>爵士摇滚</a></li>
      </th>
    </tr>
    <tr>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/c4.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>[欧美]相逢黑夜</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/c5.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>毒性嗓音</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/c6.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>钢琴纯音</a></li>
      </th>
    </tr>
    <tr>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/c7.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>柔情男嗓</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/c8.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>因为一首歌</a></li>
      </th>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/c9.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>倾听自然</a></li>
      </th>
    </tr>
  </table>
<?php }?>
<?php 

if($_GET['b']==4)
{
  ?>

 <table>
    <tr>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/b1.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>轻歌曼舞</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/b2.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>穷尽史诗</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/b3.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>上天的恩惠</a></li>
      </th>
    </tr>
    <tr>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/b4.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>[欧美]相逢黑夜</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/b5.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>人间四时有好景</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/b6.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>钢琴纯音</a></li>
      </th>
    </tr>
    <tr>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/b7.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>抑郁唤醒</a></li>
      </th>
       <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/b8.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>别告诉他</a></li>
      </th>
      <th>
        <a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img style="width: 80px;height: 80px;" src="images/b9.png" /></a>
      </th>
      <th>
        <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>>倾听自然</a></li>
      </th>
    </tr>
  </table>
<?php }?>
</section>

<section id="portfolio5" class="page">
  <ul>
    <br />
      <li><a href=<?php echo"geshou.php?play=4&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img   style="width: 280px;height: 80px;" src="images/14.png" /></a></li>
      <li><a href=<?php echo"geshou.php?play=3&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img   style="width: 280px;height: 80px;" src="images/13.png" /></a></li>
      <li><a href=<?php echo"geshou.php?play=2&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img   style="width: 280px;height: 80px;" src="images/12.png" /></a></li>
      <li><a href=<?php echo"geshou.php?play=1&user=".$_GET['name']."&a=".$_GET['a']."&b=".$_GET['b']."&class=".$_GET['class'];?>><img   style="width: 280px;height: 80px;" src="images/11.png" /></a></li>
    <br />
  </ul>
</section>
<section id="portfolio6">

</section>
<section id="portfolio7">

</section>
<section id="portfolio8">

</section>
<section id="portfolio9">

</section>
<section id="portfolio10">

</section>
<section id="portfolio11">
<table>
  <tr>
    <th >关于网易  |客户服务  |网站导航  |意见反馈</th>
  </tr>
   <tr>
    <th>xxx公司版不所有 这里是网页脚，不知道要写啥，随便写点吧！！！</th>
  </tr>

</table>

</section>
<!--==============================
              footer
=================================-->
</div>

<footer id="footer">
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>
