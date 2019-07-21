var url = "http://localhost/ci/index.php";

$(document).ready(function(){

    $(".droits").change(function(){
        var id = $(this).data("id");
        var valeur = $(this).val();
        console.log(id,valeur);
        $.ajax({
            url: url + '/users/right_change/',
            data: {user_id:id,
                user_droit:valeur},
            type:'POST',
            dataType: "json",
            success:function(data)
            {
                console.log(data);
            }
        })
    })

});