<?php
class Mylibrary{
    function mylibraryfun(){
        $that=get_instance();
        $that->load->helper('myhelper');
        show();
      
    }
}
