FROM node:22-bookworm-slim AS frontend-build

WORKDIR /app

COPY package.json package-lock.json ./
RUN npm ci

COPY resources ./resources
COPY public ./public
COPY vite.config.js ./
RUN npm run build

FROM php:8.4-fpm-alpine3.20

RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    libzip-dev \
    zip \
    unzip \
    oniguruma-dev \
    icu-dev \
    icu-libs \
    sqlite-dev \
    linux-headers \
    tzdata \
    $PHPIZE_DEPS

ENV TZ=Africa/Johannesburg
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Use docker-php-ext-install (official image) — more reliable than install-php-extensions on Alpine/ARM
RUN docker-php-ext-install -j"$(nproc)" \
    pdo_sqlite \
    mbstring \
    exif \
    pcntl \
    bcmath \
    opcache \
    intl \
    zip \
    && apk del --no-cache $PHPIZE_DEPS \
    && rm -rf /tmp/pear /var/cache/apk/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader --no-interaction

COPY --from=frontend-build /app/public/build ./public/build

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache

COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisord.conf
COPY docker/php.ini /usr/local/etc/php/conf.d/custom.ini

RUN mkdir -p /var/log/supervisor /run/nginx /var/log/php \
    && touch /var/log/php/error.log

COPY docker/entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

EXPOSE 80

HEALTHCHECK --interval=30s --timeout=10s --start-period=45s --retries=3 \
    CMD curl -fsS http://localhost/plenum > /dev/null || exit 1

ENTRYPOINT ["/entrypoint.sh"]
