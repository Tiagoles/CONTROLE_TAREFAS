<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        html, body{
            font-family: 'roboto', sans-serif;
        }
        .titulo{
            border: 1px;
            background: #c2c2c2;
            font-weight: bolder;
            text-align: center;
            text-transform: uppercase;
            width: 100%;
            padding: 5px;
            margin:0 0 10px 0;
        }
        #tableTasks th{
            text-align: left;
        }
        .pageBreak{
            page-break-after: always;
        }
    </style>
</head>

<body>

    <div class="titulo">Tarefas de {{ $user->name }}</div>
    <div>
        <table style="width:100%" id="tableTasks">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Data limite de conclusão</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasksUserAuthenticated as $taskUserAuthenticated)
                    <tr>
                        <td>{{ $taskUserAuthenticated->id }}</td>
                        <td>{{ $taskUserAuthenticated->tarefa }}</td>
                        <td>{{ $taskUserAuthenticated->data_limite_conclusao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pageBreak"></div>
    <h3>ola</h3>
    <h4>mundo</h4>

</body>

</html>
