# Landing Delivery WhatsApp

Landing page de vendas para divulgar um sistema de delivery automatizado com WhatsApp.

## Objetivo

Converter donos de restaurantes, lanchonetes, pizzarias, hamburguerias, acaiterias,
conveniencias e pequenos negocios em leads pelo WhatsApp.

## Nivel do projeto

Nivel 1 - Site simples em PHP, HTML, CSS e JavaScript para hospedagem compartilhada/cPanel.

## Tecnologias

- PHP 8+
- HTML5
- CSS3
- JavaScript simples

## Estrutura

```text
+-- assets/
|   +-- css/
|   |   +-- style.css
|   +-- js/
|       +-- main.js
+-- includes/
|   +-- footer.php
|   +-- header.php
+-- deploy.md
+-- index.php
+-- qa-report.md
+-- README.md
```

## Desenvolvimento local

Com PHP instalado:

```bash
php -S localhost:8000
```

Depois acesse:

```text
http://localhost:8000
```

## Personalizacao

Edite os dados principais em `index.php`:

- Nome do produto
- Telefone
- E-mail
- Numero de WhatsApp
- Mensagem inicial do WhatsApp

## Deploy em cPanel

Veja o passo a passo completo em `deploy.md`.

Resumo:

1. Envie os arquivos para `public_html` ou para a pasta do subdominio.
2. Confirme se `index.php` ficou na raiz correta.
3. Confira se os caminhos `assets/css/style.css` e `assets/js/main.js` carregam.
4. Teste os botoes de WhatsApp no celular.
5. Ative SSL pelo cPanel, se necessario.

## QA

O relatorio de QA esta em `qa-report.md`.

Resultado atual: APROVADO.

## Observacoes

- Este projeto nao usa Node.js.
- Este projeto nao usa Next.js.
- Este projeto nao usa banco de dados.
- Este projeto nao precisa de build.
- O WhatsApp configurado atualmente e `5544998212815`.
