CREATE TABLE advocacia (
  id_advocacia INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_advocacia VARCHAR(45) NULL,
  end_advocacia VARCHAR(45) NULL,
  tel_advocacia VARCHAR(11) NULL,
  PRIMARY KEY(id_advocacia)
);

CREATE TABLE advogado (
  id_advogado INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  nome_advogado VARCHAR(255) NULL,
  oab_advogado VARCHAR(10) NULL,
  especialidade_advogado VARCHAR(45) NULL,
  PRIMARY KEY(id_advogado)
);

CREATE TABLE atendente (
  id_atendente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  advocacia_id_advocacia INTEGER UNSIGNED NOT NULL,
  nome_atendente VARCHAR(255) NULL,
  PRIMARY KEY(id_atendente),
  INDEX atendente_FKIndex1(advocacia_id_advocacia)
);

CREATE TABLE cliente (
  id_cliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  atendente_id_atendente INTEGER UNSIGNED NOT NULL,
  nome_cliente VARCHAR(255) NULL,
  fone_cliente VARCHAR(20) NULL,
  cpf_cliente VARCHAR(11) NULL,
  email_cliente VARCHAR(45) NULL,
  PRIMARY KEY(id_cliente),
  INDEX cliente_FKIndex1(atendente_id_atendente)
);

CREATE TABLE reuniao (
  id_reuniao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  cliente_id_cliente INTEGER UNSIGNED NOT NULL,
  advogado_id_advogado INTEGER UNSIGNED NOT NULL,
  data_reuniao DATETIME NULL,
  PRIMARY KEY(id_reuniao, cliente_id_cliente, advogado_id_advogado),
  INDEX cliente_has_advogado_FKIndex1(cliente_id_cliente),
  INDEX cliente_has_advogado_FKIndex2(advogado_id_advogado)
);


