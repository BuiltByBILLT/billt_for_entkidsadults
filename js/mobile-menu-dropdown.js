document.querySelectorAll(".dropdown-toggle").forEach(button => {
	button.addEventListener("click", function () {
		this.classList.toggle("open")

		const subMenu = this.nextElementSibling // Get the sub-menu
		subMenu.classList.toggle("open")
	})
})

// Add a window resize listener
window.addEventListener("resize", function () {
	if (window.innerWidth > 1200) {
		// Remove the 'open' class from all dropdowns when the window is larger than 1200px
		document.querySelectorAll(".dropdown-toggle").forEach(button => {
			button.classList.remove("open")

			const subMenu = button.nextElementSibling // Get the sub-menu
			subMenu.classList.remove("open")
		})
	}
})
