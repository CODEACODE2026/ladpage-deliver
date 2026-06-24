    <footer class="site-footer" id="contato">
        <div class="container site-footer__inner">
            <div>
                <strong><?php echo htmlspecialchars($site['name'] ?? 'Delivery WhatsApp'); ?></strong>
                <p>Landing page para conversão de clientes pelo WhatsApp.</p>
            </div>
            <div class="site-footer__links">
                <a href="tel:<?php echo preg_replace('/\D+/', '', $site['phone'] ?? ''); ?>">
                    <?php echo htmlspecialchars($site['phone'] ?? ''); ?>
                </a>
                <a href="mailto:<?php echo htmlspecialchars($site['email'] ?? ''); ?>">
                    <?php echo htmlspecialchars($site['email'] ?? ''); ?>
                </a>
                <a href="<?php echo htmlspecialchars($whatsappUrl ?? '#'); ?>" target="_blank" rel="noopener">WhatsApp</a>
            </div>
        </div>
    </footer>
    <script src="assets/js/main.js"></script>
</body>
</html>
