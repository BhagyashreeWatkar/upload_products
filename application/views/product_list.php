<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table>
	<thead>
		<tr>
			<th>Company ID</th>
			<th>Company Name</th>
			<th>company image</th>
			<th colspan="2">action</th>
		</tr>
	
</thead>
	<tbody>
		<?php foreach($products as $row) { ?>
		<tr>
			<td><?php echo $row->product_id; ?></td>
			<td><?php echo $row->product_name; ?></td>
			<td><img src="<?php echo base_url().'/uploads/'.$row->product_image; ?>"></td>
			<td>
				<a href="<?php echo base_url().'index.php/welcome/edit_product/'.$row->product_id;?>">Edit</a></td>
			<td><a href="<?php echo base_url().'index.php/welcome/delete_product/'.$row->product_id;?>">Delete</a>
			</td>
		</tr>
	<?php } ?> 
	</tbody>
</table>
</body>
</html>