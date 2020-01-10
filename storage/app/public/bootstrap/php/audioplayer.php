<?php
	$directory = '../../music/';
	$scandir = scandir($directory);

	$music_list = array();

	for ($i=0; $i < count($scandir); $i++){
		if ($scandir[$i] != '.' && $scandir[$i] != '..') {
			$music_list[$i - 1] = $scandir[$i];
		}
	};

	echo json_encode($music_list)
?>