![image](https://github.com/user-attachments/assets/88d08542-9fed-4b0b-b10d-1eb650d6b585)

# Laravel Social Media App

This is a social media application developed using Laravel. It includes features such as posting, following, liking, and commenting. This project uses MySQL for the database and is my first application developed in Laravel for learning purposes.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Introduction

Laravel Social Media App is a basic social media platform where users can create posts, follow other users, like posts, and leave comments. This project was developed as a learning exercise to understand the fundamentals of Laravel.

## Features

- **User Authentication**: Sign up, login, and logout functionalities.
- **Posting**: Users can create and delete posts.
- **Following**: Users can follow and unfollow other users.
- **Liking**: Users can like and unlike posts.
- **Commenting**: Users can comment on posts.

## Installation

To get this project up and running on your local machine, follow these steps:

1. **Clone the repository**
    ```bash
    git clone https://github.com/fevziatanoglu/Laravel-SocailMedia-App.git
    cd Laravel-SocailMedia-App
    ```

2. **Install dependencies**
    ```bash
    composer install
    npm install
    npm run dev
    ```

3. **Set up the environment file**
    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database configuration and other necessary settings.

4. **Generate an application key**
    ```bash
    php artisan key:generate
    ```

5. **Run database migrations**
    ```bash
    php artisan migrate
    ```

6. **Seed the database (optional)**
    ```bash
    php artisan db:seed
    ```

7. **Start the development server**
    ```bash
    php artisan serve
    ```

Your application should now be running on [http://localhost:8000](http://localhost:8000).

## Usage

Once the application is up and running, you can register a new account, create posts, follow other users, like posts, and leave comments.

## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

This project was developed by [Fevzi Atanoğlu](https://github.com/fevziatanoglu) as a learning exercise to understand the fundamentals of Laravel.
