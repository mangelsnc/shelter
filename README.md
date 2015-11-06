Shelter
=======

A simple content management system for animal shelters.

1. Installation guide
----------------------

Shelter comes with a preconfigured Virtual Machine, in order to use it, you must
have installed on your host machine the latest version of [Vagrant](https://www.vagrantup.com/downloads.html) and [Ansible](http://docs.ansible.com/ansible/intro_installation.html#latest-releases-on-mac-osx).

The VM comes with:
- Ubuntu 14.04
- PHP 5.6 with XDebug
- MySQL 6
- Nginx
- MongoDB

In order to get more information about all the packages or extensions installed
just dive in the `provision` folder to know how the provision works.

Initialize development environment in X steps:

1. **Clone the repository.** Come to your workspace folder and execute
`git@github.com:mangelsnc/shelter.git`, if you don't have configured a public key
 maybe you will be asked for your user and password.

2. **Initialize the VM.** Run `vagrant up` on the terminal and wait. Maybe you
will be asked for your local user password.

3. **Connect to the VM.** Run `vagrant ssh`, this will log you into the VM.

4. **Install Dependencies.** The project it's on the `/vagrant` folder. Go to
this directory and execute `composer install`. This will install all the
dependencies of the project.

5. **Configure your hosts file.** On your host machine, add a entry to the
`/etc/hosts` file like this:
```
192.168.69.69 shelter.org
```


Since now, you got access to the project through you browser just typing
`http://shelter.org` on your browser.

Remember that the VM and your host machine are synched via NFS so, any change
you do in your code is instantly synched with the VM. You don't need to do this
manually.


2. About coding
----------------

**Coding standards**

In sake of clarity and clean coding standards, all the code must be PSR-1 and
PSR-2 compliant:

* [PSR-1](http://www.php-fig.org/psr/psr-1/)
* [PSR-2](http://www.php-fig.org/psr/psr-2/)

If you are not experienced with this coding standards, you can install on your
IDE any linter or fixer that helps you to embrace this styles.


**Language conventions**

- All the variables, methods, and classes must have their name in english.
- All the commits, PR and descriptions made in Git, must be in english
- All the documentation generated must be in english.

**Clean Code**

Follow the Clean Code principles ever, like:

- Don't be afraid of using a long name for a variable or method,
is preferable to a cryptic name.
- If your code needs comments, maybe your code needs to be rewrited.
- Follow the SOLID principles.


3. Contributing
---------------
We work using the **gitflow** branch scheme, and every new feature or correction
must be submitted as a Pull Request (PR), with the changes and the tests.
If some PR needs some manual testing, this must be described in the PR description,
with the instructions to perform the tests and the expected results.


Happy coding!
