<html>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1"/>
<meta charset = "utf-8">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tocas-ui/2.3.3/tocas.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<style>
  #q9display {
    position: fixed;
    bottom: 0;
    right: 0;
  }
</style>
</head>
<body>
<div class="ts heading slate">
    <span class="header">Q/9 Remote Client Unit</span>
    <span class="description">Please enter the Remote ID Generated by the desktop interface.</span>
</div>
<div class="ts segment">
    <div class="content">
        <div class="header">Remote ID</div>
        <div class="description">
           <div class="ts fluid input">
				<input id="rid" type="text" placeholder="Remote ID">
			</div>
        </div>
    </div>
</div>
<div id="err" class="ts negative message" style="display:none;">
    <div class="header">Remote ID is invalid</div>
    <p>Please make sure you have entered a valid Remote ID.</p>
</div>
<div class="ts segment">
    <p>Please make sure you have a stable internet connection when you are using this system.</p>
	<p>Unstable Internet connection might lead to problems in typing, specially when you are typing fast :P</p>
</div>
<div class="ts fluid buttons">
	<button class="ts basic button" onClick="window.location.href='index.php';">Back</button>
    <button class="ts positive basic button" onClick="redirect();">Connect</button>
</div>
<script>
var ok = false;
$("#rid").change(function(){
    if ($('#rid').val() != null && $('#rid').val() != ""){
		ok = true;
	}else{
		ok = false;
	}
});

function redirect(){
	var p = $('#rid').val();
	if (ok == true){
		if (p.match(/[^$,.\d]/)){
		$('#err').fadeIn('slow').delay(2000).fadeOut('slow');
		}else{
		window.location.href= "minput.php?id=" + $('#rid').val();
		}
	}else{
		$('#err').fadeIn('slow').delay(2000).fadeOut('slow');
	}
	
}
</script>
</body>
</html>