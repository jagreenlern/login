<?php
require_once 'head.php';
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors', true);

require_once baseurl . 'SimpleXLSX.php';

//echo '<h1>Read several sheets</h1>';
if ( $xlsx = SimpleXLSX::parse('paises2.xlsx')) {

	//echo '<pre>'.print_r( $xlsx->sheetNames(), true ).'</pre>';

	echo '<table cellpadding="10">
	<tr><td valign="top">';

	// output worksheet 1 (index = 0)

	$dim = $xlsx->dimension();
		//print_r( $dim);
		if ($xlsx->dimension()!=NULL){

	
	$num_cols = $dim[0];
	$num_rows = $dim[1];

	echo '<h2>'.$xlsx->sheetName( 0 ).'</h2>';
	echo '<table border=1>';
	foreach ( $xlsx->rows( 0 ) as $r ) {
		echo '<tr>';
		for ( $i = 0; $i < $num_cols; $i ++ ) {
			echo '<td>' . ( ! empty( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';

	echo '</td><td valign="top">';
	}
	// output worsheet 2 (index = 1)
	$dim = $xlsx->dimension(1);
	//print_r( $dim);
	if ($xlsx->dimension(1)!=NULL){
	
	$num_cols = $dim[0];
	$num_rows = $dim[1];

	echo '<h2>'.$xlsx->sheetName( 1 ).'</h2>';
	echo '<table border=1>';
	foreach ( $xlsx->rows( 1 ) as $r ) {
		echo '<tr>';
		for ( $i = 0; $i < $num_cols; $i ++ ) {
			echo '<td>' . ( ! empty( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '</td>';
		}
		echo '</tr>';
	}
	echo '</table>';

	echo '</td></tr></table>';
} else {
	echo SimpleXLSX::parseError();
}
}
require_once 'foot.php';