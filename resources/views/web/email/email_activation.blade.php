<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
	<div style="width:100%">
		<div style="width:50%; float:left; padding-top:5px;">
			<img src="http://i1364.photobucket.com/albums/r721/Beckz_Dos_Santos_Aveiro/adapromologo_zpsbkd5m2vl.png" style="width:70%;" alt="logo adapromo">
		</div>
		<div style="width:50%;  float:left; text-align:right;">
			<h3>PT Adapromo.id</h3>
			<h6>Perum Araya Blok A, Blimbing, Malang.</h6>
		</div>
	</div>
	<div style="width:100%">
		<center><h4>Hi {{$name}}, <br>Anda telah berhasil melakukan registrasi sebagai user di adapromo.id. Untuk dapat mengakses akun anda dan menggunakan fitur-fitur yang ada silahkan melakukan aktivasi email melalui link berikut ini: <a href="http://localhost:8000/activation/{{ $activation_token }}">Activation Email</a>.</h4></center>
	</div>
	<div style="width:100%">
		<div style="width:30%;float:left; font-size:10px;">PT Adapromo.id &copy; 2016</div>
		<div style="width:40%;float:left; font-size:10px;text-align:center;">Activation Email</div>
		<div style="width:30%;float:left; font-size:10px;text-align:right;">Newsletter Adapromo</div>
	</div>
</body>
</html>