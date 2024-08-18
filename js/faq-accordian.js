document.addEventListener("DOMContentLoaded", function () {
	const faqItems = document.querySelectorAll(".faq-item")

	faqItems.forEach(item => {
		const question = item.querySelector(".faq-question")

		question.addEventListener("click", () => {
			// Close other items
			// faqItems.forEach(i => {
			// 	if (i !== item) {
			// 		i.classList.remove("active")
			// 		// i.querySelector(".faq-answer").style.display = "none"
			// 		i.querySelector(".faq-icon").textContent = "+"
			// 	}
			// })

			// Toggle current item
			item.classList.toggle("active")

			const answer = item.querySelector(".faq-answer")
			const icon = item.querySelector(".faq-icon")

			if (item.classList.contains("active")) {
				icon.textContent = "-"
			} else {
				icon.textContent = "+"
			}
		})
	})
})
