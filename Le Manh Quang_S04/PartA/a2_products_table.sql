-- A2: Create products table

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(150) NOT NULL,
    sku VARCHAR(50) UNIQUE,
    price DECIMAL(10,2) CHECK (price > 0),
    stock_quantity INT DEFAULT 0
);