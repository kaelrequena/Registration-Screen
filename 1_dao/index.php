<?php
    include_once('db.php');
?>
<form action="process.php" method="POST">
    <fieldset>
        <legend>Caracteristicas Carro</legend>
        <div>
            <label for="brand">Modelo do carro:</label>
            <input type="text" name="brand" placeholder="Modelo carro">
        </div>
        <div>
            <label for="km">KM:</label>
            <input type="text" name="km" placeholder="Colocar quilometragem">
        </div>
        <div>
            <label for="color">color:</label>
            <input type="text" name="color" placeholder="Digitar cor">
        </div>
    </fieldset>
    <input type="submit" value="Salvar">
</form>