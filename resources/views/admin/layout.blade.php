<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="header">
header
</div>
<div class="right_menu">
    <div class="userInfo"></div>
    <div class="menu">
        <ul class="nav">
            <li>面板</li>
            <li>用户管理</li>
            <li>分类管理</li>
            <li>标签管理</li>
            <li>文章管理</li>
            <li>评论管理</li>
            <li>网站设置</li>
        </ul>
    </div>
</div>
<div class="content container-fluid">
content
</div>
</body>
<style type="text/css">
    body {
        margin: 0;
        padding: 0;
    }
    .header {
        width: 100%;
        height: 80px;
        background-color: lightgray;
        position: fixed;
    }

    .right_menu {
        width: 200px;
        /* height: calc(100% - 60px); */
        background-color: dodgerblue;
        position: fixed;
        top: 80px;
        left: 0;
        bottom: 0;
    }

    .content {
        position: relative;
        width: calc(100% - 200px);
        /* height: calc(100% - 60px); */
        /* min-height: 100%; */
        background-color: green;
        top: 80px;
        right: 0;
        bottom: 0;
        float: right;
    }

</style>
</html>