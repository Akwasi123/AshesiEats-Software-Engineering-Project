<?php

class Header{ 
    public $html;
    private $id;
    private $name;

    function __construct($id, $name){
        $this->id= $id;
        $this->name=$name;
    }

    function getHTML(){
        $this->html.=
        "
        <div class='main container-fluid'>
            <div class='sidebar'>
                <div class='content'>
                    <div class='brand'>
                        <p>Ashesi Eats</p>
                    </div>
                    <div class='menu m-active'>
                        <img src='../assets/img/icons8-home-page-100.png' alt='Home icon' width='30'>
                        <a href='home.php'>Home</a>
                    </div>
                    <div class='menu'>
                        <a href='menu.php'><i class='fab fa-elementor'></i> Menu</a>
                    </div>
                    <div class='menu '>
                        <img src='../assets/img/icons8-time-machine-100.png' alt='' width='30'>
                        <a href='orders.php'>Orders</a>
                    </div>
                    <div class='bottom'>
                        <div class='menu'>
                            <img src='../assets/img/icons8-settings-100.png' alt='' width='30'>
                            <a href='profile.php'>Profile settings</a>
                        </div>
                        <div class='menu '>
                            <img src='./assets/img/icons8-logout-rounded-left-100.png' alt='' width='30'>
                            <a href='logout.php'>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='main-page'>
                <div class='user-info '>
                    <div class='card-body'>
                        <div>".$this->name."  <i class='far fa-user-circle'></i></div>
                    </div>
                </div>
            </div>
        </div>
      ";
    }

    function show(){
        $this->getHtml();
        echo $this->html;
    }
}

?>
