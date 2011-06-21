function clearSearchField(input){
	if(input.value == "Buscar..."){
		input.value = "";
	}
}

function fillSearchField(input){
	if(input.value == ""){
		input.value = "Buscar...";
	}
}

function toggleSidebarWidgets(elm){
	var list = $(elm).next();
	$(list).siblings('ul').slideUp();
	$(list).slideDown();
}