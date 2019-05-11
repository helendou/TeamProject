<?php


            if($_SERVER['REQUEST_METHOD'] == 'POST') {


                $firstnameParent = $_POST['firstnameParent'];
                $nameParent = $_POST['nameParent'];
                $lastname_child = $_POST['lastname_child'];
                $firstname_child = $_POST['firstname_child'];
                $school = $_POST['school'];
                $age = $_POST['age'];
                $monday = $_POST['monday'];
                $tuesday = $_POST['tuesday'];
                $wednesday = $_POST['wednesday'];
                $thursday = $_POST['thursday'];
                $friday = $_POST['friday'];

               echo "<h2> Person Information </h2>"
                if (empty($_POST["firstnameParent"])) {
                    echo "please enter the first name of parent";
                }else{
                    echo "The firstname of parent is : ".$firstnameParent." <br>";
                }

                if (empty($_POST["nameParent"])) {
                    echo "please enter the last name of parent";
                }else{
                    echo "The lastname of parent is: ".$nameParent." <br>";
                }

                if (empty($_POST["firstname_child"])) {
                    echo "please enter the first name of your child";
                }else{
                    echo "The firstname of child is: ".$firstname_child." <br>";
                }

                if (empty($_POST["firstnameParent"])) {
                    echo "please enter the last name of your child";
                }else{
                    echo "The lastname of child is: ".$lastname_child." <br>";
                }

                if (empty($_POST["school"])) {
                    echo "please enter the school name of your child";
                }else{
                    echo "The name of schoos is : ".$school." <br>";
                }

                if (empty($_POST["age"])) {
                    echo "please enter the age of your child";
                }else{
                    echo "The age of child is : ".$age." <br>";
                }
                echo "<h2>Your weekly order menu is as following: </h2>";
                if($monday == 1) {
                echo "Monday: Poulet general tao <br>";
                 }else if($monday == 2) {
                  $option = "Monday: Pate Chinois <br>";
                  echo $option;
                }

                if($tuesday ==1) {
                  echo "Tuesday: Macaroni Fromage <br>";
                }else if($tuesday == 2) {
                   echo "Tuesay: Hamburger <br>";
                }

                if($wednesday ==1) {
                echo "Wednesday: Spaghetti <br>";
                }else if($wednesday == 2) {
                  echo "Wednesday: Lasagne <br>";
                }

                if($thursday == 1) {
                echo "Thursday:Pennine sauce viande <br>";
                }else if($thursday == 2) {
                  echo "Thursday: Pizza tamate fromage <br>";
                }

                if($friday == 1) {
                echo "Friday: Pilaf au saumon <br>" ;
                }else if($friday == 2) {
                echo "Friday: Pad thai au poulet";
                }

            }

            ?>
