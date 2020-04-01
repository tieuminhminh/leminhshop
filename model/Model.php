<?php


class Model
{

    /**
     * @return string
     */
    public function validateUploadFile()
    {
        $target_dir = "assets/upload_image/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if upload_image file is a actual upload_image or fake upload_image

        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $image = "File is an upload_image - " . $check["mime"] . ".";

            $uploadOk = 1;

        } else {
            $image = "[File is not an upload_image]";
            $uploadOk = 0;
            return $image;
        }

// Check if file already exists
        if (file_exists($target_file)) {
            $image = "[Sorry file already exists]";
            $uploadOk = 0;
            return $image;
        }
// Check file size
        if ($_FILES["image"]["size"] > 500000) {
            $image = "[Sorry, your file is too large]";
            $uploadOk = 0;
            return $image;
        }
// Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            $image = "[Sorry, only JPG, JPEG, PNG & GIF files are allowed]";
            $uploadOk = 0;
            return $image;
        }
// Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            $image = "[Sorry, your file was not uploaded]";
            return $image;
// if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = "The file " . basename($_FILES["image"]["name"]) . " has been uploaded.";

                return $target_file;
            } else {
                $image = "[Sorry, there was an error uploading your file.]";
                return $image;
            }
        }

    }
}