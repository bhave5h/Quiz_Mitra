<?php
include '../config.php';
// print_r($_POST);

	$sql = "INSERT INTO `test`( `test_name`, `noq`, `mpq`, `tm`) 
	VALUES 
	('".$_POST['test_name']."',
	'".$_POST['noq']."',
	'".$_POST['mpq']."',
	'".$_POST['tm']."')";

	if ($conn->query($sql) === TRUE) {
		$test_id = $conn->insert_id;

		foreach ($_POST['question'] as $key => $question) {
			$sql = "INSERT INTO `questions` (`test_id`, `question`, `opt_1`, `opt_2`, `opt_3`, `opt_4`, `correct_opt`) VALUES 
			('$test_id',
			'" . $_POST['question'][$key] . "', 
			 '" . $_POST['opt_1'][$key] . "', 
			 '" . $_POST['opt_2'][$key] . "', 
			 '" . $_POST['opt_3'][$key] . "', 
			 '" . $_POST['opt_4'][$key] . "', 
			 '" . $_POST['correct_opt'][$key] . "')"; 
	 $conn->query($sql);
	}
	}

	
	
	
$conn->close();
echo "<script>
    alert('New Test created successfully');
    window.location.href = 'test_list.php';
    </script>";
exit;
?>