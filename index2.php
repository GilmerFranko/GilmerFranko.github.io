
<?php
require 'init.php';
$_GET['username'] = '';

/* Scraping FB */

if(isset($_GET['username']))
{
  /* Optiene FBID */
  $fbid = get_fbid($_GET['username']);
}

?>

<img src="https://graph.facebook.com/v2.6/<?php echo $fbid ?>/picture?type=large&amp;access_token=" height="150" width="150" id="profil-picture-fb" alt="Facebook profile picture">
