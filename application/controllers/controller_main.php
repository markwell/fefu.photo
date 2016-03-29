<?php
class Controller_Main extends Controller
{
    function __construct()
        {
            $this->view  = new View();
        }
    function action_index()
    {	 
        if (isset ($_POST['submit'])) {
          mail ("mrak.mk@ya.ru",
                "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
                "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
          $items['alert'] = 'Ваше сообщение получено, спасибо!';
        } else {
            $items['alert'] = '';
        }
            $this->view->generate('main_view.php', 'template_view.php', $items);
        
    }
}