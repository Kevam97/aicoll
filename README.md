# Aicoll TEST

## Descripción
Se presenta el siguiente desarrollo de un CRUD elaborado con laravel

##  Definiciones

## Tecnologías usadas
  * [Laravel 11](https://laravel.com/docs/11.x)
  * [Laravel sail](https://laravel.com/docs/11.x/sail)
  * [Livewire](https://laravel-livewire.com/)
  * [Filament](https://filamentphp.com/docs/2.x/admin/installation)
  * [MySQL](https://www.mysql.com)
  * [TailWindCSS](https://tailwindcss.com)

## Requerimientos previos
  * [PHP 8](https://www.php.net/downloads)
  * [Composer](https://getcomposer.org)
  * [Docker](https://www.docker.com/products/docker-desktop/)

## Insatalación del proyecto
### Clonar el repositorio
```
$ https://github.com/Kevam97/aicoll.git
```

### Instalar dependencias

```
$ cd aicoll
$ composer install
```

## Configuración
### Variables de entorno
Crear el fichero `.env` para el almacenamiento de las variables de entorno
```
$ cp .env.example .env
```
Una vez creado el fichero ingresar a el y configurar el usuario y contraseña de la base de datos a la cual se va a apuntar
### Generar una key
```
$ php artisan key:generate
```
Después de crearla validar que se haya incluido al inicio del fichero `.env`

## Iniciar servidor local
Para arrancar un servidor local se debe configurar desde su terminal el alias `sail` o en su defecto utilizar `./vendor/bin/sail`, revise la documentacion si es [necesario](https://laravel.com/docs/10.x/sail#configuring-a-shell-alias)

```
$ sail up -d
```

## Correr las migraciones
Para ejecutar las migraciones

```
$ sail artisan migrate --seed
```


## Rutas del proyecto

La ruta para realizar operaciones con la tabla empresa 

```
$ http://localhost/api/v1/companies
```

Para hacer fecth con una empresa

```
$ http://localhost/api/v1/companies{id incrementable}
```

Para acceder al panel admin

```
$ http://localhost/admin
```

# Formato del json

Para realizar Post 

```
{
    "data":{
    "type":"companies",
    "attributes":{

        "nit":"10882443",
        "name":"Empresa Prueba",
        "address":"carrera 21",
        }
    }

}
```

Para hacer Patch

```
$ http://localhost/api/v1/companies{id incrementable}
{
    "data":{
    "type":"companies",
    "id":"[id incrementable]",
    "attributes":{

        "nit":"10882443",
        "name":"Empresa Prueba",
        "address":"carrera 21",
        "status":false
        }
    }

}

```

