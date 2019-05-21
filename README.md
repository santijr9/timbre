# timbre
music player to play music with a raspberry pi when classroom starts or ends.


Para sustituir el viejo timbre del centro, se ha desarrollado una pequeña webapp en una raspberry PI. El dispositivo lanza un script desde el cron a las horas de cambio de clase, que reproduce una canción durante X segundos.


# Requisitos

- Raspberry
- Ubuntu 16 / 18
- paquetes instalados: libapache2-mod-php (apache 2 y php), sox, 
- Eliminar escritorio gráfico.

# Configuraciones del apache

incrementar en php.ini el max_size_file_upload.

Configurar apache para que se ejecute con el mismo usuario estandar del sistema, y de esta manera evitamos los problemas que tiene www-data para reproducir audio, desde el botón web de reproducción manual.

descargar todos los ficheros y copiarlos en /var/www/html

# Permisos

Todos los permisos en /var/www/html para el usuario estandar con el que has instalado.

# Subir canciones

Las canciones se suben mediante la app web a la carpeta /var/www/html/songs.

# Cancion seleccionada

en el fichero /var/www/html/selected/selected.mp3 encontramos un enlace simbolico al fichero que se reproduce, que se encuentra en la carpeta /var/www/html/songs.

# Tiempo de reproducción

Es posible variar el tiempo de reproducción entre 5 y 60 segundos desde la webApp.
Para ello, se escribe un número en el fichero /var/www/html/tiempo , el cual representa los segundos que se va a reproducir la canción.

# Planificador de tareas

De manera manual, configuramos el cron, para que ejecute player.sh en las horas que nos interese:

0 8 * * * /var/www/html/player.sh /var/www/html/selected/selected.mp3
...


# Pendiente

- Interfaz de gestión de las horas a las que suena automáticamente. (Configurar el cron desde web.)
- Opción de shuffle.
