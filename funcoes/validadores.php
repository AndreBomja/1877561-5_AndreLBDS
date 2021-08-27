
<?php
function validar_array($dados, $array){
    if (isset ($dados[$array])) {
        return true;
    } else {
        return 'Código da empresa não foi encontrado';
    }
}

function getInfo($dados, $id, $isPROD, $array )
{
    $imgProd = '';
    $desc = '';
    $name = '';
    $price = '';
    $isReturn = true;

    foreach ($dados as $key => $object) :
        foreach ($object as $field => $value) :
            foreach ($object[$field] as $field => $val) :
                if ($array == $key && $field == 'id'){
                   if ($val == $id) {
                        $isPROD = "true";
                    } else {
                        $isPROD = "false";
                    }
                }
                if (($field == 'img') && ($isPROD == "true")) :
                    $imgProd = $val;
                endif;
                if (($field == 'description') && ($isPROD == "true")) :
                    $desc = $val;
                endif;
                if (($field == 'name') && ($isPROD == "true")) :
                    $name = $val;
                endif;
                if (($field == 'price') && ($isPROD == "true")) :
                    $price = 'R$ '.$val;
                endif;
            endforeach;
        endforeach;
    endforeach;

    if (
        $imgProd == '' &&
        $desc == '' &&
        $name == '' &&
        $price == ''
    ) {
        $isReturn = false;
    }

    return array('img' => $imgProd, 'description' => $desc, 'name' => $name, 'price' => $price, 'isReturn' => $isReturn);
}

