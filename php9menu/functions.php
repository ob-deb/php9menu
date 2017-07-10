<?php

function menu_command($bg, $fg, $lbl, $mpath, $fprefix) {
	$cmd  = "9menu -popup -warp ";
	$cmd .= "-font \"-*-fixed-medium-r-normal-*-18-*-*-*-*-*-*-*\" ";
	$cmd .= "-geometry \"0+0\" ";
	$cmd .= "-bg \"$bg\" ";
	$cmd .= "-fg \"$fg\" ";
	$cmd .= "-label \"".utf8_encode($lbl)."\" ";
	$cmd .= "-file \"".$mpath.$fprefix.".9menu\"";
	return $cmd;
}

function get_data_in_file($file_contents, $key) {
	$s = "/$key\=(.*?)\n/s";
	$r = preg_match($s, $file_contents, $m);
	$o = "";
	if (isset($m[1])) {
		$o = trim($m[1]);
	}
	return $o;
}

function get_desktop_info($path) {
	$o = array();
	if (file_exists($path)) {
		foreach (glob($path."*.desktop") as $filename) {
			# Read each file...
			$c = file_get_contents($filename);
			# Data needed...
			$o[] = [
			'hide'     => get_data_in_file($c, 'NoDisplay'),
			'name'     => get_data_in_file($c, 'Name'),
			'exec'     => preg_replace("/ \%.*/", "", get_data_in_file($c, 'Exec')),
			'category' => get_data_in_file($c, 'Categories'),
			'terminal' => get_data_in_file($c, 'Terminal')
			];
		}
	}
	return $o;
}

function clean_desktop_info($a) {
	if ($a['terminal'] != 'true' && $a['hide'] != 'true' && trim($a['exec']) != '') {
		return $a;
	}
}

function get_wider($a) {
	$w = 0;
	foreach($a as $v) {
		$nw = mb_strlen($v['name']);
		if ($nw > $w) {
			$w = $nw;
		}
	}
	return $w;
}




?>
