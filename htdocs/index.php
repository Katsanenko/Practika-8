<?php
$arr = array();
for($i = 0; $i < 50; $i++){
        $arr[$i] = rand(1, 6);
}
$arr = array_chunk($arr, 10);
?>

<table class="city_list">
	<?php foreach ($arr as $items): ?>
	<tr>
		<?php foreach ($items as $row): ?>
		<td><?php echo $row; ?></td>
		<?php endforeach; ?>
	</tr>
	<?php endforeach; ?>
</table>

<style>
.city_list {
	width: auto;
}
.city_list td {
	width: auto;
	border: 1px solid #ddd;
	padding: 7px 10px;
}
</style>