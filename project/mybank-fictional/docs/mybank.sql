-- ============================================================
-- MyBank — fictional student project database
-- Author: Tulay Tsambardas
-- Creates the database and the two tables used by the PHP code
-- (login.php / register.php use `users`, contact1.php uses `contact`)
-- ============================================================

CREATE DATABASE IF NOT EXISTS mybank
  DEFAULT CHARACTER SET utf8mb4
  DEFAULT COLLATE utf8mb4_general_ci;

USE mybank;

-- Users table (passwords are stored hashed by PHP password_hash)
CREATE TABLE IF NOT EXISTS users (
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Contact/enquiry table
CREATE TABLE IF NOT EXISTS contact (
  Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  subject VARCHAR(150),
  message TEXT NOT NULL
);
