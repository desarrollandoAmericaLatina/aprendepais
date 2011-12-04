function AbrirPagina(destino, pagina){
    
    $(destino).html("").delay(1000).load(pagina);
    
}