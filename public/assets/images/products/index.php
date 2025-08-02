<?php

$folderPath = './'; // Replace with the actual path to your folder

$imageNames = array();

// Check if the folder exists and is a directory
if (is_dir($folderPath)) {
    // Open the directory handle
    if ($handle = opendir($folderPath)) {
        // Loop through the directory
        while (false !== ($file = readdir($handle))) {
            // Check if the file is a regular file and has an image extension
            $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
            $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif', 'bmp'); // Add more as needed
            
            if (is_file($folderPath . $file) && in_array(strtolower($fileExtension), $allowedExtensions)) {
                $imageNames[] = $file;
            }
        }
        // Close the directory handle
        closedir($handle);
    }
}

// Check if any images were found
if (!empty($imageNames)) {
    echo "<h2>Images in the folder:</h2>";
    foreach ($imageNames as $imageName) {
        $data =  htmlspecialchars($imageName) . ", ";
    }
    $data = rtrim($data, ', ');
    echo $data;
} else {
    echo "No images found in the specified folder.";
}

?>