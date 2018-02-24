<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Styling Inputs</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="block2">
    <form enctype="multipart/form-data" action="handler.php" method="post" id="id_formsend">
        <input type="file" class="fupload" id="id_input_files" multiple="multiple">
        <label class="flabel" for="id_input_files">Upload file</label>
        <input type="hidden" name="JSONBase64" id="id_JSONBase64">
        <input type="hidden" name="JSONNames" id="id_JSONNames">
        <input type="submit" value="Send File">
    </form>
</div>


<div id="id_previewfiles" ></div>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>


<?php
