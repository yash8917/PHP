<?php
echo "<form action='$_SERVER[PHP_SELF]' method='post'>
    <label>Enter Numerator</label><input type='number' name='num'><br>
    <label>Enter Denominator</label><input type='number' name ='deno'><br>
    <input type='submit' name='result' value='result'></form>";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $num = $_POST['num'];
        $denom = $_POST['deno'];

        class NumberIsGreater extends Exception{
            function errorMessage(){
                return $this->getMessage();
            }
        }
        class NumberIsNegative extends Exception{
            function errorMessage(){
                return $this->getMessage();
            }
        }
        class NumberIsZero extends Exception{
            function errorMessage(){
                return $this->getMessage();
            }
        }
        try{
            if($denom == 0){
                throw new NumberIsZero("Please provide a valid number except zero");
            }
            if($denom > $num){
                throw new NumberIsGreater("Please Provide a valid less than $num");
            }
            if($denom < 0){
                throw  new NumberIsNegative("Please provide the Positive Number");
            }
        }catch(NumberIsZero $e){
         echo  $e->getMessage();

        }
        catch (NumberIsGreater $eg){
            echo $eg->getMessage();
        }
        catch(NumberIsNegative $eh){
            echo $eh->getMessage();
        }
        echo "Answer : ".$num/$denom;
    }
