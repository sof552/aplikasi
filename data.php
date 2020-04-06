<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	include('json.php');
	?>
<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
												<thead>
													<tr>
														<th class="atasbro">No.</th>
														<th class="atasbro">Negara</th>
														<th class="atasbro">Positif</th>
														
														
													</tr>
												</thead>
												<tbody>
													     
													  <?php   
												   for($a=0; $a < count($data); $a++)
												   {
												    print "<tr>";
												    // penomeran otomatis
												    print "<td>".$a."</td>";
												    // menayangkan 
												    print "<td>".$data[$a]['id']."</td>";
												    print "<td>".$data[$a]['name']."</td>";
												    
												    print "</tr>";
												   }
												  ?>
											</tbody>
											</table>
</body>
</html>