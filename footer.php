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
            <button onclick="topFunction()" id="scrollUp" title="Go to top"><svg fill="#fff" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M 24.96875 13 C 24.449219 13.007813 23.953125 13.21875 23.585938 13.585938 L 3.585938 33.585938 C 3.0625 34.085938 2.851563 34.832031 3.035156 35.535156 C 3.21875 36.234375 3.765625 36.78125 4.464844 36.964844 C 5.167969 37.148438 5.914063 36.9375 6.414063 36.414063 L 25 17.828125 L 43.585938 36.414063 C 44.085938 36.9375 44.832031 37.148438 45.535156 36.964844 C 46.234375 36.78125 46.78125 36.234375 46.964844 35.535156 C 47.148438 34.832031 46.9375 34.085938 46.414063 33.585938 L 26.414063 13.585938 C 26.03125 13.203125 25.511719 12.992188 24.96875 13 Z"/></svg></svg>
</button>

    <?php wp_footer();?>
    </body>
</html>