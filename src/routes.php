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
    $imageId = $request->getAttribute('imageId', null);
    $insertStatement = $this->db->insert(array('user_id', 'image_id', 'create_date'))
        ->into('user_view_image')
        ->values(array(1, $imageId, time()));
    return $response->withJson($insertStatement->execute(false) !== false);
});

$app->post('/gallery/{galleryId}/image/{imageId}/favorite', function ($request, $response, $args) {
    return $response->withJson(true);
});

$app->get('/gallery/{galleryId}/images', function ($request, $response, $args) {
    $galleryId = $request->getAttribute('galleryId', null);
    $selectStatement = $this->db->select(['image.*', 'user_view_image.create_date AS view_date'])
        ->from('image')
        ->leftJoin('user_view_image', 'image.id', '=', 'user_view_image.image_id')
        ->where('image.gallery_id', '=', $galleryId);
    $stmt = $selectStatement->execute();
    $data = $stmt->fetchAll();
    foreach ($data as $i => $item) {
        $data[$i]['description'] = htmlspecialchars($data[$i]['description']);
        $data[$i]['image_url'] = str_replace('https', 'http', $data[$i]['image_url']);
        $data[$i]['viewed'] = (! empty($data[$i]['view_date']));
    }
    return $response->withJson($data);
});

$app->get('/update', function ($request, $response, $args) {
    return 'response';
});
