Auto updater for PHP scripts.
====================

Hi there!
This is an auto updater for php scripts only.
It check if a new version is available and if there is it will automatically be downloaded.

How it works:
The client folder is your project (where the updates will be downloaded to).
The server folder is where the newest update will be stored.

Client:
In the client folder we have a version.ini file. That file contains the currently installed version number of the script.

Server:
In the server folder theres a .zip file and a version.ini file.
The .zip file is the new update (zipped).
The .zip file shut also contain a version.ini file with the new versionsnumber for the script (the same as server/version.ini)
the version.ini file in the server folder is what the client checks in to determe if theres a new update available.


Example And Documentation:
  Examples and documentation can be found in the client/example.php file.


Thanks:)

Socials:
twitter: http://twitter.com/MCFirebat
Youtube: http://www.youtube.com/TegnerCodes.