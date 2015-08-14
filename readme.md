WordPress popularity has grown in the past few years and it’s more of CMS framework now and not just a blogging framework. WordPress does not scale out of the box to work with multiple environments. Lots of questions come to mind when working with a CMS/frameworks such as 
- How to break it out into different environments 
- What files can I change and wont impact framework version updates 
- How to manage configuration per environment 
- How to manage modules/plugins version updates ,  core library/framework version updates 

Having a strong understanding of your framework solution is key to help answer the questions mentioned above. Azure Web Apps has a few features that make it easier to store configuration settings outside of your code. This is a fork of wordpress which includes sample configuration files for wordpress app to run in multiple environments on azure web apps.

Pre-requisites:
1. Create a staging slot  and staging database
2. Create dev slot if there are more than one developer on a project 
3. Install [Root Relative Urls] (https://wordpress.org/plugins/root-relative-urls/) on your local developement wordpress site
4. Include the configuration files mentioned above with the code changes in wp-config to programmatically choose the right configuration based on environment
5. Add App settings for Environment specific configuration [Environment Variables or App settings] (https://azure.microsoft.com/blog/2013/07/17/windows-azure-web-sites-how-application-strings-and-connection-strings-work/) that can be used across multiple websites reflecting your staging and production sites

Workflow:
Complete pre-requisties and have a stable version of your development website. 
1. Develop your web application 
2. Backup your production website 
3. Merge your local development database with your production database so all the content is in sync. 
4. Deploy  to Staging slot(website) and Test  your application 
5. Deploy to production by using SWAP feature of deployment slots . Preview changes in settings of your web app configuration as shown in the Azure portal before executing SWAP operation

Repeat this process during every deployment . Note that new deployment only occurs in wordpress when 
1. Push a code fix 
2. Delete/add new plugins
3. Update WordPress core
4. Upate your theme 




