<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicial.css">
    <title>Document</title>
</head>

<body>
    <div class="formulario">
        <form action="gerarPdf.php" method="get">
            <label class="dados" for="nome">Nome</label>
            <input class="dados" type="text" name="nome" id="nome">

            <label class="dados mes" for="mes" style="margin-top: 20px;">Mês</label>
            <select class="dados" id="mes" name="mes">
                <option value="1">Janeiro</option>
                <option value="2">Fevereiro</option>
                <option value="3">Março</option>
                <option value="4">Abril</option>
                <option value="5">Maio</option>
                <option value="6">Junho</option>
                <option value="7">Julho</option>
                <option value="8">Agosto</option>
                <option value="9">Setembro</option>
                <option value="10">Outubro</option>
                <option value="11">Novembro</option>
                <option value="12">Dezembro</option>
            </select>
            <label class="dados" for="folgas" style="margin-top: 20px;">Feriados</label>
            <input class="dados" type="text" name="folgas" id="folgas"
                placeholder="Digite os dias separados por virgula">

            <fieldset style="margin-top: 10px; width:70%;">
                <legend style="text-align:center">Horário de trabalho</legend>
                <input type="radio" name="periodo" id="manha" value="manha" checked><label for="manha">Manha</label>
                <input type="radio" name="periodo" id="tarde" value="tarde"><label for="tarde">Tarde</label>
            </fieldset>
            <button class="dados" type="submit" style="margin-top: 10px;">Gerar</button>

        </form>
        <p style="color:red">SÁBADOS E DOMINGOS são incluídos automaticamente</p>
    </div>
</body>

</html>