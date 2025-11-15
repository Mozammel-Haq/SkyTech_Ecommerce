<?php
 //--------------------Upload--------------
function upload($file, $path = "img", $name = "") {
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }

    if (is_array($file) && isset($file["name"]) && $file["error"] === UPLOAD_ERR_OK) {
        $ext = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
        $baseName = pathinfo($file["name"], PATHINFO_FILENAME);
        $type = $file["type"];

        // ✅ Allow only safe types
        if ($type === "image/png" || $type === "image/jpeg" || $type === "image/jpg") {

            // ✅ Use the original filename (slugified)
            $name = slugify($baseName);
            $finalName = "{$name}.{$ext}";

            // ✅ Make unique only if file already exists
            $target = "{$path}/{$finalName}";
            if (file_exists($target)) {
                $finalName = "{$name}_" . time() . ".{$ext}";
                $target = "{$path}/{$finalName}";
            }

            move_uploaded_file($file["tmp_name"], $target);
            return $finalName;
        } else {
            return -1; // invalid file type
        }
    }

    return null; // invalid upload
}



?>