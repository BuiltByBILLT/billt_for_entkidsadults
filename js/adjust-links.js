// Changes urls to relative when in development

document.addEventListener("DOMContentLoaded", function () {
	const hostname = window.location.hostname
	const links = document.querySelectorAll("a")

	links.forEach(function (link) {
		const linkHostname = new URL(link.href).hostname

		if (hostname !== "entkidsadults.com" && linkHostname === "entkidsadults.com") {
			console.log("coverted", link.href)
			link.href = link.href.replace("http://entkidsadults.com", "")
			link.href = link.href.replace("https://entkidsadults.com", "")
		}
		if (hostname !== "entkidsadults.com" && linkHostname === "www.entkidsadults.com") {
			console.log("coverted", link.href)
			link.href = link.href.replace("http://www.entkidsadults.com", "")
			link.href = link.href.replace("https://www.entkidsadults.com", "")
		}
	})
})
