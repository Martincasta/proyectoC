<?php 

	if (isset($_POST['img'])) {		
		$file = $_FILES['prof_img'];

		$fileName = $_FILES['prof_img']['name'];
		$fileTmpName = $_FILES['prof_img']['tmp_name']
		$fileSize = $_FILES['prof_img']['size']
		$fileError = $_FILES['prof_img']['error']
		
		$fileExt = explode('.', $fileName);
		$fileActualExt = strtolower(end($fileExt));

		$allowed = array('jpg', 'jpeg', 'png', 'pdf');
		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 5000000) {
					$fileNameNew = uniqid('', true) . "." . $fileActualExt;
					$fileDes = 'img/'. $fileNameNew;
					move_uploaded_file($fileTmpName, $fileDes)

					header("Location: profiles.php?=imguploaded")
				}
				else {
					echo "El archivo es demasiado grande! Max 50 Mb."
				}
			}
			else{
				echo "Hubo un error subiendo tu foto"
			}
		}
		else {
			echo "La página no reconoce ese tipo de archivo, proba con otro!"
		}
	}






 ?>