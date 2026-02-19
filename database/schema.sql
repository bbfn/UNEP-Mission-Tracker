-- UNEP Mission Tracker Database Schema
-- Prepared for G6 Technical Assessment

-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS unep_db;
USE unep_db;

-- Create the missions table
CREATE TABLE IF NOT EXISTS missions (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    mission_name VARCHAR(255) NOT NULL,
    destination VARCHAR(255) NOT NULL,
    mission_date DATE NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;