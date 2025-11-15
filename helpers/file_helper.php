<?php
 //--------------------Upload--------------
function upload($file, $path = "img", $name = "")
{
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    if (is_array($file)) {

        $ext = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
        $size = $file["size"] / 1024;

        // Real MIME type checking (browser independent)
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $type  = finfo_file($finfo, $file["tmp_name"]);
        finfo_close($finfo);

        $allowed = ["image/png", "image/jpeg", "image/jpg", "image/webp", "image/gif"];

        if (in_array($type, $allowed)) {

            // Use provided name OR original filename without extension
            $baseName = $name != "" 
                ? $name 
                : pathinfo($file["name"], PATHINFO_FILENAME);

            $baseName = slugify($baseName);

            // Only 1 extension added
            $finalName = $baseName . "." . $ext;

            $target = "$path/$finalName";

            if (!move_uploaded_file($file["tmp_name"], $target)) {
                copy($file["tmp_name"], $target);
            }

            return $finalName;

        } else {
            return -1;
        }
    }

    return "";
}


