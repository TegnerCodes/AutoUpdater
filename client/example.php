<?php
// Include the update class.
require_once 'Update.class.php';

// Init the Update class.
$update = new Update('http://localhost/update/server/thisistheupdatefile.zip', 'http://localhost/update/server/version.ini');

// Check if a new version is available.
if ($update->checkVersion()) {
// A new update is available.
// Download and install.
$update->execute();
}

else {
// The current system is up to date (no new version).
echo '<h3>System is up to date!</h3>';
}


?>
