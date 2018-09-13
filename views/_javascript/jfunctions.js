$(document).ready(function () {
	$('#produtos_content').css("display", "none");

	$('#produtos').click(function () {
		$('#produtos').css("background", "rgb(222,184,135)");
		$('#tutoriais').css("background", "rgb(252,214,165)");

		$('#produtos_content').css("display", "block");
		$('#tutoriais_content').css("display", "none");

		$('#produtos').css("cursor", "default");
		$('#tutoriais').css("cursor", "pointer");
	});

	$('#tutoriais').click(function () {
		$('#tutoriais').css("background", "rgb(222,184,135)");
		$('#produtos').css("background", "rgb(252,214,165)");

		$('#produtos_content').css("display", "none");
		$('#tutoriais_content').css("display", "block");

		$('#produtos').css("cursor", "pointer");
		$('#tutoriais').css("cursor", "default");
	});
});