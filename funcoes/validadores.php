
<?php
function validar_array($dados, $array){
    if (isset ($dados[$array])) {
        return true;
    } else {
        return 'Código da empresa não foi encontrado';
    }
}
