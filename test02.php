<?php
$adapter = include 'bootstrap.php';

$artistTable = new Zend\Db\TableGateway\TableGateway('artist', $adapter);
$artistTable->setSequence('artist_id_seq');

$result = $artistTable->insert(array(
    'name' => 'New Artist',
    'history' => 'This is the history'
));

$id = $artistTable->getLastInsertValue();

assert_example_works($result === 1, true);

$artistTable = new Zend\Db\TableGateway\TableGateway('artist', $adapter);
$rowset = $artistTable->select(array('id' => $id));
$row = $rowset->current();

$name = $row['name'];
assert_example_works($name == 'New Artist');
