<?php

for ($i = 1; isset($hosts[$i - 1]); $i++) {
    $cfg['Servers'][$i]['auth_type'] = 'cookie'; 
}

