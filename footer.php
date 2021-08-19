    </main>
    <footer role="footer">
        <div class="copyright"><?php the_field('copyright', 'option');?></div>
        <div class="footer-menu">
            <?php 
                wp_nav_menu( 
                    array( 
                        'theme_location' => 'footer-menu', 
                    ) 
                ); 
            ?>
        </div>
            </footer>
            <button onclick="topFunction()" id="scrollUp" title="Go to top"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FFF"><path d="M20,9l-8-8L4,9h5v12c0,0.552,0.448,1,1,1h4c0.552,0,1-0.448,1-1V9H20L20,9z" fill="#FFF"/></svg>
</button>

    <?php wp_footer();?>
    </body>
</html>