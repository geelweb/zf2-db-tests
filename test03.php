<?php
$adapter = include 'bootstrap.php';

use Zend\Db\Adapter\Driver\Pgsql\Feature\SequenceHelper,
    Zend\Db\TableGateway\Feature\MetadataFeature;

$artistTable = new Zend\Db\TableGateway\TableGateway('artist', $adapter, array(new MetadataFeature, new SequenceHelper));

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

