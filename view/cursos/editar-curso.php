<?php


use Alura\Cursos\Infra\EntityManagerCreator;

require __DIR__ . '/../../vendor/autoload.php';
include __DIR__ . '/../inicio-html.php';


$entityManager = (new EntityManagerCreator())->getEntityManager();
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$curso = $entityManager->getReference(\Alura\Cursos\Entity\Curso::class, $id);

?>

    <!DOCTYPE html>
    <form action="/editar-curso-salvar" method="post">
        <div class="form-group">

            <label for="descricao">Descrição</label>
            <input type="hidden" name="id" value="<?php echo $curso->getId(); ?>">
            <input type="text" id="descricao" name="descricao" class="form-control" value=" <?php echo $curso->getDescricao(); ?>">
        </div>
        <button class="btn btn-primary">Salvar</button>
    </form>

<?php

include __DIR__ . '/../fim-html.php';

?>