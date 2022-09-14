
<?php 
function showhome(){?>


<nav>
    <ul>
        <li><a href="tabla/5">tabla 5</a></li>
        <li><a href="tabla/10">tabla 10</a></li>
        <li><a href="tabla/20">tabla 20</a></li>
    </ul>
</nav>
<form action="bbdd.php" method="get">
    <label for="">ingrese limite de tabla</label>
    <input type="number" name="limit">
    <button>enviar</button>
</form>
<?php   } ?>