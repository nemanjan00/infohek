<html>
	<head>
	<title>Example</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./style.css">	
<link rel="stylesheet" type="text/css" href="http://infohek.nemanja.top/style.css">
	 </head>
	<body>
		<textarea id="source" style="display:none">	</textarea>
		<script src="https://gnab.github.io/remark/downloads/remark-latest.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script>

			$.get("/01-uvod.markdown", function(data) {
				$("#source").text(data);
				var slideshow = remark.create();
			}).fail(function(error) {
				window.location= "/";
			});

		</script>
	</body>
</html>
