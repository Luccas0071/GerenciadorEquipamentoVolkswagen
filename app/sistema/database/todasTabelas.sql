CREATE DATABASE sistema_volkswagen;

CREATE SCHEMA gerenciador AUTHORIZATION postgres;

CREATE TABLE IF NOT EXISTS gerenciador.tb_planilha_fornecedor
(
    plf_codigo serial,
    plf_nome character varying, 
    CONSTRAINT pk_planilha_fornecedor PRIMARY KEY (plf_codigo)
);

CREATE TABLE IF NOT EXISTS gerenciador.tb_item_planilha_fornecedor
(
    ipf_codigo serial,
    ipf_location character varying,
    ipf_description character varying,
	ipf_folder character varying,
    ipf_test character varying,
    ipf_measure character varying,
    ipf_next_check character varying,
	ipf_observacao character varying,
    CONSTRAINT pk_item_planilha_fornecedor PRIMARY KEY (ipf_codigo)
);

CREATE TABLE IF NOT EXISTS gerenciador.tb_usuario
(
    usu_codigo serial,
    usu_login character varying,
    usu_senha character varying,
	usu_nome character varying,
    usu_dddfone character varying,
    usu_fone character varying,
    usu_email character varying,
    CONSTRAINT pk_usuario PRIMARY KEY (usu_codigo)
);

ALTER TABLE gerenciador.tb_item_planilha_fornecedor ADD COLUMN plf_codigo integer, 
ADD CONSTRAINT fk_tb_item_planilha_fornecedor_tb_planilha_fornecedor FOREIGN KEY (plf_codigo)
REFERENCES gerenciador.tb_planilha_fornecedor (plf_codigo) MATCH SIMPLE 
ON UPDATE NO ACTION 
ON DELETE CASCADE

ALTER TABLE gerenciador.tb_planilha_fornecedor ADD COLUMN plf_data_inclusao Date, 


CREATE TABLE IF NOT EXISTS gerenciador.tb_colaborador
(
    col_codigo serial,
    col_nome character varying,
    col_data_admissão date,
	col_funcao character varying,
    CONSTRAINT pk_colaborador PRIMARY KEY (col_codigo)
);

CREATE TABLE IF NOT EXISTS gerenciador.tb_tabela_basica
(
    tab_codigo integer NOT NULL,
    tab_descricao character varying,
    tab_tipo integer,
    tab_ordem integer,
    CONSTRAINT pk_tipo_basica PRIMARY KEY (tab_codigo)
)

CREATE TABLE IF NOT EXISTS gerenciador.tb_equipamento
(
    equ_codigo serial,
    equ_tacto character varying, 
    equ_tipo_frequencia character varying, 
    equ_modelo character varying, 
    equ_numero_serie character varying, 
    equ_dataVencimento date, 
    equ_torque character varying, 
    equ_descricao_operacao character varying, 
    equ_data_calibragem date, 
    equ_dados_utima_calibragem character varying, 
    equ_media character varying, 
    equ_dispersao character varying, 
    equ_observacao character varying, 
    equ_qtd_dias_vencimento integer, 
    col_codigo integer, 
    tab_codigo integer, 
    CONSTRAINT pk_equipamento PRIMARY KEY (equ_codigo),
    
    CONSTRAINT fk_tb_equipamento_tb_colaborador FOREIGN KEY (col_codigo)
    REFERENCES gerenciador.tb_colaborador (col_codigo) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION,

    CONSTRAINT fk_tb_equipamento_tb_tabela_basica FOREIGN KEY (tab_codigo)
    REFERENCES gerenciador.tb_tabela_basica (tab_codigo) MATCH SIMPLE
    ON UPDATE NO ACTION
    ON DELETE NO ACTION

);

CREATE TABLE IF NOT EXISTS gerenciador.tb_veiculo
(
    vei_codigo serial,
    vei_nome character varying, 
    vei_data_inclusao date,
    CONSTRAINT pk_veiculo PRIMARY KEY (vei_codigo)
);

CREATE TABLE IF NOT EXISTS gerenciador.tb_setor
(
    set_codigo serial,
    set_nome character varying, 
    set_data_inclusao date,
    CONSTRAINT pk_setor PRIMARY KEY (set_codigo)
);




