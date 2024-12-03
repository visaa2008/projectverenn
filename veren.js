<!INDOCTIPE html>
<html lang="en">
<head></head>    
// Class abstrak Kendaraan
class Kendaraan {
    bergerak() {}
    berhenti() {}
}
// Class turunan Mobil
class Mobil extends Kendaraan {
    bergerak() {
        console.log("Mobil bergerak di jalan.");
    }
    berhenti() {
        console.log("Mobil berhenti.");
    }
}
(9)
// Class turunan SepedaMotor
class SepedaMotor extends Kendaraan {
    bergerak() {
        console.log("Sepeda motor bergerak di jalan.");
    }
    berhenti() {
        console.log("Sepeda motor berhenti.");
    }
}

// Contoh penggunaan
const mobil = new Mobil();
mobil.bergerak();  // Output: Mobil bergerak di jalan.
mobil.berhenti();  // Output: Mobil berhenti.

const sepedaMotor = new SepedaMotor();
sepedaMotor.bergerak();  // Output: Sepeda motor bergerak di jalan.
sepedaMotor.berhenti();  // Output: Sepeda motor berhenti.