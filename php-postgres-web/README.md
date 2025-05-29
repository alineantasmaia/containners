# PHP and PostgreSQL Web Application

This project is a simple web application built using PHP and PostgreSQL, containerized with Docker. It demonstrates how to set up a PHP environment with a PostgreSQL database.

## Project Structure

```
php-postgres-web
├── docker-compose.yml      # Defines the services for the application
├── Dockerfile              # Dockerfile for building the PHP web application
├── src
│   └── index.php          # Entry point of the PHP application
├── db
│   └── init.sql           # SQL commands to initialize the PostgreSQL database
└── README.md              # Documentation for the project
```

## Getting Started

### Prerequisites

- Docker
- Docker Compose

### Setup

1. Clone the repository:

   ```
   git clone <repository-url>
   cd php-postgres-web
   ```

2. Build and start the application:

   ```
   docker-compose up --build
   ```

3. Access the application:

   Open your web browser and navigate to `http://localhost:8000`.

### Database Initialization

The PostgreSQL database will be initialized with the SQL commands defined in `db/init.sql`. You can modify this file to change the database schema or add initial data.

### Stopping the Application

To stop the application, run:

```
docker-compose down
```

## License

This project is licensed under the MIT License. See the LICENSE file for details.