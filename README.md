Ecommerce API - Laravel CRUD

Project Overview:
This project is a CRUD API for an Ecommerce Website developed using Laravel. It allows you to perform CRUD operations on products, including creating, reading, updating, and deleting products from the database.

Technologies Used:
- PHP (Laravel Framework)
- MySQL (Database)
- Git (Version Control)
- Postman (API Documentation)
- Docker (Optional: for containerization)

Features:
- Create new products with name, description, price, image and stock.
- Read the list of all products or a specific product.
- Update existing product details.
- Delete products from the database.
- API Authentication using Laravel Sanctum.
- API Documentation using Postman.

API Endpoints:

1. Get All Products
   Method: GET
   URL: /api/products
   Response: List of all products.

2. Create Product
   Method: POST
   URL: /api/products
   Body (JSON):
   {
     "name": "Laptop",
     "description": "High-performance laptop",
     "price": 799.99,
     "stock": 10
   }
   Response: Created product details.

3. Get Single Product
   Method: GET
   URL: /api/products/{id}
   Response: Product details for the given ID.

4. Update Product
   Method: PUT
   URL: /api/products/{id}
   Body (JSON):
   {
     "name": "Updated Laptop",
     "description": "Updated description",
     "price": 899.99,
     "stock": 5
   }
   Response: Updated product details.

5. Delete Product
   Method: DELETE
   URL: /api/products/{id}
   Response: Success message (Product deleted).

Installation Steps:

1. Clone the Repository
   Clone this repository to your local machine:
   git clone https://github.com/imshimsin/ecommerceApi.git

2. Install Dependencies
   Navigate to the project directory and install the required PHP dependencies:
   cd ecommerceApi
   composer install

3. Set Up Environment Variables
   Copy the .env.example to .env and configure the database credentials:
   cp .env.example .env
   Edit the .env file and set up your MySQL database.

4. Generate Application Key
   Generate the Laravel application key:
   php artisan key:generate

5. Install Laravel Sanctum
    composer require laravel/sanctum
    php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"

6. Run Migrations
   Create the database and run migrations to set up the products table:
   php artisan migrate

7. Seed Database with Dummy Data (Optional)
   Generate some sample products:
   php artisan tinker
   Product::factory()->count(10)->create();

8. Start the Laravel Development Server
   You can start the server locally:
   php artisan serve
   Visit the API at http://localhost:8000/api/products.

Postman API Documentation:
You can test and explore the API using the Postman collection.
Download the Postman Collection from here (Ecommerce-API.postman_collection.json).

Docker Support (Optional):

To run the project in Docker, follow these steps:
1. Build Docker Containers
   docker-compose up --build

2. Access the Application
   Visit the application at http://localhost:8000.

GitHub Repository:
The code is available on GitHub: https://github.com/imshimsin/ecommerceApi.

Contributing:
Feel free to fork this project, submit issues, or send pull requests.

License:
This project is licensed under the MIT License.
