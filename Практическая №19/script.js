const trySend = (el) => {
	let cont = document.getElementById("cont");
	const val = el.value.trim();
	if(val.length > 2) {
		$.ajax({
			url: 'response.php',
			type: 'POST',
			data: {value:val},
			success: function(res){
				console.log(res);
				cont.innerHTML = `${res}`;
			}
		});
	}
}