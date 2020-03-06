<html>
<head>
	<title></title>
</head>
<body>
	<button id="send">validate</button>

	<script src="js/jquery-3.2.1.min.js"></script>

	<script>

		$("#send").click(function(){
			$.ajax({
				method: 'POST',
				url: 'http://localhost/medoo/server.php',
				data:{
				pincode:'123ABC'
			},
			error:function(){
			console.log('ERROR');
		},
		dataType:'text',
		success:function(data){
		console.log(data);
		}


		});
	})
	</script>

</body>
</html>