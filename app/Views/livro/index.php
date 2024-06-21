<div class="container">
    <h2>Livro</h2><hr>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#cadModal">
        Novo Livro
    </button>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>DISPONIVEL</td>
            <td>STATUS</td>
            <td>OBRA</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listaLivro as $ob) : ?>
            <tr>
                <td><?=$ob['id']?></td>
                <td>
                    <?=anchor("Livro/editar/".$ob["id"],$ob["disponivel"])?>
                </td>
                <td><?=$ob['disponivel']?></td>
                <td><?=$ob['status']?></td>
                <?php
                    foreach($listaObra as $obra){
                        $livro[$obra['id']] = $obra['titulo'];
                    }
                ?>
                <td>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="cadModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?=form_open("livro/cadastrar")?>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Obra</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="disponivel">Disponível</label>
                        <input class='form-control' type="text" id="disponivel" name="disponivel">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input class='form-control' type="text" id="status" name="status">
                    </div>
                    <div class="form-group">
                        <label for="id_obra">Obra</label>
                        <select class='form-control' name='id_obra' id='id_obra'>
                        <option value="">Selecione uma Obra</option>
                        <?php foreach($listaObra as $obra) : ?>
                            <option value="<?=$obra['id']?>"><?=$obra['titulo']?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-outline-success">Cadastrar</button>
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
        <?=form_close()?>
    </div>
</div>
