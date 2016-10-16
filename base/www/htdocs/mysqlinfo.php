<?php require '../config.php'; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<link href="/assets/css/custom.css" rel="stylesheet">

		<title>DevilBox</title>
	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<span class="navbar-brand" href="#">DevilBox</span>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li><a href="/">Home</a></li>
						<li><a href="/vhosts.php">Virtual Hosts</a></li>
						<li><a href="/databases.php">Databases</a></li>
						<li> | </li>
						<li><a href="/phpinfo.php">PHP info</a></li>
						<li><a href="/opcache.php">PHP opcache</a></li>
						<li class="active"><a href="#">MySQL info</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>

		<div class="container">

			<h1>MySQL Info</h1>
			<br/>
			<br/>

			<div class="row">
				<div class="col-md-12">

					<p>For reference see here:</p>
					<ul>
						<li><a target="_blank" href="https://dev.mysql.com/doc/refman/5.5/en/server-system-variables.html">https://dev.mysql.com/doc/refman/5.5/en/server-system-variables.html</a></li>
						<li><a target="_blank" href="https://dev.mysql.com/doc/refman/5.6/en/server-system-variables.html">https://dev.mysql.com/doc/refman/5.6/en/server-system-variables.html</a></li>
						<li><a target="_blank" href="https://dev.mysql.com/doc/refman/5.7/en/server-system-variables.html">https://dev.mysql.com/doc/refman/5.7/en/server-system-variables.html</a></li>
					</ul>

					<table class="table table-striped">
						<thead>
							<tr>
								<th>Variable</th>
								<th>Value</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach (getMySQLConfig() as $key => $val): ?>
								<tr>
									<td><?php echo $key;?></td>
									<td><?php echo $val;?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>

				</div>
			</div>

		</div><!-- /.container -->

		<?php require '../include/footer.php'; ?>
		<script>
		// self executing function here
		(function() {
			// your page initialization code here
			// the DOM will be available here
		})();
		</script>
	</body>
</html>
