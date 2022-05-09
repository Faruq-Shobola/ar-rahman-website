jQuery(document).ready(function ($) {
	/*************
	 back to top
	*************/

	let btn = $("#button");
	$(window).scroll(function () {
		if ($(window).scrollTop() > 300) {
			btn.addClass("show");
		} else {
			btn.removeClass("show");
		}
	});

	btn.on("click", function (e) {
		e.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "100");
	});

	/*************
	 sticky menu
	*************/
	$(window).scroll(function () {
		let sticky = $(".header"),
			scroll = $(window).scrollTop();

		if (scroll >= 80) {
			sticky.addClass("menu-sticky");
		} else {
			sticky.removeClass("menu-sticky");
		}
	});
});

const icon = document.querySelector("#hamburger");
const menu = document.querySelector(".menu");
// const hamburgerLabel = document.querySelector(".label-text");

// const menuDisplay = false;

const toggleNav = () => {
	if (menu.classList.contains("hidden")) {
		menu.classList.add("flex-col");
		menu.classList.remove("hidden");
		menu.classList.add("slide-right");
		menu.classList.remove("slide-left");
	}
};

const closeNav = () => {
	if (menu.classList.contains("flex-col")) {
		menu.classList.remove("flex-col");
		menu.classList.add("slide-left");
		menu.classList.remove("slide-right");
		setTimeout(() => {
			menu.classList.add("hidden");
		}, 400);
	}
};
