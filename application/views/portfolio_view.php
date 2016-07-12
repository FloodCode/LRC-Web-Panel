<h1>Portfolio</h1>
<p>
<table class="table-data" style="width: 100%;">
<tr>
    <th style="width: 20%;">Year</th>
    <th style="width: 20%;">Project</th>
    <th style="width: 60%;">Description</th>
</tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	
?>
</table>
</p>
