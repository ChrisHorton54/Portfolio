<?php //storing file in filename variable
$dirPath = "../files/images/".$_GET['id'];
$result = mkdir($dirPath, 0755);
if ($result == 1) {
    echo $dirPath . " has been created";
} else {
    echo $dirPath . " has NOT been created";
}


 $fileName = $_FILES['file']['name'];

//This is the directory where images will be saved
$target = '../files/images/'.$_GET['id'].'/';
$target = $target . basename( $_FILES['file']['name']);

move_uploaded_file($_FILES['file']['tmp_name'],$target);

$rawData = $_POST['imgBase64'];
$filteredData = explode(',', $rawData);
$unencoded = base64_decode($filteredData[1]);
$randomName = rand(0, 99999);;
//Create the image 
$fp = fopen($randomName.'.png', 'w');
fwrite($fp, $unencoded);
fclose($fp);

?>