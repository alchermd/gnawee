## Gnawee

Starting point for your next Laravel project.

## Introduction

**Gnawee** is a Landing Page + Admin Panel for your next Laravel project. It's essentially a template that gives you sensible defaults, all of which are easily overridden and customized based on your needs.

## What's in the Box?

- [x] Laravel 5.7
- [x] Authentication
- [ ] Authorization (roles and permissions)
- [x] ReactJS
- [x] Bootstrap 4 Landing Page
- [x] Bootstrap 4 Admin Panel

Also included is a `docker-compose.yml` file, which when used with [Vessel](https://vessel.shippingdocker.com), will give you a delightful Docker experience without much configuration. This includes:

- PHP 7.3
- NodeJS
- MySQL
- Redis

## Installation

We have two options for installation. One uses your system-installed binaries for PHP, Node, etc. The other utilizes Docker via [Vessel](https://vessel.shippingdocker.com) and gives us an isolated container for the services needed by our application.

**Option 1**

Make sure that you have installed on your system the following:

- PHP 7.3+
- Composer
- NodeJS & NPM/Yarn
- MySQL
- Redis

Once you have the requirements covered, you can begin the installation process.

```bash
# Install composer dependencies
$ composer install --dev

# Copy the example env file for customization
$ cp .env.example .env

# Customize the environment variables. See "Environment Variables" below
$ nano .env

# Generate an APP_KEY used by Laravel for various purposes
$ php artisan key:generate 

# Run the database migrations
$ php artisan migrate

# Install node dependnecies
$ npm install

# Build the frontend files
$ npm run dev

# Start the development server
$ php artisan serve

# Visit http://127.0.0.1:8000/ on your browser to use the app
```

**Option 2**

Using [Vessel](https://vessel.shippingdocker.com) for our development environment is much easier. The only requirement is Composer and PHP, and you can start using Docker containers without the fluff.

```bash
# Install composer dependencies
$ composer install --dev

# Copy the example env file for customization
$ cp .env.example .env

# Customize the environment variables. See "Environment Variables" below
$ nano .env

# Initialize Vessel (only done once)
$ bash vessel init

# Start the containers
$ ./vessel start

# The rest of the installation process is the same as Option 1,
# but running them within the Vessel containers themselves
$ ./vessel artisan key:generate 

# Run the database migrations
$ ./vessel artisan migrate

# Install node dependnecies
$ ./vessel npm install

# Build the frontend files
$ ./vessel npm run dev

# Vessel automatically configures binds your app to localhost
# You can now use your app by visiting http://127.0.0.1/ in your browser
```

## Environment Variables

>>> TODO: Add instructions for customizing environment variables

## License

Released under the MIT License. See the [LICENSE](LICENSE) file for more information
