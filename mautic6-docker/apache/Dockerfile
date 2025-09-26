FROM php:8.3-apache-bookworm AS builder

# APT sources con contrib/non-free (para libc-client2007e-dev)
RUN set -eux; \
  printf '%s\n' \
  "deb http://deb.debian.org/debian bookworm main contrib non-free non-free-firmware" \
  "deb http://deb.debian.org/debian-security bookworm-security main contrib non-free non-free-firmware" \
  "deb http://deb.debian.org/debian bookworm-updates main contrib non-free non-free-firmware" \
  > /etc/apt/sources.list

# Copy everything from common for building
COPY ./common/ /common/

# Build dependencies (NO upgrade)
RUN apt-get update \
 && apt-get install --no-install-recommends -y \
    build-essential \
    ca-certificates \
    curl \
    git \
    graphicsmagick \
    imagemagick \
    libaprutil1-dev \
    libc-client2007e-dev \
    libkrb5-dev \
    libssl-dev \
    libcurl4-gnutls-dev \
    libfreetype6-dev \
    libgif-dev \
    libicu-dev \
    libjpeg-dev \
    libjpeg62-turbo-dev \
    libmagickwand-dev \
    libonig-dev \
    libpng-dev \
    libpq-dev \
    librabbitmq-dev \
    libtiff-dev \
    libwebp-dev \
    libxml2-dev \
    libxpm-dev \
    libz-dev \
    libzip-dev \
    unzip \
 && rm -rf /var/lib/apt/lists/*

# php-amqp (build from source)
RUN curl -L -o /tmp/amqp.tar.gz "https://github.com/php-amqp/php-amqp/archive/refs/tags/v2.1.2.tar.gz" \
 && mkdir -p /usr/src/php/ext/amqp \
 && tar -C /usr/src/php/ext/amqp -zxvf /tmp/amqp.tar.gz --strip 1 \
 && rm /tmp/amqp.tar.gz

# PHP extensions (incluye IMAP requerido por Mautic)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
 && docker-php-ext-configure opcache --enable-opcache \
 && docker-php-ext-install -j"$(nproc)" \
      intl mbstring mysqli curl pdo_mysql zip bcmath sockets exif amqp gd imap opcache \
 && docker-php-ext-enable \
      intl mbstring mysqli curl pdo_mysql zip bcmath sockets exif amqp gd imap opcache

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

RUN echo "memory_limit = -1" > /usr/local/etc/php/php.ini

# Node.js (LTS) para construir assets
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
 && apt-get update \
 && apt-get install -y --no-install-recommends nodejs \
 && npm install -g npm@latest \
 && rm -rf /var/lib/apt/lists/*

# Define Mautic version by package tag
ARG MAUTIC_VERSION=6.0.3

RUN cd /opt \
 && COMPOSER_ALLOW_SUPERUSER=1 COMPOSER_PROCESS_TIMEOUT=10000 \
    composer create-project mautic/recommended-project:${MAUTIC_VERSION} mautic --no-interaction \
 && rm -rf /opt/mautic/var/cache/js \
 && find /opt/mautic/node_modules -mindepth 1 -maxdepth 1 -not \( -name 'jquery' -o -name 'vimeo-froogaloop2' \) | xargs rm -rf

RUN cd /opt/mautic \
 && COMPOSER_ALLOW_SUPERUSER=1 COMPOSER_PROCESS_TIMEOUT=10000 \
    COMPOSER_ROOT_VERSION=${MAUTIC_VERSION} \
    composer require kuzmany/mautic-amazon-ses --with-all-dependencies


FROM php:8.3-apache-bookworm

# APT sources con contrib/non-free (runtime)
RUN set -eux; \
  printf '%s\n' \
  "deb http://deb.debian.org/debian bookworm main contrib non-free non-free-firmware" \
  "deb http://deb.debian.org/debian-security bookworm-security main contrib non-free non-free-firmware" \
  "deb http://deb.debian.org/debian bookworm-updates main contrib non-free non-free-firmware" \
  > /etc/apt/sources.list

LABEL vendor="Mautic"
LABEL maintainer="Mautic core team <>"

# Volúmenes
VOLUME /var/www/html/config
VOLUME /var/www/html/var/logs
VOLUME /var/www/html/docroot/media/files
VOLUME /var/www/html/docroot/media/images

# PHP env
ENV PHP_INI_VALUE_DATE_TIMEZONE='UTC' \
    PHP_INI_VALUE_MEMORY_LIMIT=512M \
    PHP_INI_VALUE_UPLOAD_MAX_FILESIZE=512M \
    PHP_INI_VALUE_POST_MAX_FILESIZE=512M \
    PHP_INI_VALUE_MAX_EXECUTION_TIME=300

# Workers
ENV DOCKER_MAUTIC_WORKERS_CONSUME_EMAIL=2 \
    DOCKER_MAUTIC_WORKERS_CONSUME_HIT=2 \
    DOCKER_MAUTIC_WORKERS_CONSUME_FAILED=2

ENV DOCKER_MAUTIC_ROLE=mautic_web \
    DOCKER_MAUTIC_RUN_MIGRATIONS=false \
    DOCKER_MAUTIC_LOAD_TEST_DATA=false

ENV DEBUG=false
ENV APACHE_DOCUMENT_ROOT=/var/www/html/docroot

# Copia extensiones/config desde builder
COPY --from=builder /usr/local/lib/php/extensions /usr/local/lib/php/extensions
COPY --from=builder /usr/local/etc/php/conf.d/ /usr/local/etc/php/conf.d/
COPY --from=builder /common/templates/php.ini /usr/local/etc/php/php.ini

# App
COPY --from=builder --chown=www-data:www-data /opt/mautic /var/www/html

# Scripts/startup
COPY --from=builder --chmod=755 /common/startup/ /startup/
COPY --from=builder --chown=www-data:www-data --chmod=755 /common/templates/ /templates/
COPY --from=builder --chmod=755 /common/docker-entrypoint.sh /entrypoint.sh
COPY --from=builder --chmod=755 /common/entrypoint_mautic_web.sh /entrypoint_mautic_web.sh
COPY --from=builder --chmod=755 /common/entrypoint_mautic_cron.sh /entrypoint_mautic_cron.sh
COPY --from=builder --chmod=755 /common/entrypoint_mautic_worker.sh /entrypoint_mautic_worker.sh
COPY --from=builder /common/templates/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY --from=builder /usr/bin/composer /usr/bin/composer

# Runtime deps mínimos (NO upgrade). libc-client2007e para IMAP ya compilado.
RUN apt-get update \
 && apt-get install --no-install-recommends -y \
    ca-certificates \
    cron \
    git \
    libc-client2007e \
    libfreetype6 \
    libjpeg62-turbo \
    libpng16-16 \
    librabbitmq4 \
    libwebp7 \
    libzip4 \
    mariadb-client \
    supervisor \
    unzip \
 && rm -rf /var/lib/apt/lists/* \
 && rm -f /etc/cron.daily/*

# Node.js (LTS) para construir assets
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
 && apt-get update \
 && apt-get install -y --no-install-recommends nodejs \
 && npm install -g npm@latest \
 && rm -rf /var/lib/apt/lists/*

# Build de assets
RUN cd /var/www/html \
 && npm install \
 && php bin/console mautic:assets:generate \
 && php bin/console cache:clear

# Apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
 && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf \
 && a2enmod rewrite

# Permisos
RUN chown -R www-data:www-data /var/www/html/var/

WORKDIR /var/www/html/docroot
ENTRYPOINT ["/entrypoint.sh"]
CMD ["apache2-foreground"]

