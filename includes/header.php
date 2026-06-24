<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing page para vender sistema de delivery automatizado com WhatsApp.">
    <title><?php echo htmlspecialchars($pageTitle ?? 'Delivery Automatizado no WhatsApp'); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container site-header__inner">
            <a class="brand" href="#inicio"><?php echo htmlspecialchars($site['name'] ?? 'Delivery WhatsApp'); ?></a>
            <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-menu">Menu</button>
            <nav class="site-nav" id="site-menu" aria-label="Navegação principal">
                <a href="#problema">Problema</a>
                <a href="#solucao">Solução</a>
                <a href="#beneficios">Benefícios</a>
                <a href="#faq">FAQ</a>
                <a class="nav-cta" href="<?php echo htmlspecialchars($whatsappUrl ?? '#'); ?>" target="_blank" rel="noopener">WhatsApp</a>
            </nav>
        </div>
    </header>
