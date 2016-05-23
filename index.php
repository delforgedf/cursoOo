<?php

require_once 'ClienteInterface.php';
require_once 'ClienteEspecialInterface.php';
require_once 'Cliente.php';
require_once 'pessoaJuridica.php';
require_once 'pessoaFisica.php';



for($i=1;$i<=10;$i++){
    //setar o tipo de pesso... pf ou pj
    if(($i % 2) == 1){
        $pessoaJuridica = new pessoaJuridica();
        $pessoaJuridica->setCnpj('12345678945'.$i)
                       ->setEndereco('endereco'.$i)
                       ->setImportancia($i)
                       ->setNome('Jonatas'.$i)
        ;
        $arrayClientes[$i]['nome'] = $pessoaJuridica->getNome();
        $arrayClientes[$i]['endereco'] = $pessoaJuridica->getEndereco();
        $arrayClientes[$i]['importancia'] = $pessoaJuridica->getImportancia();
        $arrayClientes[$i]['cpf_cnpj'] = $pessoaJuridica->getCnpj();
        $arrayClientes[$i]['tipo'] = 'Pessoa Jurídica';

    }else{
        $pessoaFisica= new pessoaFisica();
        $pessoaFisica->setCpf('345678945'.$i)
            ->setEndereco('endereco'.$i)
            ->setEnderecoEspecial('endereco Especial'.$i)
            ->setImportancia($i)
            ->setNome('Jonatas Físico'.$i)
        ;

        $arrayClientes[$i]['nome'] = $pessoaFisica->getNome();
        $arrayClientes[$i]['endereco'] = $pessoaFisica->getEndereco();
        $arrayClientes[$i]['enderecoEsoecial'] = $pessoaFisica->getEnderecoEspecial();
        $arrayClientes[$i]['importancia'] = $pessoaFisica->getImportancia();
        $arrayClientes[$i]['cpf_cnpj'] = $pessoaFisica->getCpf();
        $arrayClientes[$i]['tipo'] = 'Pessoa Física';
    }
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso OO</title>
    <link href='src/style.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <script src="http://code.jquery.com/jquery-1.9.0rc1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src='src/tablesort.min.js'></script>
    <script src='src/sorts/tablesort.number.js'></script>


</head>
    <body>
        <div class="col-md-6 ">
            <table id='sort' class='table'>
                <thead>
                <tr>
                    <th>#</th>
                    <th class='no-sort'>Nome</th>
                    <th class='no-sort'>DETALHE</th>
                </tr>
                </thead>
                <?php
                    foreach($arrayClientes as $id=>$dados){?>
                        <tr>
                            <td><?php echo $id;?></td>
                            <td><?php echo $dados['nome'] ?></td>
                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $id?>">Detalhes</button></td>
                        </tr>
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="myModal<?php echo $id?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <h3>Detalhes do cliente <?php $dados['nome'];?></h3>
                                    <div> Nome: <?php echo $dados['nome']?></div>
                                    <div> CPF: <?php echo $dados['cpf_cnpj']?></div>
                                    <div> Endereço: <?php echo ($dados['enderecoEsoecial'] == '') ? $dados['endereco'] : $dados['enderecoEsoecial'];?></div>
                                    <div> Importância: <?php echo$dados['importancia']?></div>
                                    <div> Tipo de pessoa: <?php echo$dados['tipo']?></div>
                                </div>
                            </div>
                        </div>
                <?php }?>
            </table>
        </div>


    </body>
</html>
<script>
    $(document).ready(function(){
        new Tablesort(document.getElementById('sort'));
    });
</script>


