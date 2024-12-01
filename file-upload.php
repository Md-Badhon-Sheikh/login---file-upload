<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload Form</title>
  <link rel="stylesheet" href="styles/file-upload.css">
</head>
<body>
  <div class="upload-form">
    <h1>Upload Your File</h1>
    <form action="#" method="post" enctype="multipart/form-data">
      <label for="file-upload" class="custom-file-upload">
        Choose File
      </label>
      <input type="file" id="file-upload" name="file">
      <button type="submit">Upload</button>
    </form>
  </div>
</body>
</html>
