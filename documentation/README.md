# Documentation 

## Setup for Deplopyment 

### Database Login 
- The login for the database is hardcoded into the docker-compose.xml and database.php files. The username, database name, and passwords must match between these two files. It is recomended to create an environment variable file with these values.  

### Allow users to connect to your machine  
- If you wish to deploy this app in a production environment, you must ensure the docker container is reachable from remote machines. To do so, you can enable a proxy for your container. Documentation for this can be found   [here](https://docs.docker.com/network/proxy/)  

## FAQ 
- 