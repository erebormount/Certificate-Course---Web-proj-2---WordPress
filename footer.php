<footer>
        	<section>
                <div id="container">
                    <div class="widget">
                        <h3>Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, voluptatum facere culpa neque porro dicta saepe dolorum mollitia hic deleniti.</p>
                    </div>
                    <div class="widget">
                        <h3>Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, autem cupiditate amet incidunt voluptas beatae ipsa explicabo consectetur. Aspernatur, debitis?</p>
                    </div>
                    <div class="widget">
                        <h3>Title</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, enim, ratione nam dolor magni consequuntur porro id neque commodi quasi.</p>
                    </div>
                </div>
                <nav>
                    <?php wp_nav_menu(array('theme_location' => 'footer_menu', 'container' => false)); ?> <!--'container' => false doesn't create a div around the php script-->
                </nav>
                <div id="copyright">
                <span>Copyright Website &copy; <?php echo date("Y"); ?></span>
                </div>
            </section>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>