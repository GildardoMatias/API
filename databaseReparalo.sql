CREATE TABLE users (
  id int(10) NOT NULL PRIMARY KEY,
  nombre varchar(20) NOT NULL,
  correo varchar(50) NOT NULL,
  contrasena varchar(10) NOT NULL,
  apellidos varchar(50) NOT NULL,
  celular int(10) NOT NULL,
  direccion varchar(50) NOT NULL,
  cpostal int(5) NOT NULL,
  nexterior int(5) NOT NULL
);

CREATE TABLE servicio (
    id int NOT NULL AUTO_INCREMENT,
    id_usuario int NOT NULL,
    folio varchar(16);
    marca varchar(30),
    modelo varchar(30),
    fecha_inicio DATETIME,
    fecha_fin DATETIME,
    descripcion_serv varchar(30),
    detalles text,
    estatus varchar(30),
    costo_total varchar(30),
    pago varchar(30),
    PRIMARY KEY (id),
    FOREIGN KEY (id_usuario) REFERENCES users(id)
);

1. Por recibir
2. En sucursal
3. En revisión
4. Reparando
5. Reparado 
6. Por enviar
7. En camino
8. Entregado
9. Finalizado
0. Cancelado

CREATE TABLE cotizaciones (
    id int NOT NULL,
    dispositivo varchar(30),
    modelo varchar(20),
    servicio varchar(30),
    detalles text,
    fecha DATETIME
);

CREATE TABLE serviciosEnOferta (
    id int NOT NULL AUTO_INCREMENT,
    servicio varchar(64),
    descripcion varchar(120),
    
);

/*
CREATE TABLE dispositivo (
    id int NOT NULL,
    id_usuario int NOT NULL,
    marca varchar(30),
    modelo varchar(30),
    servicio varchar(30),
    PRIMARY KEY (id),
    FOREIGN KEY (id_usuario) REFERENCES users(id)
);

CREATE TABLE servicio (
    id int NOT NULL,
    id_dispositivo int NOT NULL,
    fecha_inicio varchar(30),
    fecha_fin varchar(30),
    descripcion_serv varchar(30),
    detalles varchar(30),
    estatus varchar(30),
    costo_total varchar(30),
    pago varchar(30),
    PRIMARY KEY (id),
    FOREIGN KEY (id_dispositivo) REFERENCES dispositivo(id)
);
*/