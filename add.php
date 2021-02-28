
<?php include 'commerce.php'; 

	$name    =  $_GET['productName'];
	$r_price =  $_GET['productPrice'];


	if ($name == null or $r_price == null) {
		echo 'error';
		exit();
	}

	$data = [
    'name' => $name,
	'regular_price' => $r_price,
	];

	// var_dump($data);

$woocommerce->post('products', $data);

header('Location: http://localhost/woocommerce/listProducts.php');


?>