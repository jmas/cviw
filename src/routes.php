<?php
// Routes

$app->get('/', function ($request, $response, $args) {
    $selectStatement = $this->db->select()
        ->from('gallery');
    $stmt = $selectStatement->execute();
    $galleries = $stmt->fetchAll();
    return $this->renderer->render($response, 'index.phtml', [
        'galleries' => $galleries,
    ]);
});
$app->get('/gallery/{galleryId}[/image/{imageId}]', function ($request, $response, $args) {
    $galleryId = $request->getAttribute('galleryId', null);
    $imageId = $request->getAttribute('imageId', null);
    return $this->renderer->render($response, 'view.phtml', [
        'galleryId' => $galleryId,
        'imageId' => $imageId,
    ]);
});

$app->post('/gallery/{galleryId}/image/{imageId}/view', function ($request, $response, $args) {
    return $response->withJson(true);
});

$app->post('/gallery/{galleryId}/image/{imageId}/favorite', function ($request, $response, $args) {
    return $response->withJson(true);
});

$app->get('/gallery/{galleryId}/images', function ($request, $response, $args) {
    $galleryId = $request->getAttribute('galleryId', null);
    $selectStatement = $this->db->select()
        ->from('image')
        ->where('gallery_id', '=', $galleryId);
    $stmt = $selectStatement->execute();
    $data = $stmt->fetchAll();
    return $response->withJson($data);
});
