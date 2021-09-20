<?php

class ClassA extends Exception {}
class ClassB extends Exception {}

class Car
{
    public function drive(int $m=1)
    {
        if($m == 10){
            throw new ClassA("Marcha {$m} não existe!");
        }else if($m == 9){
            throw new ClassB("A marcha {$m} também não existe!");
        }
        echo "Driving...";
    }
}

//Versões Anteriores PHP
echo '<b>Multiplas Exceptions PHP <= 7.1</b><br>';
try{
    $c = new Car;
    $c->drive();
}catch(ClassA $e){
    echo $e->getMessage();
}
catch(ClassB $e){
    echo $e->getMessage();
}finally{
    echo '<br>';
}


//Versão PHP >= 7.1
echo '<br><br><b>Multiplas Exceptions PHP >= 7.1</b><br>';
try{
    $c = new Car;
    $c->drive();
}catch(ClassA | ClassB $e){
    echo $e->getMessage();
}finally{
    echo '<br>';
}

?>