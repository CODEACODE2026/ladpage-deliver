<?php
$site = [
    'name' => 'Delivery Automatizado no WhatsApp',
    'phone' => '(44) 99821-2815',
    'email' => 'contato@codeacode.com.br',
    'whatsapp' => '5544998212815',
];

$whatsappMessage = rawurlencode('Olá! Quero ver como organizar os pedidos do meu delivery pelo WhatsApp.');
$whatsappUrl = 'https://wa.me/' . $site['whatsapp'] . '?text=' . $whatsappMessage;

$benefits = [
    [
        'title' => 'Venda antes da fila esfriar',
        'description' => 'O cliente chega com intenção clara e sua equipe ganha tempo para continuar o pedido no WhatsApp.',
    ],
    [
        'title' => 'Menos retrabalho no atendimento',
        'description' => 'A conversa começa mais direcionada, reduzindo perguntas repetidas em horário de pico.',
    ],
    [
        'title' => 'Menos pedido perdido',
        'description' => 'Quando o cliente demora para ser atendido, ele chama outro delivery. A página encurta esse caminho.',
    ],
    [
        'title' => 'Mais confiança desde o primeiro clique',
        'description' => 'O delivery deixa de parecer improvisado e passa uma experiência mais profissional.',
    ],
    [
        'title' => 'Contato sem fricção',
        'description' => 'Os CTAs levam direto para o WhatsApp com mensagem pronta para pedir demonstração.',
    ],
    [
        'title' => 'Argumento de venda mais claro',
        'description' => 'A página mostra dor, solução e próximos passos sem exigir que o comerciante adivinhe o valor.',
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
    'No almoço ou à noite, várias mensagens chegam ao mesmo tempo e a equipe perde contexto.',
    'O cliente pede cardápio, forma de pagamento e taxa de entrega em conversas soltas.',
    'A demora para responder faz o cliente chamar outro delivery antes de fechar o pedido.',
    'O atendimento parece improvisado mesmo quando a comida, a entrega e a equipe são bons.',
];

$steps = [
    [
        'title' => 'Cliente chega com intenção',
        'description' => 'O comerciante toca no CTA e inicia uma conversa objetiva para ver a demonstração.',
    ],
    [
        'title' => 'A dor fica clara',
        'description' => 'A página mostra o custo de pedidos perdidos, demora e atendimento sem padrão.',
    ],
    [
        'title' => 'A solução parece simples de testar',
        'description' => 'O visitante entende que pode melhorar o WhatsApp atual sem trocar de canal ou instalar algo pesado.',
    ],
];

$features = [
    [
        'title' => 'Entrada pelo canal que o cliente já usa',
        'description' => 'O atendimento continua no WhatsApp, sem exigir aplicativo novo nem mudança brusca na rotina.',
    ],
    [
        'title' => 'Mensagem com contexto',
        'description' => 'A conversa começa com intenção definida, facilitando a resposta de quem está atendendo.',
    ],
    [
        'title' => 'Roteiro comercial mais claro',
        'description' => 'A página conduz o dono do delivery pela dor, pelo ganho e pelo próximo passo.',
    ],
    [
        'title' => 'CTA para demonstração',
        'description' => 'A ação principal é direta: chamar no WhatsApp para ver como funcionaria no negócio.',
    ],
    [
        'title' => 'Experiência pensada para celular',
        'description' => 'A maioria dos donos de delivery responde pelo telefone; a página precisa vender bem no mobile.',
    ],
    [
        'title' => 'Página leve e fácil de publicar',
        'description' => 'Sem banco de dados, sem build e pronta para hospedagem compartilhada/cPanel.',
    ],
];

$comparisons = [
    [
        'before' => 'O cliente manda mensagem solta e espera alguém entender o pedido.',
        'after' => 'O contato começa com intenção clara e direciona a conversa para a próxima ação.',
    ],
    [
        'before' => 'Pedidos, dúvidas e orçamentos se misturam no mesmo WhatsApp.',
        'after' => 'A página separa a proposta, reduz objeções e leva o interessado para uma demonstração.',
    ],
    [
        'before' => 'O delivery parece depender de sorte para responder rápido.',
        'after' => 'O negócio transmite processo, controle e confiança antes da conversa começar.',
    ],
];

$faqs = [
    [
        'question' => 'Isso substitui minha equipe de atendimento?',
        'answer' => 'Não. A proposta é organizar a entrada da conversa para sua equipe responder com mais contexto e menos retrabalho.',
    ],
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
        'question' => 'Preciso mudar meu cardápio ou sistema atual?',
        'answer' => 'Não para começar a demonstração. O primeiro passo é entender seu fluxo atual e mostrar onde o WhatsApp pode ficar mais organizado.',
    ],
    [
        'question' => 'Essa landing usa banco de dados?',
        'answer' => 'Não. Esta versão é uma página simples em PHP, HTML, CSS e JavaScript, pronta para cPanel.',
    ],
];

$trustSignals = [
    [
        'title' => 'Pensado para horário de pico',
        'description' => 'A comunicação fala com quem precisa vender enquanto a cozinha, o balcão e a entrega estão pressionados.',
    ],
    [
        'title' => 'Sem trocar o canal principal',
        'description' => 'O WhatsApp continua sendo o ponto de contato, reduzindo resistência para testar a solução.',
    ],
    [
        'title' => 'Demonstração antes de decidir',
        'description' => 'O comerciante pode ver o fluxo aplicado ao negócio antes de assumir qualquer compromisso.',
    ],
];

$pageTitle = $site['name'] . ' - Venda mais pelo WhatsApp';
include __DIR__ . '/includes/header.php';
?>

<main>
    <section class="hero" id="inicio">
        <div class="container hero__grid">
            <div class="hero__content">
                <p class="eyebrow">Para deliveries que vendem pelo WhatsApp</p>
                <h1>Pare de perder pedidos quando o WhatsApp fica cheio no horário de pico.</h1>
                <p class="hero__text">
                    Organize a entrada do atendimento, reduza conversa perdida e mostre ao cliente que seu delivery tem
                    processo, rapidez e confiança desde o primeiro contato.
                </p>
                <div class="hero__proof" aria-label="Destaques do sistema">
                    <span>Feito para pico de pedidos</span>
                    <span>Sem trocar de WhatsApp</span>
                    <span>Demonstração antes de decidir</span>
                </div>
                <div class="hero__actions">
                    <a class="button button--primary" href="<?php echo htmlspecialchars($whatsappUrl); ?>" target="_blank" rel="noopener">
                        Ver demonstração no WhatsApp
                    </a>
                    <a class="button button--secondary" href="#problema">Ver o problema que resolve</a>
                </div>
                <p class="hero__note">Atendimento direto pelo WhatsApp: <?php echo htmlspecialchars($site['phone']); ?></p>
            </div>
            <div class="product-preview" aria-label="Prévia de atendimento automatizado no WhatsApp">
                <div class="product-preview__bar">
                    <strong>Pedido via WhatsApp</strong>
                    <span>online</span>
                </div>
                <div class="chat">
                    <p class="chat__message chat__message--client">Boa noite, vocês entregam no meu bairro?</p>
                    <p class="chat__message chat__message--system">Sim. Vou te ajudar a seguir com o pedido sem perder tempo.</p>
                    <div class="order-summary">
                        <strong>Conversa mais pronta para venda</strong>
                        <span>Interesse identificado</span>
                        <span>Dúvida principal respondida</span>
                        <span>Equipe entra com mais contexto</span>
                    </div>
                    <p class="chat__tag">Menos espera antes da fome virar compra em outro lugar</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--problem" id="problema">
        <div class="container split">
            <div>
                <p class="eyebrow">O problema</p>
                <h2>Atendimento manual no WhatsApp vira gargalo justamente quando mais deveria vender.</h2>
            </div>
            <div>
                <p>
                    O problema não é vender pelo WhatsApp. O problema é depender de resposta manual, memória da equipe
                    e conversas soltas no momento em que o cliente está com pressa para pedir.
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
                <h2>Uma entrada mais profissional para o mesmo WhatsApp que seu delivery já usa.</h2>
                <p>
                    A página posiciona a solução, responde objeções e leva o dono do delivery para uma conversa de
                    demonstração. O foco é mostrar como o atendimento pode ficar mais claro sem criar uma operação pesada.
                </p>
            </div>
            <div class="solution-panel">
                <strong>O que muda na percepção</strong>
                <span>De atendimento improvisado para processo claro</span>
                <span>De resposta demorada para conversa direcionada</span>
                <span>De dúvida solta para demonstração objetiva</span>
            </div>
        </div>
    </section>

    <section class="section section--muted" id="confianca">
        <div class="container">
            <div class="section__header">
                <p class="eyebrow">Por que confiar</p>
                <h2>Não é só uma página bonita. É uma ponte para vender melhor no WhatsApp.</h2>
                <p>O argumento da landing precisa mostrar que a solução entende a rotina real de quem vive de delivery.</p>
            </div>
            <div class="cards cards--three">
                <?php foreach ($trustSignals as $signal): ?>
                    <article class="card">
                        <h3><?php echo htmlspecialchars($signal['title']); ?></h3>
                        <p><?php echo htmlspecialchars($signal['description']); ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section section--muted" id="beneficios">
        <div class="container">
            <div class="section__header">
                <p class="eyebrow">Benefícios</p>
                <h2>Benefícios que o dono do delivery percebe rápido.</h2>
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
                <h2>Da dor do WhatsApp cheio até a demonstração.</h2>
                <p>A página não tenta explicar tudo. Ela conduz o visitante pelo problema, pela solução e pelo próximo passo.</p>
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
                <h2>Feito para negócios que perdem venda quando a conversa atrasa.</h2>
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
                <h2>O essencial para transformar curiosidade em pedido de demonstração.</h2>
                <p>Sem complicar a tecnologia: a página apresenta o valor, reduz objeções e leva o comerciante ao WhatsApp.</p>
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
                <h2>Quer ver como seu delivery poderia atender com mais clareza no WhatsApp?</h2>
                <p>Fale comigo no WhatsApp. Em poucos minutos eu te mostro como reduzir conversa perdida e conduzir melhor os pedidos.</p>
            </div>
            <div class="cta__action">
                <a class="button button--primary" href="<?php echo htmlspecialchars($whatsappUrl); ?>" target="_blank" rel="noopener">
                    Quero ver a demonstração
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
