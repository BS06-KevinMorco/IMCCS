<?php include_once('../../../database/config.php'); ?>

<?php
$title =    $_POST['title'];
$module =    $_POST['module'];
$subTitle =    $_POST['subTitle'];
$content =    $_POST['content'];

date_default_timezone_set('Asia/Manila');
$timestamp = date("Y-m-d H:i:s");

/*
$sql = "INSERT INTO subtopic_tbl(title, module, subtopic, content, created_at)
	VALUES ('$title','$module','$subTitle','$content','$timestamp')";
if (mysqli_query($mysqli, $sql)) {
    echo json_encode(array("Subtopic Added"));
} else {
    echo json_encode(array("Subtopic Not Added"));
}
*/
if ($stmt = $mysqli->prepare("INSERT INTO subtopic_tbl (title, module, subtopic, content, created_at) VALUES (?, ?, ?, ?, ?)")) {
    $stmt->bind_param("sssss", $title,$module,$subTitle,$content,$timestamp);
    $stmt->execute();
    echo json_encode(array("Subtopic Added"));

} else {
    echo json_encode(array("Subtopic Not Added"));
}
mysqli_close($mysqli); ?>