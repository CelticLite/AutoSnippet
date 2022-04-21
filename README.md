# Auto Snippet 
Scrum daily standup tool for all 

## About the project 

This web-app was developed for Petal under the guidance of Michael Cole. We (the devs) are seniors at the College of Charleston and took on this project for our Senior Capstone course. AutoSnippet (AS) provides an easy-to-use solution for remote teams to share weekly goals and their progress. AS allows users to post their goals and comments to a common feed where they are categorized based on their completion status. Goals can be modified or deleted as users progress through their work.  In addition, user-identification is integrated into the app, requiring users to only login once. 


## Installation and Setup 

**This guide assumes you have docker and docker-compose on your system. If you do not, please visit https://docs.docker.com/get-docker/ for installation instructions.**

To install, first clone this repository by running: 

		git clone https://github.com/CelticLite/AutoSnippet.git 

Next move into the AutoSnippet directory and build the docker images provided: 

		docker-compose build 
		docker-compose build --no-cache  ## use this if you have built a previous version 

Finally, launch the app by running:

		docker-compose up 

Navigate to https://localhost on your favorite browser to view AutoSnippet from the machine hosting the docker container. To visit the app from another machine, navigate to the ip address of the machine hosting the docker container in your favorite browser.  

### Notes 
- On most modern browsers, an SSL warning will display the first time you visit the app, ignore this display and continue. (if you want to fix this, view issue #2)
- As always, all are welcome to fork this repository and modify it for your own use. 

### The Devs 
- GZT11 (Zach)
- ImStadt99 (Ian)
- MDostert1 (Mike) 
- CelticLite (RP) [Twitter](https://twitter.com/CelticLite)


