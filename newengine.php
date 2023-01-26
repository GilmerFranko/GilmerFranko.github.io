<?php

require 'init.php';

/* Scraping FB */

if(isset($_POST['username']) AND !empty($_POST['username']))
{
  $user = $_POST['username'];
  $link = 'https://facebook.com/';
  /* Si el usuario escribió el FIB del usuario de facebook */
  if (is_numeric($user)) {
    $fbid = $user;
    $link .= 'profile.php?id=' . $fbid;
  }
  /* Si el usuario escribió la url al perfil del usuario de facebook */
  elseif(url_exists($user))
  {
    $link = $user;
    $rid = '';
    $components = parse_url($user);

    /* Si la url contiene el id (ejemplo: https://facebook.com/profile.php?id=4) */
    if(isset($components['query']))
    {
      $query = parse_str($components['query'], $rid);
      $fbid = $rid['id'];
    }
    /* Si la url contiene el nickname (ejemplo: https://facebook.com/zuck) */
    else
    {
      /* Optiene FBID */
      if(!$fbid = get_fbid_from_url($user))
      {
        $data = array(
          'status' => false,
        );
        echo json_encode($data);
        exit;
      }
    }
  }
  else
  {
    $link .= $user;
    /* Optiene FBID */
    if(!$fbid = get_fbid($user))
    {
      $data = array(
        'status' => false,
      );
      echo json_encode($data);
      exit;
    }
  }

  /** Token conseguido en https://hackear-geek.com/ **/
  $token = array(
    0 => 'EAAKWIzcZCKWUBAPuQU1EeljtoD3l3m64zprnZCHpbH46Nx8LaInasYGWTw28vdIJJOTomnBmNNlWRkYQi8XqN89iNfEJk7oTbpYKlik4ntZCSkpwQAV9K3C1AaRCRoQUl8JSq1Jx37ZBIowkeFe9dQuMqtTDYh0XyIMROj22XW0sgXek27UE',
    1 => 'EAAJwriUaZByUBAGnau92xsxZBEZA4hMd0iOZASF4NqllirKa7PV04bkqvgiZBTzS7rz9Xx1yyISUvf3WM1f3TBHEd3XwVN1CC1KbA6lRD2I4IfZAZBwrHcVdgeXkmvaUaBjVBrz5XAuUemxdA2Hr4g69YEKsXZA3a4GNZCfkslHVPIAZDZD',
  );



  /* Optiene otros datos del usuario */
  $user_details = "https://graph.facebook.com/".$fbid."?fields=email,name,id,gender&access_token=" .$token[rand(0,1)];
  $response = file_get_contents($user_details);
  $response = json_decode($response);

  $data = array(
    'status' => true,
    'img' => '<img src="https://graph.facebook.com/v2.6/'.$fbid.'/picture?type=large&amp;access_token='.$token[rand(0,1)].'" height="150" width="150" id="profil-picture-fb" alt="Facebook profile picture">',
    'username' => $response->name,
    'fbid' => $response->id,
    'link' => $link,
    'account_id' => $_POST['username'],
  );


}
else
{
 $data = array(
  'status' => false,
);
}
echo json_encode($data);
?>




