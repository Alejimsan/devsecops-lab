FROM nginx:1.14.0
# Imagen antigua para forzar la detección de CVEs críticos
COPY config.php /usr/share/nginx/html/
