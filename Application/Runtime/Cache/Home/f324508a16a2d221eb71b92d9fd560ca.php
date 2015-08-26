<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>kindeditor</title>
<link href="/github/thinkphpKindeditor/Public/bootstrap/css/bootstrap.css" rel="stylesheet">
<script src="/github/thinkphpKindeditor/Public/js/jquery.min.js"></script>
<script src="/github/thinkphpKindeditor/Public/plugins/kindeditor/kindeditor.js"></script>
<script type="text/javascript">
$(function () {
     KindEditor.ready(function(K) {
      editor1 = K.create('textarea[name="detail"]', {
        height:'250px',
        width:"800px",
        allowFileManager : false,
        allowImageUpload : true,
        items:[
                'source', '|', 'undo', 'redo', '|', 'preview', 'print', 'template', 'code', 'cut', 'copy', 'paste',
                'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
                'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
                'superscript', 'clearhtml', 'quickformat', 'selectall', '|', 'fullscreen', '/',
                'formatblock', 'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold',
                'italic', 'underline', 'strikethrough', 'lineheight', 'removeformat', '|','image','table', 'hr', 'emoticons', 'baidumap', 'pagebreak',
                'anchor', 'link', 'unlink', '|', 'about'
        ],
        afterBlur: function(){ this.sync();}
      });
    });
});
</script>
<style type="text/css">
  #myform table{min-width:600px;width:60%;}
  .formInput{display:inline-block;}
  #btn button{margin-left: 200px}
</style>
</head>
<body>
<h2 style="padding-left: 10px">kindeditor demo</h2>
<div class='wst-tbar' style="height:50px;padding-left: 10px">
<form  id="myform" method="post" action="<?php echo U('Home/Index/submitForm','','');?>" enctype="multipart/form-data">
    <table class="table table-striped  table-hover">
      <tbody>
      <tr><td><textarea rows="2" cols="50" id='detail' name='detail'></textarea></td></tr>
       <tr id="btn"><td><button class="btn btn-danger" type="submit">保&nbsp;存</button><button type="button" class="btn btn-primary">返&nbsp;回</button></td></tr>
      </tbody>
    </table>
</form>
</div>
</body>
</html>