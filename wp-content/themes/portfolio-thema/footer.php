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
            <div class="footer__navitem">
                        <a class="footer__sns_icon" href="https://www.instagram.com/hashiba_web/" target="_blank"
                            rel="noopener noreferrer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">

                                <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor"
                                    stroke-width="2" />

                                <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2" />

                                <circle cx="17.5" cy="6.5" r="1.2" fill="currentColor" />
                            </svg>
                            <span class="sns_text">Instagram</span>
                        </a>
                    </div>
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