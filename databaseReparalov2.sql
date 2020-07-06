CREATE TABLE usuario(
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    apellido varchar(40),
    wp varchar(14),
    fb varchar(40),
    direccion varchar(64),
    correo varchar(64)
);
CREATE TABLE cotizaciones (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    marca varchar(30),
    modelo varchar(20),
    servicio varchar(60),
    fecha_cotizacion DATETIME
);

/*Sin relacion -> actual*/
CREATE TABLE servicio (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    id_usuario int NOT NULL,
    folio varchar(16),
    marca varchar(30),
    modelo varchar(30),
    fecha_inicio DATETIME,
    fecha_fin DATETIME,
    descripcion_serv varchar(30),
    detalles text,
    estatus varchar(30),
    costo_entrada int,
    costo_total int,
    pago varchar(30)
);

/*Con relacion*/
CREATE TABLE servicio (
    id int NOT NULL AUTO_INCREMENT,
    id_usuario int NOT NULL,
    id_cotizacion int NOT NULL,
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
    FOREIGN KEY (id_usuario) REFERENCES users(id),
    FOREIGN KEY (id_cotizacion) REFERENCES cotizaciones(id)
);

/*Servicios*/
CREATE TABLE servicios_ofrecidos (
    id int AUTO_INCREMENT PRIMARY KEY,
    dispositivo varchar(32),
    marca varchar(32),
    modelo varchar(32),
    servicio varchar(32),
    precio_dist int,
    precio_publ int,
    costo int,
    gestion int,
    adm int,
    inge int
);

INSERT INTO servicios_ofrecidos (`dispositivo`,`marca`,`modelo`,`servicio`,`precio_dist`,`precio_publ`,`costo`,`gestion`,`adm`,`inge`) VALUES ("smartphone","iphone","4","CAMBIO DE PANTALLA",500,500,100,50,50,100);