<?php
// if
$pontosnegativos = 4;

if($pontosnegativos > 3){

    echo "Aluno reprovado!";

}else{
    echo "Aluno Aprovado!";
}





?>

<!-- switch -->
<?php
$formpagamento = "parcelado";

switch($formpagamento){
    case 'pix':
        echo "Pagamento com pix!";
        break;

        case 'dinheiro':
            echo "Pagamento em dinheiro!";
            break;

            case ' debito':
                echo "Pagamento com cartão Débito!";
                break;
            case ' credito':
                echo "Pagamento com cartão Crédito!";
                break;

                default:
                echo " Forma de pagamento inválida!";
}