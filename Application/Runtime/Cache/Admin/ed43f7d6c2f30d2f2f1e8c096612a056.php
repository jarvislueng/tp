<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
  <link rel="stylesheet" href="http://tp.localhost/Public/css/pintuer.css">
  <link rel="stylesheet" href="http://tp.localhost/Public/css/admin.css">
  <script src="http://tp.localhost/Public/js/jquery.min.js"></script>
  <script src="http://tp.localhost/Public/js/pintuer.js"></script>
</head>
<script>

  var a = window.location['href'];
  var b = new Array();
  b = a.split("/");
  function checkaction(){
    if(b[b.length-2]=="id"){
      document.form.action="http://tp.localhost/admin/course/save";
    }else{
      document.form.action="http://tp.localhost/admin/course/insert";
    }
    form.submit();
  }
</script>
<body>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="" name="form">
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" id="title" class="input w50" value="<?php echo ($data["title"]); ?>" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>类型</label>
        </div>
        <div class="field">
          <input type="text" id="type" class="input w50" name="type" value="<?php echo ($data["type"]); ?>"  />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="text" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value="" data-toggle="hover" data-place="right" data-image="" />
          <input type="button" class="button bg-blue margin-left" id="image1" value="+ 浏览上传"  style="float:left;">
          <div class="tipss">图片尺寸：1920*500</div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>描述</label>
        </div>
        <div class="field">
          <input type="text" id="decribe" class="input w50" name="decribe" value="<?php echo ($data["decribe"]); ?>"  data-validate="required:,number:排序必须为数字" />
          <div class="tips"></div>
        </div>
        <div class="field">
          <input type="hidden" id="id" class="input w50" name="id" value="<?php echo ($data["id"]); ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea type="text" id="content" class="input" name="content" style="height:120px;" value=""><?php echo ($data["content"]); ?></textarea>
          <div class="tips"></div>
        </div>
      </div>

      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <input type="submit" class="button bg-main icon-check-square-o" id="sub"  onclick="checkaction();"> </inputsubmit>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>