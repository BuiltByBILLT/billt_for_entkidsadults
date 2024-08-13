// Header Transparent when top, White on Scroll

document.addEventListener("scroll", function () {
	const header = document.querySelector("header")
	if (window.scrollY > 0) {
		header.classList.add("scrolled")
	} else {
		header.classList.remove("scrolled")
	}
})