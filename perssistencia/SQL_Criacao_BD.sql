/********************************************************************************/
/*																				*/
/*			NOME DO BANCO: BDMFDS												*/
/*			BANCO DE DADOS METODOS E FERRAMENTAS DE								*/
/*			DESENVOLVIMENTO DE SOFTWARE											*/
/*																				*/
/*																				*/
/*			24/10/2018 - 19:50													*/
/*			Igor Ferreira														*/
/*																				*/
/********************************************************************************/



--
--	TABELA: agendamentos
--

DROP TABLE IF EXISTS agendamentos;
CREATE TABLE IF NOT EXISTS agendamentos (
  age_Codigo int(11) NOT NULL AUTO_INCREMENT,
  age_data date NOT NULL,
  age_mensagem varchar(90) NOT NULL,
  usr_Codigo int(11) NOT NULL,
  loj_Codigo int(11) NOT NULL,
  PRIMARY KEY (age_Codigo,age_mensagem,usr_Codigo,loj_Codigo),
  KEY fk_Agendamentos_Usuarios1_idx (usr_Codigo),
  KEY fk_Agendamentos_Lojas1_idx (loj_Codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--	TABELA: agendamentostatus
--

DROP TABLE IF EXISTS agendamentostatus;
CREATE TABLE IF NOT EXISTS agendamentostatus (
  ags_codigo int(11) NOT NULL AUTO_INCREMENT,
  agc_descricao varchar(45) NOT NULL,
  age_Codigo int(11) NOT NULL,
  PRIMARY KEY (ags_codigo,age_Codigo),
  KEY fk_AgendamentoStatus_Agendamentos1_idx (age_Codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--	TABELA: clientes
--

DROP TABLE IF EXISTS clientes;
CREATE TABLE IF NOT EXISTS clientes (
  cli_Codigo int(11) NOT NULL AUTO_INCREMENT,
  cli_nome varchar(45) NOT NULL,
  cli_endRua varchar(45) NOT NULL,
  cli_endComplemento varchar(45) NOT NULL,
  cli_endNum varchar(45) NOT NULL,
  cli_endBairro varchar(45) NOT NULL,
  cli_endCEP varchar(45) NOT NULL,
  cli_email varchar(45) NOT NULL,
  cli_telefone varchar(45) NOT NULL,
  loj_Codigo int(11) NOT NULL,
  PRIMARY KEY (cli_Codigo,loj_Codigo),
  KEY fk_Clientes_Lojas1_idx (loj_Codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--	TABELA: contas
--

DROP TABLE IF EXISTS contas;
CREATE TABLE IF NOT EXISTS contas (
  con_codigo int(11) NOT NULL AUTO_INCREMENT,
  con_descricao varchar(45) NOT NULL,
  con_data date NOT NULL,
  con_credito decimal(10,2) NOT NULL,
  con_debito decimal(10,2) NOT NULL,
  loj_Codigo int(11) NOT NULL,
  PRIMARY KEY (con_codigo,loj_Codigo),
  KEY fk_Contas_Lojas1_idx (loj_Codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--	TABELA: lojas
--

DROP TABLE IF EXISTS lojas;
CREATE TABLE IF NOT EXISTS lojas (
  loj_Codigo int(11) NOT NULL AUTO_INCREMENT,
  loj_Descricao varchar(45) NOT NULL,
  PRIMARY KEY (loj_Codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--	TABELA: ordemdeservico
--

DROP TABLE IF EXISTS ordemdeservico;
CREATE TABLE IF NOT EXISTS ordemdeservico (
  os_codigo int(11) NOT NULL AUTO_INCREMENT,
  loj_Codigo int(11) NOT NULL,
  cli_Codigo int(11) NOT NULL,
  usr_Codigo int(11) NOT NULL,
  os_data date NOT NULL,
  PRIMARY KEY (os_codigo,loj_Codigo,cli_Codigo,usr_Codigo),
  KEY fk_OrdemDeServico_Lojas1_idx (loj_Codigo),
  KEY fk_OrdemDeServico_Clientes1_idx (cli_Codigo),
  KEY fk_OrdemDeServico_Usuarios1_idx (usr_Codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--	TABELA: ositens
--

DROP TABLE IF EXISTS ositens;
CREATE TABLE IF NOT EXISTS ositens (
  osi_codigo int(11) NOT NULL AUTO_INCREMENT,
  osi_descricao varchar(45) NOT NULL,
  os_codigo int(11) NOT NULL,
  pro_codigo int(11) NOT NULL,
  PRIMARY KEY (osi_codigo,os_codigo,pro_codigo),
  KEY fk_OsItens_OrdemDeServico1_idx (os_codigo),
  KEY fk_OsItens_Produtos1_idx (pro_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--	TABELA: produtos
--

DROP TABLE IF EXISTS produtos;
CREATE TABLE IF NOT EXISTS produtos (
  pro_codigo int(11) NOT NULL AUTO_INCREMENT,
  pro_descricao varchar(45) NOT NULL,
  pro_saldo decimal(10,2) NOT NULL,
  pro_valor decimal(10,2) NOT NULL,
  PRIMARY KEY (pro_codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
--	TABELA: usuarios
--

DROP TABLE IF EXISTS usuarios;
CREATE TABLE IF NOT EXISTS usuarios (
  usr_Codigo int(11) NOT NULL AUTO_INCREMENT,
  usr_Descricao varchar(45) NOT NULL,
  usr_Senha varchar(45) NOT NULL,
  loj_Codigo int(11) NOT NULL,
  PRIMARY KEY (usr_Codigo,loj_Codigo),
  KEY fk_Usuarios_Lojas_idx (loj_Codigo)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
