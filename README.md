# Proyecto Reciclapp
 
Definición de servicios para el lado del servidor de la aplicación.

Se utilizó la herramienta de prototipado móvil Marvel App para detallar las pantallas principales que tendrá la app denominada [“Reciclapp”](https://marvelapp.com/dbbf1i7/)


## Evidencia de funcionamiento de webservices

A continuación, se muestra el funcionamiento de los servicios web realizados. Se utilizó la herramienta PostMan para ejecutar las pruebas. En [api.php](https://github.com/rossmpj/Reciclapp-Backend/blob/master/routes/api.php) se pude encontrar la estructura de los servicios que van a ser consumidos.


### Registrar objeto

Permite almacenar los datos de un objeto que se quiere publicar para ser comprado o vendido, los datos que recibe son: nombre del objeto, descripción, precio, fecha de publicación, el id del usuario que está realizando la publicación y el id de la categoría a la cual pertenece el objeto. Esto se registra en la tabla Objeto, además, si hubiera imágenes asociadas, la ruta de estas se almacenaría en la tabla Imagen.

La definición de este servicio se puede encontrar en el [controlador del modelo Objeto](https://github.com/rossmpj/Reciclapp-backend/blob/master/app/Http/Controllers/ObjetoController.php)

### Comentar objeto

Este servicio permitirá registrar el comentario que un usuario quiera dejar sobre un objeto en específico, esto se almacenará en la tabla Calificación y los datos que recibe son: comentario, el id del usuario que está realizando y el id del objeto.

La definición de este servicio se puede encontrar en el [controlador del modelo Calificación](https://github.com/rossmpj/Reciclapp-Backend/blob/master/app/Http/Controllers/CalificacionController.php)

### Mostrar comentarios

Este servicio permitirá visualizar los comentarios de un determinado objeto de parte de un usuario, este comentario está almacenado en la tabla Calificación y tiene relación con las tablas Usuario y Objeto, para tener una identificación sobre quién realiza determinados comentarios.
 
La definición de este servicio se puede encontrar en el [controlador del modelo Calificación](https://github.com/rossmpj/Reciclapp-Backend/blob/master/app/Http/Controllers/CalificacionController.php)

### Mostrar perfil

Este servicio permitirá visualizar los datos de un usuario, estos están en la tabla Usuario y tiene relación con la tabla InformaciónContacto.

La definición de este servicio se puede encontrar en el [controlador del modelo Usuario](https://github.com/rossmpj/Reciclapp-Backend/blob/master/app/Http/Controllers/UsuarioController.php)

### Cambiar estado de objeto

Este servicio permitirá cambiar el estado de un artículo de la tabla Objeto, donde el usuario podrá cambiar el estado de este entre disponible y no disponible. 

La definición de este servicio se puede encontrar en el [controlador del modelo Objeto](https://github.com/rossmpj/Reciclapp-Backend/blob/master/app/Http/Controllers/ObjetoController.php)

![cambiar_estado_1.png](https://github.com/rossmpj/Reciclapp-Backend/blob/master/public/api/cambiar_estado_1.PNG)

![cambiar_estado_0.png](https://github.com/rossmpj/Reciclapp-Backend/blob/master/public/api/cambiar_estado_0.PNG)


### Ver mis publicaciones

Este servicio consiste en mostrar la lista de objetos que ha publicado un usuario registrado. El parámetro que recibe es id del usuario y los datos a mostrarse se obtienen a partir de las tablas Objeto, Imagen y Categoría.

La definición de este servicio se puede encontrar en el [controlador del modelo Objeto](https://github.com/rossmpj/Reciclapp-Backend/blob/master/app/Http/Controllers/ObjetoController.php)

![ver_mis_publicaciones.png](https://github.com/rossmpj/Reciclapp-Backend/blob/master/public/api/ver_mis_publicaciones.PNG)


### Mostrar objetos

Consiste en obtener un conjunto de publicaciones sobre artículos cuyo estado es disponible, que van a ser mostradas en la pantalla principal de la aplicación, los datos se obtienen a partir de las tablas Objeto, Imagen y Categoría.

La definición de este servicio se puede encontrar en el [controlador del modelo Objeto](https://github.com/rossmpj/Reciclapp-Backend/blob/master/app/Http/Controllers/ObjetoController.php)

![mostrar_objetos.png](https://github.com/rossmpj/Reciclapp-Backend/blob/master/public/api/mostrar_objetos.PNG)


### Mostrar objetos por categoría

Este servicio recibirá como parámetro una categoría en particular y mostrará de igual manera que en mostrarObjetos los objetos, pero en este caso los que pertenezcan al parámetro que coincida con la tabla Categoría. 

La definición de este servicio se puede encontrar en el [controlador del modelo Objeto](https://github.com/rossmpj/Reciclapp-Backend/blob/master/app/Http/Controllers/ObjetoController.php)

![objetos_por_categoria.png](https://github.com/rossmpj/Reciclapp-Backend/blob/master/public/api/objetos_por_categoria.PNG)
