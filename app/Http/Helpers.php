<?php

function getOffer($level, $gender)
{
    switch([$level, $gender]) {
        case ['G', 'F']:
            return '<span class="big">&pound;50<br></span>Colour &amp; Cut package';
            break;
        case ['S', 'F']:
            return '<span class="big">&pound;60<br></span>Colour &amp; Cut package';
            break;
        case ['SS', 'F']:
            return '<span class="big">&pound;70<br></span>Colour &amp; Cut package';
            break;
        case ['G', 'M']:
            return '<span class="big">&pound;10<br></span>Men\'s Cut &amp; Style';
            break;
        case ['S', 'M']:
            return '<span class="big">&pound;15<br></span>Men\'s Cut &amp; Style';
            break;
        case ['SS', 'M']:
            return '<span class="big">&pound;20<br></span>Men\'s Cut &amp; Style';
            break;
        default:
            return '<span class="big">&pound;30% off</span>';
    }
}

function getOffer2($level, $gender)
{
    switch([$level, $gender]) {
        case ['G', 'F']:
            return '<span class="big">&pound;50<br></span>Colour &amp; Cut package<br><em>PLUS:</em><br>2 FREE products<br><em>or</em><br><span class="big">&pound25</span><br>Cut &amp; Style<br><em>PLUS:</em><br>a Free product';
            break;
        case ['S', 'F']:
            return '<span class="big">&pound;60<br></span>Colour &amp; Cut package<br><em>PLUS:</em><br>2 FREE products<br><em>or</em><br><span class="big">&pound30</span><br>Cut &amp; Style<br><em>PLUS:</em><br>a Free product';
            break;
        case ['SS', 'F']:
            return '<span class="big">&pound;70<br></span>Colour &amp; Cut package<br><em>PLUS:</em><br>2 FREE products<br><em>or</em><br><span class="big">&pound35</span><br>Cut &amp; Style<br><em>PLUS:</em><br>a Free product';
            break;
        case ['G', 'M']:
            return '<span class="big">&pound;10<br></span>Men\'s Cut &amp; Style<br><em>PLUS:</em><br>a FREE product';
            break;
        case ['S', 'M']:
            return '<span class="big">&pound;15<br></span>Men\'s Cut &amp; Style<br><em>PLUS:</em><br>a FREE product';
            break;
        case ['SS', 'M']:
            return '<span class="big">&pound;20<br></span>Men\'s Cut &amp; Style<br><em>PLUS:</em><br>a FREE product';
            break;
        default:
            return '<span class="big">&pound;30% off</span><br> your next visit<br><em>PLUS:</em><br>a FREE product with each service you have';
    }
}

function getStylists($cut, $colour, $gender)
{
        if($gender == 'F')
        {
            if($colour == 0)
            {
                $colour = $cut;
            }
            
            $total = ($cut + $colour) / 2;
        
            if($total < 3)
            {
                return "Abbie Clarke";
            }
            
            if($total >= 3 && $total < 4)
            {
                return "Kate O Halloran, Tash Bailey &amp; Louise Bailey";
            }
            
            if($total >= 4 && $total < 5)
            {
                return "Leon Pritchard, Jo Mahoney &amp; Michelle Railton";
            }
            
            if($total >= 5)
            {
                return "Kellie Reedy &amp; Izzy Lamb";
            }
            
            else
            {
                return "Kate O Halloran, Tash Bailey &amp; Louise Bailey";
            }
        }
        
        elseif($gender == 'M')
        {
            if($cut < 3)
            {
                return "Abbie Clarke";
            }
            
            elseif($cut >= 3 && $cut < 4)
            {
                return "Kate O Halloran, Tash Bailey &amp; Louise Bailey";
            }
            
            elseif($cut >= 4 && $cut < 5)
            {
                return "Leon Pritchard, Jo Mahoney &amp; Michelle Railton";
            }
            
            elseif($cut >= 5)
            {
                return "Kellie Reedy &amp; Izzy Lamb";
            }
            
            else
            {
                return "Kate O Halloran, Tash Bailey &amp; Louise Bailey";
            }
        }
}

function getTreatment($texture, $condition)
{
    switch([$texture, $condition]) {
        case ['fine', 'dry']:
            return "Moisture";
            break;
        case ['fine', 'normal']:
            return "Volumising";
            break;
        case ['fine', 'oily']:
            return "Deep Cleansing";
            break;
        case ['fine', 'overprocessed']:
            return "Repair Rescue";
            break;
        case ['normal', 'dry']:
            return "Moisture";
            break;
        case ['normal', 'normal']:
            return "Relaxing";
            break;
        case ['normal', 'oily']:
            return "Deep cleansing";
            break;
        case ['normal', 'overprocessed']:
            return "Fibre Force";
            break;
        case ['coarse', 'dry']:
            return "Intense Moisture";
            break;
        case ['coarse', 'normal']:
            return "Smoothing";
            break;
        case ['coarse', 'oily']:
            return "Deep cleansing";
            break;
        case ['coarse', 'overprocessed']:
            return "Fibre Force";
            break;
        default:
            return "";
    }
}

function removeTag($string)
{
    return $removed = substr(strstr($string," "), 1);
}

function addTag($string)
{
    if(starts_with($string, '*H1'))
    {
        $string = str_replace('*H1', '', $string);
        
        return '<h3>' . $string . '</h3>';
    }
    if(starts_with($string, '*LNK'))
    {
        $string = str_replace('*LNK', '', $string);
        
        return '<p>' . $string . '</p>';
    }
    if(starts_with($string, '*BLD'))
    {
        $string = str_replace('*BLD', '', $string);
        
        return '<p><strong>' . $string . '</strong></p>';
    }
    if(starts_with($string, '*IMG'))
    {
        $string = str_replace('*IMG', '', $string);
        
        return '<img src="' . $string . '" class="large-image" width="50%" height="50%">';
    }
    else {
        return '<p>' . $string . '</p>';
    }
}

function limit_news_words($string)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,20));
}

function limit_words($string)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,30));
}

function remove_client($string)
{
    $string = str_replace('Client: ', '', $string);
    
    return $string;
}

function remove_staff($string)
{
    $string = str_replace('Staff: ', '', $string);
    
    return $string;
}