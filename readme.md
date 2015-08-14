WordPress popularity has grown in the past few years and it’s more of CMS framework now and not just a blogging framework. WordPress does not scale out of the box to work with multiple environments. Lots of questions come to mind when working with a CMS/frameworks such as 
	How to break it out into different environments 
	What files can I change and wont impact framework version updates 
	How to manage configuration per environment 
	How to manage modules/plugins version updates ,  core library/framework version updates 

Having a strong understanding of your framework solution is key to help answer the questions mentioned above. Azure Web Apps has a few features that make it easier to store configuration settings outside of your code. This is a fork of wordpress which includes sample configuration files for wordpress app to run in multiple environments on azure web apps.

Changes include :
- Usign relative paths with [Root Relative Urls] (https://wordpress.org/plugins/root-relative-urls/)
- Using multiple configuration file per environment : local and azure 
- single azure configuration using [Environment Variables or App settings] (https://azure.microsoft.com/blog/2013/07/17/windows-azure-web-sites-how-application-strings-and-connection-strings-work/) that can be used across multiple websites reflecting your staging and production sites

