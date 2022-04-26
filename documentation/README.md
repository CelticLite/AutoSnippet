# Documentation 

## Setup for Deplopyment 

### Database Login 
- The login for the database is hardcoded into the docker-compose.xml and database.php files. The username, database name, and passwords must match between these two files. It is recomended to create an environment variable file with these values.  

### Database Setup 
- To build the database, first connect to the [adminer](http://localhost:8080) via your browser. Navigate to the import page, and upload the databasebuilder.sql file (found in /project/postgres). Execute this file, and all the necessary tables will be built. 

### Allow users to connect to your machine  
- If you wish to deploy this app in a production environment, you must ensure the docker container is reachable from remote machines. To do so, you can enable a proxy for your container. Documentation for this can be found   [here](https://docs.docker.com/network/proxy/)  

## FAQ 
- Can I register multiple users at the same time? 
	- Yes! If you are the admin hosting our web app, you can access the sql admin panel [here](http://localhost:8080). From the panel, you can utilize the users.csv file to register as many users as you wish. 
- I am seeing an error message stating "Base table or view not found". What do I do?  
	- Be sure to import the tables for the database using the databasebuilder.sql file. 
- 