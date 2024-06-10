<?php
class Hewan {
    public function bersuara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        return "Guk guk!";
    }
}

class Kucing extends Hewan {
    // Method untuk mengeluarkan suara kucing
    public function bersuara() {
        return "Meong meong!";
    }
}

function suaraHewan(Hewan $hewan) {
    return $hewan->bersuara();
}

$anjing = new Anjing();
$kucing = new Kucing();

// echo suaraHewan($anjing);
// echo suaraHewan($kucing);
?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Hewan {
    public function bersuara() {
        return "Suara hewan";
    }
}

class Anjing extends Hewan {
    public function bersuara() {
        return "Guk guk!";
    }
}

class Kucing extends Hewan {
    // Method untuk mengeluarkan suara kucing
    public function bersuara() {
        return "Meong meong!";
    }
}

function suaraHewan(Hewan $hewan) {
    return $hewan->bersuara();
}

$anjing = new Anjing();
$kucing = new Kucing();

echo suaraHewan($anjing);
echo suaraHewan($kucing);</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">suara hewan: <?=suaraHewan($anjing)?><br>suara hewan: <?=suaraHewan($kucing)?>
</code></pre>
    </div>

<?php include 'footer.php'; ?>