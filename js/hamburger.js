const hamburgerMenu = document.getElementById("hamburger-menu")
const menu = document.getElementById("menu")
const header = document.getElementById("header")

hamburgerMenu.addEventListener("click", function () {
	menu.classList.toggle("menu-open")
	hamburgerMenu.classList.toggle("menu-open")
	header.classList.toggle("menu-open")
})

// Add a window resize listener
window.addEventListener("resize", function () {
	if (window.innerWidth > 1200) {
		menu.classList.remove("menu-open")
		hamburgerMenu.classList.remove("menu-open")
		header.classList.remove("menu-open")
	}
})
