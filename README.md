# Temporary-text-note
PHP临时文本便签，所有笔记都保存为文本文件，带密码保护。
拷贝项目文件夹里下载的文件到根目录
header("Location: $base_url/" . substr(str_shuffle('234579abcdefghjkmnpqrstwxyz'), -5)); //前面括号里可以增加其他字符，后面的 5 可以修改为其他位数
伪静态
location / {
rewrite ^/([a-zA-Z0-9_-]+)$ /index.php?note=$1;
}

_notes 权限改为 755
伪静态设置为空
当然，还可以修改 favicon.ico 图片。
访问 url会自动生成一个唯一的网址。
