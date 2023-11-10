# Sử dụng ảnh PHP chính thống từ Docker Hub
FROM php:7.4-apache

# Cài đặt các module PHP cần thiết
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Thiết lập thư mục làm việc
WORKDIR /var/www/html