Project Title MVC PILLS

Getting Started Estas instrucciones .htaccess Es un archivo que permite modificar el engine de apache para crear el enrutamiento RewriteEngine ON

RewriteCond %{REQUEST_FILENAME} !-d RewriteCond %{REQUEST_FILENAME} !-f RewriteCond %{REQUEST_FILENAME} !-l RewriteRule ^(.*)$ index.php?url=$1 [L,QSA] Prerequisites You need to have wamp server installed visual studio code

Give examples Installing A step by step series of examples that tell you how to get a development env running Here is the route for you to have your folder in visual studio code You will have to open the default wampserver localhost C:\wamp64\www\ExamplesMVC\

until finished End with an example of getting some data out of the system or using it for a little demo

Running the tests Explain how to run the automated tests for this system

Break down into end to end tests We will create an index.php with the app.php with the libs folder to control the operation basic configuration to connect to the database and make the page navigation path we will create the View folder with a header.php footer.php then I will create a public folder for the css Folder we will create queries and connection request Class in libs folder for base controller and page view Creation Database libs folders for connection request Creation app libs folder Creation of py structure model view controller

Give an example And coding style tests Explain what these tests test and why

Give an example Deployment Add additional notes about how to deploy this on a live system

Built With Dropwizard - The web framework used Maven - Dependency Management ROME - Used to generate RSS Feeds Contributing Please read CONTRIBUTING.md for details on our code of conduct, and the process for submitting pull requests to us.

Versioning We use SemVer for versioning. For the versions available, see the tags on this repository.

Authors Robert Salazar - Initial work - MVCBasics See also the list of contributors who participated in this project.

License This project is licensed under the MIT License - see the LICENSE.md file for details

Acknowledgments Hat tip to anyone whose code was used Inspiration etc