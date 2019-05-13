<?php
    Class Foods{
      public $food_id;
      public $food_name;
      public $price;
      public $QtyOnHand;
      public $img;

      function __construct($food_id,$food_name,$price,$QtyOnHand,$img){
        $this->food_id=$food_id;
        $this->food_name=$food_name;
        $this->price=$price;
        $this->QtyOnHand=$QtyOnHand;
        $this->img=$img;

        echo "Foods Constructed :" . this->food_name ."<br />";
      }

    }

?>
