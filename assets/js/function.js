$(document).ready(function() {

    $('#search_categoria').change(function(e) {
        e.preventDefault(); /* no se va a recargar */
        var sistema = getUrl();
        location.href = sistema + 'buscar_productos.php?categorias=' + $(this).val();
    })
});

function getUrl() {
    var loc = window.location;
    var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
    return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
}