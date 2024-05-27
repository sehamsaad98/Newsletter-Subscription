# Newsletter Subscription Project

A Laravel project to handle newsletter subscriptions via both an API and a front-end form.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Features](#features)

## Installation

1. Clone the repository:
    ```bash
    git clone https://github.com/sehamsaad98/Newsletter-Subscription.git
    ```

2. Navigate to the project directory:
    ```bash
    cd Newsletter
    ```

3. Install the dependencies:
    ```bash
    composer install
    npm install
    ```

4. Create a copy of the `.env` file:
    ```bash
    cp .env.example .env
    ```

5. Generate an application key:
    ```bash
    php artisan key:generate
    ```

6. Set up the database:
    - Update your `.env` file with your database information.
    - Run the migrations:
        ```bash
        php artisan migrate
        ```

7. Start the development server:
    ```bash
    php artisan serve
    ```

## Usage

- To access the front-end form, navigate to `http://localhost:8000`.
- To access the API, use a tool like Postman to send requests to `http://localhost:8000/api/newsletter/subscribe

## Features

- Email subscription via API and front-end form.
- Success messages displayed on form submission.
- use service for handling subscription logic.




