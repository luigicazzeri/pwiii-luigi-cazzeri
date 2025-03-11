<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: lightblue;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            width: 300px;
            padding: 300px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .submit-btn {
            width: center;
            padding: 10px;
            background-color: blue;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #45a049;
            <nav>
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Cadastro de Usuário</h2>
    <form>
        <input type="text" name="txnome" class="input-field" placeholder="Nome" required><br>
        <input type="text" name="txsobrenome" class="input-field" placeholder="Sobrenome" required><br>
        <input type="submit" value="Cadastrar" class="submit-btn">
    </form>
</div>

<div class="foreach" >
    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>nome</th>
            <th>sobrenome</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($cadastro as $c)
            <tr>
                <th>{{ $c->id }}</th>
                <th>{{ $c->nome }}</th>
                <th>{{ $c->sobrenome }}</th>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

</body>
</html>