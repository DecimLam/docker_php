# Tải về official PHP image với Apache
FROM php:8.1-apache

# Cập nhật package list và cài đặt các dependencies
RUN apt-get update && apt-get install -y \
    libmariadb-dev-compat \
    libmariadb-dev

# Cài đặt mysqli
RUN docker-php-ext-install mysqli

# Dọn dẹp để giảm bớt size image
RUN apt-get clean && rm -rf /var/lib/apt/lists/*