<?php

require __DIR__ . '/../vendor/autoload.php';

$settings = require(__DIR__ . '/../src/settings.php');
$settings = $settings['settings'];

$db = new \Slim\PDO\Database($settings['db']['dsn'], $settings['db']['user'], $settings['db']['password']);

/**
 * @param $galleryId
 * @return mixed
 */
function getNewestGalleryImage ($galleryId) {
    global $db;
    $selectStatement = $db->select()
        ->from('image')
        ->where('gallery_id', '=', $galleryId)
        ->orderBy('create_date', 'DESC');
    $stmt = $selectStatement->execute();
    return $stmt->fetch();
}

/**
 * @return mixed
 */
function getGalleries () {
    global $db;
    $selectStatement = $db->select()
        ->from('gallery');
    $stmt = $selectStatement->execute();
    return $stmt->fetchAll();
}

/**
 * @param $images
 * @return bool
 */
function insertImagesBatch ($images) {
    global $db;
    $colNames = [];
    $batchValues = [];
    foreach ($images as $image) {
        $values = [];
        foreach ($image as $colName => $value) {
            if (!in_array($colName, $colNames)) {
                $colNames[] = $colName;
            }
            $values[] = $db->quote($value);
        }
        $batchValues[] = '(' . implode(',', $values) . ')';
    }
    $sql = 'INSERT INTO image (' . implode(',', $colNames) . ') VALUES ' . implode(',', $batchValues);
    return $db->query($sql) !== false;
}
