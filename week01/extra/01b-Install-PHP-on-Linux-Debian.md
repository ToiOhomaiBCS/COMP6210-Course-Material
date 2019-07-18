---
course: COMP6210
week: 01
lesson: 01
topic: installation-on-linux
---

[![Print](https://img.shields.io/badge/DOWNLOAD_PDF-CLICK_HERE-green.svg)](https://github.com/ToiOhomaiBCS/COMP6210-Course-Material/raw/master/week01/extra/01a-Install-PHP-on-Linux-Debian.pdf)

# Installing PHP on Linux

PHP has a CLI - which is a Command Line Interface Tool.

Linux (Debian based builds) uses a build in package manager called  `apt-get`

There are 2 ways to run PHP files on Linux:

## OPTION 01 - use the PHP CLI tool

To setup PHP and run it from any folder you can install it using:
```
sudo apt-get install -y php
```

Once this is done, php will be installed in your PATH variable and you can run a website from any folder using this command:
```
php -S localhost:8000 -t .
```

`-S` (case sensitive) allows you specifcy an ip address with a port.
`-t` sets the root of the server. If you want to use the folder you are in, then type in `.`

That's it, now open a browser and go to `http://localhost:8000` to see the current folder in a browser.

You will then need to stop the server bny typing in `Ctrl+C` and the serrver will be stopped.

## OPTION 02 - use a LAMP stack

The second method also uses the apt package manager and you will need to install an apache server on your machine by typing in:
```
sudo install -y apache2
```

After that is complete you can then install PHP:
```
sudo apt-get install -y php libapache2-mod-php
```

With Apache installed you have a perpetual webserver running in the background on your machine and the root folder is `/var/www/html/`

