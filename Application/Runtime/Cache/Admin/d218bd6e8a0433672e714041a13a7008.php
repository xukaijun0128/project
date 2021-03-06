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
         <th>会员属性</th>
         <th>最后登录</th>
         <th>操作</th>
        </tr>
    </table>
</div>
 <script type="text/template" id="tpl_user">
    <% _.each(config, function(item) {%>
        <tr>
            <td>
                <%= item.id %>
            </td>
            <td class="info"><%= item.username %>
            </td>
            <td>
                <% if ( +item.type === 1) { %>
                <%= '超级管理员'%>
                <% } else {%>
                <%= '普通管理员'%>
                <% } %>
            </td>
            <td>
                <div class='lastLoginTop'>
                    <%= item.logintime %>
                </div>
                <div>
                    <%= item.loginip %>
                </div>
            </td>
            <td>操作</td>
        </tr>
      <% }) %>
</script>
<script type="text/javascript" src="/Public/Js/jquery.js"></script>
<script type="text/javascript" src="/Public/Js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="/Public/Js/underscore.js"></script>
<script type="text/javascript" src="/Public/Js/backbone.js"></script>
<script type="text/javascript" src="/Public/Js/admin/user.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="/Public/Bs/js/bootstrap.min.js"></script>