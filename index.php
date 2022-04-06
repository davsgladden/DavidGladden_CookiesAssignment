<?php
require_once('model/database.php');
require_once('model/zippyusedautos_db.php');

//create a session
session_start();
if(!isset($_COOKIE['userid'])){
	setCookie('userid', 'Guest');
}

	$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW);
	if(!$action) {
		$action = filter_input(INPUT_GET, 'action', FILTER_UNSAFE_RAW);
		if(!$action) {
			$action = 'list_vehicles';
		}
	}

if ($action == 'register') {
	$firstname = filter_input(INPUT_POST, 'firstname', FILTER_UNSAFE_RAW);
	if(!empty($firstname)) {
		setCookie('userid', $firstname);
		header("Location: .?action=register");
	}
	include('view/register.php');
}
else if ($action == 'logout') {
	include('view/logout.php');
}
else if ($action == 'list_vehicles') {
    $type_ID = filter_input(INPUT_GET, 'type_ID', FILTER_VALIDATE_INT);
    $make_ID = filter_input(INPUT_GET, 'make_ID', FILTER_VALIDATE_INT);
    $class_ID = filter_input(INPUT_GET, 'class_ID', FILTER_VALIDATE_INT);
    $orderBy = filter_input(INPUT_GET, 'orderBy', FILTER_UNSAFE_RAW);
	if ($type_ID == NULL || $type_ID == FALSE) {$type_ID = -1;}
	if ($make_ID == NULL || $make_ID == FALSE) {$make_ID = -1;}
	if ($class_ID == NULL || $class_ID == FALSE) {$class_ID = -1;}
	if ($orderBy == NULL || $orderBy == FALSE) {$orderBy = "Price";}

		$vehicles = get_vehicles($type_ID, $make_ID, $class_ID, $orderBy);

	$makes = get_makes();
	$types = get_types();
	$classes = get_classes();
	include('view/vehicle_list.php');
}

?>

<?php
    if ($_POST) {
        echo var_dump($_POST);
    }
?>
