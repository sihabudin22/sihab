<?php
class Hewan {
    
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function suara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {

    public function suara() {
        return "Guk Guk!";
    }
}

$anjingSaya = new Anjing("Buddy");

// echo "Nama Hewan: " . $anjingSaya->getNama();
// echo "Suara Hewan: " . $anjingSaya->suara();
?>


<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Hewan {
    
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    public function suara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {

    public function suara() {
        return "Guk Guk!";
    }
}

$anjingSaya = new Anjing("Buddy");
echo "Nama Hewan: " . $anjingSaya->getNama();
echo "Suara Hewan: " . $anjingSaya->suara();</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">nama hewan: <?=$anjingSaya->getNama()?><br>suara hewan: <?=$anjingSaya->suara()?></code></pre>
    </div>

<?php include 'footer.php'; ?>