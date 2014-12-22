function toggleVisibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
var mql = window.matchMedia("(min-width:42em)");
mql.addListener(function(e){
	if(e.matches) {
		document.getElementById('menu').style.display = 'block';
	}
});
var mql = window.matchMedia("(max-width:42em)");
mql.addListener(function(e){
	if(e.matches) {
		document.getElementById('menu').style.display = 'none';
	}
});