<html>
<head>
<title>Moduli Administratorit</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="overlay">
		<div>
			<img src="loader.gif" width="64px" height="64px" />
		</div>
	</div>
	<div class="poll-content-outer">
		<div id="poll-content"></div>
	</div>
<script src="jquery-3.2.1.min.js"></script>
<script>
   function shfaq_votimin(){
		$.ajax({
			type: "POST", 
			url: "shfaq_votimin.php", 
			processData : false,
			beforeSend: function() {
				$("#overlay").show();
			},
			success: function(responseHTML){
				$("#overlay").hide();
				$("#poll-content").html(responseHTML);
			}
		});
	}
	function shtoVotim() {
		if($("input[name='Pergjigjeja']:checked").length != 0){
			var Pergjigjeja = $("input[name='Pergjigjeja']:checked").val();
			$.ajax({
				type: "POST", 
				url: "ruaj_votimin.php", 
				data : "Pyetja="+$("#Pyetja").val()+"&Pergjigjeja="+$("input[name='Pergjigjeja']:checked").val(),
				processData : false,
				beforeSend: function() {
					$("#overlay").show();
				},
				success: function(responseHTML){
					$("#overlay").hide();	
					$("#poll-content").html(responseHTML);				
				}
			});
			
		}
	}
    $(document).ready(function(){
		shfaq_votimin();
	});
   </script>
</body>
</html>