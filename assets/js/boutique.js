$(document).ready(function()
{
    var url = "http://localhost/ci/index.php";

    $("#all").click(function(){
        $(".fiche").show();
    })

    $(".btn-outline-dark").click(function(){
        var categorie = $(this).val();
        if(categorie!=""){
            go(categorie);

        }
    })

    function go(categorie){
        
        $.ajax({
            type: "get",
            url: url + '/Produits/modif_boutique/'+categorie,
            data: {id:categorie},
            dataType: "json",
            success:function(data)
            {   
                $(".fiche").hide();
                $.each(data, function(index,value){
                     $('.cat'+value).show(); 
                })
            }
        })
    }
});