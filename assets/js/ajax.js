

$('#categorie').change(function({
    var categorie = $('#categorie').val();
    $.post({
        url:"../../application/Produits/",
        data: {id:categorie},
        dataType: "json",
        success:function(data)
        {
            var contenu = '';
            var i = 0;
            $('')
        }
    })
}))