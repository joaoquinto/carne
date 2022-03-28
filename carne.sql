CREATE DATABASE carne;
USE carne;
SET SQL_SAFE_UPDATES = 0;
CREATE TABLE tbl_alunos(
  id_Aluno SMALLINT PRIMARY KEY AUTO_INCREMENT,
  nome_Aluno VARCHAR(150) NOT NULL,
  serie enum('1', '2', '3') NOT NULL
);
INSERT INTO tbl_alunos (id_Aluno, nome_Aluno, serie)
VALUES (DEFAULT, 'João Victor Oliveira Pereira', '3'),
  (DEFAULT, 'Icaro Jorge Fernandes', '2'),
  (DEFAULT, 'Jorge Roberto Carvalho', '3');