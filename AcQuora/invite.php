<?php
/**
 * Copyright 2011 Facebook, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

require 'src/facebook.php';

// Create our Application instance (replace this with your appId and secret).
$facebook = new Facebook(array(
  'appId'  => '1374548259458653',
  'secret' => 'd8d45b0b1e4442897203959ecde608ad',
));

// Get User ID
$user = $facebook->getUser();

// We may or may not have this data based on whether the user is logged in.
//
// If we have a $user id here, it means we know the user is logged into
// Facebook, but we don't know if the access token is valid. An access
// token is invalid if the user logged out of Facebook.

if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $user_profile = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}

// Login or logout url will be needed depending on current user state.
if ($user) {
  $logoutUrl = $facebook->getLogoutUrl();
} else {
  $statusUrl = $facebook->getLoginStatusUrl();
  $loginUrl = $facebook->getLoginUrl();
}

// This call will always work since we are fetching public data.
$aksverma = $facebook->api('/aksverma');

$ret_obj = $facebook->api('/me/feed', 'POST',array(
            'link' => 'apps.facebook.com/1374548259458653',
            'message' => 'This is a great quiz app','description' => "Come try this app. Its awesome",
            'to' => array('id' => 'friend_id','name' => 'friend_name'),
            'actions' => array('name' => 'Re-share',
            'link' =>'http://apps.facebook.com/1374548259458653/'),
            'privacy' => array('value' => 'EVERYONE')));


?>

<!DOCTYPE html>
<html>

<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>INVITATIONS</title>
    <style>
      body {
        font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
      }
      h1 a {
        text-decoration: none;
        color: #3b5998;
      }
      h1 a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <h1>Invitations</h1>

    <?php if ($user): ?>
      <a href="<?php echo $logoutUrl; ?>">Logout</a>
    <?php else: ?>
      <div>
        Check the login status using OAuth 2.0 handled by the PHP SDK:
        <a href="<?php echo $statusUrl; ?>">Check the login status</a>
      </div>
      <div>
        Login using OAuth 2.0 handled by the PHP SDK:
        <a href="<?php echo $loginUrl; ?>">Login with Facebook</a>
      </div>
      <div>
	  <?php echo $loginUrl; ?>
    <?php endif ?>
	<?php if ($user): ?>
      <h3><?php echo $aksverma['name']; ?></h3>
      <img src="https://graph.facebook.com/<?php echo $user; ?>/picture">

    <?php else: ?>
      <strong><em>You are not Connected.</em></strong>
    <?php endif ?>
	<h4>
        Invitation  request:
        <a href="https://www.facebook.com/dialog/apprequests?app_id=1374548259458653&message=New%20App%20for%20Quiz%20Freeks!&redirect_uri=http://apps.facebook.com/aquoratest/">Invite Friends</a>
     </h4>
    
  </body>
</html>