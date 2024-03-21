<!-- SOAL 1.4 -->
<?php
if (isset($_POST['submit'])) {
    $targetDirectory = "documents/"; 
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileExtension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
    $fileType = strtolower($fileExtension);
    $allowedExtensions = array("txt", "pdf", "doc", "docx"); 
    $maxFileSize = 10 * 1024 * 1024;
    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>