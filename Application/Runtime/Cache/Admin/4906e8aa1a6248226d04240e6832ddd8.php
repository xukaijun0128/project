<?php if (!defined('THINK_PATH')) exit();?> <link rel="stylesheet" type="text/css" href="/Public/Js/jquery-ui/jquery-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Js/jquery-ui/jquery-ui.structure.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Js/jquery-ui/jquery-ui.theme.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Css/style.css" />
 <link rel="stylesheet" type="text/css" href="/Public/Css/System_config.css" />
<div id='systemUser'>
    <table class="table userTable">
        <tr>
         <th>id</th>
         <th>登陆名</th>
         <th>ip地址</th>
         <th>登录时间</th>
        </tr>
    </table>
    <div class='set'>
        <button href="#" class="inner_btn clear" num = 5>清除后5条</button>
        <button href="#" class="inner_btn clear" num = 10>清除后10条</button>
    </div>
</div>
 <script type="text/template" id="tpl_user">
    <% _.each(config, function(item) {%>
        <tr>
            <td>
                <%= item.id %>
            </td>
            <td><%= item.username %>
            </td>
            <td>
                <%= item.loginip%>
            </td>
            <td>
                <%= item.logintime%>
            </td>
        </tr>
      <% }) %>
</script>
<script type="text/javascript" src="/Public/Js/jquery.js"></script>
<script type="text/javascript" src="/Public/Js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/Public/Js/underscore.js"></script>
<script type="text/javascript" src="/Public/Js/backbone.js"></script>
<script type="text/javascript" src="/Public/Js/admin/loginInfo.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="/Public/Bs/js/bootstrap.min.js"></script>