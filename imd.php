<?php
shell_exec('clear');
$shellphish="shellphish";
$CamPhish="CamPhish";
$nexphisher="nexphisher";
$zphisher="zphisher";
$ngrok="ngrok";
$Tbomb="Tbomb";
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
echo "\n";
$tool=readline("  the number of the tool you want install  : ");
echo "\n";

if ($tool==1) {
    if (is_dir($shellphish) === true) {
        shell_exec('rm -fr shellphish');
        shell_exec('git clone https://github.com/suljot/shellphish');
        
    }
    else {
        shell_exec('git clone https://github.com/suljot/shellphish');
    }
}
elseif($tool==2) {
    if (is_dir($CamPhish) === true) {
        shell_exec('rm -fr CamPhish');
        shell_exec('git clone https://github.com/techchipnet/CamPhish');
    }   
    else {
        shell_exec('git clone https://github.com/techchipnet/CamPhish');
    } 
    
}
elseif ($tool==3) {
    if (is_dir($nexphisher) === true) {
        shell_exec('rm -fr nexphisher');
        shell_exec('git clone https://github.com/htr-tech/nexphisher ');
        
    }
    else {
        shell_exec('git clone https://github.com/htr-tech/nexphisher ');
    }
    
}
elseif ($tool==4) {
        if (is_dir($ngrok) === true) {
            shell_exec('rm -fr ');
            shell_exec('git clone https://github.com/imdimd/ngrok');
            
        }
        else{
            shell_exec('git clone https://github.com/imdimd/ngrok');
        }
}
elseif ($tool==5) {
    if (is_dir($Tbomb) === true) {
        shell_exec('rm -fr Tbomb');
        shell_exec('git clone https://github.com/TheSpeedX/TBomb');
        
    }
    else{
        shell_exec('git clone https://github.com/TheSpeedX/TBomb');
    }
}
elseif ($tool==6) {
    if (is_dir($zphisher) === true) {
        shell_exec('rm -fr zphisher');
        shell_exec('rm -fr git clone git://github.com/htr-tech/zphisher'); 
        
    }
    else {
        shell_exec('rm -fr git clone git://github.com/htr-tech/zphisher'); 
    }

    
}
else{
    echo "\e[31m There is no tool with that number \e[0m\n\n\n";
}
?>
