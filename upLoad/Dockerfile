# Use Ubuntu as the base image
FROM ubuntu:latest

# Set noninteractive mode and configure time zone
ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=Asia/Ho_Chi_Minh

# Install Apache, PHP, and other dependencies
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php sudo && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Put flag on somewhere
RUN echo "Flag{Cờ đây chắc thế}" > /flag.txt

# Set working directory
WORKDIR /var/www/html/

# Copy the files into the container
COPY . .

# Change permissions
RUN chown -R www-data:www-data /var/www/html/pictures/
RUN chmod -R 777 /var/www/html/pictures/

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache server
CMD ["apache2ctl", "-D", "FOREGROUND"]
