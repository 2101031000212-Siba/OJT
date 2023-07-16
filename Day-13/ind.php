<?php
if( $_GET["name"] || $_GET["age"] )
{
    echo "welcome". $_GET['name']."<br/>";
    echo "welcome". $_GET['age']."old.";
    exit();

}
?>
<html>
    <body>
        <form action="<?php $_PHP_SELF ?>" method="GET">
        name: <input type="text" name="name"/>
        age: <input type="text" name="age"/>
        <input type="submit"/>
</form>
</body>
</html>
