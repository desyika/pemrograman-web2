<!--visibility.php-->
<?php

class visibility{
    public $pulic = 'publi';
    private $privaat = 'private';
    protected $protected = 'protected';

    funtiaon tampilkanProperty(){
        echo "ini diakses di dalam kelas <br>";
        echo "pubic : " . $visibility->public .'<br>';
        echo "protected : " . $visibility ->protected . '<br>';
        echo "private : " . $visibility->private . '<br>';

        echo "<br> <br>"
    }

}