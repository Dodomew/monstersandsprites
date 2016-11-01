</div>    

    <div class="footer-container">

        <div class="footer-content">
        
            <!--<p><?php the_author_meta( 'description', 1 ); ?> </p<p>test ik ben een discription. Ik ben Niels en ik vind programmeren leuk. Ik doe het al heel lang. En ooit word ik de beste programmeur ter wereld enzo.</p>-->
            <?php wp_get_archives('type=monthly'); ?>
            
        
        </div>

    </div>

    <script>
        
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
                document.getElementById("myDropdown").classList.toggle("show");
            }

            // Close the dropdown menu if the user clicks outside of it
            window.onclick = function(event) {
              if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
        
        </script>
        
    </body>
    
</html>