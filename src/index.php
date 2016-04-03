<!DOCTYPE html>
<html>
<head>
    <title>Hello, ME!</title>
</head>
<body>
<h1><?php echo "Hello, ME!" ?></h1>

<h3>testing the database connection ...</h3>
<i>
    <p> please note that the phpdev-db container might take a minute to complete the boot process, so you may have a db
        connection exception at first. Just refresh the page few seconds later and everything should be good.
        this is not a big deal, beacuse this only happens once ;)
    </p>
</i>

<pre>
    <?php
    const DB_HOST = 'phpdev-db';
    const DB_NAME = 'phpdev';
    const DB_USER = 'iouser';
    const DB_PASS = 'iodevpassword';

    $root = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
    $root->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    $root->exec("CREATE TABLE IF NOT EXISTS iotable (n INTEGER )");
    var_dump($root->query('select * from iotable')->fetchAll());
    ?>
</pre>

</body>
</html>
