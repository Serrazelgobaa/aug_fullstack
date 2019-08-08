const miniMenu = document.getElementById('mini_menu');

const ouvrirMenu = () => {
	if (miniMenu.style.display === "none") {
		miniMenu.style.display = "block";
	}

	else {
		miniMenu.style.display = "none";
	}
};

const focusIn = () => {
	document.getElementById('quick_create').style.backgroundColor = "white";
	document.getElementById('quick_create').style.border = "1px solid rgba(0,0,0,0.6)";
	document.getElementById('quick_create').style.transition = "background-color 0.2s ease-in";
};

const focusOut = () => {
	document.getElementById('quick_create').style.backgroundColor = "#BBBBBB";
	document.getElementById('quick_create').style.border = "1px solid rgba(0,0,0,0.6)";
	document.getElementById('quick_create').style.transition = "background-color 0.2s ease-in";
};

document.getElementById('menu_toggle').addEventListener('click',ouvrirMenu);
document.getElementById('quick_create').addEventListener('focusin',focusIn);
document.getElementById('quick_create').addEventListener('focusout',focusOut);