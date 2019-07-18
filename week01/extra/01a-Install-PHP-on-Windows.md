---
course: COMP6210
week: 01
lesson: 01
topic: installation-on-windows
---

[![Print](https://img.shields.io/badge/DOWNLOAD_PDF-CLICK_HERE-green.svg)](https://github.com/ToiOhomaiBCS/COMP6210-Course-Material/raw/master/week01/extra/01a-Install-PHP-on-Windows.pdf)


# Installing PHP on Windows

PHP has a CLI - which is a Command Line Interface Tool.

Although you can install PHP manually by going [here](https://www.php.net/manual/en/install.windows.legacy.index.php), there are some tools that do the heavy lifting for you.

Probably the easiest way to install PHP and many other dev packages on your machine is to use a packager manager called [Chocolatey](https://chocolatey.org/install). Once it is installed, you can use the CMD tool or Powershell to install anything from PHP to Node to Git etc.

To save you reading through everything (although you should do so at some point), the installation instructions are as follows:

1. Open a CMD window with **elevated (i.e. have admin rights)** permissions. Rigth click on the icon and click on "Open as Administrator"

2. Once it is installed, simply type in: 
```
choco install php
```

3. PHP will be installed and added to your PATH variables, so that you can run it from any folder.

# To Run a Sever

1. To run an instance of php type in the following:
```
php -S localhost:8000 -t .
```

`-S` (case sensitive) allows you specifcy an ip address with a port.
`-t` sets the root of the server. If you want to use the folder you are in, then type in `.`

That's it, now open a browser and go to `http://localhost:8000` to see the current folder in a browser.

# To Stop the Sever

To stop the current PHP server, type in `Ctrl+C` and the serrver will be stopped.

# Notes

Although this option gives some flexibility as to where your files are stored, you will need to be comfortable to work with multiple terminal windows to make it work smoothly.

