# Panel de Turnos
Este sitio web muestra turnos y se actualiza cada un minuto
## ¿Comó actualizar el panel cada cierto tiempo?
Luego de tener la consulta lista ($sql)  tenemos que seguir diferentes pasos para que la planilla se actualize cada un tiempo determinado...
### Windows:
1. Abrir el bloc de nota y pegar: C:\xampp\php\php.exe -f C:\xampp\htdocs\ruta_a_tu_archivo.index.php
2. Guardar como .bat 
3. Instalar el programa System Scheduler: desde el link: https://www.splinterware.com/download/index.html
4. Abrir el programa 
5. Crear un nuevo evento y en la aplicacion ingresar la direcion donde se encuente el archivo .bat
6. En la pestaña Scheduler elegir en cuanto tiempo se actualiza el sitio
7. Listo
### Linux 
1. Abrir la terminal
2. Escribimos 'crontab -e' y damos enter. Se nos abrira todo los que son los Cron Jobs
3. Al final de documento escribimos "* * * * * /usr/bin/php /ruta_a_tu_archivo.index.php"
4. Guardamos y listo.
