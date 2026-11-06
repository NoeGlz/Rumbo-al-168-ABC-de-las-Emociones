# Despliegue con Docker Compose

1. Desde esta carpeta, ejecuta `docker compose up -d --build`.
2. Abre `http://IP_DEL_VPS:8687` y permite el puerto TCP 8687 en el firewall del VPS.

PHP se conecta a MariaDB por la red privada de Compose usando el host `db`. MariaDB no publica ningún puerto al VPS. Sus datos se conservan en el volumen `mariadb_data`; el SQL de `database/rumbo_168.sql` se importa automáticamente solo al crear el volumen por primera vez.

Las credenciales están directamente en `docker-compose.yml` para que el despliegue no requiera archivos adicionales. Si quieres cambiarlas, modifica allí `DB_PASSWORD`, `MARIADB_PASSWORD` y `MARIADB_ROOT_PASSWORD` manteniendo iguales las contraseñas de la aplicación y MariaDB. Si la base ya fue inicializada, cambiar las variables no cambia las contraseñas guardadas en el volumen.

Para revisar los contenedores: `docker compose ps`. Para detenerlos sin borrar los datos: `docker compose down`. No uses `docker compose down -v` si quieres conservar la base de datos.
