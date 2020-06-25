var path_parse = String(window.location).split('/');
var id_element = String(path_parse[path_parse.length-1]).split('.html')[0];
document.getElementById(id_element).className += " active";