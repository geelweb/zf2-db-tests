#ZF2 DB Tests

Some tests to check the updates made on this branch to handle sequence name on
PostreSQL
https://github.com/geelweb/zf2/tree/handle-postgres-sequences

The tests are based on the example-07.php file of the ralphschindler /
Zend_Db-Examples repository

https://github.com/ralphschindler/Zend_Db-Examples/blob/master/example-07.php

## test01.php
The basic version with the sequence name set to getLastGeneratedValue()

## test02.php
Set the sequenceName to the tableGateway

## test03.php
Use the Metadata and SequenceHelper features
