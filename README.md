# Temporary-text-note
具有额外的功能——额外的代码确实增加了大小，所以不是极简主义的，但在缩小和 gzip 压缩后仍然是最小的 10kb。如果你想要真正的极简主义，那么 pereorga 的实现不到 3kb，甚至没有缩小！密码功能是通过向文本文件添加标题行来实现的，该标题行未显示在注释上**请注意，这不会加密内容，只是限制访问**。唯一的服务器要求是启用了 mod_rewrite 的 Apache 网络服务器或启用了 ngx_http_rewrite_module 和 PHP 的 nginx 网络服务器。
### 安装步骤：
### 1、把代码拷贝到网站根目录
### 2、加入伪静态
### On Nginx
```
location / {
    rewrite ^/([a-zA-Z0-9_-]+)$ /index.php?note=$1;
}
```
### 3、打开网页就可以了

只要启用了 mod_rewrite 并且允许 Web 服务器写入数据目录，就不需要配置_notes。此数据目录设置config.php为如果您想将其更改为原始 pereorga/minimalist-web-notepad 版本使用的文件夹，请在此处进行更改。所有笔记都存储为文本文件，因此运行 Apache（或 Nginx）的服务器应该足够了，不需要数据库。

如果笔记没有保存，请检查目录的权限_notes- 0755 或 744 应该是所需要的。

还有一个setup.php页面可用于检查_notes目录是否存在以及是否可以写入。如果您在保存笔记时遇到困难，可能值得删除目录_notes，然后转到setup.php页面创建文件夹。如果一切正常，那么您可以setup.php根据需要删除该文件。

在某些情况下，$base_url 变量config.php需要替换为安装的硬编码 URL 路径。如果是这种情况，只需将开头的行替换config.php为 $base_url = dirname('//' with $base_url ='http://7761.com'
