<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<title>Thank you for entering</title>
<style type="text/css">
body {margin: 20px; 
      background-color: #C4DF9B;
	font-family: Verdana, Helvetica, sans-serif;
	font-size: 90%;}
h1 {color: #005825;
    border-bottom: 1px solid #005825;}
h2 {font-size: 1.2em;
    color: #4A0048;}
</style>
</head>
<body>
  <?php if (isset($_POST['features']) && !is_array($_POST['features'])) {
    $features_problem = TRUE;
    $features = is_string($_POST['features']) ? $_POST['features'] : '<em>empty</em>';
  }
  else {
    $features_problem = FALSE;
    $features = isset($_POST['features']) ? implode(', ', $_POST['features']) : '<em>empty</em>';
  } ?>
<h1>THANK YOU</h1>

<p>Thank you for entering the Forcefield Sneaker "Pimp My Shoe" contest. We have received the following information with your entry:</p>

<h2>About you:</h2>
<ul>
<li><strong>Name:</strong> <?php print $_POST['username'] ? $_POST['username'] : '<em>empty</em>'; ?></li>
<li><strong>Email Address:</strong> <?php print $_POST['emailaddress'] ? $_POST['emailaddress'] : '<em>empty</em>'; ?></li>
<li><strong>Telephone number:</strong> <?php print $_POST['telephone'] ? $_POST['telephone'] : '<em>empty</em>'; ?></li>
</ul>
<p><strong>Sad shoe story:</strong> <?php print $_POST['story'] ? $_POST['story'] : '<em>empty</em>'; ?></p>

<h2>Your shoe design (if you win)</h2>

<?php if (!isset($_POST['color']) && !isset($_POST['size']) && !isset($_POST['features'])) { ?>
<em>Sorry, we did not receive your information.</em>
<?php } 
  else { ?>
    <ul>
    <li><strong>Color:</strong> <?php print isset($_POST['color']) && $_POST['color'] ? $_POST['color'] : '<em>empty</em>'; ?></li>
    <li><strong>Features:</strong> <?php
      print $features;
      if ($features_problem) { ?>
        <span style="color:red">*</span>
     <?php } ?></li>
    <li><strong>Size:</strong> <?php print isset($_POST['size']) && $_POST['size'] ? $_POST['size'] : '<em>empty</em>'; ?></li>
    </ul>
<?php  }
if ($features_problem) { ?>
  <hr />
  <p>&nbsp;</p>
<?php } ?>

</body>
</html>
