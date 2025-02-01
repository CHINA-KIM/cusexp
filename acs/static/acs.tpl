<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$title}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: burlywood;
            padding: 15px;
            color: white;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            text-align: center;
        }
        nav a:hover {
            background-color: #575757;
        }
        .container {
            padding: 20px;
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        input[type="file"], input[type="submit"], input[type="number"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .input-container {
            margin-bottom: 20px;
        }
        .input-container input[type="file"] {
            width: 100%;
        }
        .input-container input[type="number"] {
            width: 50px;
        }
        .input-container button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }
        .input-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<header>
    <h1>客户样本管理后台</h1>
</header>

<nav>
    <a href="index.php?action=home">首页</a>
    <a href="index.php?action=about">关于我们</a>
    <a href="index.php?action=service">服务</a>
    <a href="index.php?action=case">成功案例</a>
    <a href="index.php?action=contact">联系我们</a>
</nav>

<div class="container">
    {if $action == 'home'}
        <h2>首页</h2>
        <div class="input-container">
            <label for="image-count">请输入上传图片的数量:</label>
            <input type="number" id="image-count" name="image-count" min="1" max="10">
            <button onclick="generateInputs()">确定</button>
        </div>

        <form id="upload-form" action="index.php?action=home" method="post" enctype="multipart/form-data">
            <!-- 动态生成的输入框将会在这里插入 -->
        </form>
    {/if}

    {if $action == 'about'}
        <h2>关于我们</h2>
        <div class="input-container">
            <label for="image-count-about">请输入上传图片的数量:</label>
            <input type="number" id="image-count-about" name="image-count-about" min="1" max="10">
            <button onclick="generateInputs('about')">确定</button>
        </div>

        <form id="upload-form-about" action="index.php?action=about" method="post" enctype="multipart/form-data">
            <!-- 动态生成的输入框将会在这里插入 -->
        </form>
    {/if}

    <!-- 其他页面的表单输入框以此类推 -->
</div>

<script>
    // 生成输入框
    function generateInputs(page = 'home') {
        const countInput = document.getElementById('image-count' + (page === 'home' ? '' : '-' + page));
        const count = parseInt(countInput.value, 10);
        const form = document.getElementById('upload-form' + (page === 'home' ? '' : '-' + page));

        if (!count || count < 1 || count > 10) {
            alert('请输入有效的数字（1-10）');
            return;
        }

        form.innerHTML = ''; // 清空表单

        // 动态生成输入框
        for (let i = 0; i < count; i++) {
            const formGroup = document.createElement('div');
            formGroup.classList.add('form-group');

            const label = document.createElement('label');
            label.setAttribute('for', 'image' + i);
            label.textContent = '上传图片 ' + (i + 1) + '：';

            const input = document.createElement('input');
            input.type = 'file';
            input.name = 'image' + i;
            input.id = 'image' + i;
            input.accept = 'image/*';

            formGroup.appendChild(label);
            formGroup.appendChild(input);

            form.appendChild(formGroup);
        }

        // 添加提交按钮
        const submitBtn = document.createElement('input');
        submitBtn.type = 'submit';
        submitBtn.value = '上传图片';
        form.appendChild(submitBtn);
    }
</script>

</body>
</html>
