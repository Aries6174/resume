CREATE DATABASE IF NOT EXISTS resume_db;
USE resume_db;

CREATE TABLE IF NOT EXISTS profile (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    title VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    summary TEXT
);

CREATE TABLE IF NOT EXISTS experience (
    id INT AUTO_INCREMENT PRIMARY KEY,
    company VARCHAR(100),
    position VARCHAR(100),
    start_date DATE,
    end_date DATE,
    description TEXT
);

CREATE TABLE IF NOT EXISTS education (
    id INT AUTO_INCREMENT PRIMARY KEY,
    institution VARCHAR(100),
    degree VARCHAR(100),
    graduation_date DATE
);

CREATE TABLE IF NOT EXISTS skills (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    category VARCHAR(50)
);