drop database factordocente2;

create database factordocente2;

use factordocente2;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academ`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL,
  `cedula` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`,`cedula`) VALUES
(1, 'Administrador', '', 'admin@gmail.com', '123456', 1,12),
(2, 'Joseph', '12345', 'josephg059@gmail.com', '', 2, 13),
(4, 'joseph', '12345', 'joseph@gmail.com', '', 2, 14),
(5, 'paul', '1234', 'paul@gmail.com', '', 2, 15);

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`,`cedula`) VALUES
(3, 'victor', '123456', 'victor@gmail.com', '', 2, 15);

INSERT INTO `login` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`,`cedula`) VALUES
(6, 'cristian', '123456', 'cristian@gmail.com', '', 3, 16);
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`,`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- Creacion Tabla login 2
-- Estructura de tabla para la tabla `login`
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `login2` (
  `id` int(11) NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL,
  `cedula` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login2` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`,`cedula`) VALUES
(1, 'Administrador', '', 'admin@gmail.com', '123456', 1,12),
(2, 'Joseph', '12345', 'josephg059@gmail.com', '', 3, 13),
(4, 'joseph', '12345', 'joseph@gmail.com', '', 3, 14),
(5, 'paul', '1234', 'paul@gmail.com', '', 3, 15);

INSERT INTO `login2` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`,`cedula`) VALUES
(3, 'victor', '123456', 'victor@gmail.com', '', 3, 15);

INSERT INTO `login2` (`id`, `user`, `password`, `email`, `pasadmin`, `rol`,`cedula`) VALUES
(6, 'cristian', '123456', 'cristian@gmail.com', '', 3, 16);
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login2`
  ADD PRIMARY KEY (`id`,`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- finaliza creacion tabla login2
create table Capacitaciones
(codCapacitacion int primary key,
Capacitacion varchar(30),
Precio numeric);
drop table Capacitaciones;
insert into Capacitaciones values
(1001, 'BIG_DATA',100000),
(1002, 'PROGRAMACION MOVIL',40000),
(1003, 'GERENCIA DE SISTEMAS',250000);

create table Transaccion
(CodTransaccion int primary key,
Capacitacion varchar(30),
Saldo numeric);

insert into Transaccion values
(1001, 'Paul',1000000),
(1002, 'Victor',4000),
(1003, 'lucas',25000);

create table usuarios
(cedula bigint primary key,
contraseña varchar(20),
nombre1 varchar(10),
nombre2 varchar(10),
apellido1 varchar(10),
apellido2 varchar(10),
direccion varchar(30),
celular varchar(10),
fijo varchar(7));

create table contratos
(numcontrato int,
cedula bigint,
tipo varchar (20),
salariobase bigint,
fechainicial date,
fechafinal date,
primary key (numcontrato,cedula),
foreign key (cedula) references usuarios(cedula)
ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

create table cargos
(codcargo int primary key,
cargo varchar(30));

create table usucar
(codcargo int,
cedula bigint,
primary key (codcargo,cedula),
foreign key (codcargo) references cargos(codcargo),
foreign key (cedula) references usuarios(cedula)
ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

create table especializaciones
(codespecializacion int primary key,
especializacion varchar(30));

create table usuesp
(codespecializacion int,
cedula bigint,
primary key (codespecializacion,cedula),
foreign key (codespecializacion) references especializaciones(codespecializacion),
foreign key (cedula) references usuarios(cedula)
ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

create table facultades
(codfacultad int primary key,
facultad varchar(30));

create table usufac
(codfacultad int,
cedula bigint,
primary key (codfacultad,cedula),
foreign key (codfacultad) references facultades(codfacultad),
foreign key (cedula) references usuarios(cedula)
ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

create table cursos
(codcurso int ,
cedula bigint,
curso varchar(50),
primary key (codcurso, cedula),
foreign key (cedula) references usuarios(cedula)
ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

create table horarios
(codhorario int primary key,
dia varchar(10),
horainicial varchar(20),
horafinal varchar(20));

create table curhora
(codcurso int,
codhorario int,
primary key (codcurso,codhorario),
foreign key (codhorario) references horarios(codhorario),
foreign key (codcurso) references cursos(codcurso)
ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;

create table tutorias
(codtutoria int primary key,
dia varchar(10),
horainicial varchar(20),
horafinal varchar(20));

create table curtu
(codcurso int,
codtutoria int,
primary key (codcurso,codtutoria),
foreign key (codtutoria) references tutorias(codtutoria),
foreign key (codcurso) references cursos(codcurso)
ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=INNODB;


insert into usuarios values
(1035420382, 101, 'cristian', 'adrian', 'castaño',  'meseses',  'cra37#47-314',   '3117754978', '2749975'),
(1026548521, 102, 'esteban',  'null',   'colorado', 'henao',    'cll57#35-44',    '3125304040', '4012371'),
(1035548521, 103, 'lucas',    'null',   'padilla',  'cuartas',  'cra70#102-31',   '3146201818', '5236745'),
(1421584623, 104, 'walter',   'hugo',   'arboleda', 'mazo',     'cra80#20-302',   '3205840302', '6405050'),
(1101254842, 105, 'samuel',   'andres', 'bedoya',   'pulgarin', 'calle27#66-33b', '3174601312', '2745687'),
(1025421584, 106, 'karina',   'null',   'medina',   'medina',   'cra50#50-50',    '3165202020', '3154023');

insert into contratos values
(1, 1025421584,	'indefinido',1500000,'2012-02-05','0-0-0');

insert into cargos values
(301, 'Administrador'),
(302, 'Rector'),
(303, 'Vicerrector'),
(304, 'Coordinador de programa'),
(305, 'Gestion humana'),
(306, 'Docente'),
(307, 'Estudiante');

insert into usucar values
(301, 1035420382),
(301, 1026548521),
(301, 1035548521),
(306, 1421584623),
(302, 1101254842),
(304, 1025421584);

insert into especializaciones values
(201, 'Doctorado'),
(202, 'Maestria'),
(203, 'Especializacion');

insert into usuesp values
(201, 1101254842),
(202, 1421584623),
(203, 1421584623);

insert into facultades values
(401, 'Psicologia'),
(402, 'Derecho'),
(403, 'Comunicacion'),
(404, 'Ingenieria'),
(405, 'Licenciatura');

insert into usufac values
(404, 1035420382),
(404, 1026548521),
(404, 1035548521),
(404, 1421584623),
(404, 1025421584);

insert into cursos values
(501, 1421584623, 'ingenieria del software');

insert into horarios values
(601, 'lunes',     '18:00', '21:00'),
(602, 'miercoles', '18:00', '20:00');

insert into curhora values
(501, 601),
(501, 602);

insert into tutorias values
(701, 'lunes',  '16:00', '19:00'),
(702, 'martes', '16:00', '19:00');

insert into curtu values
(501, 701),
(501, 702);
