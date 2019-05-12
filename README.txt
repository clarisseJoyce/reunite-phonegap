ACCESS ADMIN
1. email address = admin
password = admin

IMPORTING THE DATABASE
1. The database is locally accessed by the application that is why it should be imported to your local server.
2. The database is named "lofo.sql" stored in the root folder.

MOVING SERVER SIDE PROGRAMS
1. The PHP files are zipped in the file name "reunite.zip" stored in the root folder and must be extracted to your htdocs folder.

RUNNING THE PROGRAM
1.To run the program, the software PhoneGap must first be installed. This can be installed using npm
Run /* $ npm install -g phonegap@latest */ on the cmd to install.

2. PhoneGap server can then be started by typing /* phonegap serve */ to the cmd.
3. The server addresses will appear once the PhoneGap starts running.
4. Then install the PhoneGap mobile application on Play Store
https://play.google.com/store/apps/details?id=com.adobe.phonegap.app&hl=en
5. Enter one of the server address into the application and "Connect"

CHANGING SERVER ADDRESS
1. Since the application only runs on local server, the server address must constantly be changed so that the application can access it.
2. The server address will depend on the one that the PhoneGap software has provided you.
3. The files that need changing are
 - /index.html -- line 25
 - html/admin.html -- line 26 and line 60
 - html/contact-details.html -- line 27
 - html/person-details.html -- line 20 and line 26
 - html/person-listing.html -- line 46
 - html/person-upload.html -- line 26
 - html/personlist.html -- line 18 and line 25
 - html/pet-details.html -- line 21 and line 27
 - html/pet-listing.html -- line 46
 - html/pet-upload.html -- line 26
 - html/petlist.html -- line 18 and line 25
 - html/register.html -- line 29