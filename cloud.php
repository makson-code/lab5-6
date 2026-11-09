<?php
header("Content-type: text/html; Charset=UTF-8;");
$xml = simplexml_load_file("cloud.xml");
?>
<html>
<head>
<title>Услуги Cloud.ru</title>
</head>
<body>
<h1>Перечень услуг облачного сервиса</h1>
<table border="1" width="100%">
<tr>
<th>Название услуги</th>
<th>Провайдер</th>
<th>Цена, руб</th>
</tr>
<?php
foreach ($xml->service as $service) {
    echo "<tr>";
    echo "<td>", $service->name, "</td>";
    echo "<td>", $service->provider, "</td>";
    echo "<td>", $service->price, "</td>";
    echo "</tr>";
}
?>
</table>
</body>
</html>
