# Floww OXR Api

## Description
This api is a simple implementation of the Open Exchange Rates API.
It provides a single endpoint to get latest the exchange rate.

## Requirements
- Docker
- Docker Compose
- PHP 8.3+

## Setup
To set up the project, follow these steps (or use the provided Makefile)
Don't forget to add your App id in dotenv file:

1. Copy the `.env-example` file to `.env`:
    ```sh
    cp .env-example .env
    ```

2. Start the Docker containers:
    ```sh
    docker-compose up -d
    ```

3. Install the PHP dependencies using Composer:
    ```sh
    docker-compose exec php composer install
    ```



## Usage
Access the application at
`http://localhost:8000`.


## API All Endpoints
- GET api/oxr/latest/get
    - Get the exchange rate.
    - Example: api/oxr/latest/get
