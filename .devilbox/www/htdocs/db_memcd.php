<?php require '../config.php'; ?>
<?php $Postgres = loadClass('Memcd'); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require '../include/head.php'; ?>
	</head>

	<body>
		<?php require '../include/navbar.php'; ?>

		<div class="container">

			<h1>Memcached Keys</h1>
			<br/>
			<br/>

			<div class="row">
				<div class="col-md-12">

					<?php if (!\devilbox\Memcd::isAvailable($GLOBALS['MEMCD_HOST_NAME'])): ?>
						<p>Memcahed container is not running.</p>
					<?php else: ?>
						<table class="table table-striped ">
							<thead class="thead-inverse ">
								<tr>
									<th>Key</th>
									<th>Value</th>
								</th>
							</thead>
							<tbody>
								<?php foreach (loadClass('Memcd')->getKeys() as $data): ?>
									<tr>
										<td><?php print_r($data['key']);?></td>
										<td><?php print_r($data['value']);?></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					<?php endif; ?>

				</div>
			</div>

		</div><!-- /.container -->

		<?php require '../include/footer.php'; ?>

	</body>
</html>
