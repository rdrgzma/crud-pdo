<?php

    $mensagem = '';
    if (isset($_GET['status'])){
        switch ($_GET['status']){
            case 'success' :
                $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
                break;
            case 'error' :
                $mensagem = '<div class="alert alert-danger">Ação não executada!</div>';
                break;
        }
    }
    $resultado = '';
    foreach ($vagas as $vaga){
        $resultado.='<tr>
                        <td>'.$vaga->id.'</td>
                        <td>'.$vaga->titulo.'</td>
                        <td>'.$vaga->descricao.'</td>
                        <td>'.($vaga->ativo == 's' ? 'Ativo' : 'Inativo').'</td>
                        <td>'.date('d/m/Y H:i:s ', strtotime($vaga->data)).'</td>
                        <td>
                            <a href="editar.php?id='.$vaga->id.' " >
                                <button type="button" class="btn btn-primary">Editar</button>
                            </a>
                            <a href="excluir.php?id='.$vaga->id.' " >
                                <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>';
        }
    $resultado = strlen($resultado) ? $resultado : '<tr>
                                                        <td colspan="6" class="text-center">
                                                            Nenhuma vaga encontrada
                                                        </td>
                                                    </tr>';
?>
<main>
    <section>
        <?=$mensagem?>
        <a href="cadastrar.php">
            <buttton class ="btn btn-success">Nova vaga</buttton>
        </a>
    </section>
    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultado?>
            </tbody>
        </table>
    </section>
</main>
