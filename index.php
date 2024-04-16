 <html>
 <head>
 <title>OOPS</title>
 </head>
 <body>
 <h4><u>PHP OOPS</u></h4>
   <h5>CLASS</h5>
    <?php
    class Calc
    {
        public $a, $b, $c; // Properties
        public function add()
        { // Method1
            $this->c = $this->a + $this->b;
            return $this->c;
        }
        public function sub()
        { // Method2
            $this->c = $this->a - $this->b;
            return $this->c;
        }
    }
    $obj = new Calc();
    $obj->a = 18;
    $obj->b = 35;
    echo "Total : " . $obj->add() . "<br><br>"; // Function Call1
    echo "Sub : " . $obj->sub();  // Function Call2
    ?>

    <h5>CONSTRUCTOR</h5>
    <?php
    class Calculate
    {
        public $a, $b, $c; // Properties
    
        // function __construct(){
        //     echo "Construct Called";
        // } // Default Constructor
        function __construct($a, $b)   // Parameter Constructor
        {
            $this->a = $a;
            $this->b = $b;
        }
        public function add()
        { // Method1
            $this->c = $this->a + $this->b;
            return $this->c;
        }
        public function mul()
        { // Method2
            $this->c = $this->a * $this->b;
            return $this->c;
        }
    }
    $obj = new Calculate(27, 11);
    echo "Total : " . $obj->add() . "<br><br>"; // Function Call1
    echo "Sub : " . $obj->mul();  // Function Call2
    ?>
	</body>
	</html>