# Installing PHP on macOS

PHP has a CLI - which is a Command Line Interface Tool.

macOS comes with PHP pre-installed and the newer your OS version, the later the PHP version is. If you are happy to work with the build in version then jump down to [To Run a Sever](#-To-Run-a-Sever)

## If you want to run a different version of PHP

If you want to run a different of PHP, you are best to use a package manager. For mac, this is called [brew](https://brew.sh)

The first thing you will see is the command to paste into your terminal to install it, if you haven't already done so previously.

```
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

2. Brew will be install as a CLI tool and you can install programs using the `brew install` command.

To install PHP type in `brew install php`

If you want to run a specific version of PHP, you can do things like:

`brew install php@7.2`


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

