<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "portfolio";

$conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin</title>
</head>
<body>
<div id="content">
  <AdminNavigation />
  <MainTitle title="Darbinieki" />
  <div>
    <table>
      <tr class="table-titles">
        <th>Npk</th>
        <th>Lietotājs</th>
        <th>E-pasts</th>
        <th>Apraksts</th>
      </tr>
        <?php
        $stmtMessages = $conn->prepare('SELECT * FROM messages');
        $stmtMessages->execute();
        $messages = $stmtMessages->fetchAll();
        $messagesCount = $stmtMessages->rowCount();
        for ($i = 0; $i < $messagesCount; $i++) {
            echo '
                <tr>
                  <td>'. $messages[$i]['id'] .'</td>
                  <td class="item-title">
                    <div>
                      <h2>'. $messages[$i]['firstname'] . " " .  $messages[$i]['lastname'] .'</h2>
                    </div>
                  </td>
                  <td>'. $messages[$i]['email'] .'</td>
                  <td>'. $messages[$i]['description'] .'</td>
                </tr>';
        }
        ?>
    </table>
  </div>
</div>

<style>
    .button-add > img {
        align-items: center;
    }

    table {
        font-family: arial, sans-serif;
        width: 70%;
        margin-left: auto;
        margin-right: auto;
        border-collapse: collapse;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0px 5px 4px rgba(0, 0, 0, 0.5);
    }

    tr:first-child {
        background-color: #005495;
        border: none;
        color: white;
    }

    tr {
        border-bottom: 1px solid #005495;
    }

    tr:last-child {
        border: none;
    }

    th {
        text-align: left;
        padding: 20px;
        font-size: 18px;
    }

    th:first-child {
        text-align: center;
    }

    th:nth-child(3), th:nth-child(4) {
        text-align: center;
    }

    th:last-child {
        text-align: center;
    }

    td {
        text-align: left;
        padding: 10px;
        font-size: 18px;
        align-items: center;

    }

    td:first-child {
        text-align: center;
        color: #005495;
        font-size: 24px;
    }

    td:nth-child(3), td:nth-child(4) {
        text-align: center;
    }

    td:last-child {
        text-align: center;
        word-wrap: break-word;
    }

    .item-title {
        display: flex;
        justify-content: flex-start;
        gap: 20px;
    }

    .item-title > img {
        margin: 0;
        object-fit: cover;
    }

    .item-title > div > h2 {
        color: #005495;
        font-weight: 200;
    }

    .item-buttons > button {
        border: none;
        padding: 13px 15px;
        color: white;
        font-size: 18px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 6px;
        margin-bottom: 10px;
        cursor: pointer;
        width: 50%;
    }
</style>
</body>
</html>
