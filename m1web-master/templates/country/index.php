<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'accueil</title>
</head>
<body>
    <?php echo"
        <h1> Villes et capitales <h1>";?>

    <table cellpadding="10">    
    <thead>
    <tr>
        <th>Pays</th>
        <th>Capital</th>
    </tr>
    </thead>
    <tbody>
    
    <?php foreach ($countries as $country):?>
    <tr>
        <td><?=$country->getName()?></td>
        <td style =:4 px;    "><?=$capital[$country->getId()]->getName()?></td>
    </tr>
    <?php endforeach;?>
    
    </tbody>
</table>
</body>
</html>


<style type="text/css">
h1{
    color: #6A3B36;
    font-family: "Roboto", Sans-serif;
}
th {
  color: #CD5C5C;
}

td{
    color: #FFA07A;
}

table, th, td {
  border: 1px solid black;
}
</style>