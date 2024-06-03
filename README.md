# **Projeto Poupe Bem (Senac Minas)**

## 📖 Descrição do Projeto

Este projeto foi desenvolvido como parte da formação técnica no SENAC. 
Consiste em um site para apresentação de cursos na área de finanças, 
onde os usuários podem visualizar os cursos disponíveis, 
enviar dúvidas e fazer encomendas através de um formulário.

## ✨ Funcionalidades

- **Apresentação de Cursos**: Exibe cursos disponíveis na área de finanças.
- **Formulário de Contato**: Permite que os usuários enviem dúvidas e encomendas

## 🔧 Requisitos

- Conhecimento básico em HTML, CSS, PHP, XAMPP,GIT,GITHUB e MySQL.

## 📦 Instalação

Para instalar e configurar o ambiente de desenvolvimento, siga os passos abaixo:

1. Certifique-se de que você tem o instalado em seu sistema.
2. Clone o repositório:
    ```bash
    git clone https://github.com/usuario/nome-do-projeto.git
    ```
3. Copie os arquivos do projeto para a pasta `htdocs` do XAMPP. Por padrão, essa pasta está localizada em `C:\xampp\htdocs\` no Windows ou `/opt/lampp/htdocs/` no Linux.

## ⚙️ Configuração

1. Inicie o servidor Apache e MySQL através do painel de controle do XAMPP.
2. Crie o banco de dados conforme o arquivo SQL disponibilizado no repositório:
    - Acesse `http://localhost/phpmyadmin` no seu navegador.
    - Crie um novo banco de dados.

3. Atualize o arquivo de configuração do projeto com as credenciais do banco de dados. Geralmente, isso é feito no arquivo `config.php` ou similar:
    ```php
    <?php
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'nome_do_banco_de_dados');
    ?>
    ```

## 🚀 Uso

Instruções de uso e exemplos:

1. Acesse o projeto no navegador:
    ```bash
    http://localhost/nome-do-projeto
    ```
2. No site, você poderá:
    - Visualizar os cursos disponíveis na área de finanças.
    - Enviar dúvidas e fazer encomendas através do formulário de contato.

## 💻 Tecnologias Utilizadas

- **HTML**: Linguagem de marcação para estruturar o conteúdo da web.
- **CSS**: Linguagem de estilo para descrever a apresentação do HTML.
- **PHP**: Linguagem de script para desenvolvimento web no lado do servidor.
- **MySQL**: Sistema de gerenciamento de banco de dados relacional.
- **XAMPP**: Plataforma de desenvolvimento que inclui Apache, MySQL, PHP e Perl.


## 👨‍💻 Feito Por

- **RANIELLY FERREIRA** - 
