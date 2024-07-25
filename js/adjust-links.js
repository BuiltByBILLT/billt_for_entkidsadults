// Changes urls to relative when in development

document.addEventListener("DOMContentLoaded", function () {
	const hostname = window.location.hostname
	const links = document.querySelectorAll("a")

	links.forEach(function (link) {
		const linkHostname = new URL(link.href).hostname

		if (hostname !== "www.entkidsadults.com" && linkHostname === "www.entkidsadults.com") {
			// Convert to relative URL
			link.href = link.href.replace("https://www.entkidsadults.com", "")
		} else if (hostname === "www.entkidsadults.com" && linkHostname !== "www.entkidsadults.com") {
			// Ensure it remains an absolute URL
			link.href = "https://www.entkidsadults.com" + link.pathname
		}
	})
})
