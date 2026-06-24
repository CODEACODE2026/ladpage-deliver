# Deploy - landing-delivery-whatsapp

## Ambiente

Projeto Nivel 1 para hospedagem compartilhada/cPanel.

Requisitos:

- PHP 8+ habilitado.
- Acesso ao Gerenciador de Arquivos do cPanel ou FTP.
- Dominio ou subdominio apontando para a hospedagem.
- SSL ativo.

## Arquivos para publicar

Enviar para `public_html` ou para a pasta do subdominio:

```text
assets/
includes/
index.php
README.md
qa-report.md
deploy.md
```

Nao e necessario enviar:

```text
.git/
```

## Passo a passo no cPanel

1. Acesse o cPanel da hospedagem.
2. Abra o Gerenciador de Arquivos.
3. Entre em `public_html` ou na pasta do subdominio.
4. Envie os arquivos do projeto.
5. Confirme se `index.php` esta na raiz da pasta publicada.
6. Confirme se `assets/css/style.css` abre pelo navegador.
7. Confirme se `assets/js/main.js` abre pelo navegador.
8. Acesse o dominio ou subdominio.
9. Teste os botoes de WhatsApp.
10. Teste a pagina em celular.

## Configuracoes importantes

Dados principais ficam em `index.php`:

- Nome do produto.
- Telefone.
- E-mail.
- Numero do WhatsApp.
- Mensagem inicial do WhatsApp.

WhatsApp atual:

```text
5544998212815
```

## Testes pos-deploy

Verificar:

- Pagina abre sem erro 404 ou 500.
- CSS esta carregando.
- JavaScript esta carregando.
- Menu mobile abre e fecha.
- Botao de WhatsApp abre conversa com o numero correto.
- Link de telefone esta correto.
- FAQ abre e fecha.
- SSL aparece como seguro no navegador.

## Rollback

Antes de substituir arquivos em producao:

1. Baixe uma copia da pasta atual do site.
2. Renomeie a pasta antiga como backup, se possivel.
3. Publique a nova versao.
4. Se houver erro, restaure os arquivos do backup.

## Observacoes

- Este projeto nao usa banco de dados.
- Este projeto nao usa Node.js.
- Este projeto nao usa Next.js.
- Este projeto nao precisa de build.
- O deploy e feito por upload simples dos arquivos.
