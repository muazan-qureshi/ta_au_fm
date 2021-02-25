<?php include('header.php');

?>


<section class="container">
	<div>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
				<th>Sr No</th>
				<th>Query ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Subject</th>
				<th>Message</th>
			</tr>
			</thead>
			<tbody>
				<?php
				$srno = 1;
				foreach ($object->visitor_query() as $vquery) {
					
				?>
				<tr>
					<td><?php echo $srno ?></td>
					<td><?php echo $vquery['id'] ?></td>
					<td><?php echo $vquery['name'] ?></td>
					<td><?php echo $vquery['email'] ?></td>
					<td><?php echo $vquery['subject'] ?></td>
					<td><?php echo $vquery['message'] ?></td>	
				</tr>
				<?php
				$srno++;
					}
				?>
			</tbody>
		</table>
	</div>

</section>


<?php
	include('footer.php');
?>