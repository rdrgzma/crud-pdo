<main>
    <section>

    </section>
    <h2 class="mt-3">Excluir</h2>
    <form method="post">
        <div class="form-group">
            <p>Você deseja realmente excluir a vaga <?=$vaga->titulo?>?</p>
        </div>
        <div class="form-group">
            <a href="index.php">
                <buttton class ="btn btn-success">Cancelar</buttton>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>
</main>
