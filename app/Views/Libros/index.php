<h1 class="text-h1">Lista de libros</h1>

<ul>
<?php foreach ($libros as $l): ?>
    <li>
        <?= $l ->Titulo; ?> -
        <?= $l ->Autor; ?> -
         <?= $l  ->Aniopublicacion; ?>-
         <?= $l ->Editorial; ?>-
         <?= $l ->Genero; ?>-
      
    </li>
<?php endforeach; ?>
</ul>
