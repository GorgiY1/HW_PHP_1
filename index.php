<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1, .title {
            color: blue;
        }
        .title {
            font-weight: 500;
        }
    </style>
</head>
<body>
    <?php 
        echo "<h1>В ночь большого прилива</h1>";
        echo "<span class=\"title\">«В ночь большого прилива» — </span><span>фантастическая трилогия Владислава Крапивина. 
        Состоит из повести или рассказа «Далёкие горнисты», повестей «В ночь большого прилива» 
        и «Вечный жемчуг», опубликованных в периодических изданиях в 1970, 1977 и 1978 годах соответственно.
         Первое книжное издание вышло в 1979 году. Содержит сказочные и фантастические мотивы.
        Главный герой, Сергей Витальевич, чудесным образом оказывается в сказках, напоминающих сны, 
        где превращается в двенадцатилетнего и обретает друзей. Неожиданно он понимает, что испытывает 
        ностальгию по детству, и на протяжении трилогии помогает товарищам обрести утраченный дом. 
        Во время приключений Сергей побеждает чудовище — Железного Змея, сражается в поединке с 
        диктатором — Канцлером; герои оказываются в далёком необитаемом мире, встречают разумного 

        краба и находят волшебный «вечный жемчуг».

        Трилогия посвящена борьбе добра со злом, затрагивает традиционные для Крапивина темы дружбы, 
        преданности, мужества. Исследователи отмечали сновидческие и визионерские мотивы, 
        переплетение реальности и снов, стирание границ между действительностью и вымыслом,
        обыденным и чудесным.</span>";

        
    ?>
    </br>
    </br>
    <form method="post">
        <input type="text" name="name" placeholder="Введите имя">
        <input type="submit" name="submit" value="Отправить">
        <input type="submit" name="change_name" value="Изменить имя">
    </form>
    
    <?php 
        $name = "000";
        if(isset($_POST["name"]))
        {
            $name = $_POST["name"];
            echo "Привет, ".$name;
        }
        if(isset($_POST["change_name"]))
        {
            echo "Изменить имя";

            echo "<form method=\"post\">
        <input type=\"text\" name=\"name\" placeholder=\"Введите имя\">
        <input type=\"submit\" name=\"submit\" value=\"Отправить\">
        <input type=\"submit\" name=\"change_name\" value=\"Изменить имя\">
    </form>";
        }
    ?>
    
</body>
</html>