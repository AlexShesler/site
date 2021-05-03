<?php
// если была нажата кнопка "Отправить"
if($_POST['submit']) {
        // $_POST['title'] содержит данные из поля "Тема", trim() - убираем все лишние пробелы и переносы строк, htmlspecialchars() - преобразует специальные символы в HTML сущности, будем считать для того, чтобы простейшие попытки взломать наш сайт обломались, ну и  substr($_POST['title'], 0, 1000) - урезаем текст до 1000 символов. Для переменной $_POST['mess'] все аналогично
        $title = substr(htmlspecialchars(trim($_POST['title'])), 0, 1000);
        $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000);
        // $to - кому отправляем
        $to =substr(htmlspecialchars(trim($_POST['myemail'])), 0, 1000);
        // $from - от кого
        $from=substr(htmlspecialchars(trim($_POST['email'])), 0, 1000);
        $headers = "Content-type: text/html; charset=utf-8 \r\n";
        // функция, которая отправляет наше письмо.
        mail($to, $title, $mess, 'From:'.$from);
        echo 'Спасибо! Ваше письмо отправлено.';
}
?>
<form action="" method=post>

<p>Вводный текст перед формой <p>
              <div >
			  e-mail получателя<br />
              <input type="text" name="myemail" size="40"><br />
              Ваш e-mail отправителя<br />
              <input type="text" name="email" size="40"><br />
              Teма<br />
              <input type="text" name="title" size="40"><br />
              Сообщение<br />
              <textarea name="mess" rows="10" cols="40"></textarea>
              <br />
              <input type="submit" value="Отправить" name="submit"></div>
</form> 

    </div>

  