<?php
    $selected='';

    function getQuerySelection($select){
        $queries=array("Select Query"=>1,
                       "Group B Stadiums"=>2,
                       "Cristiano Ronaldo Matches"=>3,
                       "Top Teams by Group"=>4,
                       "Top Scorers"=>5,
                       "Youngest Players"=>6);
                       
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