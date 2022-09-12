create table local(
PARTNUMBER varchar(30) NOT NULL,
DESCRICAO varchar(50) NOT NULL,
CONDICAO enum('NE','NS','OH','SV','AR') NOT NULL,
local_box varchar(20),
foreign key (PARTNUMBER, DESCRICAO, CONDICAO) references produtos (PARTNUMBER, DESCRICAO, CONDICAO),
foreign key (local_box) references local_ (local_box)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci


CREATE TABLE `produtos` (
  `id_produto` int auto_increment NOT NULL,
  `PARTNUMBER` varchar(30) NOT NULL,
  `ALTERNATIVO` varchar(30),
  `DESCRICAO` varchar(50) NOT NULL,
  `UNIDADE` enum('EA','FT','LB','KT','RL','PK') default 'EA' NOT NULL,
  `CONDICAO` enum('NE','NS','OH','SV','AR') NOT NULL,
  `LISTA` enum('Y','N') DEFAULT 'Y',  
  PRIMARY KEY (`id_produto`,`PARTNUMBER`,`DESCRICAO`,`CONDICAO`)  
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci

create table fotos(
`ID_FOTO` int auto_increment NOT NULL,
`PARTNUMBER` varchar(30) NOT NULL,
`DESCRICAO` varchar(50) NOT NULL,
`CONDICAO` enum('NE','NS','OH','SV','AR') NOT NULL,
`FOTO1` varchar (1024),
`FOTO2` varchar (1024),
`FOTO3` varchar (1024),
`FOTO4` varchar (1024),
primary key (`foto`),
foreign key (`PARTNUMBER`, `DESCRICAO`, `CONDICAO`) references produtos (`PARTNUMBER`, `DESCRICAO`, `CONDICAO`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci


Create table usuarios (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
login Varchar(30),
senha Varchar(40),
Primary Key (ID)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
