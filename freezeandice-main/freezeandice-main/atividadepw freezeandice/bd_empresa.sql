Create database empresa;
use empresa;

create table tb_funcionario (
id_funcionario int auto_increment primary key,
nm_funcionario varchar(45),
sobrenome varchar(45),
dt_nascimento date,
cargo varchar(45),
salario decimal,
dt_admissao date,
senha text);

create table tb_cliente (
id_cliente int auto_increment primary key,
nm_cliente varchar(45),
sobrenome varchar(45),
email varchar (45),
telefone varchar (45),
endereco varchar (45));

create table tb_fornecedor (
id_fornecedor int auto_increment  primary key,
nm_fornecedor varchar(45),
contato varchar (45),
email varchar (45),
telefone varchar (45),
endereco varchar (45));

create table tb_categoria (
id_categoria int auto_increment primary key,
nm_categoria varchar(45),
nm_descricao varchar(45));

create table tb_lançamentos(
id_lancamento int auto_increment primary key,
nm_descricao varchar(45),
nr_valor decimal(10,2),
nm_tipo varchar(45),
dt_lancamento date,
fk_id_categoria int,
fk_id_funcionario int,
foreign key (fk_id_funcionario) references tb_funcionario(id_fornecedor),
foreign key (fk_id_categoria) references tb_categoria(id_categoria));
