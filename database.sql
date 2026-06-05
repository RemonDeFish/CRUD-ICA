CREATE DATABASE IF NOT EXISTS laravel_db
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE laravel_db;

CREATE TABLE bukus (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255) NOT NULL,
    deskripsi TEXT NOT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);

INSERT INTO bukus (judul, deskripsi, created_at, updated_at)
VALUES
('Laravel', 'Materi dasar framework Laravel', NOW(), NOW()),
('Kamus Bahasa Inggris', 'Bahasa Inggris', NOW(), NOW()),
('MySQL', 'Penggunaan database', NOW(), NOW());