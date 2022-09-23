<?php
//
//2. Write a PHP script to split the following string. 
//Sample string : '082307';
//Expected Output : 08:23:07
echo substr(chunk_split('081207',2,':'),0 ,-1);


