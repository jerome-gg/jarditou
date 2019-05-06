<?php  echo  form_open( 'chemin / vers / contrôleur / mise à jour / méthode' );  ?>

<table  cellpadding = "6"  cellspacing = "1"  style = "width: 100%" border="0">

    <tr > 
        <th> QTY </th> 
        <th> Description de l'article </th> 
        <th  style = "text-align: right" > Prix ​​de l'article </th> 
        <th > = th-style="text-align: right" > Sous-total </th> 
    </tr >

    <?php $i = 1 ; ?>
    <?php  foreach  ($this->cart->contents() as $items ) :  ?>

            <?php  echo  form_hidden ( $i . '[rowid]' ,  $items [ 'rowid' ]);  ?>
            <tr> 
                <td > <?php  echo  form_input ( array ( 'name' => $i . '[qty]' ,  'value'  =>  $items [ 'qty' ],  'maxlength'  =>  '3' ,  'taille'  =>  '5' ));  ?> </td> 
                <td > 
                    <?php  echo  $items['name'];  ?>
                    <?php  if  ( $this->cart->has_options ( $items['rowid']) == TRUE ) :  ?>
                                    <p > 
                                            <?php  foreach  ($this->cart -> product_options ( $items [ 'rowid' ]) as  $option_name  =>  $option_value ) :  ?>
                                                    <strong> <?php  echo  $nom_option ;  ?> : </strong >  <?php  echo  $option_value ;  ?> <Br/>
                                            <?php  endforeach ;  ?> 
                                    </p >
                            <?php  endif ;  ?>
                    </td> 
                    <td  style = "text-align: right" > <?php  echo  $this->cart->format_number( $items [ 'price' ]);  ?> </td > 
                    <td  style = "text-align: right" > $ <?php  echo  $this->cart->format_number ( $items ['subtotal']);  ?> </td> 
            <

    <?php  $i++ ;  ?>

    <?php  endforeach ;  ?>

    <tr> 
        <td  colspan = "2" >  </td> 
        <td  class = "right" > <strong> Total </strong > </td> 
        <td  class = "right" > $<?php  echo  $this->cart->format_number ( $this->cart->total()); ?> </td>
    </table>

<p> <?php  echo  form_submit ( '' ,  'Mettre à jour votre panier' );  ?> </p>


