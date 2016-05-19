<?php

require(__DIR__ . '/_base.php');

/**
 * @param $pageId
 * @param int $limit
 * @param string $after
 * @return mixed
 * @throws Exception
 */
function fetchFacebookPhotos ($pageId, $limit=500, $after='') {
    $requestUrl = 'https://graph.facebook.com/' . $pageId . '/photos'
        . '?pretty=0&fields=images%2Cname%2Ccreated_time%2Calbum'
        . '&type=uploaded&limit=' . $limit . ($after ? '&after=' . $after: '')
        . '&access_token=' . FB_APP_ID . '|' . FB_APP_SECRET;
    $content = file_get_contents($requestUrl);
    if ($content === false) {
        throw new Exception("Can't do HTTP request to retrieve photos from Facebook Graph.");
    }
    return json_decode($content, true);
}

function fetchDeveloperslifeGifs ($pageId) {
    $requestUrl = 'http://developerslife.ru/latest/' . $pageId;
    $content = file_get_contents($requestUrl);
    if ($content === false) {
        throw new Exception("Can't do HTTP request to retrieve photos from Facebook Graph.");
    }
    $matches = [];
    $pageMatches = [];
    preg_match_all('/<div class="gif">.+?<img.+?src="(http[^"]+?\.gif)".+?alt="([^"]+?)".+?\/(\d+?)#comments/is', $content, $matches, PREG_SET_ORDER);
    preg_match('/<a href="\/latest\/(\d+?)" class="jslink nextPage">/', $content, $pageMatches);
    return [
        'data' => $matches,
        'nextPageId' => (! empty($pageMatches) ? $pageMatches[1]: null),
    ];
}

/**
 * @return array
 * @throws Exception
 */
function fetchGalleriesImages () {
    $galleries = getGalleries();
    $images = [];
    foreach ($galleries as $gallery) {
        $outerType = substr($gallery['outer_id'], 0, strpos($gallery['outer_id'], '://'));
        $outerId = substr($gallery['outer_id'], strpos($gallery['outer_id'], '://')+3);
        $newestGalleryImage = getNewestGalleryImage($gallery['id']);
        $newestGalleryImageDate = $newestGalleryImage ? $newestGalleryImage['create_date']: 0;
        print('fetch-' . $outerType . "\n");
        switch ($outerType) {
            // facebook
            case 'fb':
                $after = '';
                while (true) {
                    $response = fetchFacebookPhotos($outerId, 1000, $after);
                    if (empty($response) || empty($response['paging'])) {
                        break;
                    }
                    $after = $response['paging']['cursors']['after'];
                    $isNewestFetched = false;
                    foreach ($response['data'] as $dataItem) {
                        $dataItemCreateDate = strtotime($dataItem['created_time']);
                        if ($dataItemCreateDate > $newestGalleryImageDate) {
                            $images[] = [
                                'gallery_id' => $gallery['id'],
                                'outer_id' => 'fb-image://' . $dataItem['id'],
                                'description' => ! empty($dataItem['name']) ? $dataItem['name']: '',
                                'image_url' => $dataItem['images'][0]['source'],
                                'create_date' => strtotime($dataItem['created_time']),
                            ];
                        } else {
                            $isNewestFetched = true;
                            break;
                        }
                    }
                    if ($isNewestFetched) {
                        break;
                    }
                }
                break;
            case 'devlife':
                $pageId = 0;
                while (true) {
                    print('fetch-devlife-page-' . $pageId . "\n");
                    $response = fetchDeveloperslifeGifs($pageId);
                    if (empty($response['nextPageId'])) {
                        break;
                    }
                    $isNewestFetched = false;
                    foreach ($response['data'] as $dataItem) {
                        $itemOuterId = 'devlife-image://' . $dataItem[3];
                        if ($newestGalleryImage && $newestGalleryImage['outer_id'] === $itemOuterId) {
                            $isNewestFetched = true;
                            break;
                        }
                        $images[] = [
                            'gallery_id' => $gallery['id'],
                            'outer_id' => $itemOuterId,
                            'description' => ! empty($dataItem[2]) ? $dataItem[2]: '',
                            'image_url' => $dataItem[1],
                            'create_date' => time() + (int)$dataItem[3],
                        ];
                    }
                    if ($isNewestFetched) {
                        break;
                    }
                    $pageId = $response['nextPageId'];
                }
                break;
        }
        print('images-count: ' . count($images) . "\n");
    }
    return $images;
}

/**
 * Main logic.
 */
function run () {
    $images = fetchGalleriesImages();
    if (count($images) > 0) {
        if (insertImagesBatch($images)) {
            print('imported: ' . count($images) . "\n");
        } else {
            print('import-problem');
        }
    } else {
        print('no-new-images' . "\n");
    }
}

// do it!
run();
