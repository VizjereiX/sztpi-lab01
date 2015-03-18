<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Uncaught exception</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
<body>
	<h1><?= $exception->getMessage(); ?></h1>
	<div>
		<h2>Stacktrace: </h2>
		<table>
		<thead><tr><th>File</th><th>Line</th><th>Function</th><th>Args</th></tr></thead>
		<tbody>
		<tr>
		<td><?= $exception->getFile(); ?></td>
		<td><?= $exception->getLine(); ?></td>
		<td><?= $exception->getFunction(); ?></td>
		<td></td>
		</tr>
		<?php foreach ($exception->getTrace() as $trace): ?>
		<tr>
		<td><?= $trace['file']; ?></td>
		<td><?= $trace['line']; ?></td>
		<td><?= $trace['function']; ?></td>
		<td><?php print_r($trace['args']); ?></td>
		</tr>
		<?php endforeach; ?>
		</tbody></table>
	</div>
  <script src="js/scripts.js"></script>
</body>
</html>
