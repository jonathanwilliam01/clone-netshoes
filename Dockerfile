FROM php:8.2-apache

# Instala a extensão mysqli e dependências necessárias
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

# Ativa o módulo de reescrita do Apache (útil para muitos frameworks)
RUN a2enmod rewrite

# Copia os arquivos da aplicação para o diretório do Apache
COPY src/ /var/www/html/

# Define permissões apropriadas (opcional)
RUN chown -R www-data:www-data /var/www/html
