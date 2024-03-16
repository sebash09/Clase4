<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TELEMETRIA_RESTAPI</title>
    <style>
        table {
            margin: 20px auto;
            width: 80%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">TELEMETRIA - REST API</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>ID Device</th>
            <th>Value</th>
            <th>Type</th>
            <th>Date</th>
        </tr>
        <?php
        if ($query->code === '200') {
            foreach ($query->things as $row) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['id_device']}</td>
                    <td>{$row['valor']}</td>
                    <td>{$row['tipo']}</td>
                    <td>{$row['fecha']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron datos</td></tr>";
        }
        ?>
    </table>
</body>
</html>

