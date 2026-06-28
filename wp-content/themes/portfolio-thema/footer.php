<footer class="footer u-wrapper">
    <div class="footer__inner">

        <nav class="footer__nav">
            <ul class="footer__navlist">
                <li class="footer__navitem">
                    <a href="<?php echo esc_url(home_url('/#service')); ?>">Service</a>
                </li>
                <li class="footer__navitem">
                    <a href="<?php echo esc_url(home_url('/#works')); ?>">Works</a>
                </li>
                <li class="footer__navitem">
                    <a href="<?php echo esc_url(home_url('/#about')); ?>">About</a>
                </li>
                <li class="footer__navitem">
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>">Contact</a>
                </li>
            </ul>
        </nav>

        <p class="p-footer__copyright">
            &copy; <span id="year"></span> k.h_Portfolio All rights reserved.
        </p>
    </div>
</footer>

<script>
    document.getElementById('year').textContent = new Date().getFullYear();
</script>
<?php wp_footer(); ?>
</body>

</html>