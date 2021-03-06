(function() {

    document.addEventListener("DOMContentLoaded", function(event) {
        const aboutLink = document.querySelector("a[href='#about']"),
            close = document.querySelector(".closebtn"),
            body = document.querySelector("body"),
            overlay = document.querySelector( '.overlay' ),
            searchLink = document.querySelector("a[href='#search']"),
            searchForm = document.querySelector("#search-form"),
            signupMenu = document.querySelector("#mc_embed_signup"),
            signupLink = document.querySelector("a[href='#subscribe']");

        aboutLink.addEventListener("click", toggleModal);
        close.addEventListener("click", toggleModal);


        function escapePressed(event) {
            console.log(event.key);
            if (event.key == 'Escape') {
                overlay.classList.remove("open");
                body.classList.remove("overflow-hidden");
                document.removeEventListener("keyup", escapePressed);
            }
        }     

        function toggleModal() {
            if (overlay.classList.contains("open")) {
                overlay.classList.remove("open");
                body.classList.remove("overflow-hidden");
                document.removeEventListener("keyup", escapePressed);
            } else {
                overlay.classList.add("open");
                body.classList.add("overflow-hidden");
                document.addEventListener("keyup", escapePressed);
            }
        }

        function collapseSection(element) {
          // get the height of the element's inner content, regardless of its actual size
          var sectionHeight = element.scrollHeight;
          
          // temporarily disable all css transitions
          var elementTransition = element.style.transition;
          element.style.transition = '';
          
          // on the next frame (as soon as the previous style change has taken effect),
          // explicitly set the element's height to its current pixel height, so we 
          // aren't transitioning out of 'auto'
          requestAnimationFrame(function() {
            element.style.height = sectionHeight + 'px';
            element.style.transition = elementTransition;
            
            // on the next frame (as soon as the previous style change has taken effect),
            // have the element transition to height: 0
            requestAnimationFrame(function() {
              element.style.height = 0 + 'px';
            });
          });
          
          // mark the section as "currently collapsed"
          element.setAttribute('data-collapsed', 'true');
        }

        function expandSection(element) {
          // get the height of the element's inner content, regardless of its actual size
          var sectionHeight = element.scrollHeight;
          
          // have the element transition to the height of its inner content
          element.style.height = sectionHeight + 'px';

          // when the next css transition finishes (which should be the one we just triggered)
          element.addEventListener('transitionend', function(e) {
            // remove this event listener so it only gets triggered once
            element.removeEventListener('transitionend', arguments.callee);
            
            // remove "height" from the element's inline styles, so it can return to its initial value
            element.style.height = null;
          });
          
          // mark the section as "currently not collapsed"
          element.setAttribute('data-collapsed', 'false');
        }

        searchLink.addEventListener('click', function(e) {
          var isCollapsed = searchForm.getAttribute('data-collapsed') === 'true';
            
          if(isCollapsed) {
            expandSection(searchForm)
            searchForm.setAttribute('data-collapsed', 'false')
          } else {
            collapseSection(searchForm)
          }
        });

        signupLink.addEventListener('click', function(e) {
          
          var isCollapsed = signupMenu.getAttribute('data-collapsed') === 'true';
            
          if(isCollapsed) {
            expandSection(signupMenu)
            signupMenu.setAttribute('data-collapsed', 'false')
          } else {
            collapseSection(signupMenu)
          }
        });

    });

    })();

