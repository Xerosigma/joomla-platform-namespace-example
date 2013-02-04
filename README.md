Joomla Platform Namespace Example
================================

This is an example Joomla! Platform application built on dongilbert's Namespace branch.
It is build on the HMVC architecture pattern.

The top level application renders a webpage while several sub-applications render modules onto the page.
Modules are completely decoupled form the main application and can run on their own. (You'll have to uncomment a line.)
The webpage is designed using the HTML5 specification and is 100% mobile ready.
Template was generated using Initializr: http://www.initializr.com/


For any J! Platform Namespace specific details, please refer to dongilbert's branch: https://github.com/dongilbert/joomla-platform/tree/PlatformNamespace


Contents & Directory Struture
--------------------------------
* lib: Contains J! Platform (dongilbert's Namespace branch)
* src: Contains application source.
* nbproject: NetBeans project data. (For those who use it.)

Requirements
------------
* PHP 5.3.1+ for Platform versions 12.x  

Installation
--------------------------------
Simply clone the source or drop the files into a web directory and navigate to src/app/main.php