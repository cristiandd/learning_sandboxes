# Cria um banco de dados
CREATE SCHEMA `dbphp7` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

# Seleciona o banco de dados
USE teste;

# Cria tabelas
CREATE TABLE tb_usuarios(
	# Criação das colunas da tabela
	idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    deslogin VARCHAR(56) NOT NULL,
    dessenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

# Criar um cadastro na tabela
INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('root', 'qwerty');

# Seleciona colunas para visualização
SELECT * FROM tb_usuarios;

# Atualiza algum cadastro
UPDATE tb_usuarios SET dessenha = '123456', deslogin = 'admin' WHERE idusuario = 1;

# Deletar algum cadastro da tabela (não apaga o auto_increment)
DELETE FROM tb_usuarios WHERE idusuario = 1;

# Remover todos os cadastros de uma tabela
TRUNCATE TABLE tb_usuarios;

# Deleta uma tabela
DROP TABLE tb_usuarios;

# Deleta o banco de dados
DROP SCHEMA dbphp7;