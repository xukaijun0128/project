<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo session('username') ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/Public/Bs/css/bootstrap.min.css" />
   
  </head>
  <body>

<link rel="stylesheet" type="text/css" href="/Public/Css/style.css" />
<!--header-->
<header>
 <h1><image src="/Public/Images/admin_logo.png" /></h1>
 <ul class="rt_nav">
  <li><a href="" target="_blank" class="website_icon">站点首页</a></li>
  <li><a href="#" class="admin_icon">DeathGhost</a></li>
  <li><a href="#" class="set_icon">账号设置</a></li>
  <li><a href="login.php" class="quit_icon">安全退出</a></li>
 </ul>
</header>

<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar" >
<h2><a >起始页</a></h2>
<ul>
    <li>
        <dl>
            <dt>系统设置</dt>
            <dd><a class="active" toWhere="<?php echo U('Admin/System/config');?>">系统基本参数</a></dd>
            <dd><a toWhere="<?php echo U('Admin/System/user');?>">系统用户管理</a></dd>
            <dd><a toWhere="<?php echo U('Admin/System/loginInfo');?>">登陆信息</a></dd>
        </dl>
    </li>
    <li>
        <dl>
            <dt>商品管理</dt>
            <dd><a toWhere="<?php echo U('Admin/Goods/category');?>">商品分类</a></dd>
            <dd><a toWhere="<?php echo U('Admin/Goods/add');?>">商品添加</a></dd>
            <dd><a toWhere="<?php echo U('Admin/Goods/delete');?>">商品删除</a></dd>
            <dd><a toWhere="<?php echo U('Admin/Goods/isShow');?>">商品展示/下架</a></dd>
        </dl>
    </li>
    <li>
        <dl>
            <dt>新闻管理</dt>
            <dd><a toWhere="<?php echo U('Admin/News/add');?>">添加新闻</a></dd>
            <dd><a toWhere="<?php echo U('Admin/News/delete');?>">删除新闻</a></dd>
            <dd><a toWhere="<?php echo U('Admin/News/isShow');?>">新闻显示/下架</a></dd>
        </dl>
    </li>
 </ul>
</aside>

<section class="rt_wrap content mCustomScrollbar">
    <iframe id="Main" name='Main' frameborder="false" src=<?php echo U('Admin/System/config');?> scrolling="auto" allowtransparency="true">
        
    </iframe>
</section>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="/Public/Js/jquery.js"></script>
    <script type="text/javascript" src="/Public/Js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/Public/Js/underscore.js"></script>
    <script type="text/javascript" src="/Public/Js/backbone.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="/Public/Bs/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/Public/Js/admin/changeSrc.js"></script>
  </body>
</html>