function convertHeight(h) {
	if(h == 0) return "nível do mar";
	let sign = "+ ";
	if(h < 0) sign = "- ";
	h = Math.abs(h);
	return sign + h.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + " m";
}

function setDeep(mousePos) {
	let h = 10000 - mousePos;
	$("#deep-mark").css("margin-top", mousePos - 15).html(convertHeight(h));
}

function toggleSummary() {
	$("#summary-list").slideToggle();
}

function goTo(altitude) {
	let contents = $("div.meter-" + altitude);
	if(contents.length == 0) return false;
	select(altitude);
	let content = $(contents[0]).offset();
	$([document.documentElement, document.body]).animate({
		scrollTop: content.top - 100
	}, 2000);
		$("#summary-list").slideUp();
}

function inactiveAll() {
	$(".active").removeClass("active");
}
function select(altitude) {
	inactiveAll();
	let contents = $("div.meter-" + altitude);
	contents.addClass("active");
}

$(document).ready(() => {
	$("#deep-meter").on("mousemove", (evt) => {
		let offset = $(evt.target).offset();
		let mousePos = evt.pageY - offset.top;
		if(mousePos > 50)
			setDeep(mousePos);
	});

	setDeep(200);
	$("#deep-mark").show();
});
