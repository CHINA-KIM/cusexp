<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理后台</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }

        .container {
            width: 95%;
            max-width: 1200px;
            margin: 30px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            font-size: 22px;
            margin-bottom: 15px;
            color: #4CAF50;
            border-bottom: 2px solid #4CAF50;
            padding-bottom: 5px;
        }

        .section form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        label {
            font-size: 16px;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="file"],
        input[type="text"],
        textarea {
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border 0.3s ease;
        }

        input[type="file"]:hover,
        input[type="text"]:focus,
        textarea:focus {
            border-color: #4CAF50;
        }

        input[type="submit"] {
            font-size: 16px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .current-image img {
            max-width: 200px;
            height: auto;
            margin-top: 10px;
            border-radius: 5px;
        }

        .current-text,
        .current-template-text {
            margin-top: 20px;
        }

        .current-images {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .current-image {
            flex: 1 1 calc(33.333% - 20px);
            margin-bottom: 20px;
            text-align: center;
        }

        textarea {
            resize: vertical;
        }

        .small-input {
            width: 50%;
        }

        p {
            font-size: 16px;
            color: #666;
        }

        .image-input-group {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .image-preview {
            max-width: 100%;
            max-height: 150px;
            object-fit: contain;
            border-radius: 5px;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
                padding: 15px;
            }

            .section h2 {
                font-size: 20px;
            }

            .current-image img {
                max-width: 150px;
            }

            .current-image {
                flex: 1 1 100%;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 24px;
            }

            .section h2 {
                font-size: 18px;
            }

            .current-image img {
                max-width: 100px;
            }

            input[type="file"],
            input[type="text"],
            textarea,
            input[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>管理后台</h1>

    <!-- 图片管理 -->
    <div class="section image-management">
        <h2>修改图片</h2>
        <form action="../modules/transfer.php" method="POST" enctype="multipart/form-data">
            <div class="image-input-group">
                <label for="new_image_1">主頁展示1:</label>
                <input type="file" id="new_image_1" name="new_image_1">
                <!-- Display current image if exists -->
                {if isset($image_paths[0])}
                    <img src="img/{$image_paths[0]}" class="image-preview">
                {/if}

                <label for="new_image_2">主頁展示2:</label>
                <input type="file" id="new_image_2" name="new_image_2">
                {if isset($image_paths[1])}
                    <img src="img/{$image_paths[1]}" class="image-preview">
                {/if}

                <label for="new_image_3">主頁展示 3:</label>
                <input type="file" id="new_image_3" name="new_image_3">
                {if isset($image_paths[2])}
                    <img src="img/{$image_paths[2]}" class="image-preview">
                {/if}

                <label for="new_image_4">主頁展示4:</label>
                <input type="file" id="new_image_4" name="new_image_4">
                {if isset($image_paths[3])}
                    <img src="img/{$image_paths[3]}" class="image-preview">
                {/if}

                <label for="new_image_5">主頁展示 5:</label>
                <input type="file" id="new_image_5" name="new_image_5">
                {if isset($image_paths[4])}
                    <img src="img/{$image_paths[4]}" class="image-preview">
                {/if}

                <label for="new_image_6">主頁展示 6:</label>
                <input type="file" id="new_image_6" name="new_image_6">
                {if isset($image_paths[5])}
                    <img src="img/{$image_paths[5]}" class="image-preview">
                {/if}
            </div>
            <input type="submit" value="上传图片">
        </form>

        <!-- 当前图片显示 -->
        <div class="current-images">
            {if isset($image_paths)}
                <h3>当前图片:</h3>
                {foreach from=$image_paths item=image_path}
                    <div class="current-image">
                        <img src="img/{$image_path}" alt="Current Image">
                    </div>
                {/foreach}
            {else}
                <p>当前没有上传图片</p>
            {/if}
        </div>
    </div>

    <!-- 文字内容管理 -->
    <div class="section text-management">
        <h2>修改文字内容</h2>
        <form action="update_text.php" method="POST">
            <label for="text_content">更新文字内容:</label>
            <textarea id="text_content" name="text_content" rows="4" cols="50">{$text_content|default:"默认文字"}</textarea>
            <input type="submit" value="更新文字">
        </form>

        {if isset($text_content)}
            <div class="current-text">
                <h3>当前文字内容:</h3>
                <p>{$text_content}</p>
            </div>
        {else}
            <p>当前没有文字内容</p>
        {/if}
    </div>

    <!-- 其他模板内容 -->
    <div class="section other-templates">
        <h2>修改其他模板内容</h2>
        <form action="update_template.php" method="POST">
            <label for="template_text">更改模板文字:</label>
            <input type="text" id="template_text" name="template_text" value="{$template_text|default:"默认模板内容"}" class="small-input">
            <input type="submit" value="更新模板内容">
        </form>

        {if isset($template_text)}
            <div class="current-template-text">
                <h3>当前模板文字:</h3>
                <p>{$template_text}</p>
            </div>
        {/if}
    </div>
</div>

</body>
</html>
