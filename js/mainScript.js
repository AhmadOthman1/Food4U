const header = document.querySelector("section");
const sectionOne = document.querySelector(".homeSection");

const sectionOneOptions = {
    rootMargin: "-200px 0px 0px 0px"
};

const sectionOneObserver = new IntersectionObserver(function(
        entries,
        sectionOneObserver
    ) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) {
                header.classList.add("navbarScrolled");
            } else {
                header.classList.remove("navbarScrolled");
            }
        });
    },
    sectionOneOptions);

sectionOneObserver.observe(sectionOne);
