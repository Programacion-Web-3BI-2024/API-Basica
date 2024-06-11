# Ejemplo de API con Laravel

## Crear base de Datos
Creamos una base de datos en MySQL con el nombre que gusten, y creamos la siguiente tabla en la base:

```sql
CREATE TABLE pizzas(
    id int primary key auto_increment,
    nombre varchar(255) NOT NULL,
    precio int NOT NULL,
    created_at datetime,
    updated_at datetime,
    deleted_at datetime
);
```

## Preparar Laravel
A continuación, los pasos para que esta pocilga funcione

### Clonar repositorio
Primero, clonamos este repositorio: `git clone https://github.com/Programacion-Web-3BI-2024/API-Basica.git`



### Generar archivo .env
Luego, copiamos el archivo `.env.example` en `.env`, y le cargamos los datos correspondientes a la conexion de base de datos:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_base
DB_USERNAME=root
DB_PASSWORD=password
```

### Inicializar Laravel
Dentro del directorio del proyecto, ejecutamos los siguientes comandos:
```bash
# Descarga los paquetes de Composer necesarios para que Laravel funcione
composer install 

# Crea llaves de encriptacion de Laravel para su uso interno. Es necesario para que funcione, por mas que no interactuamos nunca con ellas.
php artisan key:generate 
```

*Nota*: estos pasos se ejecutan automáticamente cuando creamos un proyecto con Composer, pero si son necesarios cuando clonamos un proyecto desde Github

*Nota2*: Le puse comentarios. Me la banco. En el código tambien hay. Y tambien me la banco.

## 

### Ejecutar

Simplemente, darle `php artisan serve` y acceder desde http://localhost:8000.

## Probar
Dado que este proyecto es una API, y no una aplicación web, no se debe usar el navegador para probarlo, sino que se necesita un cliente de APIs.

Hay miles, pero el mas simple y completo es [Insomina](https://insomnia.rest/). De [acá](https://insomnia.rest/download) lo descargan.


