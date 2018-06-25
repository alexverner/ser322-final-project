<?php
    $selected='';

    function getQuerySelection($select){
        $queries=array("Select Query"=>1,
                        "Top Scorers"=>2,
                        "Top Teams"=>3);
                        //TODO: add query titles
        
        $options='';
                
        foreach($queries as $k=>$v){        
            if($select==$v){        
                $options.='<option value="'.$v.'" selected>'.$k.'</option>';        
            } else{        
                $options.='<option value="'.$v.'">'.$k.'</option>';    
            }        
        }

        return $options;        
    }

    if(isset($_POST['queries'])){
        $selected= $_POST['queries'];
    }
?>