# Curso PHP Essencial - Projeto 1

Neste exemplo criamos um site pessoal com formulário de contato.

**USE PHP 7**

Vamos aprender:
 
 - Como validar campos do formulário no servidor
 - Traduzir textos do servidor (validações e erros)
 - Traduzir
 - Manipular erros
 - Preparar os dados de configuração para Deploy (publicação)
 - Enviar um email com SMTP
 - Testar a qualidade de código
 - Fazer redirecionamentos

Vale lembrar que este é apenas UM dos módulos do curso.

## Para ver o exemplo

Você pode fazer de duas formas:

Acessar meu site pessoal: [www.erikfigueiredo.com.br](http://www.erikfigueiredo.com.br)

Ou baixar este exemplo, para isso você irá precisar:

 - Clonar/Baixar este repositório
 - Acessar a raiz do projeto e instalar as dependências com o Composer (`php composer.phar install` ou `composer install`)
 - Renomear o arquivo .env-default para .env e editar os dados de envio de email conforme a seguir:

	SMTP_HOST="smtp.mailgun.org" // host de smtp
	SMTP_USERNAME="postmaster@sandbox095e6c5d9fd33b019a1d5cd3e73f86bd.mailgun.org" //usuário de smtp
	SMTP_PASSWORD="dcdded5c69bed8e4fc10660186cf31ab" //senha de smtp
	SMTP_PORT="587" //porta de smtp
	SMTP_RECIPIENT="mail@mail.com" //email de quem recebe a mensagem
	SMTP_SUBJECT="Contato do site" //título do email
	SMTP_SUCCESS_REDIRECT="confirmacao.html" //página de confirmação

Você não precisa editar todos os campos, pode editar apenas os dados de SMTP, eu aconselho criar uma conta no [MailGun](http://www.mailgun.com/) e usar os dados do sendbox que te fornecerem, é só alterar o usuário e senha do arquivo mencionado acima.

## Para alterar o template do email

Apenas edite o arquivo body.html, não esqueça que todos os `%s` se referem a variáveis que armazenam nome, email e descrição, você precisa manter nesta exata ordem ou então alterar o arquivo `send.php` para sua necessidade.

## Para acessar o curso

Cadastre-se [neste link](https://www.webdevbr.com.br/curso-php-essencial), é grátis!
