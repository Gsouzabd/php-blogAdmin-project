<?php
include __DIR__ . '/../../view/inicio-html.php';

?>
<!DOCTYPE html>
        <html lang="pt-BR">

            <a href="/adicionar-curso" class="btn btn-primary mb-2">Adicionar Novo</a>
            <ul class="list-group">
                <?php foreach ($cursos as $curso): ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <?= $curso->getDescricao(); ?>

                        <div class="buttons" style="right: auto">
                            <a href="/editar-curso?id=<?php echo $curso->getId()?>"> <button class="btn-primary" id="<?php echo $curso->getId()?>">Editar </button></a>
                            <a href="/excluir-curso?id=<?php echo $curso->getId()?>"> <button class="btn-primary" id="<?php echo $curso->getId()?>">Excluir </button></a>
                        </div>


                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        </body>
        </html>
<?php
include __DIR__ . '/../../view/fim-html.php';
?>