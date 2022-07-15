CREATE TABLE dbEventos.tb_eventos (
	id INT auto_increment NOT NULL,
	nome_evento varchar(200) NOT NULL,
	descricao varchar(200) NOT NULL,
	data_inicio DATE NOT NULL,
	data_encerramento DATE NOT NULL,
	tipo varchar(100) NOT NULL,
	wifi BOOL NULL,
	estacionamento_gratis bool NULL,
	bebida_gratis BOOL NULL,
	baner_id INT NULL,
	CONSTRAINT tb_eventos_PK PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_0900_ai_ci;
