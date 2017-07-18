
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">

		<title>{% block title %}{% endblock %}</title>

		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	</head>

	<body>

		<div class="container">

			{% block content %}
			{% endblock %}

			<hr>

			<footer>
				<p>&copy; Company 2017</p>
			</footer>

		</div><!--/.container-->

	</body>
</html>