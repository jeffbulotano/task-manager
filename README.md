# Task Management

A very simple Laravel web application for task management.

## Installation

#### Clone the repo and enter the directory:

```
git clone git@github.com:jeffbulotano/classified-email-filter.git task-management
```

##### OR extract the code from the zip file provided.

#### Enter the directory:

```
cd task-management
```

#### Install packages:

```
composer install
```

#### Copy sample environment file:

```
cp .env.example .env
```

#### Create an app key:

```
php artisan key:generate
```

#### Modify the following in your .env file with your preferred text editor:

```
APP_URL=http://localhost # Set to the URL that you will be running the app on

LOG_CHANNEL=stack
LOG_SLACK_WEBHOOK_URL=

DB_CONNECTION=mysql
DB_HOST=127.0.0.1 # Set to your db host or keep as is
DB_PORT=3306 # Set to your db port or keep as is
DB_DATABASE=laravel # Set to your database name
DB_USERNAME=root # Set to your database username
DB_PASSWORD= # Set to your database password
```

#### Run the migration and seeder

```
php artisan migrate --seed
```

#### Your app is now ready!

## Implementation

TODO

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.
