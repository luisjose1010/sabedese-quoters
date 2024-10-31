# Sabedese Quoters

Plugin personalizado de WordPress que permite utilizar cotizadores de pólizas de seguros para la página web de Sabe de Seguros, ofreciendo una API, desarrollada mediante la herramienta [WordPress REST API](https://developer.wordpress.org/rest-api/ "WordPress REST API"), para que sea utilizada en una aplicación desarrollada en Vue.js llamada [sabedeseguros-app](https://github.com/luisjose1010/sabedeseguros-app "sabedeseguros-app"), la cual ofrece la interfaz de usuario para el consumo de los datos y la visualización de los formularios dinámicos para cotizar las pólizas de seguros. El plugin agrega "shortcodes" para el uso de los cotizadores en cualquier lugar de la página web y gestiona su envío por correo electrónico.

## 💿 Instalación

Para que el plugin funcione correctamente debe asegurarse de incluir todo el contenido de la carpeta `/dist` resultante al construir para producción la aplicación [sabedeseguros-app](https://github.com/luisjose1010/sabedeseguros-app "sabedeseguros-app") dentro de la carpeta `/src/app`, con la conexión a la API debidamente configurada, de forma que los "shortcodes" muestren sin problema el cotizador indicado, permitiendo intercambiar datos con la API para ser finalmente enviados por correo electrónico.

## Uso

Para utilizarse los cotizadores incluidos en el plugin solo debe incluir en el editor de WordPress el shortcode correspondiente a cada cotizador.

### Cotizadores disponibles

- **[sq_all_quoters]** - Cotizador desplegable con todo el resto de cotizadores.
- **[sq_health]** - Cotizador para pólizas de salud.
- **[sq_funeral]** - Cotizador para pólizas funerarias.
- **[sq_accidents]** - Cotizador para pólizas de accidentes personales.
- **[sq_life]** - Cotizador para pólizas de vida.
- **[sq_transport]** - Cotizador para pólizas de vehículos.
- **[sq_car]** - Cotizador para pólizas patrimoniales.
- **[sq_patrimonial]** - Cotizador para pólizas de transporte.
- **[sq_surety]** - Cotizador para pólizas de fianzas.
- **[sq_pet]** - Cotizador para pólizas de mascotas.

## Gestión del proyecto

El proyecto se gestiona íntegramente mediante la plataforma de gestión [ClickUp](https://app.clickup.com/ "ClickUp") en este [enlace](https://app.clickup.com/9013166617/v/f/90131438783/90130724656 "Proyecto ClickUp de SabedeSeguros"). Para acceder al respectivo enlace con las tareas y la organización del proyecto, que complementan la documentación del mismo, es necesario poseer una cuenta con los permisos necesarios.

![Tareas del proyecto](docs/project-tasks.png)

## ✨ Features

- [Aplicación Front-end (sabedeseguros-app)](https://github.com/luisjose1010/sabedeseguros-app "sabedeseguros-app")
- [WordPress](https://wordpress.org/documentation/ "WordPress")
- [WordPress REST API](https://developer.wordpress.org/rest-api/ "WordPress REST API")
- [PHP](https://www.php.net/docs.php "PHP")
- [MySQL](https://dev.mysql.com/doc/ "MySQL")
