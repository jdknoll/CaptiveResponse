CaptiveResponse
===============

Captive Response is a web application with the purpose of delivering informational materials to and requiring an appropriate response from an organization's internal users. Combined with other single sign-on components, Captive Response can force additional user interaction during the user authentication process. Use cases include Acceptable Use Policies, training programs, and surveys.

Requirements
-------------------------
+  PHP 5.4 (not verified)
+  Apache
+  MySQL (not yet fully required)
+  Jasig CAS with the Unicon-developed intercept logic (to be added later)

Project Status
-------------------------
CaptiveResponse is being actively developed for Shippensburg University of Pennsylvania, with a completion goal of January 2014.

Simplified Development Roadmap
- [x] Twitter Bootstrap 3 Theming Base
- [x] Integration of CAS Authentication
- [x] Database Design
- [ ] Database Functional Implementation
- [ ] Development of Administrative User Interface
- [ ] Development of Campaign User Interface

Notes
-------------------------
When we write installation documentation, one of the steps will be copying ```app/Config/core.php.default``` to ```app/Config/core.php``` and modifying the target file to match your environment (including CAS configuration). 

All routes except the API view will currently be directed to CAS for authentication.

For dummy API calls:
```$URL-TO-INSTALL/api/CAS-USER-ID``` will return 1, while ```$URL-TO-INSTALL/api/SOME-USER``` and any other value will return 0.
