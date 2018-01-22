<?php
class MyCalculator {
    private $input_pertama, $input_kedua;
   public function __construct( $fval, $sval ) {
        $this->input_pertama = $fval;
        $this->input_kedua = $sval;
    }
    public function add(){
    return $this->input_pertama + $this->input_kedua;
    }
    public function subtract() {
    return $this->input_pertama - $this->input_kedua;
    }
    public function multiply() {
    return $this->input_pertama * $this->input_kedua;
    }
   public function divide() {
return $this->input_pertama / $this->input_kedua;
}
}
$mycalc = new MyCalculator(12, 6); 
echo $mycalc-> add()."\n"; // Displays 18 
echo $mycalc-> multiply()."\n"; // Displays 72
echo $mycalc-> subtract()."\n"; // Displays 6
echo $mycalc-> divide()."\n"; // Displays 2
?>

