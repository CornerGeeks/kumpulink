Kumpulink - A delicious.com clone
========

A simple delicious clone to bookmark all the sites I've read and share it.
- Needs to be able to store links, with descriptions.
- Needs to be able to tag the links
- May need to have authentication. [Do I want to create a service or something for me to use?]
- Needs a bookmarklet. Can be as simple as redirecting page to kumpulink or use a javascript alert box
- I do want to implement screenshots. html2canvas seems like a good start ( https://github.com/niklasvh/html2canvas ) 


Requirements
------------
1. Web server running PHP and MySQL

Installation
------------
1. Copy / Rename config.php.template to config.php
2. Fill in config.php values to suit your environment
3. Start the app (no need to create DB tables thanks to RedBeanPHP)


Built using 
-----------
- RedBeanPHP (http://redbeanphp.com/)
- Twitter Bootstrap (http://twitter.github.com/bootstrap/)
- jQuery (http://jquery.com)