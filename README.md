# scrollinfinite
ScrollInfinite is a simple example of how infinite reverse scroll works.

## Setup
<p>Simply change the databaase credentials in the db_connection.php
Am using pdo to connect to the database, do not worry, you can use any method, the database query is the most important part
</p>
<p> Dump the world_country sql file in your database</p>
<p>Run index.php and play around with the home page.</p>

## Files
customjs/srollinfinite.js 
This file contains the core of scrollinfinite.
We are using jquery and ajax to add event listeners and make ajax calls to the server and have new records being loaded.

assets/
here we have bootsrap4 and jquery files
scrollinfinite uses jquery and bootsrap 4 for styling.
