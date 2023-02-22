<?php 
    class Form {
        var $fields=Array();
        var $action;
        var $submit=" ";
        var $jumField=0;
    
        function __construct($action,$submit){
            $this->action=$action;
            $this->submit=$submit;
        }

        function DisplayForm(){
            $txt = "<form action='".$this->action."'method='post'>";
            $txt .= "<table width='100%'";
            for ($i=0; $i <$this->jumField; $i++) {  
                
                    $txt .= "<tr>
                        <td align='right'>" .$this->fields[$i]['label']. "</td>";
                    $txt .= "<td><input type='text' name='".$this->fields[$i]['name']."'></td>
                        </tr>";

            }
            $txt.= "<tr>
                    <td><input type='submit' name='tombol' value='".$this->submit."'></td>
                </tr>";
            $txt.= "</table>";
            return $txt;
        }
        function AddField($name,$label){
            $this->fields[$this->jumField]['name']=$name;
            $this->fields[$this->jumField]['label']=$label;
            $this->jumField++;
        }
        function GetData(){
            for ($i=0; $i < $this->jumField;$i++) {
                $data[$i]=$_POST[$this->fields[$i]['name']];
            }
            return $data;
        }
    }
?>