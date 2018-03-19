<html>
<meta charset="UTF-8">
    <head><title></title></head>
    <body>

    </body>
</html>
<script type="text/javascript">
    function clear(){
        Source=document.body.firstChild.data;
        document.open();
        document.close();
        document.title="忆栈App下载";
        document.body.innerHTML=Source;
    }
    function click() {  if(event.button==2) {  alert('右键不能用了！') } }  document.onmousedown=click
        var result = prompt('输入下载密码：');
        if(result==131){
            window.location.href="?id=1";
        }else{
            alert('密码有误！');
            clear();
        }
<?php
        if(isset($_GET['id'])){
            $file = "./memory.apk";                                           //计算机上的一个文件
            $fileName = basename($file);                                                                      //获取文件名
            header("Content-Type:application/octet-stream");                                    //告诉浏览器文档类型(mime类型); octet-stream指的是二进制文件类型;下载任何类型的文件都可以这么指定
            header("Content-Disposition:attachment;filename=".$fileName);        //告诉浏览器以附件方式对待文件(即下载文件);并设置下载后的文件名
            header("Accept-ranges:bytes");                                                                   //告诉浏览器文件大小的单位
            header("Accept-Length:".filesize($file));                                                    //告诉浏览器文件的大小
            $h = fopen($file, 'r');                                                                                       //打开文件
            echo fread($h, filesize($file));
         }
?>

</script>
