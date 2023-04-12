<?php
class Motor {
    // Atribut
    public string $merk;
    public float $bensin;
    public int $topSpeed;
    
    // Constructor
    public function __construct(string $merk, float $bensin, int $topSpeed) {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topSpeed = $topSpeed;
    }
    
    // Method untuk menempuh jarak dengan motor
    public function jalan(float $jarak) {
        $bensinDibutuhkan = $jarak / 40;
        if ($this->bensin >= $bensinDibutuhkan) {
            $this->bensin -= $bensinDibutuhkan;
            printf(
                "Berhasil menempuh jarak %.2f km dengan %s. Bensin saat ini: %.2f liter.<br>",
                $jarak,
                $this->merk,
                $this->bensin
            );
        } else {
            printf(
                "Bensin tidak cukup untuk menempuh jarak %.2f km dengan %s.<br>",
                $jarak,
                $this->merk
            );
        }
    }
}
// membuat object / instansiasi
$motor1 = new Motor("Honda Vario", 5, 130);
$motor2 = new Motor("Yamaha NMax", 6, 140);

$motor1->jalan(90);
$motor2->jalan(110);

$motor1->jalan(160);
$motor2->jalan(190);
?>