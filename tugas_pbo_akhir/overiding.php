<?php

// Kelas dasar
class Animal {
    // Metode makeSound di kelas induk
    public function makeSound() {
        return "Some generic animal sound";
    }
}

// Kelas turunan Dog
class Dog extends Animal {
    // Overriding metode makeSound
    public function makeSound() {
        return "Bark";
    }
}

// Kelas turunan Cat
class Cat extends Animal {
    // Overriding metode makeSound
    public function makeSound() {
        return "Meow";
    }
}

// Buat objek dari kelas Dog dan Cat
$dog = new Dog();
$cat = new Cat();

// Panggil metode makeSound pada objek Dog dan Cat
echo "Dog sound: " . $dog->makeSound() . "<br>";  // Output: Bark
echo "Cat sound: " . $cat->makeSound() . "<br>";  // Output: Meow

?>

<?php include 'navbar.php'; ?>

<div class="code-box">
        <pre><code class="language-python">class Animal {
    
    public function makeSound() {
        return "Some generic animal sound";
    }
}

class Dog extends Animal {
    
    public function makeSound() {
        return "Bark";
    }
}


class Cat extends Animal {
    
    public function makeSound() {
        return "Meow";
    }
}

$dog = new Dog();
$cat = new Cat();

echo "Dog sound: " . $dog->makeSound();
echo "Cat sound: " . $cat->makeSound();
        </code></pre>
    </div>
    <div class="output-box">
        <pre><code class="output-content">Dog sound: <?=$dog->makeSound()?><br>
cat sound: <?=$cat->makeSound() ?>
        </code></pre>
    </div>

<?php include 'footer.php'; ?>