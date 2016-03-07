<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
        <link rel="stylesheet" type="text/css" href="/Public/Css/style.css" />
        <link rel="stylesheet" type="text/css" href="/Public/Css/login.css" />

       

    </head>
    <body>
        <dl class="admin_login">
            <dt>
                <strong>站点后台管理系统</strong>
                <em>Management System</em>
                <div class='log'></div>
            </dt>
            <dd class="user_icon">
               <input type="text" placeholder="账号" class="login_txtbx username"/>
            </dd>
            <dd class="pwd_icon">
                <input type="password" placeholder="密码" class="login_txtbx password"/>
            </dd>
            <dd>
                <input type="button" value="立即登陆" class="submit_btn"/>
            </dd>
        </dl>
        <script type="text/javascript" src="/Public/Js/jquery.js"></script>
        <script type="text/javascript" src="/Public/Js/underscore.js"></script>
        <script type="text/javascript" src="/Public/Js/backbone.js"></script>

        <script type="text/javascript" src="/Public/Js/admin/Particleground.js"></script>
        <script type="text/javascript" src="/Public/Js/admin/login.js"></script>
        <script type="text/javascript" src="/Public/Js/admin/verificationNumbers.js"></script>
        <script type="text/javascript" src="/Public/Js/admin/doLogin.js"></script>
    </body>
</html>