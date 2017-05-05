(function() {
    document.addEventListener("DOMContentLoaded", function(event) {
    var link = document.querySelector("a[href='#about']"),
        close = document.querySelector(".closebtn"),
        body = document.querySelector("body"),
        overlay = document.querySelector( '.overlay' );

    link.addEventListener("click", toggleModal);
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
  });

})();

