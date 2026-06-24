<?php
$site = [
    'name' => 'Delivery Automatizado no WhatsApp',
    'phone' => '(44) 99821-2815',
    'email' => 'contato@codeacode.com.br',
    'whatsapp' => '5544998212815',
];

$whatsappMessage = rawurlencode('Olá! Quero uma demonstração do sistema de delivery automatizado com WhatsApp.');
$whatsappUrl = 'https://wa.me/' . $site['whatsapp'] . '?text=' . $whatsappMessage;

$benefits = [
    [
        'title' => 'Pedidos mais organizados',
        'description' => 'A conversa fica mais clara para sua equipe entender o que o cliente quer pedir.',
    ],
    [
        'title' => 'Menos demora para responder',
        'description' => 'O atendimento inicial ajuda o cliente a avançar enquanto sua equipe cuida da operação.',
    ],
    [
        'title' => 'Menos clientes perdidos',
        'description' => 'Quando a resposta demora, o cliente compra em outro lugar. A página vende rapidez e controle.',
    ],
    [
        'title' => 'Mais profissionalismo',
        'description' => 'Seu delivery deixa de parecer improvisado e passa mais confiança pelo WhatsApp.',
    ],
    [
        'title' => 'Contato mais fácil',
        'description' => 'Os botões levam direto para uma conversa com mensagem pronta para pedir demonstração.',
    ],
    [
        'title' => 'Mais foco em venda',
        'description' => 'A landing explica o valor rápido e conduz o comerciante para falar com você.',
    ],
];

$audiences = [
    [
        'name' => 'Restaurantes e marmitarias',
        'description' => 'Para quem recebe muitos pedidos no horário de pico.',
    ],
    [
        'name' => 'Pizzarias e hamburguerias',
        'description' => 'Para negócios com alta demanda à noite e fins de semana.',
    ],
    [
        'name' => 'Lanchonetes e açaiterias',
        'description' => 'Para equipes pequenas que precisam responder mais rápido.',
    ],
    [
        'name' => 'Conveniências e mercados locais',
        'description' => 'Para vendas rápidas por WhatsApp sem perder controle.',
    ],
];

$painPoints = [
    'Pedidos importantes ficam perdidos no meio de várias conversas.',
    'O cliente espera demais e chama outro delivery.',
    'A equipe precisa perguntar as mesmas informações toda hora.',
    'O atendimento parece improvisado, mesmo quando o produto é bom.',
];

$steps = [
    [
        'title' => 'Cliente chama',
        'description' => 'O visitante toca no botão e entra em contato pelo WhatsApp com mensagem pronta.',
    ],
    [
        'title' => 'Atendimento começa',
        'description' => 'O fluxo inicial ajuda a organizar a conversa antes que o cliente desista.',
    ],
    [
        'title' => 'Pedido fica claro',
        'description' => 'Sua equipe recebe uma conversa mais objetiva para continuar o atendimento.',
    ],
];

$features = [
    [
        'title' => 'Entrada direta pelo WhatsApp',
        'description' => 'O cliente chega pelo canal que ele já usa, sem precisar aprender outro aplicativo.',
    ],
    [
        'title' => 'Mensagem inicial pronta',
        'description' => 'O contato começa com uma mensagem clara, reduzindo conversa perdida e pedido incompleto.',
    ],
    [
        'title' => 'Atendimento mais guiado',
        'description' => 'A comunicação fica mais objetiva para sua equipe entender o interesse do cliente.',
    ],
    [
        'title' => 'Foco em demonstração',
        'description' => 'A página conduz o comerciante para pedir uma demonstração pelo WhatsApp.',
    ],
    [
        'title' => 'Layout responsivo',
        'description' => 'A experiência foi pensada para celular, onde a maioria dos donos de negócio responde.',
    ],
    [
        'title' => 'Sem sistema pesado',
        'description' => 'Landing leve, sem banco de dados e pronta para hospedagem compartilhada.',
    ],
];

$comparisons = [
    [
        'before' => 'Cliente manda mensagem e espera resposta.',
        'after' => 'Cliente entra por um CTA claro e já inicia uma conversa direcionada.',
    ],
    [
        'before' => 'Pedidos se misturam com dúvidas, orçamento e conversa antiga.',
        'after' => 'O atendimento começa com contexto e fica mais fácil de continuar.',
    ],
    [
        'before' => 'O delivery parece improvisado no WhatsApp.',
        'after' => 'O negócio passa mais profissionalismo desde o primeiro contato.',
    ],
];

$faqs = [
    [
        'question' => 'Preciso trocar meu WhatsApp atual?',
        'answer' => 'Não. A ideia é aproveitar o WhatsApp que o comerciante já usa e organizar melhor o caminho até o atendimento.',
    ],
    [
        'question' => 'Serve para negócio pequeno?',
        'answer' => 'Sim. A comunicação foi pensada para equipes pequenas que atendem pelo celular e precisam responder rápido.',
    ],
    [
        'question' => 'O cliente precisa instalar algum aplicativo?',
        'answer' => 'Não. O contato principal continua sendo pelo WhatsApp, com chamada direta pela página.',
    ],
    [
        'question' => 'Funciona para pizzaria, lanche e açaí?',
        'answer' => 'Sim. A proposta atende negócios de delivery que recebem pedidos e dúvidas pelo WhatsApp.',
    ],
    [
        'question' => 'Essa landing usa banco de dados?',
        'answer' => 'Não. Esta versão é uma página simples em PHP, HTML, CSS e JavaScript, pronta para cPanel.',
    ],
];

$pageTitle = $site['name'] . ' - Venda mais pelo WhatsApp';
include __DIR__ . '/includes/header.php';
?>

<main>
    <section class="hero" id="inicio">
        <div class="container hero__grid">
            <div class="hero__content">
                <p class="eyebrow">Sistema para delivery com WhatsApp</p>
                <h1>Transforme seu WhatsApp em uma central de pedidos para delivery.</h1>
                <p class="hero__text">
                    Receba clientes com mais rapidez, organize conversas e reduza pedidos perdidos com uma solução simples
                    para restaurantes, lanchonetes, pizzarias e pequenos negócios.
                </p>
                <div class="hero__proof" aria-label="Destaques do sistema">
                    <span>Sem trocar de WhatsApp</span>
                    <span>Feito para delivery</span>
                    <span>Demonstração rápida</span>
                </div>
                <div class="hero__actions">
                    <a class="button button--primary" href="<?php echo htmlspecialchars($whatsappUrl); ?>" target="_blank" rel="noopener">
                        Pedir demonstração no WhatsApp
                    </a>
                    <a class="button button--secondary" href="#como-funciona">Ver como funciona</a>
                </div>
                <p class="hero__note">Atendimento direto pelo WhatsApp: <?php echo htmlspecialchars($site['phone']); ?></p>
            </div>
            <div class="product-preview" aria-label="Prévia de atendimento automatizado no WhatsApp">
                <div class="product-preview__bar">
                    <strong>Pedido via WhatsApp</strong>
                    <span>online</span>
                </div>
                <div class="chat">
                    <p class="chat__message chat__message--client">Olá, quero fazer um pedido.</p>
                    <p class="chat__message chat__message--system">Perfeito. Vou te ajudar a organizar seu pedido.</p>
                    <div class="order-summary">
                        <strong>Resumo do atendimento</strong>
                        <span>Cliente identificado</span>
                        <span>Pedido iniciado</span>
                        <span>Equipe com conversa mais clara</span>
                    </div>
                    <p class="chat__tag">Mais organização antes da venda esfriar</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--problem" id="problema">
        <div class="container split">
            <div>
                <p class="eyebrow">O problema</p>
                <h2>Atendimento manual no WhatsApp faz você perder pedidos.</h2>
            </div>
            <div>
                <p>
                    Quando muitas mensagens chegam ao mesmo tempo, pedidos se misturam, clientes esperam demais e algumas
                    vendas desaparecem no meio da conversa.
                </p>
                <ul class="pain-list">
                    <?php foreach ($painPoints as $pain): ?>
                        <li><?php echo htmlspecialchars($pain); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </section>

    <section class="section" id="solucao">
        <div class="container solution-grid">
            <div>
                <p class="eyebrow">A solução</p>
                <h2>Um sistema simples para organizar seu delivery pelo WhatsApp.</h2>
                <p>
                    Seu cliente chama, recebe uma condução inicial mais rápida e sua equipe continua a conversa com mais
                    clareza. A venda não depende de sorte nem de lembrar cada mensagem manualmente.
                </p>
            </div>
            <div class="solution-panel">
                <strong>O que muda no atendimento</strong>
                <span>Menos mensagens soltas</span>
                <span>Mais clareza para fechar pedidos</span>
                <span>Mais confiança para o cliente comprar</span>
            </div>
        </div>
    </section>

    <section class="section section--muted" id="beneficios">
        <div class="container">
            <div class="section__header">
                <p class="eyebrow">Benefícios</p>
                <h2>Mais controle no atendimento, mais chances de vender.</h2>
            </div>
            <div class="cards cards--three">
                <?php foreach ($benefits as $benefit): ?>
                    <article class="card">
                        <h3><?php echo htmlspecialchars($benefit['title']); ?></h3>
                        <p><?php echo htmlspecialchars($benefit['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section" id="como-funciona">
        <div class="container">
            <div class="section__header">
                <p class="eyebrow">Como funciona</p>
                <h2>Em 3 passos simples.</h2>
                <p>O objetivo é tirar o cliente da dúvida e levar a conversa para uma demonstração rápida no WhatsApp.</p>
            </div>
            <div class="steps">
                <?php foreach ($steps as $index => $step): ?>
                    <article class="step">
                        <strong><?php echo $index + 1; ?></strong>
                        <h3><?php echo htmlspecialchars($step['title']); ?></h3>
                        <p><?php echo htmlspecialchars($step['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--muted" id="para-quem">
        <div class="container">
            <div class="section__header">
                <p class="eyebrow">Para quem é</p>
                <h2>Feito para negócios que vendem por delivery.</h2>
                <p>Especialmente útil para quem já atende pelo WhatsApp, mas sente que o volume de mensagens atrapalha a venda.</p>
            </div>
            <div class="audience-grid">
                <?php foreach ($audiences as $audience): ?>
                    <article class="audience-card">
                        <h3><?php echo htmlspecialchars($audience['name']); ?></h3>
                        <p><?php echo htmlspecialchars($audience['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section" id="funcionalidades">
        <div class="container">
            <div class="section__header">
                <p class="eyebrow">Funcionalidades</p>
                <h2>O essencial para transformar visita em conversa.</h2>
                <p>Sem complicar a tecnologia: a página apresenta o produto, responde dúvidas e leva o comerciante ao WhatsApp.</p>
            </div>
            <div class="cards cards--three">
                <?php foreach ($features as $feature): ?>
                    <article class="card">
                        <h3><?php echo htmlspecialchars($feature['title']); ?></h3>
                        <p><?php echo htmlspecialchars($feature['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--contrast" id="comparativo">
        <div class="container">
            <div class="section__header">
                <p class="eyebrow">Antes e depois</p>
                <h2>O WhatsApp deixa de ser bagunça e vira canal de venda.</h2>
            </div>
            <div class="comparison-list">
                <?php foreach ($comparisons as $comparison): ?>
                    <article class="comparison-row">
                        <div>
                            <span>Antes</span>
                            <p><?php echo htmlspecialchars($comparison['before']); ?></p>
                        </div>
                        <div>
                            <span>Depois</span>
                            <p><?php echo htmlspecialchars($comparison['after']); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section" id="demonstracao">
        <div class="container cta cta-box">
            <div>
                <p class="eyebrow">Demonstração</p>
                <h2>Quer ver como isso funcionaria no seu delivery?</h2>
                <p>Fale comigo no WhatsApp. Em poucos minutos eu te mostro como a página pode ajudar seu delivery a atender melhor e vender mais.</p>
            </div>
            <div class="cta__action">
                <a class="button button--primary" href="<?php echo htmlspecialchars($whatsappUrl); ?>" target="_blank" rel="noopener">
                    Pedir demonstração agora
                </a>
                <span>Resposta pelo WhatsApp: <?php echo htmlspecialchars($site['phone']); ?></span>
            </div>
        </div>
    </section>

    <section class="section section--muted" id="faq">
        <div class="container">
            <div class="section__header">
                <p class="eyebrow">Perguntas frequentes</p>
                <h2>Dúvidas comuns antes da demonstração.</h2>
            </div>
            <div class="faq-list">
                <?php foreach ($faqs as $faq): ?>
                    <details>
                        <summary><?php echo htmlspecialchars($faq['question']); ?></summary>
                        <p><?php echo htmlspecialchars($faq['answer']); ?></p>
                    </details>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
