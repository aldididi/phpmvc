<?php

class About{
    public function index($nama ='mamang', $pekerjaan='musisi'){
        echo "halo nama saya $nama, saya adalah seorang $pekerjaan";  
    }

    public function page()
    {
        echo 'About/page';
    }
}