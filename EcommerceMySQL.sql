create database Ecommerce;
use Ecommerce;

create table Usuario(
	Nome VARCHAR(20) NOT NULL,
    Sobrenome VARCHAR(50) NOT NULL,
    CPF VARCHAR(14) NOT NULL,
    Sexo VARCHAR(10) NOT NULL,
    DtNascimento DATE NOT NULL,
    CEP VARCHAR(9) NOT NULL,
	Rua VARCHAR(60) NOT NULL,
    Numero INT NOT NULL,
    Complemento VARCHAR(30),
    Cidade VARCHAR(35) NOT NULL,
    Estado CHAR(2) NOT NULL,
    EstadoCivil VARCHAR(10) NOT NULL,
    TelRes VARCHAR(14),
    Celular VARCHAR(15) NOT NULL,
    Email VARCHAR(60) NOT NULL PRIMARY KEY,
    Senha VARCHAR(50) NOT NULL
);

CREATE TABLE Produto(
	ID INT NOT NULL PRIMARY KEY,
    NomeProd VARCHAR(100) NOT NULL,
    Categoria VARCHAR(15) NOT NULL,
    Descricao VARCHAR(1000) NOT NULL,
    Preco DECIMAL(10,2) NOT NULL,
    Estoque INT NOT NULL,
    EmailUser VARCHAR(60) NOT NULL,
    FOREIGN KEY (EmailUser) REFERENCES Usuario(Email)
);

CREATE TABLE Carrinho(
	IDC INT NOT NULL PRIMARY KEY,
    IDProduto INT NOT NULL,
    Quantidade INT NOT NULL,
    emailU VARCHAR(60) NOT NULL,
    FOREIGN KEY (IDProduto) REFERENCES Produto(ID),
    FOREIGN KEY (emailU) REFERENCES Usuario(Email)
);

drop table Produto; 
select * from Usuario;
select * from Produto p inner join Usuario u on p.emailUser = u.Email where p.Categoria = "Processador";
select * from Carrinho c inner join Produto p on c.IDProduto = p.ID where p.EmailUser = "Jonathas@gmail.com";
SELECT * from Produto p where p.ID = 100;

Delete from Carrinho where ID = "0";

Drop database Ecommerce;