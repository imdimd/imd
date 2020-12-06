<?php
shell_exec('clear');
$shellphish="shellphish";
$CamPhish="CamPhish";
$nexphisher="nexphisher";
$zphisher="zphisher";
$ngrok="ngrok";
$Tbomb="Tbomb";
$phoneinfoga='PhoneInfoga';
$IPGeoLocation='IPGeoLocation';
$CyberScan='CyberScan';
echo  "\e[0m\e[92m   ____    __   __    _ _     \e[0m\n";
echo  "\e[0m\e[92m  |_  _|  |  \_/  |  |  _ \   \e[0m\n";
echo  "\e[0m\e[92m    ||    | |\_/| |  | | | |  \e[0m\n";
echo  "\e[0m\e[92m   _||_   | |   | |  | |_| |  \e[0m\n";
echo  "\e[0m\e[92m  |____|  |_|   |_|  |_ _ /   \e[0m\n";
echo  "\n\n";
echo "  \e[31m WELCOME TO I-M-D TOOLS \e[0m\n\n\n";

echo  "     \e[1;31m[\e[0m\e[1;77m01\e[0m\e[1;31m]\e[0m\e[1;93m shellphish \n";
echo  "     \e[1;31m[\e[0m\e[1;77m02\e[0m\e[1;31m]\e[0m\e[1;93m camphish\n";
echo  "     \e[1;31m[\e[0m\e[1;77m03\e[0m\e[1;31m]\e[0m\e[1;93m nexphisheer \n";
echo  "     \e[1;31m[\e[0m\e[1;77m04\e[0m\e[1;31m]\e[0m\e[1;93m ngrok \n";
echo  "     \e[1;31m[\e[0m\e[1;77m05\e[0m\e[1;31m]\e[0m\e[1;93m Tbomb \n";
echo  "     \e[1;31m[\e[0m\e[1;77m06\e[0m\e[1;31m]\e[0m\e[1;93m zphisher \e[0m\n";
echo  "     \e[1;31m[\e[0m\e[1;77m07\e[0m\e[1;31m]\e[0m\e[1;93m phoneinfoga \e[0m\n";
echo  "     \e[1;31m[\e[0m\e[1;77m08\e[0m\e[1;31m]\e[0m\e[1;93m IPgeolocation \e[0m\n";
echo  "     \e[1;31m[\e[0m\e[1;77m09\e[0m\e[1;31m]\e[0m\e[1;93m CyberScan \e[0m\n";
echo "\n";
$tool=readline("  the number of the tool you want install  : ");
echo "\n";

if ($tool==1) {
    if (is_dir($shellphish) === true) {
        echo "  \e[31m This tool is already installed \e[0m\n\n\n";
        
    }
    else {
        shell_exec('git clone https://github.com/suljot/shellphish');
    }
}
elseif($tool==2) {
    if (is_dir($CamPhish) === true) {
        echo "  \e[31m This tool is already installed \e[0m\n\n\n";
    }   
    else {
        shell_exec('git clone https://github.com/techchipnet/CamPhish');
    } 
    
}
elseif ($tool==3) {
    if (is_dir($nexphisher) === true) {
        echo "  \e[31m This tool is already installed \e[0m\n\n\n";
        
    }
    else {
        shell_exec('git clone https://github.com/htr-tech/nexphisher ');
    }
    
}
elseif ($tool==4) {
        if (is_dir($ngrok) === true) {
            echo "  \e[31m This tool is already installed \e[0m\n\n\n";
            
        }
        else{
            shell_exec('git clone https://github.com/imdimd/ngrok');
        }
}
elseif ($tool==5) {
    if (is_dir($Tbomb) === true) {
        echo "  \e[31m This tool is already installed \e[0m\n\n\n";
        
    }
    else{
        shell_exec('git clone https://github.com/TheSpeedX/TBomb');
    }
}
elseif ($tool==6) {
    if (is_dir($zphisher) === true) {
        echo "  \e[31m This tool is already installed \e[0m\n\n\n";
        
    }
    else {
        shell_exec('git clone git://github.com/htr-tech/zphisher'); 
    }

    
}
elseif ($tool==7) {
    if (is_dir($phoneinfoga) === true) {
        echo "  \e[31m This tool is already installed \e[0m\n\n\n";
        
    }
    else {
        shell_exec('git clone https://github.com/ExpertAnonymous/PhoneInfoga'); 
    }

    
}
elseif ($tool==8) {
    if (is_dir($phoneinfoga) === true) {
        echo "  \e[31m This tool is already installed \e[0m\n\n\n"; 
        
    }
    else {
        shell_exec('git clone https://github.com/maldevel/IPGeoLocation'); 
    }

    
}
elseif ($tool==9 ) {
    if (is_dir($CyberScan) === true) {
        echo "  \e[31m This tool is already installed \e[0m\n\n\n"; 
        
    }
    else {
        shell_exec('git clone https://github.com/medbenali/CyberScan'); 
    }

    
}
else{
    echo "\e[31m There is no tool with that number \e[0m\n\n\n";
}
?>
