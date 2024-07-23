<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Exception </title>
	<style type="text/css">body,html{width:90vw;height:90vh;margin:0;background-color:#000;color:#fff;font-size:1.25rem}#err{display:none;}div{animation:1s linear infinite glitch}@keyframes glitch{2%,64%{transform:translate(2px,0) skew(0)}4%,60%{transform:translate(-2px,0) skew(0)}62%{transform:translate(0,0) skew(5deg)}}div:after,div:before{content:attr(title);position:absolute;left:0}div:before{animation:1s linear infinite glitchTop;clip-path:polygon(0 0,100% 0,100% 33%,0 33%);-webkit-clip-path:polygon(0 0,100% 0,100% 33%,0 33%)}@keyframes glitchTop{2%,64%{transform:translate(2px,-2px)}4%,60%{transform:translate(-2px,2px)}62%{transform:translate(13px,-1px) skew(-13deg)}}div:after{animation:1.5s linear infinite glitchBotom;clip-path:polygon(0 67%,100% 67%,100% 100%,0 100%);-webkit-clip-path:polygon(0 67%,100% 67%,100% 100%,0 100%)}@keyframes glitchBotom{2%,4%,60%,64%{transform:translate(-2px,0)}62%{transform:translate(-22px,5px) skew(21deg)}}h5{margin:2rem 0}a{text-decoration:none;color:red}</style>
</head>
<body>
	<div style="position:inherit;padding:0 0.5rem;">
	  	<h4 onclick="xshow()">Window PowerShell</br>(c) Micrsoft Corpration. All rights reserved.</br></h4>
	  	<h5>PS C:\Users\root> Halaman yang Anda cari mungkin telah dihapus, diubah namanya, atau sementara tidak tersedia.</h5>
		<h5>PS C:\Users\root> Silakan coba kembali ke <a href="/">[Beranda]</a>.</h5>
	  	<h5>PS C:\Users\root> Semoga beruntung.</h5>
	  	<br>
	  	<pre id="err"><?=json_encode(["Type"=>get_class($exception),"Message"=>$message,"Filename"=>$exception->getFile(),"LineNumber"=>$exception->getLine()],JSON_PRETTY_PRINT);?></pre>
	</div>
</body>
<footer>
	<script type="text/javascript">function xshow(){document.getElementById("err").style.display='block';};window.setTimeout(function(){window.location.href=`/`;},60000);</script>
</footer>
</html>