<main>
    <section>
        <a href="index.php">
            <buttton class ="btn btn-success">Voltar</buttton>
        </a>
    </section>
    <h2 class="mt-3"><?= TITLE?></h2>
    <form method="post">
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" class="form-control" name="titulo" value="<?=$vaga->titulo?>">
        </div>
        <div class="form-group">
            <label for="">Descrição</label>
            <textarea class="form-control" name="descricao" rows="5"><?=$vaga->descricao?></textarea>
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label for="" class="form-control">
                        <input type="radio" name="ativo" checked value="s"> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label for="" class="form-control">
                        <input type="radio" name="ativo"  value="n" <?=$vaga->ativo == 'n' ? 'checked' : ''?>> Inativo
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>
