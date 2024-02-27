<?php

// variables can change type at any time simply by reassignment

// you may convert simple types like int to array or vice-versa
$a = 1;
$a = array(1,2,3);
$a = 2;

// BUT you cannot treat simple types as COMPLEX types
// array index will not work on simple types
$a = 0; // will not work
$a['1'] = 'a'; // will not work

// similarily object field will not work on simple types
$a = 0; // will not work
$a->field = 1; // will not work

// special case:
// if type is null already, it will be converted to array on the fly, no error in this case
$a = null; // works
$a['1'] = 'a'; // works



