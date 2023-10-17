-- Active: 1696369896837@@127.0.0.1@3306@peluqturn
SELECT * FROM servicio;

SELECT * FROM usuario;

SELECT * FROM local;

SELECT * FROM loc_serv;

SELECT * FROM turno;

INSERT INTO servicio(id,Servicio,Duracion)
VALUES(1,'Corte','01:00:00');

INSERT INTO servicio(id,Servicio,Duracion)
VALUES(2,'Peinado','01:00:00'),
(3,'Color','01:00:00');

INSERT INTO loc_serv(id,id_servicio,id_local,horario_ini,horario_fin)
VALUES
(1,1,1,'10:00:00','10:00:00'),
(2,2,1,'10:00:00','10:00:00'),
(3,1,2,'10:00:00','10:00:00'),
(4,2,2,'10:00:00','10:00:00');

INSERT INTO turno(id,dia,horario,id_usuario,estado,id_loc_serv)
VALUES
(1,'2023-10-18','10:00:00',1,'disponible',2);