# Use a imagem base do PHP com o servidor web Nginx
FROM php:7.4-fpm

# Instale o servidor web Nginx e outras dependências necessárias
RUN apt-get update && apt-get install -y nginx libpq-dev && \
    docker-php-ext-install pdo pdo_mysql

# Copie o código do seu site PHP para o container
COPY . /var/www/html/

# Configure o Nginx para usar o diretório de código do seu site
COPY default.conf /etc/nginx/conf.d/default.conf

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 755 /var/www/html && \
    chown -R www-data:www-data /var/lib/nginx && \
    chown -R www-data:www-data /var/log/nginx

# Exponha a porta 80 para o mundo exterior
EXPOSE 80

# Inicie o servidor web Nginx e o PHP-FPM
CMD ["nginx", "-g", "daemon off;"]
