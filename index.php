<?php include('core/init.php'); ?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adress Book</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="large-6 columns">
        <h1>Adress Book</h1>
      </div>
      <div class="large-6 columns">
        <a class="add-btn button right small" data-reveal-id="addModal">Add Contact</a>
        <div id="addModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
          <h2>Add Contact</h2>
          <form id="addContact" action="#" method="post">
            <div class="row">
              <div class="large-12 columns">
                <label>First Name
                  <input name="first_name" type="text" placeholder="Enter First Name..."/>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <label>Last Name
                  <input name="last_name" type="text" placeholder="Enter Last Name..."/>
                </label>
              </div>
            </div>
            <div class="row">
              <div class="large-12 columns">
                <label>Phone Number
                  <input name="phone" type="text" placeholder="Enter Phone Number..."/>
                </label>
              </div>
            </div>
            <input type="submit" name="submit" value="Submit" class="add-btn button right small">
          </form>
          <a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div>
      </div>
    </div>

    <div id="loaderIMG">
      <img src="img/ajax-loader-gif.gif">
    </div>

    <div id="pageContent">
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/script.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
