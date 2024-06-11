# Ejemplo de API con Laravel

## Preambulo
Antes que nada, [LEER ESTA DIAPOSITIVA](https://docs.google.com/presentation/d/12Ocqxge3KhWbWjviWAMToytRRyyn3NChhWSvbd-V_B4/edit?usp=sharing), tiene todo el teorico de APIs.

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

Tengan en cuenta que al tratarse de un proyecto de API, las rutas se especifican en el archivo `routes/api.php` (NO EN `routes/web.php`!!!), y todas comienzan con el sufijo `api/`.

Por ejemplo, la ruta para listar una pizza esta definida en el codigo como `/pizza`, pero al momento de utilizarla hay que llamarla `/api/pizza`.

Para cada operacion, siempre usamos la URL `/api/pizza`, y la operacion la define el metodo HTTP usado. En Insomina, a la izquierda de donde indicamos la URL a consultar, podemos especificar el metodo HTTP.

Siempre que vayamos a enviar datos en el cuerpo del request, especificamos en la opcion "Body" que vamos a enviar JSON

![imagen](https://i.imgur.com/rn9XQ2q.png)

### Probar escritura

Indicamos la URL `http://localhost:8000/api/pizza`, y elegimos el metodo HTTP POST.

Luego, le indicamos los campos a enviar, en formato JSON



![imagen](https://i.imgur.com/bg0eVvp.png)

### Probar listado

Para obtener todas las Pizzas, indicamos la URL `http://localhost:8000/api/pizza`, con el metodo GET.

![imagen](https://i.imgur.com/gAcTfX9.png)

Para obtener los datos de una pizza puntual (ej. la pizza numero 1), indicamos la misma URL con el metodo GET pero con el ID de la pizza al final: `http://localhost:8000/api/pizza/1`

![imagen](https://i.imgur.com/cTnwxcq.png)

En ambos casos, se ignora totalmente si hay parametros indicados en el cuerpo en formato JSON.

### Probar modificacion

Indicamos la URL de pizzas con el metodo PUT, con el id de la pizza al final, ej. `http://localhost:8000/api/pizza/1`, y en el cuerpo del request le indicamos con JSON el cambio a aplicar en los campos.

![imagen](https://i.imgur.com/OeqZtvM.png)

Luego, podemos verificar que el cambio este hecho al consultarlo.

![imagen](https://i.imgur.com/I9TYW5P.png)

### Probar eliminacion

Indicamos la URL de pizzas con el metodo DELETE, con el id de la pizza al final, ej. `http://localhost:8000/api/pizza/2`.

En este caso se ignora totalmente si hay parametros indicados en el cuerpo en formato JSON.

![imagen](https://i.imgur.com/f75WFaj.png)

Luego, verificamos que no exista en el listado ni cuando lo consultamos puntualmente (en este caso, da un 404)

![imagen](https://i.imgur.com/VjcChDl.png)

![imagen](https://i.imgur.com/rs3uImE.png)


