--Creacion de tablas!

create database proyectoReciclaje;
use proyectoReciclaje;

create table Rol(
    rol_id int auto_increment,
    tipo varchar(50),
    primary key(rol_id)
);

create table Usuario(
    usuario_id varchar(10),
    rol int,
    informacion int,
    nombre_usuario varchar(50),
    contrasena varchar(10),
    primary key(usuario_id),
    foreign key(rol) references Rol(rol_id),
    foreign key(informacion) references InformacionContacto(informacion_id)
);

create table InformacionContacto(
    informacion_id int auto_increment,
    nombres varchar(100),
    apellidos varchar(100),
    ciudad varchar(100),
    direccion varchar(300),
    telefono varchar(10),
    primary key(informacion_id)
);

create table Calificacion(
    calificacion_id int auto_increment,
    comentario varchar(300),
    usuario varchar(10),
    objeto int,
    primary key(calificacion_id),
    foreign key(usuario) references Usuario(usuario_id),
    foreign key(objeto) references Objeto(objeto_id)
);

create table Objeto(
    objeto_id int auto_increment,
    nombre varchar(100),
    descripcion varchar(200),
    precio double,
    fecha_publicacion date,
    usuario varchar(10),
    categoria int,
    primary key(objeto_id),
    foreign key(usuario) references Usuario(usuario_id),
    foreign key(categoria) references Categoria(categoria_id)
);

create table Categoria(
    categoria_id int auto_increment,
    tipo varchar(50),
    primary key(categoria_id)
);

create table Imagen(
    imagen_id int auto_increment,
    ruta varchar(300),
    objeto int,
    primary key(imagen_id),
    foreign key(objeto) references Objeto(objeto_id)
);

--registrar Usuario!

INSERT into Usuario(usuario_id, rol, informacion, nombre_usuario, contrasena) VALUES ('0987654321', 1, 1, 'pgvera', 'secreto');
INSERT into Rol(tipo) VALUES ('administrador');
INSERT into InformacionContacto(nombres, apellidos, ciudad, direccion, telefono) VALUES ('Pedro Gabriel', 'Vera Garcia', 'Guayaquil', 'Floresta', '0993878627');

--registrarObjeto!

INSERT into Objeto(nombre, descripcion, precio, fecha_publicacion, usuario, categoria) VALUES('botellas', 'botellas de plastico', 0.50, '2019-06-20', 1, 1);
INSERT into Categoria(tipo) VALUES('plastico');
INSERT into Imagen(ruta, objeto) VALUES('\Directorio\Imagen', 1);

--comentarObjeto !
INSERT into Calificacion(comentario, usuario, objeto) VALUES('botellas de plastico desechables','0987654321', 1);

--mostrarObjetos!

SELECT ob.nombre, ob.descripcion, ob.precio, ob.fecha_publicacion FROM Objeto AS ob WHERE ob.nombre='parametro';

--mostrarObjetosXCategoria!

SELECT ob.nombre, ob.descripcion, ob.precio, ct.tipo, ob.fecha_publicacion FROM Objeto AS ob INNER JOIN Categoria AS ct ON ob.categoria=ct.categoria_id
WHERE ct.tipo='parametro';

--mostrarComentarios

SELECT inf.nombres, inf.apellidos, ob.nombre, cf.comentario FROM (((Usuario AS us INNER JOIN InformacionContacto AS inf ON us.informacion=inf.informacion_id) INNER JOIN Objeto AS ob ON us.usuario_id=ob.usuario) INNER JOIN Calificacion AS cf ON cf.objeto=ob.objeto_id)
WHERE ob.nombre="objeto descrito";

--verMisPublicaciones!

SELECT inf.nombres, ob.nombre, ob.descripcion, img.ruta FROM (((Usuario AS us INNER JOIN InformacionContacto AS inf ON us.informacion=inf.informacion_id) INNER JOIN Objeto AS ob ON us.usuario_id=ob.usuario) INNER JOIN Imagen AS img ON img.objeto=ob.objeto_id)
WHERE usuario_id="0987654321";