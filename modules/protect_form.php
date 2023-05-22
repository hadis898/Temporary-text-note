<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <title><?php if (isset($_GET['note'])) print $_GET['note']; ?></title>
</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<div class="card-header">
输入访问密码
</div>
<div class="card-body">
<form method="POST">
  <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') { ?> 
    <div class="alert alert-danger">密码错误,请重新输入</div>
  <?php } ?>
    <div class="form-group">
    <label>访问密码:</label>
    <input type="password" name="password" class="form-control" autofocus>
    </div> 
    <button type="submit" class="btn btn-primary">确定</button>
    <p><a href="<?php echo dirname($_SERVER['PHP_SELF']);?>" class="card-link">创建新文本便签</a></p> 
    <?php if ($allowReadOnlyView == "1") { ?> 
    <p><a href="<?php echo strtok($_SERVER["REQUEST_URI"],'?') . "?view"; ?>" class="card-link">以只读方式查看</a></p>
<?php } ?>
</form>
</div>
</div>
</div>
</div> 
</div>
</body>
</html>
