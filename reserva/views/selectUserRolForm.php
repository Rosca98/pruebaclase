<?php
echo "Selecciona el rol<br>";
echo "<form action='index.php'>";
echo "<select name='type'>";
foreach ($data['type'] as $rol) {
     echo "<option value='".$rol->id."'>".$rol->description."<option>";
}
echo "</select>";
echo "<input type='hidden' name='action' value='processSelectUserRolForm'>";
echo "<button type='submit'>Enviar</button>";
echo "</form>";