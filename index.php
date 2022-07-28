<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>

<style>
	* {
		padding 0 !important;
		margin: 0 !important;
		font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
		font-size: 100%;
		font-weight: 500;
		text-decoration: none !important;
	}
	.box {
		width: 100%;
		height: 100%;
		/* sayfada ortalama */
		/* sayfada ortalama */
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		background-color: #131313;
		color: #fff;
	}

	.username {
		font-size: 3.5rem;
		font-weight: bold;
		padding-bottom: 1rem;	
		display: flex !important;
	}

	.button {
		background-color: #0E27C4;
		border-radius: 5px;
		color: #fff;
		padding: 5px;
		font-size: 0.8rem;
		font-weight: bold;
		text-decoration: none;
		text-transform: uppercase;
		display: flex;
		justify-content: center;
		align-items: center;
		cursor: pointer;
		transition: all 0.3s ease-in-out;
		border: none;	
		margin-top: 0.5rem !important;	
	}

	.numberbox {
		border-radius: 5px;
	}

	#button, #lsay {
		transition: visibility 0.5s, opacity 0.5s linear;
	}
	
	.kinoshi {
		position: fixed;
		bottom: 0;
		width: 100%;
		height: 3rem;
		background-color: #0E27C4;	
		color: #fff;
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: 1.5rem;
		font-weight: bold;	
		text-transform: uppercase;
		cursor: pointer;
		transition: all 0.3s ease-in-out;
		border: none;
	}

</style>

<div class="box">
<div id="adas"></div>
<input type="number" class="numberbox" id="lsay"/>
<button class="button" onclick="letsgo()" id="button">başlat</button>
<a href="/kinoshi.php" class="kinoshi">Panel</a>
<script>
function letsgo(){
var sa = document.getElementById("lsay").value;
if(sa == "") return alert("Lütfen bir sayı giriniz");
if(sa === "") return alert("Lütfen bir sayı giriniz");
if(sa == 0) return alert("Lütfen bir sayı giriniz");
setInterval(function () {$.post('backend.php', {sa:sa}, function(response){ 
	 $("#adas").html(response)
	 
});  }, 4000);  

document.getElementById("lsay").style.visibility = "hidden"
document.getElementById("button").style.visibility = "hidden"
document.getElementById("lsay").style.opacity = 0
document.getElementById("button").style.opacity = 0

}
</script>
</div>