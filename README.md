# Phishing_hello_world
This is an educational project for how a phising works.

## Requirements

You'll need to have installed:
- composer. You can install it using any guide on Google, depending on your OS.
- phpmailer. You can install it with the following command `composer require phpmailer`.
- Apache server running. The easiest way to get it installed and running is to install LAMPP or XAMPP for your OS following any guide on Google, depending on your OS.

## How to use it

In order to run this project you will need to have an Apache server running and the content of this repository copied into the htdocs folder (which you can find on /opt/lampp/htdocs or C:\xampp\htdocs depending on your OS). Once done you can open your browser and go to http://localhost. You should be able to see a login screen very similar to what Google uses.

In order for it to work properly you will have to modify the new_send.php file and user your email address and password. Once configured you can go again to your browser, reload and try login with a fake address and password. This information will be sent to the email address specified.


## Disclaimer 

I am not responsible for the misuse of this software. Feel free to make any modification, improvement or proposal to change the project code.
