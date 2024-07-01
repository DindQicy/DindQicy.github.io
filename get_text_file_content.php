```php
<?php
// 定义txt文件的路径
$filePath = '/BF1.txt';

// 读取文件内容
if(file_exists($filePath)) {
    $content = file_get_contents($filePath);
    echo $content;
} else {
    echo "文件不存在";
}
?>