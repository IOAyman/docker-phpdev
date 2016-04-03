<!DOCTYPE html>
<html>
<head>
    <title>Hello, ME!</title>
</head>
<body>
<h1><?php echo "Hello, ME!" ?></h1>

<h3>testing the database connection ...</h3>

<pre>
    <?php
    const DB_HOST = 'phpdev-db';
    const DB_NAME = 'phpdev';
    const DB_USER = 'iouser';
    const DB_PASS = 'iodevpassword';

    try {
        $root = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        $root->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        if (exec("CREATE TABLE IF NOT EXISTS iotable (id INTEGER PRIMARY KEY, data VARCHAR(20))"))
            $root->exec('INSERT INTO iotable VALUES (99, "tis3atoun wa tis3oun")');
        var_dump($root->query('select * from iotable')->fetchAll());
    } catch (PDOException $e) {
        ?>
        <i>
            <p>
                You are seeing this message because the webserver could not connect to the database.</br>
                Please note that the <i>phpdev-db</i> container might take a minute to complete the boot process,
                so you may have a db connection exception at first. Just refresh the page few seconds later
                and everything should be good.
                this is not a big deal, beacuse this only happens once ;)
            </p>
        </i>
        <?php
    }
    ?>
</pre>

</body>
</html>
