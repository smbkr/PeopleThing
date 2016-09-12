# PeopleThing
A simple app which allows a visitor to add their name, DOB and email to a list, and an administrator to view and 
sort the list.

## Running
The easiest way the run the app is by using the included Vagrantfile. This requires that Vagrant and VirtualBox are
installed on your system. To do this, simply run `vagrant up`, and the app will be served at `192.168.33.10`.

Alternatively, you can serve the app with Apache. The docroot should be `public/`. Apache should have access to all the 
outer directories `app/`,`db/` and `vendor/`.

### First run/setup
On the first run, you'll need to run `composer install`, followed by 
`vendor/bin/doctrine orm:schema-tool:update --force --dump-sql` to install the dependencies and initialise the database. 
If using the included Vagrant file, first run `vagrant ssh` and run the commands on the VM.
The app directory should be writable by the Apache user.

## Usage
Add your details to the list by visiting `/`, or view a list of submitted details by visiting `/list`.

## Testing
Testing uses PHPUnit, which should be installed & on your path. To test, run `phpunit`.

## Dependencies
* PHP
* Apache
* Composer
* PHPUnit

## Uses
* [Doctrine ORM](http://www.doctrine-project.org/)
* [Klein Router](https://github.com/klein/klein.php)
* [Vue.js](https://vuejs.org/)
* [Bulma CSS](http://bulma.io/)

## To do
Remove front-end dependencies (Bulma, Vue) from repo and use NPM to manage them.