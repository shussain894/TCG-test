# Laravel Project

This is a Laravel project to view and add customer entries, it utilises PHP, Docker and a MySQL database. Follow the instructions below to set up and run the project on your local machine.

## Prerequisites

Make sure you have the following installed on your machine:

- Docker
- PHP

## Getting Started

1. Clone the repository:

```
git clone https://github.com/shussain894/TCG-test
```

2. Navigate to the project directory:

```
cd TCG-test-1
```

3. Copy the `.env.example` file and rename it to `.env`:
```
cp .env.example .env
```

4. Install the project dependencies:
```
composer install
```

5. Install NPM Dependencies:
```
npm install
```

6. Generate the application key:
```
php artisan key:generate
```

7. Start the Docker containers:
```
docker-compose up -d
```

8. Run the database migrations:
```
php artisan migrate
```

9. Seed the database
```
php artisan db:seed
```

10. Access the application in your web browser:

http://localhost:80

Happy coding!
