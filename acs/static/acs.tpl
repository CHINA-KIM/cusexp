<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>服务管理后台</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">服务管理后台</h1>

    <!-- 导航栏 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">后台管理</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#customerMessages">客户信息</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#websiteContent">网站内容与图片</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- 客户信息模块 -->
    <div id="customerMessages" class="mt-4">
        <h2>客户发来的信息</h2>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>客户姓名</th>
                <th>信息内容</th>
                <th>提交时间</th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$customerMessages item=message}
                <tr>
                    <td>{$message.id}</td>
                    <td>{$message.name}</td>
                    <td>{$message.content}</td>
                    <td>{$message.submit_time}</td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </div>

    <!-- 网站内容与图片更新模块 -->
    <div id="websiteContent" class="mt-4">
        <h2>更换网站内容与图片</h2>
        <form method="POST" action="update_content.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="pageTitle">页面标题</label>
                <input type="text" class="form-control" id="pageTitle" name="pageTitle" value="{$pageTitle}" required>
            </div>
            <div class="form-group">
                <label for="pageDescription">页面描述</label>
                <textarea class="form-control" id="pageDescription" name="pageDescription" rows="5" required>{$pageDescription}</textarea>
            </div>
            <div class="form-group">
                <label for="seoKeywords">SEO关键词</label>
                <input type="text" class="form-control" id="seoKeywords" name="seoKeywords" value="{$seoKeywords}">
            </div>
            <div class="form-group">
                <label for="pageContent">页面内容</label>
                <textarea class="form-control" id="pageContent" name="pageContent" rows="5" required>{$pageContent}</textarea>
            </div>

            <!-- 图片上传模块 -->
            <h3>上传图片 (最多 6 张)</h3>
            {foreach from=$imageIndices item=imageIndex}
                <div class="form-group">
                    <label for="pageImage{$imageIndex}">上传图片 {$imageIndex}</label>
                    <input type="file" class="form-control-file" id="pageImage{$imageIndex}" name="pageImage[]">

                    <!-- 显示当前图片路径（如果有的话）-->
                    {if isset($currentImages[$imageIndex-1])}
                        <div class="mt-2">
                            <label>当前图片：</label>
                            <input type="text" class="form-control" value="{$currentImages[$imageIndex-1]}" readonly>
                        </div>
                    {/if}
                </div>
            {/foreach}

            <button type="submit" class="btn btn-primary">更新内容</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
