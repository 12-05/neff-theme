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
    </div>
    <?php wp_footer();?>
    </body>
</html>