$(document).ready(function(){
console.log ("ready");

var task = "";

	$("#actionBtn").click(function(){
		console.log("click works");
		task = $("#taskInput").val();
		task = cleanUp(task);
		alert(task);

//submitting data
		$("#toDoForm").submit();
	});
});