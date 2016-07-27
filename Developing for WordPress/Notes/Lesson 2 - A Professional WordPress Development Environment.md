# Creating a Professional WordPress Development Environment

## The WordPress Stack, Revisited

## Tools We'll Be Using

* Git (or other version control) (or Git)

Come on, it's 2015!

Revision control is a _must_ in modern development, whether it's websites or software or you name it. Git has become an industry standard, but there are others out there to.

Git lets you use GitHub, a repository where you can publicly share code, or contribute code to projects that others have shared.

* Vagrant

Vagrant allows you to define your development environment _in code_, making it portable and able to be shared amongst a team of developers. By using Vagrant, everybody has the same operating system, versions of software, node modules, composer packages, etc.

_Varying Vagrant Vagrants_ is a special project designed especially for building WordPress sites with Vagrant. Developed by 10up, an agency that specializes in WordPress, it provids all the tools one needs to build WordPress sites, as well as develop WordPress itself. For this class, we're going to use a slightly modified version of VVV to build our WordPress project.

* JSON

Not technically a tool. More of a file format. Stands for "JavaScript Object Notation". Get used to it.

* Composer

Composer is one type of _package manager_, of which there are many. The purpose of a package manager is to automate installation, removal, and updating of common software components. Composer, specifically, installs and manages PHP components, and can be used to manage the WordPress core, as well as plugins and themes that are available on the WordPress.org repository.

Others we'll be using include RubyGems and NPM.

* NPM

Node package manager. For pulling down things like gulp plugins.

* Gulp

We'll be writing our CSS in Sass, a CSS preprocessor, or a "meta" language that gets translated into CSS that the browser can understand. To do that translation, we'll be using Gulp, one of several "JavaScript task runners" that will watch our Sass files, and convert them into CSS whenever we save a change. There are other JavaScript preprocessors out there that will also do this, including Grunt and Brunch. Likewise, Gulp and the other task runners can perform other tasks like check your JavaScript for errors, insert required vendor prefixes into your CSS, concatenating files, etc.

* WP-CLI

WP-CLI lets you perform a bunch of administrative tasks on the command line, including installing, activating, and updating plugins and themes, creating posts, user management, etc. It lets you script tasks which would otherwise be very repititive to do in the browser. We can (and will) also use it to create our starter theme based on _s.

## Essential Development Plugins

* Show Template

Very simple plugin for showing you which template file WordPress is using to generate the page you're on.

* Debug Bar

Installs a "Debug" section in your admin bar with diagnostic information.

* Theme Check

Makes sure your theme meets the standards required to be added to the WordPress theme repository. Makes sure your using WordPress best practices in building your theme.

* Regenerate Thumbnails

Especially useful when working with responsive images, takes the images in your media library and creates different sized versions of them.

* WP Migrate DB (Pro)

Exports your database as a MySQL data dump, does a find and replace on URLs and file paths, then allows you to save it to your computer.

* WordPress Importer

Allows you to import the XML test data.

### Other Popular Plugins

* Jetpack

Sigh. Jetpack. Jetpack is a beast unto itself. I use it on almost every project, and I curse under my breath every time I run into one of its idiosyncrasies.

## Developer Settings

* WP_DEBUG
* SAVEQUERIES

## The Build

1. Install VirtualBox: https://www.virtualbox.org/wiki/Downloads
2. Install Vagrant: https://www.vagrantup.com/downloads.html
3. Pull down the archive for this class from GitHub: https://github.com/taupecat/VVV
4. Extract, if necessary.
5. In the terminal, go into the VVV directory and type `vagrant up`. (Windows users will need PuTTY: http://www.chiark.greenend.org.uk/~sgtatham/putty/download.html)
6. SSH into the virtual machine (`vagrant ssh`)
7. Navigate to the **/vagrant** directory: `cd /vagrant`
9. Install our Composer packages: `composer install`
8. Install our NPM modules: `npm install`
10. Navigate to the **/vagrant/www/wordpress-default/** directory: `cd www/wordpress-default`
11. Activate all of our plugins: `wp plugin activate --all`
12. Install _s: `wp scaffold _s [theme-slug] --theme_name="[theme-name]" --author="[You]" --author_uri="[Your Website]" --sassify`
13. Activate the theme: `wp theme activate [theme-name]`
14. Import the unit test data
15. Customize our wp-config.php file
