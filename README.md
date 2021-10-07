# Desafio - Desenvolvedor Fullstack - Estágio Makers

## Passo a passo para executar a aplicação

## Requerimentos

MySQL, PHP e Apache instalados.

## Passos:

**1º**: Copiar/mover a pasta 'Desafio' para dentro da pasta 'htdocs' do XAMPP. No Linux, caso use o LAMPP, o caminho é /var/www/html/

**2º**: Criar a base de dados 'locadora_de_veiculos' com a tabela 'veiculo'. Segue o script em SQL:

```
CREATE DATABASE  IF NOT EXISTS `locadora_de_veiculos`;
USE `locadora_de_veiculos`;

DROP TABLE IF EXISTS `veiculo`;

CREATE TABLE `veiculo` (
  `idveiculo` int NOT NULL AUTO_INCREMENT,
  `modelo` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `status` varchar(45) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`idveiculo`)
) DEFAULT CHARSET=utf8mb4;

```

**3º**: No navegador, digitar localhost/Desafio ou 127.0.0.1/Desafio para executar a aplicação.
