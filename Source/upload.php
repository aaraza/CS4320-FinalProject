<!DOCTYPE html>
<html>
<head>
  <title>OCDX Upload</title>
<?php include 'header.php'; ?>
</head>
  <body>
    <?php include "nav.php"; ?>
    <main>
        <div class="container center-align">
          <h2 class="header center teal-text text-lighten-2">Upload Manifest</h2>
            <form action="#">
              <div class="file-field input-field">
                <div class="btn">
                  <span>File</span>
                  <input type="file">
                </div>
                <div class="file-path-wrapper">
                  <input class="file-path validate" type="text" required placeholder="Upload File">
                </div>
              </div>
            </form>
        </div>
      </main>
      <?php include 'footer.php' ?>
  </body>
</html>
