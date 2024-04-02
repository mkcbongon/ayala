document.addEventListener("DOMContentLoaded", function() {
    var header = document.getElementById("main-header");
    var subcontents = document.querySelectorAll('.subcontents');
    var lastScrollTop = 0;
    var scrollThreshold = 800;

    header.addEventListener("mouseover", function(e) {
        var target = e.target;
        var subcontentId = target.getAttribute("data-subcontent");

        if (subcontentId) {
            header.style.backgroundColor = "rgba(0, 0, 0, 0.8)";
            showSubcontent(subcontentId);
        }
    });

    header.addEventListener("mouseout", function(e) {
        var relatedTarget = e.relatedTarget;

        if (!isDescendant(header, relatedTarget) && !isDescendant(subcontents, relatedTarget)) {
            header.style.backgroundColor = "";
            hideAllSubcontents();
        }
    });

    function showSubcontent(subcontentId) {
        hideAllSubcontents();
        var subcontent = document.getElementById(subcontentId);
        if (subcontent) {
            subcontent.style.display = "block";
        }
    }

    function hideAllSubcontents() {
        subcontents.forEach(function(subcontent) {
            subcontent.style.display = "none";
        });
    }

    function isDescendant(parent, child) {
        var node = child;
        while (node != null) {
            if (node === parent) {
                return true;
            }
            node = node.parentNode;
        }
        return false;
    }

    let currentSlide = 0;

    function changeSlide(n) {
        showSlide(currentSlide += n);
    }

    function showSlide(n) {
        const gallery = document.querySelector('.gallery');
        const slides = gallery.children;

        if (n >= slides.length) {
            currentSlide = 0;
        } else if (n < 0) {
            currentSlide = slides.length - 1;
        }

        gallery.style.transform = `translateX(${-currentSlide * 100}%)`;
    }

    window.addEventListener("scroll", function() {
        var currentScrollTop = window.scrollY;

        if (currentScrollTop > lastScrollTop && currentScrollTop > scrollThreshold) {
            // Scrolling down and scroll position surpasses the threshold
            header.style.top = "-110px";
        } else {
            // Scrolling up or at the top of the page
            header.style.top = "0";
            header.classList.add("scrolled-up");
        }

        lastScrollTop = currentScrollTop;
    });
    

});
