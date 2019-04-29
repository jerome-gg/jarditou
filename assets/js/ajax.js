$(document).ready(function(){
    var url = "http://localhost/ci/index.php"
    $.ajax({
        type: "GET",
        url: url + '/produits/menu',
        //data: { id: contenu },
        dataType: "json",
        success:function(data)
        {
            var i = 0;
            $.each(data, function(){
                $('#cat').append('<option value=' + data[i].cat_id + '>' + data[i].cat_nom +'</option>');
                i++;
            });
        }
    });
});


$('#cat').change(function(){
    var url = "http://localhost/ci/index.php"
    var categorie = $('#cat').val();
    console.log(categorie);
    $.get({
        url: url + '/produits/menu2',
        data: {id:categorie},
        dataType: "json",
        success:function(data)
        {
            console.log(data);
            var i = 0;
            $('#tree').append(" <select name='categorie3 col-5' class='custom-select' id='cat2'></select>");
            $.each(data, function(){
                $('#cat2').append('<option value=' + data[i].cat_id + '>' + data[i].cat_nom +'</option>');
                i++;
            })

        }
    })
})