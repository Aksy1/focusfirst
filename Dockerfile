# Use official PHP image
FROM php:8.1-cli

# Set working directory
WORKDIR /app

# Copy all files into the container
COPY . .

# Optional: Install MySQL driver if you're using it
RUN docker-php-ext-install mysqli

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:10000", "-t", "."]
