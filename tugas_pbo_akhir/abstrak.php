<?php


abstract class Hewan {
    // Metode abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function suara();

    // Metode biasa
    public function tidur() {
        echo "sedang tidur\n";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "Meong\n";
    }
}

class Anjing extends Hewan {
    public function suara() {
        echo "Guk guk\n";
    }
}
$kucing = new Kucing();
$anjing = new Anjing();

$kucing->suara();
$anjing->suara();  
$kucing->tidur();
$anjing->tidur();  

?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python"></code>abstract class Hewan {
    abstract public function suara();

 
    public function tidur() {
        echo "sedang tidur\n";
    }
}

class Kucing extends Hewan {
    public function suara() {
        echo "Meong\n";
    }
}

class Anjing extends Hewan {
    public function suara() {
        echo "Guk guk\n";
    }
}
$kucing = new Kucing();
$anjing = new Anjing();

$kucing->suara();
$anjing->suara();  
$kucing->tidur();
$anjing->tidur();  
</pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">suara kucing: <?= $kucing->suara();?><br>
suara anjing: <?= $anjing->suara(); ?><br>
kucing: <?= $kucing->tidur(); ?><br>
anjing: <?=$anjing->tidur();  ?>
        </code></pre>
    </div>

<?php include 'footer.php'; ?>