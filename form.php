<?php


class Form{

    private $data;
    public $surround = 'p';
    public $surroundH3 = 'h3';
    private $gender = ['Female', 'Male', 'Other'];

    public function __construct($data){
        $this->data = $data;
    }

    private function surround($html){
        return "<{$this->surroundH3}>$html</{$this->surroundH3
        }>";
    }

    //function which will show the value of $data in the form
    private function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }


    public function input($name){
       return $this->surround( $name .'<input type ="text" name=" ' . $name
           . ' " value="' .$this->getValue($name) .'"> ');
    }

    public function select($name){
      echo $this->surround($name .'<select name="' .$name .'">
        <option value="">Select..</option>');

        foreach ($this->gender as $value) {
           echo  "<option value='$value'> $value</option>";

        }
        echo '</select>';
    }

    public function textarea($text){
        return $this->surround('<label for="textarea">Leave your feedback</label>
  <textarea name="textarea" rows="4" cols="50"></textarea>
  <br>');
    }

    public function radioInput($label){
       return '<input type="radio" name="radioInput" value="">
<label for="html">HTML</label><br>';
    }

    public function submit()
    {
        return $this->surround('<button type ="submit"> Send</button>');
    }

}



