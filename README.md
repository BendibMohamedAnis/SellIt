<p align="left"><img src="https://user-images.githubusercontent.com/46926963/230424784-4b3d9fcd-8783-4709-99d7-7c368499034d.png" width="50" height="50" alt="Logo"></p> # SellIt


SellIt is my new  ecommerce web application built with Laravel that allows users to buy and sell products online. It includes various features like login with email or phone number, email verification, register, wishlist, list of items with duration of upload, name, description, price and reductions, and pictures of the product. Users can also edit their profile details like name, username, password, and profile picture. It's still under developement so many features are temporarly unstable and require more testing and fixing .



## Screenshots


<p align="center">
  <img src="https://user-images.githubusercontent.com/46926963/230424162-4b1875b8-4f9d-43b8-aa5d-1393fd9e1140.png">
</p>




## Table of Contents

- [Screenshots](#screenshots)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Features](#features)
- [Technologies Used](#technologies-used)

- [Contributing](#contributing)
- [License](#license)




## Getting Started

### Prerequisites

To run this application, you'll need the following software installed on your machine:

- PHP 7.4 or higher
- Composer
- MySQL

### Installation

1. Clone the repository:
    <code>git clone https://github.com/<your-github-username>/sellit.git</code>
    
2. Install dependencies:
    <code>composer install</code>

3. Create a `.env` file by copying the `.env.example` file and update the database details:
    <code>cp .env.example .env</code>
    
4. Generate an app key:
    <code>php artisan key:generate </code>
    
5. Migrate the database:
     <code>php artisan migrate </code>
    
6. Run the app:
    <code>php artisan serve </code>

The app should now be running on [http://localhost:8000](http://localhost:8000).

## Features

SellIt includes the following features:

- Login with email or phone number
- Email verification
- Register
- Wishlist
- List of items with duration of upload, name, description, price, and reductions
- Pictures of the product
- Profile editing
- Password editing
- Name editing
- Username editing
- Profile picture editing

## Technologies Used

SellIt is built using the following technologies:

- Laravel 8.x
- MySQL
- Bootstrap 5
- HTML / CSS / JS


## Contributing

Contributions are welcome! If you find any bugs or want to improve the app, feel free to submit a pull request.

## License

SellIt is open source software licensed under the [MIT license](https://opensource.org/licenses/MIT).

