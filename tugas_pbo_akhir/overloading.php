<?php

class Calculator {
    // Metode sihir __call untuk menangani metode yang tidak ada
    public function __call($name, $arguments) {
        // Jika metode yang dipanggil adalah 'add'
        if ($name == 'add') {
            // Inisialisasi hasil penjumlahan
            $sum = 0;
            // Menjumlahkan semua argumen
            foreach ($arguments as $arg) {
                $sum += $arg;
            }
            // Mengembalikan hasil penjumlahan
            return $sum;
        } else {
            // Jika metode tidak dikenali, lempar pengecualian
            throw new BadMethodCallException("Method $name not defined.");
        }
    }
}

$calc = new Calculator();
// echo "Sum of 1 and 2: " . $calc->add(1, 2) . "<br>";             // Output: 3
// echo "Sum of 1, 2 and 3: " . $calc->add(1, 2, 3) . "<br>";       // Output: 6
// echo "Sum of 1, 2, 3 and 4: " . $calc->add(1, 2, 3, 4) . "<br>"; // Output: 10

?>
<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Calculator {
    
    public function __call($name, $arguments) {
        
        if ($name == 'add') {
            
            $sum = 0;
            
            foreach ($arguments as $arg) {
                $sum += $arg;
            }
        
            return $sum;
        } else {
            
            throw new BadMethodCallException("Method $name not defined.");
        }
    }
}

$calc = new Calculator();
echo "Sum of 1 and 2: " . $calc->add(1, 2);
echo "Sum of 1, 2 and 3: " . $calc->add(1, 2, 3);
echo "Sum of 1, 2, 3 and 4: " . $calc->add(1, 2, 3, 4);</code></pre>
    </div>

    <div class="output-box">
        <pre><code class="output-content">Sum of 1 and 2: <?= $calc->add(1, 2) ?> <br>
Sum of 1, 2 and 3: <?= $calc->add(1, 2, 3) ?> <br>
Sum of 1, 2, 3 and 4: <?= $calc->add(1, 2, 3, 4) ?></code></pre>
    </div>

<?php include 'footer.php'; ?>