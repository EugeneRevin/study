<?php

// Батьківський клас
abstract class ParentClass {
    protected $parent_variable1 = 3;
    protected $parent_variable2 = 5;

    public function getParentVariable1() {
        return $this->parent_variable1;
    }

    public function getParentVariable2() {
        return $this->parent_variable2;
    }

    public function setParentVariable1($value) {
        $this->parent_variable1 = $value;
    }

    public function setParentVariable2($value) {
        $this->parent_variable2 = $value;
    }

    abstract public function power($base, $exponent);
}

// Перший нащадок ParentClass
class ChildClass1 extends ParentClass {
    protected $child1_variable1 = 7;

    public function getChild1Variable1() {
        return $this->child1_variable1;
    }

    public function setChild1Variable1($value) {
        $this->child1_variable1 = $value;
    }

    public function addVariables() {
        return $this->getParentVariable1() + $this->getParentVariable2() + $this->getChild1Variable1();
    }

    public function addParentAndChildVariable() {
        return $this->getParentVariable1() + $this->child1_variable1;
    }

    public function power($base, $exponent) {
        return pow($base, $exponent);
    }
}

// Перший нащадок ChildClass1
class ChildClass1_1 extends ChildClass1 {
    protected $child1_1_variable1 = 10;

    public function getChild1_1Variable1() {
        return $this->child1_1_variable1;
    }

    public function setChild1_1Variable1($value) {
        $this->child1_1_variable1 = $value;
    }

    public function multiplyVariables() {
        return $this->getParentVariable1() * $this->getParentVariable2() * $this->getChild1Variable1() * $this->child1_1_variable1;
    }

    public function multiplyParentAndChildVariable() {
        return $this->getParentVariable1() * $this->child1_1_variable1;
    }

    public function power($base, $exponent) {
        return pow($base, $exponent);
    }
}

// Другий нащадок ChildClass1
class ChildClass1_2 extends ChildClass1 {
    protected $child1_2_variable1 = 12;

    public function getChild1_2Variable1() {
        return $this->child1_2_variable1;
    }

    public function setChild1_2Variable1($value) {
        $this->child1_2_variable1 = $value;
    }

    public function divideVariables() {
        return ($this->getParentVariable1() + $this->getParentVariable2()) / ($this->getChild1Variable1() + $this->child1_2_variable1);
    }

    public function divideParentAndChildVariable() {
        return $this->getParentVariable1() / $this->child1_2_variable1;
    }

    public function power($base, $exponent) {
        return pow($base, $exponent);
    }
}

// Другий нащадок ParentClass
class ChildClass2 extends ParentClass {
    protected $child2_variable1 = 8;

    public function getChild2Variable1() {
        return $this->child2_variable1;
    }

    public function setChild2Variable1($value) {
        $this->child2_variable1 = $value;
    }

    public function multiplyVariables() {
        return $this->getParentVariable1() * $this->getParentVariable2() * $this->child2_variable1;
    }

    public function multiplyParentAndChildVariable() {
        return $this->getParentVariable1() * $this->child2_variable1;
    }

    public function power($base, $exponent) {
        return pow($base, $exponent);
    }
}

// Перший нащадок ChildClass2
class ChildClass2_1 extends ChildClass2 {
    protected $child2_1_variable1 = 15;

    public function getChild2_1Variable1() {
        return $this->child2_1_variable1;
    }

    public function setChild2_1Variable1($value) {
        $this->child2_1_variable1 = $value;
    }

    public function subtractVariables() {
        return $this->getParentVariable1() - $this->getParentVariable2() - $this->child2_variable1 - $this->child2_1_variable1;
    }

    public function subtractParentAndChildVariable() {
        return $this->getParentVariable1() - $this->child2_1_variable1;
    }

    public function power($base, $exponent) {
        return pow($base, $exponent);
    }
}

//Другий нащадок ChildClass2
class ChildClass2_2 extends ChildClass2 {
    protected $child2_2_variable1 = 20;

    public function getChild2_2Variable1() {
        return $this->child2_2_variable1;
    }

    public function setChild2_2Variable1($value) {
        $this->child2_2_variable1 = $value;
    }

    public function addVariables() {
        return $this->getParentVariable1() + $this->getParentVariable2() + $this->child2_variable1 + $this->child2_2_variable1;
    }

    public function addParentAndChildVariable() {
        return $this->getParentVariable1() + $this->child2_2_variable1;
    }

    public function power($base, $exponent) {
        return pow($base, $exponent);
    }
}

// Третій нащадок ParentClass (немає нащадків)
final class ChildClass3 extends ParentClass {
    protected $child3_variable1 = 25;

    public function getChild3Variable1() {
        return $this->child3_variable1;
    }

    public function setChild3Variable1($value) {
        $this->child3_variable1 = $value;
    }

    public function subtractVariables() {
        return $this->getParentVariable1() - $this->getParentVariable2() - $this->child3_variable1;
    }

    public function subtractParentAndChildVariable() {
        return $this->getParentVariable1() - $this->child3_variable1;
    }

    public function power($base, $exponent) {
        return pow($base, $exponent);
    }
}
$child1 = new ChildClass1();
$child1_1 = new ChildClass1_1();
$child1_2 = new ChildClass1_2();
$child2 = new ChildClass2();
$child2_1 = new ChildClass2_1();
$child2_2 = new ChildClass2_2();
$child3 = new ChildClass3();

// Для ChildClass1
echo "\nChildClass1 methods:\n";
echo "Add Variables: " . $child1->addVariables() . "\n";
echo "Add Parent and Child Variables: " . $child1->addParentAndChildVariable() . "\n";
echo "Power (2^3): " . $child1->power(2, 3) . "\n";

// Для ChildClass1_1
echo "\nChildClass1_1 methods:\n";
echo "Multiply Variables: " . $child1_1->multiplyVariables() . "\n";
echo "Multiply Parent and Child Variables: " . $child1_1->multiplyParentAndChildVariable() . "\n";
echo "Power (2^3): " . $child1_1->power(2, 3) . "\n";

// Для ChildClass1_2
echo "\nChildClass1_2 methods:\n";
echo "Divide Variables: " . $child1_2->divideVariables() . "\n";
echo "Divide Parent and Child Variables: " . $child1_2->divideParentAndChildVariable() . "\n";
echo "Power (2^3): " . $child1_2->power(2, 3) . "\n";

// Для ChildClass2
echo "\nChildClass2 methods:\n";
echo "Multiply Variables: " . $child2->multiplyVariables() . "\n";
echo "Multiply Parent and Child Variables: " . $child2->multiplyParentAndChildVariable() . "\n";
echo "Power (2^3): " . $child2->power(2, 3) . "\n";

// Для ChildClass2_1
echo "\nChildClass2_1 methods:\n";
echo "Subtract Variables: " . $child2_1->subtractVariables() . "\n";
echo "Subtract Parent and Child Variables: " . $child2_1->subtractParentAndChildVariable() . "\n";
echo "Power (2^3): " . $child2_1->power(2, 3) . "\n";

// Для ChildClass2_2
echo "\nChildClass2_2 methods:\n";
echo "Add Variables: " . $child2_2->addVariables() . "\n";
echo "Add Parent and Child Variables: " . $child2_2->addParentAndChildVariable() . "\n";
echo "Power (2^3): " . $child2_2->power(2, 3) . "\n";

// Для ChildClass3
echo "\nChildClass3 methods:\n";
echo "Subtract Variables: " . $child3->subtractVariables() . "\n";
echo "Subtract Parent and Child Variables: " . $child3->subtractParentAndChildVariable() . "\n";
echo "Power (2^3): " . $child3->power(2, 3) . "\n";

?>