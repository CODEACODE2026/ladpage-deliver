# QA Report - landing-delivery-whatsapp

Data: 2026-06-23

## Resultado

APROVADO

Nota geral: 9/10

## Escopo revisado

- Estrutura do projeto.
- Sintaxe PHP.
- Carregamento local.
- Links de WhatsApp, telefone e e-mail.
- Responsividade por CSS.
- Segurança básica.
- Dependências e compatibilidade com hospedagem compartilhada.
- Preparação para deploy em cPanel.

## Comandos executados

```bash
find . -name '*.php' -print -exec php -l {} \;
curl -s -o /tmp/landing-delivery-whatsapp.html -w 'http_code=%{http_code}\nsize=%{size_download}\ntime_total=%{time_total}\n' http://127.0.0.1:8085
rg -n "password|senha|secret|token|api[_-]?key|PRIVATE|BEGIN RSA|TODO|FIXME" . --glob '!/.git/**'
find . -maxdepth 2 \( -name 'package.json' -o -name 'node_modules' -o -name 'composer.json' -o -name '.env' -o -name '*.sql' \) -print
rg -n "clamp\(|font-size: .*vw|letter-spacing|overflow-wrap|@media|focus-visible" assets/css/style.css
```

## Pontos aprovados

- PHP sem erros de sintaxe em `index.php`, `includes/header.php` e `includes/footer.php`.
- Página local respondeu HTTP 200.
- Projeto não usa Node.js, Next.js, banco de dados, Composer ou dependências externas.
- Links de WhatsApp usam o número correto: `5544998212815`.
- Link de telefone usa `tel:44998212815`.
- CSS possui breakpoints para desktop, tablet e mobile.
- CSS possui `overflow-wrap` para reduzir risco de quebra visual em textos longos.
- CSS possui foco visual com `focus-visible` para acessibilidade básica.
- Não foram encontrados segredos, tokens, senhas, chaves privadas, TODO ou FIXME.
- Estrutura é compatível com hospedagem compartilhada/cPanel.

## Problemas críticos

Nenhum problema crítico encontrado.

## Melhorias recomendadas

- Conferir visualmente em navegador real antes do deploy final, porque o ambiente atual não possui Chromium/Chrome headless para screenshot.
- Confirmar se o e-mail `contato@codeacode.com.br` é o contato final do projeto.
- Se houver marca oficial do produto, adicionar nome, logo ou imagem real do sistema em uma etapa futura.
- Antes de publicar, testar o link de WhatsApp diretamente em um celular.

## Risco residual

Baixo.

O principal risco restante é visual: sem navegador headless instalado, a revisão mobile foi feita por inspeção de CSS, estrutura HTML e carregamento local, não por screenshot automatizado.

## Aprovação

APROVADO para preparação de deploy e versionamento.
