<?php
class Mobil {
    private $merk;
    private $warna;
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }

}

$mobilSaya = new Mobil("Toyota", "Merah");

// echo "Merk Mobil: " . $mobilSaya->getMerk();
// echo "Warna Mobil: " . $mobilSaya->getWarna();

$mobilSaya->setWarna("Biru");
?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Mobil {
    
    private $merk;
    private $warna;
    
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    }

    public function getWarna() {
        return $this->warna;
    }

}

$mobilSaya = new Mobil("Toyota", "Merah");
$mobilSaya->setWarna("Biru");

echo "Merk Mobil: " . $mobilSaya->getMerk();
echo "Warna Mobil: " . $mobilSaya->getWarna();</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">merek mobil: <?=$mobilSaya->getMerk()?><br>warna mobil: <?=$mobilSaya->getWarna()?></code></pre>
    </div>

<?php include 'footer.php'; ?>