<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/gallery/{galleryId}/image/{imageId}', function ($request, $response, $args) {
    $galleryId = ! empty($args['galleryId']) ? (int) $args['galleryId']: null;
    $imageId = ! empty($args['imageId']) ? (int) $args['imageId']: null;

    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
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

$app->get('/gallery/{galleryId}/images', function () {
    return '[{
      "id": 0,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13239929_10154142314318904_5178979300644860377_n.png?oh=b11860a7f73ca321d6476fa0e78aa4d0&oe=57D63AD5",
      "text": "#boss #wally #work",
      "date": "2016-05-13T13:35:55+0000"
    }, {
      "id": 1,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13178870_10154140330408904_5232085001186560806_n.png?oh=2cfea4f5c6239464d2157084b0379715&oe=57DF0DCF",
      "text": "#dilbert #wally #boss #complexity",
      "date": "2016-05-12T17:21:13+0000"
    }, {
      "id": 2,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13220993_10154135104318904_7011538258232595621_n.png?oh=7e09a4d6c5af3f0e8d476ce4239c6a8b&oe=579A8D16",
      "text": "#alice #tina #hovard #romance",
      "date": "2016-05-10T14:30:23+0000"
    }, {
      "id": 3,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11217822_10154132405208904_5876572238751235663_n.png?oh=6e3e5af5d969094c604d03701062b158&oe=57E598CB",
      "text": "#dilbert #hovard #tina #romance",
      "date": "2016-05-09T14:24:16+0000"
    }, {
      "id": 4,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13119049_10154129341053904_4704313949744637187_n.png?oh=a2d19f374fb3be6328314bf5de7e519a&oe=57D66804",
      "text": "#dilbert #boss #average #performance",
      "date": "2016-05-08T13:10:50+0000"
    }, {
      "id": 5,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13174009_10154126532638904_7201532020896047104_n.png?oh=e0bf89d1db1844b242541153b8dd98a1&oe=57AB4B8B",
      "text": "#boss #entitled #employee #pay",
      "date": "2016-05-07T11:57:11+0000"
    }, {
      "id": 6,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13177425_10154126868433904_8102676226879314649_n.png?oh=68e80d59d177430756f1b88a3a65c59f&oe=57E04045",
      "text": "#dilbert #entitled #employee #work",
      "date": "2016-05-07T14:58:37+0000"
    }, {
      "id": 7,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13179378_10154126530283904_670731523143909541_n.png?oh=39b9963156e646fd90ec623c16fbe94c&oe=57D860D7",
      "text": "#dilbert #wally #ted #project #advice",
      "date": "2016-05-07T11:55:27+0000"
    }, {
      "id": 8,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13100709_10154121757363904_2658288835525933419_n.png?oh=558927751383281e9d3f75c503af1741&oe=57AA0933",
      "text": "#dilbert #ted #project #suspense",
      "date": "2016-05-05T14:23:11+0000"
    }, {
      "id": 9,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13173685_10154117553578904_926626072213057594_n.png?oh=1d8a944f95020f1fa33d1fec1efee7a3&oe=57DADC55",
      "text": "#dilbert #ted #project #suspense",
      "date": "2016-05-03T20:17:47+0000"
    }, {
      "id": 10,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13102757_10154117058753904_4460741084301059925_n.png?oh=ddef79d1edb4c3a9adb3f9511e6e347f&oe=5799F1F4",
      "text": "#dilbert #boss #ted #vacation",
      "date": "2016-05-03T16:09:24+0000"
    }, {
      "id": 11,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13139013_10154114207443904_2247316114376919556_n.png?oh=0ae2208c277f777340c71b358fd0fc41&oe=57D58BF9",
      "text": "#dilbert #boss #happiness #voting",
      "date": "2016-05-02T13:16:53+0000"
    }, {
      "id": 12,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13062335_10154104526458904_7320537928886365024_n.png?oh=8e6a580500cbe5db3f9fd2983992aaa7&oe=57DCFAA0",
      "text": "#dilbert #dogbert #dating",
      "date": "2016-04-28T13:50:43+0000"
    }, {
      "id": 13,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13103345_10154102678328904_1365650288782290895_n.png?oh=8da83aebe0938aa26c93e6a6a7ae343a&oe=579A6C24",
      "text": "#dilbert #girlfriend #dating #consciousness",
      "date": "2016-04-27T18:15:48+0000"
    }, {
      "id": 14,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13094307_10154099996393904_2473100487319461752_n.png?oh=f0e35cf4d776b098c80afc3c7f79fed5&oe=57DCC3A1",
      "text": "#dilbert #boss #idea #success",
      "date": "2016-04-26T15:37:25+0000"
    }, {
      "id": 15,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13043581_10154099995478904_1585164714281671818_n.png?oh=e33bf73b43deb8b62adbfcaa7be765ad&oe=57DDDD16",
      "text": "#dilbert #boss #project #doomed",
      "date": "2016-04-26T15:36:57+0000"
    }, {
      "id": 16,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13102848_10154096610843904_7055472378286301472_n.png?oh=21c38152dc925ff65f37d64d7414e405&oe=57AA2C6E",
      "text": "#dilbert #boss #robot #freedom #lunchtime",
      "date": "2016-04-25T06:21:09+0000"
    }, {
      "id": 17,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13012873_10154088544058904_7883997356772257213_n.png?oh=53673815945e08efcec932d083b2875b&oe=579F86E4",
      "text": "#dilbert #boss #security #privacy",
      "date": "2016-04-22T06:30:00+0000"
    }, {
      "id": 18,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13010872_10154086334703904_6689526004255053701_n.png?oh=c0922f83b330bc13e07b7abfa880e3cc&oe=57E6CA49",
      "text": "#dilbert #boss #security #privacy",
      "date": "2016-04-21T06:30:00+0000"
    }, {
      "id": 19,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13055296_10154082389453904_7700216386936118046_n.png?oh=1cf847c90b9819f5282a0af245f40c4a&oe=57AA96DB",
      "text": "#dilbert #boss #products #security #privacy #apple",
      "date": "2016-04-19T08:13:02+0000"
    }, {
      "id": 20,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13043571_10154080507228904_2851439014813551305_n.png?oh=698255165fbce33c376a2328e48e5209&oe=57A4CA06",
      "text": "#boss #ceo #products #security #versus #privacy #apple",
      "date": "2016-04-18T14:22:06+0000"
    }, {
      "id": 21,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12994460_10154078487128904_1100873279461322363_n.png?oh=f7d296ebdf3c19cb98f2e93d2fb1826f&oe=57D9E682",
      "text": "#dilbert #boss #management #success",
      "date": "2016-04-17T18:22:47+0000"
    }, {
      "id": 22,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12990945_10154083794438904_4856138914797758314_n.png?oh=ede5d962afe965d9ea892fcd41cea10d&oe=57DF0992",
      "text": "#dilbert #boss #product #marketing",
      "date": "2016-04-19T20:18:31+0000"
    }, {
      "id": 23,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13007205_10154077441873904_7091004147427118518_n.png?oh=dcdae0333ca85a1339737c71466ce558&oe=579ACE92",
      "text": "#dilbert #boss #work #assessment #management",
      "date": "2016-04-17T09:19:13+0000"
    }, {
      "id": 24,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13000289_10154070168108904_5036825331269930468_n.png?oh=a3dda5ef024e952db0db2bb4dc0d2418&oe=57D9D2C9",
      "text": "#dilbert #boss #meeting #boredom #death",
      "date": "2016-04-14T09:39:14+0000"
    }, {
      "id": 25,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13007267_10154067603498904_2471325854799690914_n.png?oh=b984ec66fb57250a2b36aedcabdeaef6&oe=57D9037E",
      "text": "#dilbert #ted #communication",
      "date": "2016-04-13T09:58:20+0000"
    }, {
      "id": 26,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13000136_10154065026113904_196747266992227094_n.png?oh=1090a326e8edc5b8ea6fcacba767cac9&oe=579A8F94",
      "text": "#dilbert #boss #design",
      "date": "2016-04-12T08:54:31+0000"
    }, {
      "id": 27,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12994382_10154061179248904_5178451186561430200_n.png?oh=1bd0459fa14b64836976cfecd6d302e1&oe=57A6B0AC",
      "text": "#dilbert #boss #management #communication",
      "date": "2016-04-10T20:10:05+0000"
    }, {
      "id": 28,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13000305_10154069833233904_1723576630039386215_n.png?oh=324b70c5b5cd79b744deabbc134a01c7&oe=5799C2BA",
      "text": "#dilbert #boss #estimates",
      "date": "2016-04-14T05:47:32+0000"
    }, {
      "id": 29,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12670340_10154031521423904_5411848146057325029_n.png?oh=5e4afd2b60748cc5d253bd02a7f3faf2&oe=57A6CB21",
      "text": "#dilbert #interview #success #lie",
      "date": "2016-03-31T17:26:10+0000"
    }, {
      "id": 30,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12990847_10154062639448904_7930272666854532576_n.png?oh=ed92f3244d67960e0e578f71814e05f1&oe=57E0AACE",
      "text": "#asok #ceo #legacy #internship",
      "date": "2016-04-11T11:17:00+0000"
    }, {
      "id": 31,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13006603_10154062375303904_2247153184281236233_n.png?oh=0ded95203e09513ebfc38ccbd415bc85&oe=57E68957",
      "text": "#wally #boss #goals #passion",
      "date": "2016-04-11T08:37:27+0000"
    }, {
      "id": 32,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12963510_10154042268243904_8229684522869214386_n.png?oh=678d30dff4ee332cecdc7fc01420840b&oe=57DC6BFF",
      "text": "#dilbert #dick #internet #lies",
      "date": "2016-04-03T19:01:28+0000"
    }, {
      "id": 33,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12717867_10154040867203904_1477656523154557864_n.png?oh=09a5d468349bc2eb30336de451e5cb61&oe=57D82800",
      "text": "#dilbert #alice #boss #ted #duplicity #management",
      "date": "2016-04-03T08:46:31+0000"
    }, {
      "id": 34,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12472282_10154040696193904_1384393167481621639_n.png?oh=c2342dcc957dcc9f07b5c9ba663dd4a5&oe=579962AC",
      "text": "#dilbert #boss #guts",
      "date": "2016-04-03T07:10:08+0000"
    }, {
      "id": 35,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1934934_10153993389008904_1947522885099380181_n.png?oh=59b42cd6b7d46c952535e3313bd591db&oe=57A6B2D6",
      "text": "#dilbert #science #news #ratbert",
      "date": "2016-03-23T17:19:28+0000"
    }, {
      "id": 36,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12049659_10153988430898904_8714765798572669463_n.png?oh=3f510536d4a9f1c93e49e3c88e94981f&oe=57D9AD80",
      "text": "#dilbert #elbonians #belief",
      "date": "2016-03-22T15:50:45+0000"
    }, {
      "id": 37,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/535258_10153984148748904_1719841301922087478_n.png?oh=175c682ee94d8059d39762ced3f30627&oe=57A44E92",
      "text": "#boss #carol #identitythief #reputation",
      "date": "2016-03-21T17:23:27+0000"
    }, {
      "id": 38,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10363707_10153980588198904_123735011019711833_n.png?oh=dc1bb2b6b4b6c8ed1833e5b57e6baf24&oe=579C007F",
      "text": "#dilbert #mordac #information #security",
      "date": "2016-03-20T18:33:38+0000"
    }, {
      "id": 39,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10660078_10153975663728904_6136433530473496012_n.png?oh=87bedcb859f6e7eaf389c32355ded870&oe=57E380FB",
      "text": "#boss #dilbert #wally #impostor",
      "date": "2016-03-19T09:02:23+0000"
    }, {
      "id": 40,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1934244_10153973596493904_1182568590565199842_n.png?oh=c3aca490661047ceb208810c336f3db3&oe=57AA0238",
      "text": "#dilbert #dogbert #manipulation #negotiations",
      "date": "2016-03-18T18:09:28+0000"
    }, {
      "id": 41,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1934564_10153972851763904_8059688196408220656_n.png?oh=3c2a865b143febb926d3347112773bf6&oe=57E53DF6",
      "text": "#boss #dogbert #negotiations",
      "date": "2016-03-18T13:17:45+0000"
    }, {
      "id": 42,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10530930_10153966827273904_6397520246679636910_n.png?oh=4a96d074960c12b08ff475c097c6e741&oe=57AC23BB",
      "text": "#dogbert #negotiations #training",
      "date": "2016-03-16T18:30:02+0000"
    }, {
      "id": 43,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10610874_10153966339728904_535776125979890587_n.png?oh=a19e326b1d788800bf8e871c92fcf3b0&oe=57DFEF6E",
      "text": "#boss #dogbert #negotiations #expert",
      "date": "2016-03-16T13:14:05+0000"
    }, {
      "id": 44,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12832440_10153964189708904_3578855938124388087_n.png?oh=4e6258fed4ac379f8acf16dec88a2e21&oe=57A18205",
      "text": "#asok #alice #negotiations",
      "date": "2016-03-16T06:26:52+0000"
    }, {
      "id": 45,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1897008_10153957126443904_1965692393654656140_n.png?oh=ea5f97805d38d16c865487f28756eac6&oe=57A63448",
      "text": "#wally #boss #software #changes",
      "date": "2016-03-13T12:52:46+0000"
    }, {
      "id": 46,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12821572_10153957035098904_5206573846011381431_n.png?oh=2ade91f403d31d079582cfd7517f7979&oe=579D9BE7",
      "text": "#asok #dilbert #wally #negotiations",
      "date": "2016-03-13T11:54:46+0000"
    }, {
      "id": 47,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12798834_10153946766713904_8080885908550193589_n.png?oh=835d7231a3181b1c0d170cbd8bb3357f&oe=57E21A52",
      "text": "#asok #wally #dilbert #raise #negotioations",
      "date": "2016-03-11T13:43:26+0000"
    }, {
      "id": 48,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12798913_10153945913758904_9005387950721498602_n.png?oh=5ea95051602719f895beb85fa1b0397e&oe=57E32EE9",
      "text": "#asok #boss #raise #framing #anchoring",
      "date": "2016-03-11T06:55:42+0000"
    }, {
      "id": 49,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12814080_10153940397818904_2801233977886140711_n.png?oh=d1915f98d15d9162bb2d8f1255695e89&oe=57E0E7D1",
      "text": "#dilbert #boss #management #delegation",
      "date": "2016-03-10T06:30:00+0000"
    }, {
      "id": 50,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1916303_10153940379658904_6775362604905331680_n.png?oh=958623b11e958f8157b88d84bf6cfe04&oe=57D9D372",
      "text": "#ceo #catbert #motivation",
      "date": "2016-03-09T15:44:51+0000"
    }, {
      "id": 51,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12795504_10153938294558904_2002013678504910410_n.png?oh=9ccaa7a3653a2f46a4146e89b5950901&oe=5799F34C",
      "text": "#ceo #dilbert #motivation",
      "date": "2016-03-09T06:30:00+0000"
    }, {
      "id": 52,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1934500_10153937979308904_756819769490338420_n.png?oh=50cf8a1c523688ebf51653b30143b57a&oe=57A7E681",
      "text": "#alice #software #spec #agile",
      "date": "2016-03-08T18:23:52+0000"
    }, {
      "id": 53,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12801205_10153929387688904_4733083579536067244_n.png?oh=34f66d265098ce1e7fa95f12f5418119&oe=579C22B2",
      "text": "#ceo #dilbert #motivation",
      "date": "2016-03-06T13:30:00+0000"
    }, {
      "id": 54,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/6886_10153929374658904_197186183425812948_n.png?oh=5712e044c25db31c013729c6aced9e69&oe=57E1DC8B",
      "text": "#boss #dilbert #annual #plan",
      "date": "2016-03-06T08:33:36+0000"
    }, {
      "id": 55,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12814703_10153929346983904_2041343780198726944_n.png?oh=fba9d245429633d5c7434a438a00391a&oe=57E8054C",
      "text": "#wally #carol #favor",
      "date": "2016-03-05T08:37:36+0000"
    }, {
      "id": 56,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12799313_10153922340528904_5120931089712100068_n.png?oh=e8ebddaf9fd1928dd4195c66827ed1e0&oe=57DAD9C5",
      "text": "#boss #catbert #management #motivation",
      "date": "2016-03-02T09:12:53+0000"
    }, {
      "id": 57,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12809612_10153921002133904_1317003067545055815_n.png?oh=f9d738dc60bc4ee4eb5a30939a95a0e6&oe=57A6913F",
      "text": "#asok #wally #job #freedom",
      "date": "2016-03-01T17:25:29+0000"
    }, {
      "id": 58,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12814593_10153920998478904_1168169059208040506_n.png?oh=cece1ffd70d3b331176a8df854a855c7&oe=57E720FB",
      "text": "комиксы на этой неделе рисует \"приглашенная звезда\" (John Glynn)\n#asok #wally #job #freedom",
      "date": "2016-03-01T17:25:02+0000"
    }, {
      "id": 59,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12791107_10153918771253904_6236827838769874193_n.png?oh=36c42acf2927ba1630b4fa0d3e13e77e&oe=579B7C26",
      "text": "#dilbert #hacker #girlfriend #relations",
      "date": "2016-02-29T17:05:43+0000"
    }, {
      "id": 60,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12805886_10153914029923904_7576463096424712795_n.png?oh=ac8c0e6d4c43a08631b8b98cb6676b7b&oe=57ACD7CB",
      "text": "#dilbert #asok #uber #goals",
      "date": "2016-02-27T13:51:06+0000"
    }, {
      "id": 61,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12806213_10153913744498904_1279503091490418721_n.png?oh=97c0564b565dd0e7c4ecaf2df2c02cc2&oe=579B8BE7",
      "text": "#asok #boss #uber #goals",
      "date": "2016-02-27T10:43:18+0000"
    }, {
      "id": 62,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12742676_10153911499288904_3546607614920712930_n.png?oh=8dcc6ad93c9f23919d6bf0d24e3ac757&oe=57A8C55C",
      "text": "#asok #uber #goals",
      "date": "2016-02-26T10:17:59+0000"
    }, {
      "id": 63,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12745515_10153908076868904_3732482262719550215_n.png?oh=d7c438063e73885b7683072ce5e031b9&oe=57E53329",
      "text": "#asok #boss #goals",
      "date": "2016-02-25T06:30:00+0000"
    }, {
      "id": 64,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10411224_10153908000693904_5432239839169387394_n.png?oh=b31f09d891d1d0234ab8b5e7d02741fe&oe=57D6755A",
      "text": "#dilbert #catbert #policy",
      "date": "2016-02-24T19:44:06+0000"
    }, {
      "id": 65,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12733386_10153900396373904_241192632345625914_n.png?oh=19f4f7edb7f96512f8f7dab2edc3d29a&oe=57E5BCF2",
      "text": "#dilbert #carol #babysitting",
      "date": "2016-02-21T11:04:41+0000"
    }, {
      "id": 66,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12744677_10153891125318904_7657982241315900065_n.png?oh=f1cb8c8a3a9a8f79fdf7ea8661e7b045&oe=579BEABB",
      "text": "#dilbert #carol #manipulation",
      "date": "2016-02-17T09:08:21+0000"
    }, {
      "id": 67,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12742748_10153889663058904_6332257220029784683_n.png?oh=a2aeab2da2a3c9c9e6ab843b78b0255c&oe=57D4D7CC",
      "text": "#dilbert #carol #manipulation",
      "date": "2016-02-16T16:26:41+0000"
    }, {
      "id": 68,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12743712_10153887577628904_6518582311289544159_n.png?oh=38da8a5b402f2fe41c5bdabb9d582041&oe=579B944F",
      "text": "#dilbert #boss #alice #management",
      "date": "2016-02-16T06:30:00+0000"
    }, {
      "id": 69,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12741885_10153887073893904_7442188090507357699_n.png?oh=5140793f02a631a87cc9119e559c565d&oe=57A31E92",
      "text": "#dilbert #alice #boss #magic #explanation",
      "date": "2016-02-15T13:44:52+0000"
    }, {
      "id": 70,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12745445_10153882930508904_635630516139345547_n.png?oh=bf386855ae07170c260aeda23dc84dc6&oe=57D6AA8E",
      "text": "#dilbert #dogbert #fullstack #yoga",
      "date": "2016-02-13T14:27:25+0000"
    }, {
      "id": 71,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12743535_10153880417348904_5765001076912552722_n.png?oh=d7ba95a20df04eb73ade5c11be911ec3&oe=57A0D756",
      "text": "Хорошей всем осанки\n#dilbert #wally #work",
      "date": "2016-02-12T10:25:17+0000"
    }, {
      "id": 72,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12717306_10153878539033904_8695574149570009811_n.png?oh=fbfff55d4f1bc5fc0ff0c703a4bfb7e6&oe=57E6D161",
      "text": "#ceo #hr #dilbert #motivation #success",
      "date": "2016-02-11T12:28:55+0000"
    }, {
      "id": 73,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12728908_10153876575298904_4048553925276206130_n.png?oh=d17c5f87f9b0e1d170ea96c584d535e8&oe=57DDDD85",
      "text": "#dilbert #catbert #hr #motivation #quasimodo",
      "date": "2016-02-11T06:30:00+0000"
    }, {
      "id": 74,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12687772_10153874430633904_6563794176808885836_n.png?oh=78fafe50649cec33546248109eee44e4&oe=579AA795",
      "text": "#boss #dilbert #motivation",
      "date": "2016-02-10T06:30:00+0000"
    }, {
      "id": 75,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12729182_10153876574468904_163134651946058379_n.png?oh=acdc58b0ea5007003fc06db17726a741&oe=57DBE902",
      "text": "#dilbert #tina #motivation #quasimodo",
      "date": "2016-02-10T15:11:19+0000"
    }, {
      "id": 76,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12717345_10153874344618904_9219764653782934533_n.png?oh=8e59e5a7638ed9a0b9218addc5996b98&oe=57A7769B",
      "text": "#boss #carol #task",
      "date": "2016-02-09T15:46:47+0000"
    }, {
      "id": 77,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12439214_10153867084038904_5070796082912651455_n.png?oh=7c6665955173f09b265d75c746418916&oe=57DE43AE",
      "text": "#boss #dilbert #robot #control",
      "date": "2016-02-06T10:11:34+0000"
    }, {
      "id": 78,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12669584_10153865507123904_7976333575048189484_n.png?oh=665f3385a7d7a9e6ad860b112002f2de&oe=57A48AE4",
      "text": "#dilbert #boss #robot #wally",
      "date": "2016-02-05T17:15:26+0000"
    }, {
      "id": 79,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12670068_10153863950958904_1286571555287451207_n.png?oh=9d1bb35e1d292e7c430268ca845e2e04&oe=57DB8490",
      "text": "#asok #wally #dilbert #racism #support",
      "date": "2016-02-05T13:30:00+0000"
    }, {
      "id": 80,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12039758_10153863950238904_3194386198041288904_n.png?oh=19da29ce4453151100b784a91f3491a9&oe=57A67E8B",
      "text": "#asok #fbi #terrorism #rhetorics",
      "date": "2016-02-05T12:00:00+0000"
    }, {
      "id": 81,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12644973_10153863946493904_1119664040886068043_n.png?oh=0006faf9cd46501e899d5c7e36b4afca&oe=57DA9298",
      "text": "#boss #dilbert #asok #terrorism #leadership",
      "date": "2016-02-05T10:30:01+0000"
    }, {
      "id": 82,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12669582_10153863944753904_9168203035505673032_n.png?oh=e248b9077c09777d497d2281f84f9878&oe=579B05D9",
      "text": "#fbi #boss #asok #terrorism #leadership #cause",
      "date": "2016-02-05T06:35:01+0000"
    }, {
      "id": 83,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12642663_10153861454248904_7984715601532984805_n.png?oh=91dee74094edf7fe80511c11384ab12a&oe=57E7A8EE",
      "text": "#boss #asok #terrorist",
      "date": "2016-02-04T13:30:00+0000"
    }, {
      "id": 84,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12647033_10153861453663904_6200731724647974715_n.png?oh=805d1bc803667049993b16ff1dbf5b4d&oe=57DD7C48",
      "text": "#asok #dick #terrorist",
      "date": "2016-02-04T12:00:01+0000"
    }, {
      "id": 85,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12647305_10153861453043904_3300269161446069041_n.png?oh=1c8cdc2e4af8de1367ac56a862ff557a&oe=57E17C9F",
      "text": "#carol #asok #terrorist",
      "date": "2016-02-04T10:30:00+0000"
    }, {
      "id": 86,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12662647_10153861452208904_4860413701827464203_n.png?oh=29bd198737fe4a080412d97fcc98addc&oe=57A4592E",
      "text": "#boss #asok #terrorist",
      "date": "2016-02-04T06:30:00+0000"
    }, {
      "id": 87,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12647348_10153859646843904_8254811586960401658_n.png?oh=8042ccc2571d7911baaf7b91ed336d4c&oe=57E20847",
      "text": "#dilbert #boss #alice #meetings",
      "date": "2016-02-03T06:30:00+0000"
    }, {
      "id": 88,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12650895_10153854608973904_7587335794265749034_n.png?oh=83d1b096c5e793328caffd5f67f252f9&oe=57ACF004",
      "text": "#boss #wally #dilbert #timeline #deadline #zeno",
      "date": "2016-01-31T13:37:12+0000"
    }, {
      "id": 89,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12552600_10153845860038904_9100444189229198388_n.png?oh=1b393b61e7f5e9ed8e64065decb27468&oe=57AC3FA5",
      "text": "#alice #dilbert #highfive",
      "date": "2016-01-27T12:44:00+0000"
    }, {
      "id": 90,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12651217_10153858919768904_8896037285998352315_n.png?oh=9f2c50596d5a8a431c8aa2bc61430bd0&oe=57A21FC2",
      "text": "#boss #dilbert #meetings",
      "date": "2016-02-02T14:38:57+0000"
    }, {
      "id": 91,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12494975_10153845777563904_6084146577505672884_n.png?oh=ac111beda9e2cb94814890f773447c10&oe=57A7E090",
      "text": "#wally #dilbert #retirement #plan",
      "date": "2016-01-27T10:27:33+0000"
    }, {
      "id": 92,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12573026_10153835856868904_5494188859291076758_n.png?oh=fa6a7af54059fe4677677f6acbbc7dbe&oe=57A5A774",
      "text": "#dilbert #robot #freedom",
      "date": "2016-01-22T16:17:48+0000"
    }, {
      "id": 93,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12512297_10153833220023904_2567615921741223573_n.png?oh=100c9e136d40ee7af1cb1ca7aff83661&oe=57E0D499",
      "text": "#dilbert #carol #robot #office #temperature",
      "date": "2016-01-21T08:45:59+0000"
    }, {
      "id": 94,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12417862_10153831474998904_8573193460045584930_n.png?oh=e85f818d009b310a1c00aa3820c3684f&oe=57DDB460",
      "text": "#dilbert #boss #work #motivation",
      "date": "2016-01-20T16:30:01+0000"
    }, {
      "id": 95,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1934301_10153830186183904_6511877817467317491_n.png?oh=296a388a15657a546d4c8ce88cdd183f&oe=57A4E885",
      "text": "#alice #wally #dilbert #talks",
      "date": "2016-01-20T13:30:00+0000"
    }, {
      "id": 96,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12417838_10153829109808904_4473807364065267975_n.png?oh=04a1ef98edc18e83190be34ebb559cd7&oe=579C1940",
      "text": "#ted #dilbert #startup #tradeoff",
      "date": "2016-01-20T06:31:00+0000"
    }, {
      "id": 97,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12508775_10153829109398904_423734746761044629_n.png?oh=54c34e78b43ef843be1279ddf2ea1000&oe=57E5B704",
      "text": "#wally #ceo #software #deadlines",
      "date": "2016-01-19T15:12:00+0000"
    }, {
      "id": 98,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12510437_10153826777253904_2876855322179875013_n.png?oh=5f5b00c60023f6f541b2d0738d58c906&oe=579FF6CE",
      "text": "#wally #boss #sofware #deadlines",
      "date": "2016-01-19T10:30:00+0000"
    }, {
      "id": 99,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12508972_10153826764313904_4140493700629362380_n.png?oh=66a323abae991132ce0a5f95fff1a0d4&oe=57AC43BF",
      "text": "#wally #boss #software #deadlines",
      "date": "2016-01-19T06:30:00+0000"
    }, {
      "id": 100,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12509463_10153826734868904_1047779274901220868_n.png?oh=17b4b6c0f736c28907b2bfc4069d2769&oe=57A1DCC1",
      "text": "#alice #dilbert #office #negotiations",
      "date": "2016-01-18T14:54:10+0000"
    }, {
      "id": 101,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12510507_10153813450213904_9066763857808796888_n.png?oh=c833e21a66a933bee270f3427bcf4718&oe=57A58249",
      "text": "#boss #dilbert #projects #billing",
      "date": "2016-01-12T13:32:39+0000"
    }, {
      "id": 102,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12565358_10153813342473904_8082351684859808428_n.png?oh=c435fa2bb42d8d04b4638129c8a0bc79&oe=579A0C24",
      "text": "#dilbert #dogbert #work",
      "date": "2016-01-12T12:07:09+0000"
    }, {
      "id": 103,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12400843_10153795794868904_7367451994687109820_n.png?oh=88b4e41d35883d5d43db12fb5cc02e9f&oe=57ABEFB6",
      "text": "#boss #wally #girls #career",
      "date": "2016-01-04T16:29:00+0000"
    }, {
      "id": 104,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10577108_10153795793178904_2976875062670967375_n.png?oh=89d7b131f8169627543aecc4e6f8ea0d&oe=57E1D858",
      "text": "#robot #news #wally #girls #stem",
      "date": "2016-01-04T16:28:19+0000"
    }, {
      "id": 105,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10632683_10153795791558904_4566482156306857224_n.png?oh=3c8f2a82554a97d7fbb101b10b7d0c7c&oe=57E258A8",
      "text": "#boss #wally #school #girls #stem #career",
      "date": "2016-01-04T16:27:30+0000"
    }, {
      "id": 106,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12410587_10153795780863904_4580099553399573294_n.png?oh=25c501bbdb31fa302cd2fd06ea82682a&oe=57E2EAFF",
      "text": "#boss #wally #school #girls #stem",
      "date": "2016-01-04T16:19:57+0000"
    }, {
      "id": 107,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10505278_10153776851598904_1769495987994041889_n.png?oh=27f2441cd423b220d818017e48f55ef1&oe=57E74B0E",
      "text": "#dilbert #sales #rhetorics #touche",
      "date": "2015-12-27T10:59:39+0000"
    }, {
      "id": 108,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1981_10153776829538904_3246861023819961600_n.png?oh=5460b70a77e265b4827f86c4de838c65&oe=57DE806A",
      "text": "#alice #boss #stem #careers #girls",
      "date": "2015-12-27T10:50:00+0000"
    }, {
      "id": 109,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12391774_10153773009898904_2342340179605569763_n.png?oh=a3915aeb2ada3dbb92e8108020d8e151&oe=57DF7DF8",
      "text": "#wally #asok #work #reputation",
      "date": "2015-12-26T07:30:01+0000"
    }, {
      "id": 110,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1933805_10153770738343904_2298675222095766000_n.png?oh=60f5a37ab444208cf9b133925698b018&oe=57AA0A29",
      "text": "#alice #meeting #mock",
      "date": "2015-12-25T13:30:01+0000"
    }, {
      "id": 111,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10295704_10153770737663904_2464111314070929083_n.png?oh=0032d678d160675e693bdece99bedfd5&oe=57DE12A8",
      "text": "#wally #work #list",
      "date": "2015-12-25T06:30:01+0000"
    }, {
      "id": 112,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10365927_10153766086273904_339170179425379351_n.png?oh=e8ff2441aab56b1c13f02f4dfad079d5&oe=57A7A4BE",
      "text": "#dilbert #bob #nemesis",
      "date": "2015-12-23T13:00:01+0000"
    }, {
      "id": 113,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12347612_10153766084598904_8542594784423738446_n.png?oh=c5f144f7cdcb29d471bf14753529e060&oe=57A33A2F",
      "text": "#dilbert #bob #team #interview",
      "date": "2015-12-23T06:30:01+0000"
    }, {
      "id": 114,
      "imageUrl": "https://scontent.xx.fbcdn.net/t31.0-8/12362678_10153760407723904_3274002049105269575_o.png",
      "date": "2015-12-20T12:09:44+0000"
    }, {
      "id": 115,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11226004_10153760177888904_2594290358398878554_n.png?oh=369e2be8f3dd3d5213f1f1567336c94d&oe=57AAE7D1",
      "text": "#boss #wally #dilbert #meeting #journey",
      "date": "2015-12-20T14:41:01+0000"
    }, {
      "id": 116,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12348058_10153760088758904_6861991809984515745_n.png?oh=fe90824ad76d1cf1bdef6d1952291e06&oe=57ACDE19",
      "text": "#dilbert #alice #apocalypse #tactics",
      "date": "2015-12-20T10:55:57+0000"
    }, {
      "id": 117,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12346512_10153754522568904_1547116071606072528_n.png?oh=e5e2e1973e943e1b7b798fe0cd063f99&oe=57D9A661",
      "text": "#boss #dilbert #management",
      "date": "2015-12-18T09:00:17+0000"
    }, {
      "id": 118,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12366408_10153752293833904_5473106057365153234_n.png?oh=e2d5c79cf3586a3c48863e929d9b3077&oe=57AB060D",
      "text": "#dilbert #sales #lies #client",
      "date": "2015-12-17T14:06:54+0000"
    }, {
      "id": 119,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12341622_10153750087443904_3170014035932319219_n.png?oh=da7e367461df0b69a8611edcd46cddc7&oe=57E31173",
      "text": "#dilbert #boss #sales",
      "date": "2015-12-16T14:36:08+0000"
    }, {
      "id": 120,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1455868_10153748755993904_1598303148096651344_n.png?oh=fde62a9f30659cbc985f1cb15e209c89&oe=57D9C4B0",
      "text": "#dilbert #boss #sales #commerce",
      "date": "2015-12-16T06:30:01+0000"
    }, {
      "id": 121,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12342749_10153746539843904_3103156512045028909_n.png?oh=291c7ed6ed109ba7221ab03933a38676&oe=57D8B732",
      "text": "#dilbert #client #sales",
      "date": "2015-12-15T06:30:00+0000"
    }, {
      "id": 122,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12391257_10153746519433904_8542208414925940690_n.png?oh=18702dc8d62fbc55b988bea9ae9a1e8b&oe=57E1330E",
      "text": "#ceo #alice #dilbert #changes",
      "date": "2015-12-14T17:11:59+0000"
    }, {
      "id": 123,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12376611_10153742104443904_4776000112576187600_n.png?oh=ccca6b9f450d1ea04271422b14f106f9&oe=57DE1B65",
      "text": "#boss #robot #soul",
      "date": "2015-12-12T13:33:33+0000"
    }, {
      "id": 124,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12342538_10153741101598904_2634050460383841523_n.png?oh=c07a1be30bb7c2a9bcbffa4ba1710625&oe=57DCA30D",
      "text": "#dilbert #robot #heavens",
      "date": "2015-12-11T23:20:12+0000"
    }, {
      "id": 125,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12311257_10153737858193904_1341055577444423871_n.png?oh=7043f40c5c328abe1e22294530bd9e44&oe=579D8FDE",
      "text": "#dilbert #boss #robot #work #turing",
      "date": "2015-12-10T16:04:00+0000"
    }, {
      "id": 126,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12360221_10153736157848904_3992231298210156526_n.png?oh=1209c5370169ef8a5b188b1229fb5dff&oe=57AB49E5",
      "text": "#dilbert #boss #project #people",
      "date": "2015-12-10T13:32:00+0000"
    }, {
      "id": 127,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12348059_10153736157108904_4476562242235178878_n.png?oh=30fa6376111b70cbf2ede41fc2ae9f9d&oe=57E6420C",
      "text": "#dilbert #alice #teamwork #people #communication",
      "date": "2015-12-10T06:31:00+0000"
    }, {
      "id": 128,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12341196_10153728393398904_234432189321782609_n.png?oh=8695d9e4526d8ef2ee6bee7474e5eccd&oe=57A3F0ED",
      "text": "#dilbert #bigdata #health",
      "date": "2015-12-07T16:43:20+0000"
    }, {
      "id": 129,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12313746_10153736154303904_1515565615187353554_n.png?oh=701700167da0729915655a17950fa1ef&oe=57A19F10",
      "text": "#dilbert #boss #teamwork #people",
      "date": "2015-12-10T00:18:00+0000"
    }, {
      "id": 130,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12342522_10153722952708904_4735683072519260406_n.png?oh=89937eb8ead2445748143221fc1425c4&oe=57DA095A",
      "text": "#wally #robot",
      "date": "2015-12-06T00:24:59+0000"
    }, {
      "id": 131,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12342496_10153719067893904_2428489624530023412_n.png?oh=da88e4c47abbcefbf81d855f6a6ae960&oe=579C8152",
      "text": "#dilbert #robot #chickenjoke",
      "date": "2015-12-04T15:12:51+0000"
    }, {
      "id": 132,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12289596_10153715228113904_75686875669919725_n.png?oh=1c743a303b07de0edb63724b3571c0ba&oe=57E25E54",
      "text": "#robot #asok",
      "date": "2015-12-03T10:14:58+0000"
    }, {
      "id": 133,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12341203_10153713301653904_576545710985880249_n.png?oh=aecd32a328e935e69d7437e6becc5885&oe=579B5BFB",
      "text": "#dilbert #robot #mistake #singularity",
      "date": "2015-12-02T17:30:21+0000"
    }, {
      "id": 134,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12316099_10153709605093904_1899568783309789994_n.png?oh=9b42b2501ddf977786f9042984e4c070&oe=57E5521E",
      "text": "#dilbert #alice #robot #singularity",
      "date": "2015-12-01T17:16:01+0000"
    }, {
      "id": 135,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12295489_10153708328278904_6110453462023074977_n.png?oh=aee68a06ceff61273670cf7049e6bf53&oe=57DBD4AA",
      "text": "#dilbert #robot #mistake",
      "date": "2015-12-01T13:30:00+0000"
    }, {
      "id": 136,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12316191_10153708316288904_4663452640840068071_n.png?oh=efd605fd20af590488e5cad5e9bb3b78&oe=57AB1FD8",
      "text": "#alice #work #ethics",
      "date": "2015-12-01T06:40:01+0000"
    }, {
      "id": 137,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11147873_10153702168948904_8727735574697914157_n.png?oh=d05e6054cefd341697f3586e6e4885eb&oe=57DA9620",
      "text": "#boss #robot #ceo #ideavirus",
      "date": "2015-11-28T11:31:22+0000"
    }, {
      "id": 138,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12316589_10153700412808904_2572806955286810686_n.png?oh=00a70b9c57363f1027413c8f1c8ff3dd&oe=57DF48F9",
      "text": "#robot #dilbert #wally",
      "date": "2015-11-27T17:21:25+0000"
    }, {
      "id": 139,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12311089_10153698032173904_2726734420229732166_n.png?oh=6606e3b00b7aea8cdcfbf2a233424aee&oe=57DFB0DD",
      "text": "#alice #dilbert #robot #soul #keyforhappiness",
      "date": "2015-11-26T16:54:46+0000"
    }, {
      "id": 140,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12301509_10153694608873904_6137207545655158187_n.png?oh=655d94fa6fd090da375296f423edf25f&oe=57DB6887",
      "text": "#boss #robot #rhetorics #consciousness",
      "date": "2015-11-25T13:06:55+0000"
    }, {
      "id": 141,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12246723_10153692170018904_976350936772006444_n.png?oh=583de121084ea69b344018d1a73e23cf&oe=57A10C27",
      "text": "#boss #robot #rhetorics",
      "date": "2015-11-24T13:19:52+0000"
    }, {
      "id": 142,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12274220_10153689670013904_3219131536266426965_n.png?oh=109738afb4acdbbd838de02a05236ba6&oe=57E23C2E",
      "text": "#asok #robot #consciousness  #ai #riseofthemachines",
      "date": "2015-11-23T12:14:25+0000"
    }, {
      "id": 143,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12249821_10153688188063904_5123234983055897836_n.png?oh=772cc3ff65a9c8906131ca6e479f4ead&oe=57ABD761",
      "text": "#dilbert #alice #goals #day",
      "date": "2015-11-22T20:28:56+0000"
    }, {
      "id": 144,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12240075_10153688420278904_6610731276542913827_n.png?oh=3da503c0aa308df514524af6e3207674&oe=57AA7B9C",
      "text": "#dick #asok #comments #internet",
      "date": "2015-11-22T22:29:45+0000"
    }, {
      "id": 145,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12294664_10153688419693904_1861214219672650240_n.png?oh=36b02b6e44be0a7db1e1a90689ba214c&oe=57D4E84F",
      "text": "#dilbert #dick #comments #internet",
      "date": "2015-11-22T22:29:12+0000"
    }, {
      "id": 146,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12274543_10153679946953904_7062668495651478872_n.png?oh=2970236b80be11f69086f9e28ada7b9e&oe=57AC5BB7",
      "text": "#dilbert #wally #dick #internet #context",
      "date": "2015-11-19T11:44:34+0000"
    }, {
      "id": 147,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11251367_10153678575303904_750716728584613131_n.png?oh=d58723834cbb4c8df9e9932b79488364&oe=57E08276",
      "text": "#boss #alice #meeting #chart",
      "date": "2015-11-18T19:30:06+0000"
    }, {
      "id": 148,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12241781_10153675702068904_5668536648746014388_n.png?oh=dc835f5eb7e68fc1bbd7aecd6055022a&oe=57D80C40",
      "text": "#boss #catbert #hr #motivation",
      "date": "2015-11-17T12:43:41+0000"
    }, {
      "id": 149,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12065867_10153674931763904_1417778692140574282_n.png?oh=267489ae5b019ab8ed7dda05d55cf915&oe=57D7C7F8",
      "text": "#dilbert #boss #performance #monitoring #hr #motivation",
      "date": "2015-11-17T06:30:00+0000"
    }, {
      "id": 150,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10426848_10153667392758904_473229655269315965_n.png?oh=2c4e9b353fadee90f0075c3595c77801&oe=57DAE2DC",
      "text": "#dilbert #boss #strategy #b2b",
      "date": "2015-11-13T17:51:46+0000"
    }, {
      "id": 151,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12246935_10153664425988904_3390878040759317571_n.png?oh=1ac6acee2d6162e10e320536b8df1ebc&oe=57AC0D4E",
      "text": "#wally #boss #meetings",
      "date": "2015-11-12T12:18:56+0000"
    }, {
      "id": 152,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12191661_10153662777148904_6324793432602325716_n.png?oh=68d6c7854e666a85939233974de78722&oe=57DD3372",
      "text": "#dilbert #boss #choice #illusion",
      "date": "2015-11-11T18:45:03+0000"
    }, {
      "id": 153,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12191934_10153659703918904_318820488099862001_n.png?oh=5c51c831f03d03d97ad8fa57b39870c0&oe=57D55CE1",
      "text": "#wally #alice #retirement #smalltalks",
      "date": "2015-11-10T12:03:13+0000"
    }, {
      "id": 154,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12235068_10153657604968904_4969849794291195342_n.png?oh=8cf89fc8a19aca1aac1be3f7f623a70b&oe=57D556CC",
      "text": "#boss #alice #office #smalltalks",
      "date": "2015-11-09T14:12:14+0000"
    }, {
      "id": 155,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12196212_10153655821958904_6198111035415984580_n.png?oh=3b09dc86e580cabcee56f7fbbf556aa8&oe=579DFF79",
      "text": "#dilbert #girlfriend #party #ABtest",
      "date": "2015-11-08T19:52:17+0000"
    }, {
      "id": 156,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12190855_10153657587318904_8860308569574301922_n.png?oh=95aa051a59f8e5a21f1a81bfb4c6f121&oe=579A8907",
      "text": "#boss #ceo #engineers #work #emoji",
      "date": "2015-11-09T13:53:55+0000"
    }, {
      "id": 157,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12196244_10153657586763904_6906651942840015247_n.png?oh=8fe4855c64aacd3b30b2e770c595daa1&oe=57E0FC2A",
      "text": "#boss #dilbert #wally #emoji",
      "date": "2015-11-09T13:53:16+0000"
    }, {
      "id": 158,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12191623_10153648183658904_3881765246949301636_n.png?oh=8a649ad983dd197c156c63cd0f957970&oe=57DBA7A3",
      "text": "#wally #carol #useless #motivation",
      "date": "2015-11-05T13:13:10+0000"
    }, {
      "id": 159,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12187738_10153646229858904_6902384142321189319_n.png?oh=97e9cf8c805860ebff5b2ae48458c11d&oe=57D6C053",
      "text": "#dilbert #wally #job #satisfaction #motivation",
      "date": "2015-11-04T16:29:04+0000"
    }, {
      "id": 160,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12122875_10153643675093904_8930066548475070240_n.png?oh=b7b67f7b1ea20a79d77b84e05354c70c&oe=57AB401C",
      "text": "#alice #wally #useless #benefits #motivation",
      "date": "2015-11-03T11:29:22+0000"
    }, {
      "id": 161,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12043112_10153642473653904_7438398309489466612_n.png?oh=363a46dd8f2a136af0f4455f9d0ad353&oe=57A20F24",
      "text": "#dilbert #alice #emails #idiots",
      "date": "2015-11-03T08:16:00+0000"
    }, {
      "id": 162,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12193561_10153641374288904_5044317851005586273_n.png?oh=0580dbb59e19fc0182485ddb8d357067&oe=57D90798",
      "text": "#dilbert #wally #uselessness #productivity",
      "date": "2015-11-02T13:38:58+0000"
    }, {
      "id": 163,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12189981_10153637348668904_7440952729849601344_n.png?oh=6ce21737ac3f749ec5721da8310b7750&oe=57E843F7",
      "text": "#wally #boss #performance",
      "date": "2015-10-31T20:12:28+0000"
    }, {
      "id": 164,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11250621_10153634627578904_3591062383946377582_n.png?oh=169f14cb2ff8a242bc4b633783ffb0a3&oe=57E524D6",
      "text": "#wally #expectations",
      "date": "2015-10-30T18:00:12+0000"
    }, {
      "id": 165,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12111924_10153632304008904_1649142984115025862_n.png?oh=7cacb2425c966d87fa35a7069a2b6782&oe=57DCE126",
      "text": "#asok #wally #lifeslyle",
      "date": "2015-10-29T19:00:56+0000"
    }, {
      "id": 166,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10464303_10153629455898904_8420943676548975321_n.png?oh=3fc234d900fc9802e32673add8ba8a01&oe=57AB2541",
      "text": "#alice #boss #bias #smalltalk",
      "date": "2015-10-28T13:55:12+0000"
    }, {
      "id": 167,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12074870_10153627513133904_6512203388379042533_n.png?oh=2d0bd89aef2ac97d47f1f264a841224a&oe=57DB3899",
      "text": "#boss #dilbert #meetings",
      "date": "2015-10-27T18:10:11+0000"
    }, {
      "id": 168,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12191046_10153624779118904_2875201486326294210_n.png?oh=f1953c66cfa54d41038925a7f2bf9dec&oe=57DBE68F",
      "text": "#dilbert #doctor #ibmwatson #ai #medicine",
      "date": "2015-10-26T13:18:20+0000"
    }, {
      "id": 169,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/l/t1.0-9/12189999_10153627511983904_1863804945969498708_n.png?oh=a3c9d208137b47122e6119c7f96eb418&oe=579A34A1",
      "text": "#boss #ceo #office #enviroment",
      "date": "2015-10-27T18:09:43+0000"
    }, {
      "id": 170,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12019988_10153621028413904_4867565762890081362_n.png?oh=e6078dfaf75ebecd2e0cfb958d188846&oe=57A88FE1",
      "text": "#boss #wally #office #enviroment",
      "date": "2015-10-24T19:26:47+0000"
    }, {
      "id": 171,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12088245_10153617631583904_7223898288433224193_n.png?oh=96113fd81637f44015381cb2a8c2eae8&oe=57DBC32B",
      "text": "#ceo #catbert #healthcare #hr",
      "date": "2015-10-23T10:54:25+0000"
    }, {
      "id": 172,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10537028_10153615555588904_1044373795384406760_n.png?oh=0edf9c38a06b76528e415ee4630e2a87&oe=579CC237",
      "text": "#boss #catbert #stress #hr",
      "date": "2015-10-22T13:06:02+0000"
    }, {
      "id": 173,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12112026_10153613184963904_8524453652031476329_n.png?oh=baaf98805b19f9930693f0dbb3afd527&oe=57E39921",
      "text": "#wally #boss #work #injury",
      "date": "2015-10-21T10:39:36+0000"
    }, {
      "id": 174,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12106838_10153613191668904_1989079605359636259_n.png?oh=564670459cb9da74e4ff4e5f4934e389&oe=579CE32F",
      "text": "#wally #catbert #work #injury",
      "date": "2015-10-21T10:46:03+0000"
    }, {
      "id": 175,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12141708_10153613182713904_1128774640519911168_n.png?oh=453963f3773bec0f03f9d2c7c43b37b2&oe=57E377CB",
      "text": "#wally #boss #work #injury",
      "date": "2015-10-21T10:38:45+0000"
    }, {
      "id": 176,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1496696_10153611446703904_5417893807071352032_n.png?oh=422097cf2bf3031f5a349a3204040746&oe=57A37BC0",
      "text": "#dilbert #asok #experience #people",
      "date": "2015-10-20T15:07:11+0000"
    }, {
      "id": 177,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12144768_10153611116458904_7641330504210194472_n.png?oh=e297c623fd8384800b5e3bfc371f20c9&oe=57E1741D",
      "text": "#wally #asok #success #tools",
      "date": "2015-10-20T11:43:21+0000"
    }, {
      "id": 178,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12106876_10153602159263904_7285290841789352626_n.png?oh=34c831adf04029641686ec5412d9ba53&oe=57E3603D",
      "text": "#dilbert #boss #goals #strategy #motivation",
      "date": "2015-10-16T12:59:01+0000"
    }, {
      "id": 179,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12119065_10153600056753904_9024165483282086575_n.png?oh=474e968935089b7ad99f48c0fd1a1869&oe=57E4F1AF",
      "text": "#dilbert #work #meaning #motivation",
      "date": "2015-10-15T14:25:36+0000"
    }, {
      "id": 180,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12107791_10153597182428904_839459246222780435_n.png?oh=a0ea93cd3b0500e0b03ea7891377505d&oe=57AA8461",
      "text": "#boss #dilbert #actionbias",
      "date": "2015-10-14T09:31:57+0000"
    }, {
      "id": 181,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12096418_10153594109988904_1428527067439349885_n.png?oh=624e23dd6ab487fa75ce67a02a266d56&oe=57E06C49",
      "text": "#asok #ceo #luck #success",
      "date": "2015-10-13T11:51:18+0000"
    }, {
      "id": 182,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12143340_10153592157018904_8694109688055250632_n.png?oh=20ec00cd95ca2a07a94cec3d67b7af32&oe=57E3DCB7",
      "text": "#boss #asok #success #luck",
      "date": "2015-10-12T15:23:16+0000"
    }, {
      "id": 183,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12096414_10153590234968904_1326047455970183406_n.png?oh=07193b3ac22b202a9971bef703655f9c&oe=57A94DF5",
      "text": "#boss #wally #work",
      "date": "2015-10-11T18:34:26+0000"
    }, {
      "id": 184,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12088375_10153590234073904_3537107172227630808_n.png?oh=df2e2cba47eb56b9c96e42c647a2c52a&oe=579E6365",
      "text": "#dilbert #boss #memory",
      "date": "2015-10-11T18:33:56+0000"
    }, {
      "id": 185,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12079505_10153585767038904_407268968632118660_n.png?oh=83863fc5f7670eb7accddfaa842f4351&oe=57E83692",
      "text": "#dilbert #wally #robot #reason",
      "date": "2015-10-09T16:41:50+0000"
    }, {
      "id": 186,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12109036_10153583461463904_171727412360789157_n.png?oh=93b62b28695e4b74fe1ad3e5f5c7a3e7&oe=57DB49B6",
      "text": "#dilbert #robot #singularity",
      "date": "2015-10-08T16:11:29+0000"
    }, {
      "id": 187,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11214253_10153581328648904_6161574485583977302_n.png?oh=73bbae956f657a04c7854a430e0688e6&oe=57E60116",
      "text": "#boss #robot #singularity",
      "date": "2015-10-07T10:02:47+0000"
    }, {
      "id": 188,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12115490_10153580092558904_3793667970063595287_n.png?oh=86c2fe21546955e06a7a0e8b23fec284&oe=57999AEE",
      "text": "#boss #dilbert #robot #intelligence",
      "date": "2015-10-06T16:22:32+0000"
    }, {
      "id": 189,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12074769_10153578057038904_3246224996586256187_n.png?oh=4f212ab2c10a356d7b31dfc261fb5066&oe=57E21A44",
      "text": "#dilbert #someone #ideas",
      "date": "2015-10-05T12:48:55+0000"
    }, {
      "id": 190,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12088268_10153577065348904_3116042808370470978_n.png?oh=d4446f3a31ed6a2d02dc34aa11a084cd&oe=57E17A5E",
      "text": "#dilbert #wally #tina #alice",
      "date": "2015-10-04T21:07:27+0000"
    }, {
      "id": 191,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12063321_10153575207513904_3822795864264064853_n.png?oh=25b881e403dd3ac07de720603f1af5a8&oe=57AA3866",
      "text": "#dilbert #ceo #product #idea",
      "date": "2015-10-03T19:00:16+0000"
    }, {
      "id": 192,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12079472_10153572922493904_5405143948939106949_n.png?oh=4f7c6409266ab3a9ea2608f2c4653314&oe=579CC10E",
      "text": "#dilbert #boss #yoga #crime",
      "date": "2015-10-02T11:46:26+0000"
    }, {
      "id": 193,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12075075_10153571050503904_1866236871229266478_n.png?oh=3670b45a30ab9ac9c2eefbeddc1378d0&oe=579A52A2",
      "text": "#dilbert #boss #yoga",
      "date": "2015-10-01T08:50:19+0000"
    }, {
      "id": 194,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11222111_10153569464583904_7498169892791287110_n.png?oh=d7a6cc1df64d392cf46d798a877e4db0&oe=57ABAAC8",
      "text": "#carol #boss #yoga",
      "date": "2015-09-30T12:45:20+0000"
    }, {
      "id": 195,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12039636_10153567448428904_4984373055698934031_n.png?oh=960e1fba9b30cdb8ed9abce08681fe3a&oe=57D7B1A4",
      "text": "#dilbert #wally #alice #fitness #wearables",
      "date": "2015-09-29T08:09:27+0000"
    }, {
      "id": 196,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12039388_10153565797433904_7908913785891022525_n.png?oh=79c2253833f9c1709a5048088ecb36c3&oe=57E4C007",
      "text": "#alice #tina #dilbert #smartwatch #wearables",
      "date": "2015-09-28T09:40:58+0000"
    }, {
      "id": 197,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12036517_10153564107138904_8944022614564421515_n.png?oh=646e65101ca7c0fa4be1c1d2307140dc&oe=57D99970",
      "text": "#ceo #dilbert #wally #strategy #management",
      "date": "2015-09-27T11:32:09+0000"
    }, {
      "id": 198,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12039318_10153562871203904_5789077749006459840_n.png?oh=052d1bfceb409b63364f1ac96cc41421&oe=57ABD58A",
      "text": "#boss #wally",
      "date": "2015-09-26T18:17:35+0000"
    }, {
      "id": 199,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11045287_10153560911308904_1539967410323152621_n.png?oh=0f33d18482347c01129a970e4585f636&oe=57D84E2D",
      "text": "#ceo #dilbert #alice #management #meeting",
      "date": "2015-09-25T14:33:43+0000"
    }, {
      "id": 200,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11988185_10153559208303904_985249205018194523_n.png?oh=d1cd192fac21da5259d9e99d981e9d05&oe=57D70307",
      "text": "#ceo #dilbert #meeting",
      "date": "2015-09-24T14:28:38+0000"
    }, {
      "id": 201,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12002295_10153557067413904_4410772370209705240_n.png?oh=55d0ba88cc1bf37e19f91f1ff802ded5&oe=57DAAC65",
      "text": "#alice #ted #networking",
      "date": "2015-09-23T10:38:11+0000"
    }, {
      "id": 202,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12049291_10153555029543904_6447068321216222732_n.png?oh=188bf424af58c8a066995d951834fa16&oe=57E0751A",
      "text": "#alice #ceo #feminism",
      "date": "2015-09-22T09:50:17+0000"
    }, {
      "id": 203,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12043029_10153553697423904_855839506549650532_n.png?oh=7d80a76655fa325e4b5b0a600adf9394&oe=57AB4C4B",
      "text": "#dogbert #illuminati #politics",
      "date": "2015-09-21T17:43:52+0000"
    }, {
      "id": 204,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12004148_10153553696463904_5457978216313235726_n.png?oh=8e432b20030b934c2ed85c7a7c2e585a&oe=57DE9E82",
      "text": "#boss #dilbert #wally #motivation #hr #teamwork",
      "date": "2015-09-21T17:43:25+0000"
    }, {
      "id": 205,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12033131_10153553694533904_6416967079169459887_n.png?oh=712396c83c4eb16b91539026de646763&oe=57A374A6",
      "text": "#dilbert #dogbert #boss #illuminati",
      "date": "2015-09-21T17:42:43+0000"
    }, {
      "id": 206,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12002883_10153546419393904_5844027616417270328_n.png?oh=dd6e551d7cb12dbd27ec54e5edb0a46b&oe=57D627E6",
      "text": "#boss #alice #economy #crisis",
      "date": "2015-09-18T10:58:36+0000"
    }, {
      "id": 207,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11990524_10153545056768904_868548683027313959_n.png?oh=80c3cd4c3cd47aa45ad4490ea3bd323f&oe=579B0419",
      "text": "#dilbert #boss #smartass",
      "date": "2015-09-17T17:22:06+0000"
    }, {
      "id": 208,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12020050_10153542242123904_2520099828751623418_n.png?oh=7573dc4394d84e3ba8ecd82c65ddaca2&oe=57E5445D",
      "text": "#boss #tina #success #management",
      "date": "2015-09-16T11:57:50+0000"
    }, {
      "id": 209,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12036542_10153539585068904_7922270863172282421_n.png?oh=a1213d8f32819aef7dc50bb9806f98ef&oe=57E4808A",
      "text": "#dilbert #boss #startup #evaluation #review",
      "date": "2015-09-15T10:42:56+0000"
    }, {
      "id": 210,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12027610_10153537609618904_862948786373591008_n.png?oh=a9a5a27470caa073bee8c8d97920209e&oe=57ACEC61",
      "text": "#dilbert #boss #startup",
      "date": "2015-09-14T11:35:29+0000"
    }, {
      "id": 211,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12004011_10153535307968904_447956373962868430_n.png?oh=88bab638ffce4338ca1fcb3bf7131365&oe=57DF0BBE",
      "text": "#ceo #wally #rolemodel #character",
      "date": "2015-09-13T15:21:41+0000"
    }, {
      "id": 212,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11218608_10153535296213904_4151644416211329062_n.png?oh=816e7df7ebcac72f5504e9e13d1d6a12&oe=579BFAA4",
      "text": "#boss #dilbert #startup",
      "date": "2015-09-13T15:19:37+0000"
    }, {
      "id": 213,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10406881_10153529440763904_8835046314183120559_n.png?oh=e0fefb1b5c1f7869325b635c123bc925&oe=57A1D114",
      "text": "#boss #alice #startup",
      "date": "2015-09-11T09:32:35+0000"
    }, {
      "id": 214,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/12004054_10153525127938904_8157856852124192493_n.png?oh=064222f6a5df30a4f0c75e8122bcf707&oe=57DD38EA",
      "text": "#dilbert #ceo #smalltalk",
      "date": "2015-09-09T11:06:27+0000"
    }, {
      "id": 215,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/l/t1.0-9/11960192_10153523224953904_4828350183253662961_n.png?oh=6db836bd98edfc2176f4c639e7082656&oe=57D8A7D9",
      "text": "#boss #dilbert #hr #management",
      "date": "2015-09-08T12:40:15+0000"
    }, {
      "id": 216,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10850274_10153520856783904_1082256431161931073_n.png?oh=f906a5714a43a9c8676c97c6620befdb&oe=57DDA73F",
      "text": "#catbert #boss #asok #hr #motivation",
      "date": "2015-09-07T10:49:40+0000"
    }, {
      "id": 217,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10422572_10153519609693904_4411855445788038158_n.png?oh=a0630b6e0a1f3101a82f23b2d8d03bfb&oe=57AABC6E",
      "text": "#dilbert #alice #wally #ceo #design #teamwork",
      "date": "2015-09-06T19:51:54+0000"
    }, {
      "id": 218,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10429494_10153519609088904_7147910286285047852_n.png?oh=800c9eecaac4a8d2ded18ebf4e3d5e7e&oe=57DDB87B",
      "text": "#dilbert #topper #sleep",
      "date": "2015-09-06T19:51:31+0000"
    }, {
      "id": 219,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11947459_10153513308453904_8203990183175181287_n.png?oh=dbcb57abfab9af6ba78b1b2b9a50a227&oe=57E3F386",
      "text": "#dilbert #alice #robot #guy",
      "date": "2015-09-04T11:40:37+0000"
    }, {
      "id": 220,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11233076_10153510993563904_8728232663588999240_n.png?oh=5ac92e255f78a1a674bc5e042ddd7dea&oe=57A9F202",
      "text": "#boss #dilbert #asok #robot #laws #doom",
      "date": "2015-09-03T14:30:00+0000"
    }, {
      "id": 221,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11990612_10153510990183904_8730138003285349637_n.png?oh=2e0c1627d7547cdc719bfcc0e4bb8811&oe=57E84882",
      "text": "#boss #robot #laws",
      "date": "2015-09-03T11:30:03+0000"
    }, {
      "id": 222,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11934978_10153510916198904_7534705297559506274_n.png?oh=b41c32da6c44d698546bffb9be4f3a7c&oe=57E446D9",
      "text": "#dilbert #ceo #robot",
      "date": "2015-09-03T08:00:43+0000"
    }, {
      "id": 223,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11988353_10153509607923904_5222321206158429351_n.png?oh=d2e2026684c2fbca6409ffa5d07d4dc7&oe=57DF7DC4",
      "text": "#wally #robot",
      "date": "2015-09-02T17:29:50+0000"
    }, {
      "id": 224,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11891187_10153509273113904_2763393803885434014_n.png?oh=14978e1ff24943ea044c37a5f4a2126d&oe=57A0E61C",
      "text": "#alice #dilbert #boss #entrepreneurs #creativity",
      "date": "2015-09-02T14:40:02+0000"
    }, {
      "id": 225,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11902235_10153500799738904_4764954350321082476_n.png?oh=4d1b0807b6fe85ac04d4502075c8045a&oe=57DF1502",
      "text": "#wally #catbert #hr #robots #motivation",
      "date": "2015-08-29T22:56:06+0000"
    }, {
      "id": 226,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11903962_10153496963213904_5118779959455242836_n.png?oh=65eed71d9f041fed0bd60343a55b7b1c&oe=579A0805",
      "text": "#wally #catbert #hr #wellness #health",
      "date": "2015-08-28T10:05:19+0000"
    }, {
      "id": 227,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11938019_10153495142928904_3716876064475605845_n.png?oh=b13f07a70f3e15bc453495be8adbc896&oe=57E0661F",
      "text": "#ceo #boss #hr #health #robots",
      "date": "2015-08-27T14:42:52+0000"
    }, {
      "id": 228,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11923616_10153491996633904_1664867427651410700_n.png?oh=d04906b1adbd0a1e3aee86b3db3b6a20&oe=57A92F13",
      "text": "#dilbert #boss #meetings",
      "date": "2015-08-26T09:32:04+0000"
    }, {
      "id": 229,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10686612_10153489953103904_4907659663780308205_n.png?oh=60a3ea0c7261606f95012ef731e5b3c7&oe=57A1BB78",
      "text": "#dilbert #boss #meetings #carol",
      "date": "2015-08-25T13:42:44+0000"
    }, {
      "id": 230,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11953129_10153487105713904_960280004401206430_n.png?oh=9a4f4c187666d198be88f4646ca49c00&oe=57DADA62",
      "text": "#robot #ethics #law #engineers",
      "date": "2015-08-24T09:49:18+0000"
    }, {
      "id": 231,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11221879_10153485716973904_7852513455055552696_n.png?oh=b723f5fb59c6fe889bac5d906af28279&oe=579C173B",
      "text": "#dilbert #girlfriend #dating #ethics #tinder",
      "date": "2015-08-23T17:30:04+0000"
    }, {
      "id": 232,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11887941_10153484182503904_8066526726095358166_n.png?oh=81196e748c7b993385d229a201cf27cd&oe=57A21BA2",
      "text": "#dilbert #dogbert #court #jury",
      "date": "2015-08-23T00:41:23+0000"
    }, {
      "id": 233,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11889508_10153480777743904_5669460919947692362_n.png?oh=0cfb2f92f09e16bf40bdab9e1697b303&oe=57A3C6EE",
      "text": "#dilbert #police #murderer #freewill #personality #ethics",
      "date": "2015-08-21T14:01:47+0000"
    }, {
      "id": 234,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11902235_10153477516733904_6044734923970855867_n.png?oh=2b8b7e793c15b7a3323658579bf4ccf2&oe=579F18BF",
      "text": "#dilbert #police #murderer #freewill #personality",
      "date": "2015-08-20T10:20:14+0000"
    }, {
      "id": 235,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11873357_10153474946223904_3569603404694057518_n.png?oh=953aac9afa30b9a7bcb0aef643052372&oe=57A15A15",
      "text": "#dilbert #boss #personality #roboethics",
      "date": "2015-08-19T09:18:50+0000"
    }, {
      "id": 236,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11904644_10153473765888904_1004956540122679534_n.png?oh=d2dada92975c172e86c7c51819db4688&oe=57A47CA5",
      "text": "#dilbert #girl #personality",
      "date": "2015-08-18T20:42:03+0000"
    }, {
      "id": 237,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11885348_10153471275448904_8948904395973644461_n.png?oh=e635024d4a3fc4b7d79784b118c2a263&oe=57E09275",
      "text": "#alice #personality",
      "date": "2015-08-18T07:30:00+0000"
    }, {
      "id": 238,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11900084_10153470042578904_3730425491833505599_n.png?oh=e725e03c7ea17c7cbe22d5c77aaa1e90&oe=57AC1633",
      "text": "#dilbert #boss #hr #brainstimulator #motivation",
      "date": "2015-08-17T10:16:01+0000"
    }, {
      "id": 239,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11892141_10153470036153904_7777082947460248121_n.png?oh=0b02e0321d728d5c66ca595d0460d7b5&oe=57A49F59",
      "text": "#dilbert #tina #brainstimulator",
      "date": "2015-08-17T10:15:28+0000"
    }, {
      "id": 240,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11903715_10153463063133904_8282450751383453777_n.png?oh=cef053420282ae01cbe1cf04e54fc096&oe=57A3E66C",
      "text": "#dilbert #carol #corporate #picnic",
      "date": "2015-08-14T08:37:03+0000"
    }, {
      "id": 241,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11870755_10153460975098904_3302954911934032512_n.png?oh=f804a6e068e67586215e12053c7f7888&oe=57DF30AC",
      "text": "о корпоративных пикниках\n#boss #dilbert #corporate #picnic",
      "date": "2015-08-13T11:09:59+0000"
    }, {
      "id": 242,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11863415_10153458575053904_3607980783081140902_n.png?oh=b80ef46725c165322f721e7b10d115c5&oe=57DF6B4F",
      "text": "#alice #dilbert #socialinfluence #motivation",
      "date": "2015-08-12T09:45:44+0000"
    }, {
      "id": 243,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11828742_10153455630253904_6664874234076799685_n.png?oh=0da7ed283d6953e35b32f30e5a86f18d&oe=579D29E6",
      "text": "#dilbert #dobert #novel #motivation",
      "date": "2015-08-11T09:56:01+0000"
    }, {
      "id": 244,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11870843_10153452585353904_343109334424962245_n.png?oh=704ba17a6ecd0c1346e8d841453e723f&oe=579BFCBC",
      "text": "#dilbert #dogbert #dreams",
      "date": "2015-08-10T18:02:46+0000"
    }, {
      "id": 245,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11870774_10153451537188904_1427838396266764988_n.png?oh=7365220b399338e1f9cf458a5437e515&oe=57DEA9B9",
      "text": "#dilbert #boss #employment",
      "date": "2015-08-10T08:51:20+0000"
    }, {
      "id": 246,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11822443_10153447576168904_4119580833213760077_n.png?oh=ede2baef7a07ecb27e706f6301031ce6&oe=57DB7F4F",
      "text": "#dilbert #carol #job #colledge",
      "date": "2015-08-08T16:49:03+0000"
    }, {
      "id": 247,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11836766_10153444319673904_2102836247227589569_n.png?oh=0ac89f4e0fce2ea2d2a8a947b9188266&oe=57AB3BA5",
      "text": "#boss #dogbert #motivation",
      "date": "2015-08-07T11:07:13+0000"
    }, {
      "id": 248,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11811486_10153442123943904_2116030814027751614_n.png?oh=f45b1bda10a35fa22114458b09c6bbfd&oe=57DB9C13",
      "text": "#dilbert #alice #tina #presentation",
      "date": "2015-08-06T11:48:01+0000"
    }, {
      "id": 249,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11831746_10153440292248904_7727131287556632235_n.png?oh=fc5a4b9ef730ab0e610aaabe5c6dc135&oe=57D80B0E",
      "text": "#dilbert #alice #carol #ted #motivation",
      "date": "2015-08-05T20:14:02+0000"
    }, {
      "id": 250,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11825552_10153437683063904_5367021069533086373_n.png?oh=aa813c52e38b16f57dcb82051fc5472d&oe=57D53BB7",
      "text": "#dilbert #alice #wally #ceo #motivation",
      "date": "2015-08-04T15:33:41+0000"
    }, {
      "id": 251,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11813487_10153435024458904_8664236078979388712_n.png?oh=807aebb6f08d83f8b15cc689464cca63&oe=57E0B334",
      "text": "#dilbert #wally #ted #work",
      "date": "2015-08-03T08:48:13+0000"
    }, {
      "id": 252,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11781818_10153433293468904_7958619493507027420_n.png?oh=5e9c1c8017b3ca946cacc11541ef7664&oe=57DAC29C",
      "text": "#boss #alice #dilbert #tagline #marketing #product",
      "date": "2015-08-02T12:08:34+0000"
    }, {
      "id": 253,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11017190_10153431306923904_6838656038404618899_n.png?oh=ae9834635c66758461812b75b40c464e&oe=57DFAB51",
      "text": "#boss #interview #problem #solution",
      "date": "2015-08-01T14:07:31+0000"
    }, {
      "id": 254,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11225183_10153429062868904_6118710780230365113_n.png?oh=8f1432b9a2ea89eb73761ce0e449a821&oe=57E49536",
      "text": "#boss #ceo #carlos",
      "date": "2015-07-31T10:48:07+0000"
    }, {
      "id": 255,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11206047_10153426820433904_797137786036452848_n.png?oh=0b39a3a84da17b3e6b58eff6211d2dc7&oe=57A88FC2",
      "text": "#ceo #dilbert #responsibility",
      "date": "2015-07-30T08:55:06+0000"
    }, {
      "id": 256,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11745829_10153424449408904_8605393411612311875_n.png?oh=648e1755049f2d2f5a2f11026ae9fe78&oe=57A3CA75",
      "text": "#dilbert #advice",
      "date": "2015-07-29T09:43:46+0000"
    }, {
      "id": 257,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11009997_10153422043533904_8996192290111382222_n.png?oh=e1f8cefc12af2fb00562a2287e14e900&oe=57DD706A",
      "text": "#dilbert #ceo #management #hr #success",
      "date": "2015-07-28T08:57:39+0000"
    }, {
      "id": 258,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11223816_10153419600928904_6158028686245178445_n.png?oh=1ced9a83327fe1f25412f1446e8cbb6f&oe=57A5EA04",
      "text": "#catbert #wally #hr #motivation #passion #catch22",
      "date": "2015-07-27T12:09:01+0000"
    }, {
      "id": 259,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11227558_10153418583243904_7336646371272519622_n.png?oh=1ed37c4e4f77d045f0e4e5dc2aa44b36&oe=57DA5EA5",
      "text": "#boss #wally #dilbert #culture #interview",
      "date": "2015-07-27T06:30:01+0000"
    }, {
      "id": 260,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11751444_10153418586518904_1406770239346337227_n.png?oh=d4ab9d8f87293a6d2410842646812bc4&oe=57AB0AB2",
      "text": "#wally #boss #motivation #passion",
      "date": "2015-07-26T21:16:15+0000"
    }, {
      "id": 261,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11207311_10153413560643904_4458856796231595288_n.png?oh=310655930e217e289730f92319670733&oe=57E79DC8",
      "text": "#ceo #catbert #dilbert #management",
      "date": "2015-07-24T12:16:26+0000"
    }, {
      "id": 262,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11705253_10153413168763904_1856309267056178466_n.png?oh=e45aab998a7b232b15d2ac13e0b75f1d&oe=57D7A464",
      "text": "#boss #catbert #management #award",
      "date": "2015-07-24T06:30:09+0000"
    }, {
      "id": 263,
      "imageUrl": "https://scontent.xx.fbcdn.net/t31.0-8/11731837_10153411055758904_6097935545752935699_o.png",
      "text": "#boss #catbert #dilbert #alice #asok #management",
      "date": "2015-07-23T06:30:25+0000"
    }, {
      "id": 264,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11705161_10153409313438904_6578904748000610579_n.png?oh=4f3c76c64c3249c17ea2510a27f5970b&oe=57E436C4",
      "text": "#dilbert #boss #asok #management",
      "date": "2015-07-22T14:04:50+0000"
    }, {
      "id": 265,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11752332_10153406345638904_4348005505300799735_n.png?oh=da440c2eec166f32470b505e0ced75a7&oe=57DC461F",
      "text": "#boss #alice #management",
      "date": "2015-07-21T08:23:20+0000"
    }, {
      "id": 266,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1375215_10153404199098904_7208022263364961711_n.png?oh=77ae0d31093fadcf439682a3bc276883&oe=57ABDEFC",
      "text": "#dilbert #tina #smartwatch #gonedigital",
      "date": "2015-07-20T09:55:30+0000"
    }, {
      "id": 267,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11059939_10153402522973904_5629548478959443703_n.png?oh=a5f7665df4872310cc3bf1356f511993&oe=57E351C0",
      "text": "#boss #alice #dilbert #board #product #idea",
      "date": "2015-07-19T14:25:20+0000"
    }, {
      "id": 268,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11760115_10153400992288904_5721227592760840151_n.png?oh=0f7fa4136c728fdf75bd16cacea0c393&oe=579F3652",
      "text": "#dilbert #tina #digital #dating",
      "date": "2015-07-18T21:46:49+0000"
    }, {
      "id": 269,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11742792_10153397581248904_1081142914050442177_n.png?oh=8d0b49bcc0c83411aa86caa0675857d5&oe=579B2207",
      "text": "#dilbert #alice #genderequality",
      "date": "2015-07-17T11:01:34+0000"
    }, {
      "id": 270,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/15633_10153395019703904_9062691582376170668_n.png?oh=99b09dfe4ec0b91a9b1b3b6df4b8f8f9&oe=57D73311",
      "text": "#dilbert #boss #wally #advice",
      "date": "2015-07-16T07:55:11+0000"
    }, {
      "id": 271,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11695028_10153393929423904_7188454074713156092_n.png?oh=aa604f311cb1af427db1576750277b9c&oe=57A26218",
      "text": "#dilbert #advice",
      "date": "2015-07-15T17:34:34+0000"
    }, {
      "id": 272,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11017042_10153393928298904_6941867483272275123_n.png?oh=c71e44149d10d68675417f265730084d&oe=57A43987",
      "text": "#ceo #dilbert #elbonians #negitiations",
      "date": "2015-07-15T17:34:11+0000"
    }, {
      "id": 273,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11737829_10153389158518904_4394690637868997013_n.png?oh=4dd230f040f0047f0eb390d87f635021&oe=57AC5D9C",
      "text": "#alice #ceo #elbonians #negotiations",
      "date": "2015-07-13T09:42:49+0000"
    }, {
      "id": 274,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11188291_10153387180723904_6328365741319732158_n.png?oh=c8558cb927f1e733e57254d6e685bad1&oe=57AC1874",
      "text": "#alice #ceo #truth",
      "date": "2015-07-12T11:09:51+0000"
    }, {
      "id": 275,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11704820_10153387633103904_4905862409581355189_n.png?oh=f48fb5d2a6929f7b6ed82191e8ff8ed2&oe=57A09602",
      "text": "#wally #ceo #elbonians",
      "date": "2015-07-12T16:24:59+0000"
    }, {
      "id": 276,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11737879_10153382542553904_7581383812901233688_n.png?oh=deb90fd8dc46a58dc3de08879a42b50d&oe=57A201BC",
      "text": "#dilbert #ceo #people #struggles",
      "date": "2015-07-10T10:09:25+0000"
    }, {
      "id": 277,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11010533_10153380413498904_922464932047254191_n.png?oh=f70c5be61e6b81a0523b6e253f917798&oe=57D4E2AA",
      "text": "#wally #asok #success",
      "date": "2015-07-09T09:51:38+0000"
    }, {
      "id": 278,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11403248_10153378267538904_3674358432717131147_n.png?oh=764944fc32fec7241f0ca218851c3846&oe=57E0A92B",
      "text": "#wally #asok #job",
      "date": "2015-07-08T09:30:42+0000"
    }, {
      "id": 279,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11218751_10153376275558904_7269760229784050880_n.png?oh=4e2979c3e6865fb08cbf55838100b73f&oe=57A70D4C",
      "text": "#dilbert #wally #government #security",
      "date": "2015-07-07T14:31:35+0000"
    }, {
      "id": 280,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11013022_10153372990588904_7024746050952580171_n.png?oh=1eb65ed2d2077ed69389de7d57606989&oe=57D86FE3",
      "text": "#dilbert #government #engineers",
      "date": "2015-07-06T09:31:27+0000"
    }, {
      "id": 281,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11012526_10153371124818904_5500806936603379454_n.png?oh=dca8ed260983e4376b8bd5247dee8171&oe=57E6E4DB",
      "text": "#dilbert #boss #management #problems",
      "date": "2015-07-05T13:47:53+0000"
    }, {
      "id": 282,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11695340_10153368552848904_6962633584092621118_n.png?oh=08786867ac951f7ce0f4470b4c045b20&oe=57DBEDFB",
      "text": "#dilbert #government",
      "date": "2015-07-04T12:19:16+0000"
    }, {
      "id": 283,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10570556_10153365793393904_2727354579681268626_n.png?oh=2081290d558c7cca7a76334cd0b59169&oe=57D9A575",
      "text": "#dilbert #government #thegrid",
      "date": "2015-07-03T08:43:39+0000"
    }, {
      "id": 284,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1908122_10153363587733904_6637814401326980746_n.png?oh=cdff5033e880d915790f4a5984719431&oe=57E40270",
      "text": "#dilbert #google #thegrid #serp",
      "date": "2015-07-02T08:43:54+0000"
    }, {
      "id": 285,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11695009_10153361353068904_867641938237367172_n.png?oh=37fcfce73170506350ec906b997909c3&oe=57D94464",
      "text": "#dilbert #thegrid #possum #boredom",
      "date": "2015-07-01T09:12:35+0000"
    }, {
      "id": 286,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11693817_10153359019623904_6985180172979536057_n.png?oh=ffa9ebf833e0802c8dbce27d4ecb3fcb&oe=57DA1A26",
      "text": "#dilbert #security #government #thegrid",
      "date": "2015-06-30T10:36:09+0000"
    }, {
      "id": 287,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11659299_10153356702683904_1159406610949378356_n.png?oh=36d38d9599a056cdbe7539dae05e2070&oe=57D923F2",
      "text": "#dilbert #dogbert #government #security",
      "date": "2015-06-29T09:35:13+0000"
    }, {
      "id": 288,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11693880_10153354475808904_557518170719318300_n.png?oh=fbf919d9a279bd924d86b9fac04f986f&oe=57E03FFA",
      "text": "#boss #wally #steevejobs #meditation",
      "date": "2015-06-28T13:03:27+0000"
    }, {
      "id": 289,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11665551_10153354524823904_7511111313275232837_n.png?oh=d8ada4f17c6a168e1225e46ab5884e01&oe=57A02A63",
      "text": "#dilbert #dogbert #security",
      "date": "2015-06-28T13:33:04+0000"
    }, {
      "id": 290,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11012612_10153350097803904_7005217586756245067_n.png?oh=9382fc9221e2577407d94f50185759c0&oe=579F1A82",
      "text": "#dilbert #government #security",
      "date": "2015-06-26T09:32:35+0000"
    }, {
      "id": 291,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11540944_10153348409618904_4588656654564541976_n.png?oh=b363a5372933edacc8b29a8e9027f26b&oe=57A11ED1",
      "text": "#dilbert #boss #government #security #appforthis",
      "date": "2015-06-25T14:00:51+0000"
    }, {
      "id": 292,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11329869_10153345201683904_2467444513384132242_n.png?oh=677d9f522dbd43aca1952c14839eba00&oe=57A03352",
      "text": "#boss #wally #dilbert #strategy",
      "date": "2015-06-24T11:15:26+0000"
    }, {
      "id": 293,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10616639_10153343004028904_1008622452528142758_n.jpg?oh=a84bdd87c9ad9ecc61a43e63bb508412&oe=579D7806",
      "text": "#boss #dilbert #alice #strategy",
      "date": "2015-06-23T15:18:57+0000"
    }, {
      "id": 294,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10848051_10153339770358904_814820253903299178_n.png?oh=2c08f534180ee43e244906f9756a802f&oe=579C3C98",
      "text": "#wally #project #success",
      "date": "2015-06-22T10:05:57+0000"
    }, {
      "id": 295,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11541877_10153337493698904_7966739618546660583_n.png?oh=8d8fa96e1c3dc4956d159d9b4a0d94a6&oe=57DF52BA",
      "text": "#dilbert #security #elbonians #wifi",
      "date": "2015-06-21T15:01:00+0000"
    }, {
      "id": 296,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10359404_10153337151833904_3532045036486745521_n.png?oh=9dfd055e990955e11e6fb25fc94e01d7&oe=57A10346",
      "text": "#dilbert #boss #asok #meetings",
      "date": "2015-06-21T09:30:05+0000"
    }, {
      "id": 297,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/17722_10153332477798904_1682549973490335796_n.png?oh=58a1c12801b5a29836a451f8ae30b0ad&oe=57D8D14C",
      "text": "#boss #dilbert #random #leadership",
      "date": "2015-06-19T16:28:45+0000"
    }, {
      "id": 298,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10478198_10153332459778904_3954503687866476071_n.png?oh=13402ffa9aa65d0a36fa9fd51564b512&oe=57DFB52F",
      "text": "#alice #dating #stalker",
      "date": "2015-06-19T12:33:13+0000"
    }, {
      "id": 299,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11221361_10153328016833904_6604796186819260248_n.png?oh=6340b18db32597ae68b98761c6167133&oe=57E8325F",
      "text": "#dilbert #alice #dating #stalker",
      "date": "2015-06-17T11:57:33+0000"
    }, {
      "id": 300,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11406868_10153325414113904_4206893075775153510_n.png?oh=8fea95b75e4fe79dca9de57d6266fb73&oe=57E03E6A",
      "text": "#boss #ceo #digitalethics #adv",
      "date": "2015-06-16T07:54:44+0000"
    }, {
      "id": 301,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11248060_10153323235333904_7067266966431581327_n.png?oh=f26f620727f6489b52fc94ad275e23ce&oe=57E2F3FE",
      "text": "#dilbert #boss #smartwatch #digitalethics\nknock-knock, you left 5 minutes to live so you may also be interested in...",
      "date": "2015-06-15T08:24:43+0000"
    }, {
      "id": 302,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10440679_10153322108768904_5417481252933695555_n.png?oh=a29efced676d236375682790f8ac24ca&oe=57E85705",
      "text": "#dilbert #vendor #sales #sales #sales",
      "date": "2015-06-14T19:55:23+0000"
    }, {
      "id": 303,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11406892_10153319050633904_2149224249236728083_n.png?oh=56d9719de765dc68291f0a0ce8dcfbc0&oe=579BD677",
      "text": "#dilbert #smartwatch #healthkit",
      "date": "2015-06-13T10:25:39+0000"
    }, {
      "id": 304,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11401507_10153317076243904_3426494716755258380_n.png?oh=c8654c60335058e434fb6bb2f05a8f3d&oe=57E5CD5D",
      "text": "#dilbert #boss #smartwatch",
      "date": "2015-06-12T14:47:00+0000"
    }, {
      "id": 305,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11537809_10153317074103904_6122053899116038000_n.png?oh=553e3f1d4cdae5345e7533984effd40b&oe=579FAE4B",
      "text": "#dilbert #alice #wally #smartwatch #brainstorm",
      "date": "2015-06-12T11:35:31+0000"
    }, {
      "id": 306,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11148392_10153312858618904_6869819642097710255_n.png?oh=b61b12eda867ec09b6a0c1eeeaf0ece0&oe=57ABA80C",
      "text": "#boss #dilbert #smartwatch\nhttps://ru.wikipedia.org/wiki/%D0%9A%D0%B0%D1%81%D1%82%D0%B5%D1%80,_%D0%94%D0%B6%D0%BE%D1%80%D0%B4%D0%B6_%D0%90%D1%80%D0%BC%D1%81%D1%82%D1%80%D0%BE%D0%BD%D0%B3",
      "date": "2015-06-10T13:04:01+0000"
    }, {
      "id": 307,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11401003_10153311523583904_4381579116833093341_n.png?oh=0fbee2f9314fec86b70f4fe1bc154d40&oe=57AC93B1",
      "text": "#carol #dilbert #joy",
      "date": "2015-06-10T07:00:00+0000"
    }, {
      "id": 308,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11412294_10153310935148904_2677858629657763963_n.png?oh=9518e8b7ca4179c069b9ec1c92342828&oe=579C3F6F",
      "text": "#boss #dilbert #apple #engineers",
      "date": "2015-06-09T09:53:40+0000"
    }, {
      "id": 309,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11406913_10153311524373904_8583788692542556311_n.png?oh=23edfde227714541b3c493977d0e329a&oe=57E03FFB",
      "text": "#dilbert #dick #internet",
      "date": "2015-06-09T16:48:17+0000"
    }, {
      "id": 310,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10672209_10153310792648904_3813711738540159464_n.png?oh=10c0163ed6b29a6ba85bd3bbd0ae7312&oe=57E28424",
      "text": "#dilbert #boss #workload #hr",
      "date": "2015-06-09T07:12:58+0000"
    }, {
      "id": 311,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11393192_10153303006823904_7683099971652364348_n.png?oh=04ac178e725345c07916e7477790f6b6&oe=57A36F00",
      "text": "#boss #alice #dilbert #catbert #hr",
      "date": "2015-06-05T12:59:21+0000"
    }, {
      "id": 312,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11351429_10153299157263904_3357416634635391340_n.png?oh=11d3e3d949e344bfb54ea74403a7064d&oe=579B468D",
      "text": "#ceo #catbert #delegating",
      "date": "2015-06-03T14:47:00+0000"
    }, {
      "id": 313,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10406396_10153299152943904_4155037934756316593_n.png?oh=2184eb7ae65ba44e794583489aa87217&oe=579F9FEB",
      "text": "#boss #ceo #catbert #smm #delegating",
      "date": "2015-06-03T12:32:01+0000"
    }, {
      "id": 314,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11391316_10153299135643904_5579972734941967096_n.png?oh=3be2ab2e058e18430b59fb142fdb106e&oe=57E3C8D7",
      "text": "#boss #wally #smm",
      "date": "2015-06-03T12:11:56+0000"
    }, {
      "id": 315,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11392851_10153289867563904_2326278108382182591_n.png?oh=885c006ba131ed174ca541e77de12008&oe=57E6EF45",
      "text": "#dilbert #wally",
      "date": "2015-05-30T10:36:43+0000"
    }, {
      "id": 316,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11066798_10153289866833904_6767489669830561177_n.png?oh=18437c89f6643fe3c421918150d0489d&oe=57A08E8F",
      "text": "#dilbert #alice #boss",
      "date": "2015-05-30T10:36:21+0000"
    }, {
      "id": 317,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11295650_10153278338998904_4575830650309822567_n.png?oh=a1f2a39e5a67102b48ce97b54c5406e8&oe=57E60CD0",
      "text": "#boss #catbert #alice #hr",
      "date": "2015-05-28T13:12:25+0000"
    }, {
      "id": 318,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11163231_10153278337448904_6041294426475112103_n.png?oh=2683fc731a4effa169af95d6d752b9a6&oe=57DB671E",
      "text": "#boss #alice #problems",
      "date": "2015-05-28T07:24:47+0000"
    }, {
      "id": 319,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11350433_10153266553418904_4446267220900221972_n.png?oh=9ed9aa23c34371ba3b28ccb9092e371b&oe=57E47A0B",
      "text": "#boss #catbert #hr #interview",
      "date": "2015-05-27T07:20:01+0000"
    }, {
      "id": 320,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10421344_10153262395043904_7716126670667129118_n.png?oh=19712c06b143007777a7b3563ec4e975&oe=57E61AFD",
      "text": "#ceo #catbert #hr #requirements",
      "date": "2015-05-26T07:20:00+0000"
    }, {
      "id": 321,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1610930_10153258006583904_2720814999032790665_n.png?oh=9548ef57e2caeae24d2898b48b5cd113&oe=57A52778",
      "text": "#dilbert #dating",
      "date": "2015-05-24T11:58:54+0000"
    }, {
      "id": 322,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11295931_10153254189273904_8627090046663703048_n.png?oh=06d4b55cbb3918379a05b23dcf71b06c&oe=57A2B733",
      "text": "#dilbert #boss #robot #alice #passion",
      "date": "2015-05-23T10:39:09+0000"
    }, {
      "id": 323,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11216582_10153254188413904_1226023330171962101_n.png?oh=0c8f924a98383536d8326b4e03c988f4&oe=57E02D32",
      "text": "#dilbert #boss #robot",
      "date": "2015-05-23T10:38:32+0000"
    }, {
      "id": 324,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11351444_10153248257698904_2020160371115096902_n.png?oh=c1e92a454edb8c40da0d39a13f6a26c3&oe=57DAEA40",
      "text": "#dilbert #boss #3dprinter",
      "date": "2015-05-21T08:39:51+0000"
    }, {
      "id": 325,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11258199_10153245862573904_8464135952227049806_n.png?oh=7a86271ba619e4aebfb4426646198373&oe=57A330BF",
      "text": "#dilbert #dogbert #work #inspiration",
      "date": "2015-05-20T07:15:56+0000"
    }, {
      "id": 326,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10375058_10153242352143904_7498013285111817791_n.png?oh=05c7b05eebca73ecbe9630fad36cae2c&oe=57A09F64",
      "text": "#alice #wally #mondays #garfield",
      "date": "2015-05-18T21:27:17+0000"
    }, {
      "id": 327,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11265090_10153239818743904_2137683993458253534_n.png?oh=c35778c421b62653d2648c13acfe1198&oe=57E5E49F",
      "text": "#dilbert #coworker #privacy",
      "date": "2015-05-17T22:44:31+0000"
    }, {
      "id": 328,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11143355_10153239817718904_8808876463731095806_n.png?oh=f3b1c26a7d78de54ffbe1c2e08d2c4d0&oe=579F4D57",
      "text": "#boss #carol #office",
      "date": "2015-05-17T22:43:17+0000"
    }, {
      "id": 329,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11237574_10153242300358904_4249668583245312756_n.png?oh=3b38f5142711f51f9f1505a68cd9743d&oe=57D82D74",
      "text": "#alice #ted #promotion #smm",
      "date": "2015-05-18T20:57:45+0000"
    }, {
      "id": 330,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11012131_10153230630218904_2333638911776005619_n.png?oh=d669a74c0d16b343d4aa738c531c4ae3&oe=579C6892",
      "text": "#alice #boss #opinion",
      "date": "2015-05-14T10:50:03+0000"
    }, {
      "id": 331,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11168874_10153230942723904_8113510696326506869_n.png?oh=93346549f55168ab7ed05fa477babc59&oe=57A6073F",
      "text": "#dilbert #boss #opinion #rhetorics",
      "date": "2015-05-14T13:20:13+0000"
    }, {
      "id": 332,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10431553_10153230938213904_2529389279344494058_n.png?oh=fbf9dfed76b88971830f04cdfcc829f5&oe=57D87D87",
      "text": "#dilbert #boss #opinion #rhetorics",
      "date": "2015-05-14T13:19:45+0000"
    }, {
      "id": 333,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11329764_10153244983568904_5437331769423725667_n.png?oh=69117b3ad351fce48faaaa6f43ba3334&oe=57A9E102",
      "text": "#boss #interview #salary #education",
      "date": "2015-05-19T21:55:28+0000"
    }, {
      "id": 334,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11206967_10153244979028904_6863715787645623160_n.png?oh=c30deeb4a1b4496a68f4cc0e7b91bb59&oe=57E23C01",
      "text": "#dilbert #boss #smm #socialmedia",
      "date": "2015-05-19T21:52:58+0000"
    }, {
      "id": 335,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11170327_10153242339918904_3843657140002795530_n.png?oh=9cb0315ae6f953489cdd3491b3352c07&oe=57D4D14E",
      "text": "#dilbert #boss #strategy",
      "date": "2015-05-18T21:18:35+0000"
    }, {
      "id": 336,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/21677_10153258371308904_4532493357171790389_n.png?oh=33178fc64738eb61dc5519684f3cf385&oe=57A93D35",
      "text": "#boss #wally #dilbert #alice #success #leadership",
      "date": "2015-05-24T14:31:35+0000"
    }, {
      "id": 337,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/17397_10153258845128904_6368904914728283460_n.png?oh=0c9ad10027f4f0cdf251391890efcf14&oe=57E7532D",
      "text": "#boss #wally #fails #success",
      "date": "2015-05-24T17:13:14+0000"
    }, {
      "id": 338,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11259741_10153235864223904_6416105810281310335_n.png?oh=510612c4cd2cef24708e24122a782496&oe=57E3328F",
      "text": "#dilbert #boss #hr #promotion #leadership",
      "date": "2015-05-16T17:53:56+0000"
    }, {
      "id": 339,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11214030_10153234773238904_995045395519150748_n.png?oh=3900d1149f5b52ddcd0d84e7b931a5fc&oe=57A4B309",
      "text": "#dilbert #boss #comments #rhetorics",
      "date": "2015-05-16T09:21:45+0000"
    }, {
      "id": 340,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11205598_10153229283488904_5582120079882693231_n.png?oh=a0ce69a42f1f9c0881f1bc43f1d31edc&oe=57E62D31",
      "text": "#boss #dilbert #career #honesty",
      "date": "2015-05-13T18:48:10+0000"
    }, {
      "id": 341,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/22691_10153229282278904_4750587516215876745_n.png?oh=4a7ad2f089700273193b2ee2ac266749&oe=57DD1D79",
      "text": "#tina #career #dilbert",
      "date": "2015-05-13T18:47:34+0000"
    }, {
      "id": 342,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11259196_10153229280843904_1942930152943379212_n.png?oh=3ea34b875b5968b62c0ca824671633b4&oe=57DA1DE1",
      "text": "#alice #tina #career",
      "date": "2015-05-13T18:46:23+0000"
    }, {
      "id": 343,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11188421_10153197992263904_7781872743384240487_n.png?oh=ee72b0605af99bc42d7da6070394a555&oe=57A1460D",
      "text": "#alice #tina #winner #looser",
      "date": "2015-04-28T10:40:51+0000"
    }, {
      "id": 344,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11188464_10153196064448904_7109932226396397351_n.png?oh=fd99ce3f1aac62acf7723ec3bcdaa04d&oe=57E2847C",
      "text": "#dilbert #estimates #attack",
      "date": "2015-04-27T15:34:53+0000"
    }, {
      "id": 345,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11138674_10153195148763904_4368136935716370351_n.png?oh=e55356e49583094843ecdf13420c759f&oe=57E18983",
      "text": "#dilbert #boss #management #estimates",
      "date": "2015-04-27T07:17:07+0000"
    }, {
      "id": 346,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10543633_10153194268783904_6518005060068937966_n.png?oh=ef7be65be7b70f45446c82ce033934f8&oe=57A248E6",
      "text": "#dilbert #judgement",
      "date": "2015-04-26T21:12:02+0000"
    }, {
      "id": 347,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11178335_10153188521133904_2585294758954143217_n.png?oh=53faf046c734828f124c575521de6dc5&oe=57DBE0FD",
      "text": "#dilbert #boss #ceo #product #rootcause #problem",
      "date": "2015-04-24T14:43:13+0000"
    }, {
      "id": 348,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10653322_10153186224318904_3720667202296730348_n.png?oh=1d2472a30f5405f70d578aea7287c885&oe=57A179D8",
      "text": "#dilbert #technical #interview #smokers",
      "date": "2015-04-23T15:59:33+0000"
    }, {
      "id": 349,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10906536_10153183290683904_4659712856439091469_n.png?oh=13ca43ac1d417cc3bbb448f3911beff3&oe=579DABD2",
      "text": "#dilbert #boss #product #features",
      "date": "2015-04-22T12:49:20+0000"
    }, {
      "id": 350,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11099173_10153181186943904_2461213256312378018_n.png?oh=47b4af9130b89c50c71051c2042af235&oe=57A3DFED",
      "text": "#wally #dilbert #alice #product",
      "date": "2015-04-21T14:39:14+0000"
    }, {
      "id": 351,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/18817_10153178431973904_4831589142720222_n.png?oh=cc19924c1d8325ce7a057dcb1d5569d6&oe=57A0F769",
      "text": "#wally #boss #innovation #product",
      "date": "2015-04-20T14:24:18+0000"
    }, {
      "id": 352,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11156344_10153178789483904_922797024907795613_n.png?oh=8d466a4c74b573d8db0890db0d71465f&oe=579BEA96",
      "text": "#alice #dilbert #lunch",
      "date": "2015-04-21T13:04:51+0000"
    }, {
      "id": 353,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11150250_10153178370808904_5515324840941348671_n.png?oh=1f91e10a047dc23fe01e8009bd5b1b32&oe=57D968F5",
      "text": "#dilbert #boss #alice #innovation #product",
      "date": "2015-04-20T13:52:52+0000"
    }, {
      "id": 354,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11083589_10153170783613904_3787134375514471275_n.png?oh=2d1597f1f1975480f0407db447aabc99&oe=57A47863",
      "text": "#alice #wally #ideas",
      "date": "2015-04-17T12:36:56+0000"
    }, {
      "id": 355,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11078223_10153168317418904_3987239730172452069_n.png?oh=e87420854d8cc08d8d33339c835a08dc&oe=579986A4",
      "text": "#wally #dilbert #leadership #credibility",
      "date": "2015-04-16T11:33:08+0000"
    }, {
      "id": 356,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11133805_10153166642378904_2079484811482378453_n.png?oh=48f015bfb229d567dbef4137a967d261&oe=57A62312",
      "text": "#wally #ceo #dilbert #alice #boss #leadership",
      "date": "2015-04-15T18:16:04+0000"
    }, {
      "id": 357,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10929906_10153163473118904_3026705732645739205_n.png?oh=dcf068b8727cadd9b01d064d844bfc35&oe=57DCC152",
      "text": "#boss #wally #leadership",
      "date": "2015-04-14T10:09:26+0000"
    }, {
      "id": 358,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/14590_10153161487448904_2071416938348027992_n.png?oh=bad07d95cbe1e920c466924e899ab61b&oe=57E7CAC8",
      "text": "#boss #ceo #leadership",
      "date": "2015-04-13T13:59:27+0000"
    }, {
      "id": 359,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/19821_10153158588773904_752197901799875169_n.png?oh=32a8d80f251878f094fe09400e43f791&oe=57DD43AE",
      "text": "#dilbert #alice #wally #leadership #productmanager",
      "date": "2015-04-12T11:48:30+0000"
    }, {
      "id": 360,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13272_10153156047003904_3902739335991853529_n.png?oh=b7b4bbeb03520a8e346e04f82b683601&oe=57E073AF",
      "text": "#dilbert #boss #catbert #hr",
      "date": "2015-04-11T10:21:08+0000"
    }, {
      "id": 361,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11133696_10153153787428904_823951636687522961_n.png?oh=4121fbaff31b36bba4a25496675c6061&oe=57E4E88D",
      "text": "#boss #alice",
      "date": "2015-04-10T10:01:45+0000"
    }, {
      "id": 362,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10403569_10153151371268904_5155086867948649304_n.png?oh=f1516fb666055ea9438afc7dcdd55a3e&oe=57DDC0B9",
      "text": "#tina #alice #boss",
      "date": "2015-04-09T10:53:04+0000"
    }, {
      "id": 363,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11138589_10153149430398904_3672863150752268436_n.png?oh=9c8a1f6cd8c89c7cae0c6d356f36bfa3&oe=57D4F381",
      "text": "#alice #mansplaining",
      "date": "2015-04-08T15:41:24+0000"
    }, {
      "id": 364,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11025141_10153146667463904_1962264755406692280_n.png?oh=4797a4a5815b7f4bb73e45d2f2b58d10&oe=579F861E",
      "text": "#alice #boss #dilbert",
      "date": "2015-04-07T10:32:00+0000"
    }, {
      "id": 365,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11078098_10153144131053904_8138384303557461555_n.png?oh=66acf75502a40cbebabb8d05ee2a6dbc&oe=57A90F7A",
      "text": "#boss #hr #interview #app",
      "date": "2015-04-06T12:26:38+0000"
    }, {
      "id": 366,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11008463_10153143806318904_3876818534812568704_n.png?oh=441c7d9a8ccbfd39cc6e76e0ec8e78a9&oe=57A175EA",
      "text": "#dilbert #boss #app",
      "date": "2015-04-06T09:21:49+0000"
    }, {
      "id": 367,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11083614_10153136838663904_6241559668424150786_n.png?oh=391e6520049c591d669292be65f38668&oe=57E3AB46",
      "text": "#alice #dick #internet #expert",
      "date": "2015-04-03T14:34:19+0000"
    }, {
      "id": 368,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11102664_10153134391018904_6462744995299642259_n.png?oh=08991972daf4c2b323c7a49396676cf4&oe=57DE0E61",
      "text": "#dilbert #wally #economics #expert",
      "date": "2015-04-02T13:37:42+0000"
    }, {
      "id": 369,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10928192_10153131864253904_3413643310652634264_n.png?oh=86abd7c97d321a0819e41d238adab403&oe=57A01329",
      "text": "#dilbert #wally #economics #forecast",
      "date": "2015-04-01T13:09:01+0000"
    }, {
      "id": 370,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11091441_10153131821573904_7836003698639210021_n.png?oh=64f634e8c18b9edb3dc5cea9bc11d26b&oe=57DC4CB3",
      "text": "#dilbert #tina #wally #economics #forecast",
      "date": "2015-04-01T09:19:53+0000"
    }, {
      "id": 371,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11096451_10153128001378904_6662548884481739193_n.png?oh=c50348750d63c9faa6abc13a336ba180&oe=579FEF1C",
      "text": "#tina #wally  #economics",
      "date": "2015-03-30T14:03:19+0000"
    }, {
      "id": 372,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10550923_10153128313193904_662904932844138906_n.png?oh=d51768e2c3419cc7e3d0849018f00872&oe=57A2B01F",
      "text": "#dilbert #boss #asok #meeting #walk",
      "date": "2015-03-30T16:57:18+0000"
    }, {
      "id": 373,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11045436_10153127999293904_4443957064373161101_n.png?oh=e64d7c70e7cf9b3be1a3918229c2f76a&oe=57A116A9",
      "text": "#wally #boss #ceo #economics",
      "date": "2015-03-30T14:02:23+0000"
    }, {
      "id": 374,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11071047_10153120914088904_3508171940278663644_n.png?oh=156ffe4fa484a3558fd37f6712236f23&oe=579DEE5A",
      "text": "#dilbert #boss #ceo #economics",
      "date": "2015-03-27T13:40:10+0000"
    }, {
      "id": 375,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/16908_10153118147648904_6485538804275156588_n.png?oh=35650c795deb216669e249df6f373e3a&oe=57AC2D4D",
      "text": "#dilbert #wally #boss #ceo #economics",
      "date": "2015-03-26T10:54:12+0000"
    }, {
      "id": 376,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10996524_10153116632423904_8286579681086461391_n.png?oh=0365f601749b36459c82e01180a1ea2f&oe=57DD6648",
      "text": "#boss #wally #meetings",
      "date": "2015-03-25T16:38:02+0000"
    }, {
      "id": 377,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/l/t1.0-9/11081331_10153114255173904_69942300129193323_n.png?oh=a9cf94f7d8df053817c9a09a3f06759d&oe=579B5D83",
      "text": "#dogbert #boss #productdesign #ux",
      "date": "2015-03-24T16:13:39+0000"
    }, {
      "id": 378,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11084257_10153111289658904_4347256018760592000_n.png?oh=e52b83b9ef4e6c0907ce37a762b96b7c&oe=57E0977A",
      "text": "#dogbert #boss #productdesign #ux",
      "date": "2015-03-23T11:06:12+0000"
    }, {
      "id": 379,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10409749_10153111149763904_3036559359791921663_n.png?oh=02d72d59a4737bec172727f72018635a&oe=57E4CDC2",
      "text": "#dogbert #wally #asok #productdesign #ux",
      "date": "2015-03-23T10:06:50+0000"
    }, {
      "id": 380,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11061215_10153103876573904_8137866231173168630_n.png?oh=1e165988c4eb9f2a7918c2b5dcf6056b&oe=57DD89C6",
      "text": "#wally #asok #dilbert #board",
      "date": "2015-03-20T11:17:56+0000"
    }, {
      "id": 381,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/934856_10153100886323904_7273162059812086790_n.png?oh=ddfd95d445ded217cf88c2a4b21b63b2&oe=57A6D2C2",
      "text": "#asok #wally #vp #lackey",
      "date": "2015-03-19T10:07:20+0000"
    }, {
      "id": 382,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1901413_10153098658738904_8925160558603503099_n.png?oh=fc2e57552e45a8e3aa263e6942283a69&oe=57A841E8",
      "text": "#wally #alice #vp #management",
      "date": "2015-03-18T14:19:10+0000"
    }, {
      "id": 383,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10996491_10153095708763904_724060425656158318_n.png?oh=993f1cd9091db740c8617325a18f7165&oe=57DEEBED",
      "text": "#catbert #wally #ceo #alice #mentoring #career",
      "date": "2015-03-17T09:43:59+0000"
    }, {
      "id": 384,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11064602_10153093187163904_4233268220075544215_n.png?oh=82065bdd52831cf84b214a1a755b75d0&oe=57A99887",
      "text": "#ceo #wally #catbert #mentoring",
      "date": "2015-03-16T11:15:23+0000"
    }, {
      "id": 385,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/l/t1.0-9/11062264_10153084857673904_7360056706283363163_n.png?oh=5051511482478c7027075f91d9e112d0&oe=5799ABB7",
      "text": "#ceo #wally #alice #mentoring #backflow",
      "date": "2015-03-13T10:53:23+0000"
    }, {
      "id": 386,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10314685_10153082624578904_2158828319762815103_n.png?oh=77ed215faead838da9bc8da8e8ca1a70&oe=579CF700",
      "text": "#wally #ceo #mentoring",
      "date": "2015-03-12T11:38:26+0000"
    }, {
      "id": 387,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10410537_10153080277923904_687686328645921446_n.png?oh=a5b308222f77df137c73f9123b8a6b6b&oe=579D97EF",
      "text": "#wally #ceo #mentoring",
      "date": "2015-03-11T11:35:20+0000"
    }, {
      "id": 388,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10500561_10153078471873904_3666206578690875304_n.png?oh=8eb66a652e45077ecbd9ba95cd4b0f15&oe=57DEC454",
      "text": "#wally #ceo #boss #mentoring\nwally\'s tips&tricks",
      "date": "2015-03-10T16:35:55+0000"
    }, {
      "id": 389,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10408560_10153078169468904_7580711881940794604_n.png?oh=c2989001960a801223731a3663dd94d0&oe=57A4857C",
      "text": "#wally #work #timemanagement #philosophy",
      "date": "2015-03-10T13:23:31+0000"
    }, {
      "id": 390,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10355858_10153077932843904_8390725212791897861_n.png?oh=41a8dfb9f203407b70d4e8d6ffb6ef0c&oe=57AC6C6D",
      "text": "#dilbert #boss #motivation #compliments",
      "date": "2015-03-10T10:46:28+0000"
    }, {
      "id": 391,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11043170_10153076141658904_4867594789982232185_n.png?oh=41b7ebd7cba18dc4aa2c5a5fc79021e0&oe=57A3CB43",
      "text": "#alice #dilbert #salary #inequity",
      "date": "2015-03-09T17:14:40+0000"
    }, {
      "id": 392,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1508530_10153067203053904_593668883481196283_n.png?oh=fe3f2cfbd0cf6ab5f54ba573fe067e71&oe=57D5DE0C",
      "text": "#ceo #catbert #alice #salary #inequity",
      "date": "2015-03-06T12:54:11+0000"
    }, {
      "id": 393,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10450842_10153064616158904_7866433138275765093_n.png?oh=4197fdd9886bd32e77badf801d8d6307&oe=57D56E84",
      "text": "#alice #ceo #salary",
      "date": "2015-03-05T13:31:42+0000"
    }, {
      "id": 394,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11046675_10153062045823904_3048092503151168087_n.png?oh=3b0d1c8ef03c996fed9877e4822a0c91&oe=57D8C058",
      "text": "#ceo #catbert #salary",
      "date": "2015-03-04T11:01:28+0000"
    }, {
      "id": 395,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11008607_10153062045048904_55003818420370503_n.png?oh=67b4bb12dc92fbcdb7353edc0a2c08cb&oe=57D7CB67",
      "text": "#ceo #dilbert #alice #salary",
      "date": "2015-03-04T11:01:08+0000"
    }, {
      "id": 396,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11034257_10153058401223904_1788590925315150783_n.png?oh=24de10a83cfe99f6f1f730d75af8bb0e&oe=57E015B2",
      "text": "#wally #boss #income",
      "date": "2015-03-02T17:10:16+0000"
    }, {
      "id": 397,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11025190_10153060523923904_9115378320531209464_n.png?oh=856a9afa283ce57459719f9dad433ea2&oe=57E048E4",
      "text": "#dilbert #dogbert #techsupport #windows",
      "date": "2015-03-03T17:34:05+0000"
    }, {
      "id": 398,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10345548_10153057931563904_7750166404237638874_n.png?oh=087eb817e5b1011be5bc923f3207fdbb&oe=57E472E9",
      "text": "#dilbert #dogbert #design #ux",
      "date": "2015-03-02T12:29:54+0000"
    }, {
      "id": 399,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10959572_10153051210943904_3512647407374503923_n.png?oh=0c4773ead43ca9ae1d48dd59d7557454&oe=57D9D5E5",
      "text": "#dilbert #boss #ux #crime",
      "date": "2015-02-27T11:04:23+0000"
    }, {
      "id": 400,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11025782_10153049119343904_6255954418989808289_n.png?oh=52cf95593504ab95420280933f63296a&oe=57A9D4BD",
      "text": "#asok #boss #trading #investments",
      "date": "2015-02-26T10:02:59+0000"
    }, {
      "id": 401,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1464640_10153047067328904_6813317319055821612_n.png?oh=d6c618cb60f2935a9097895ac2e91467&oe=57A5A2BE",
      "text": "#asok #dilbert #investments #trading",
      "date": "2015-02-25T10:39:16+0000"
    }, {
      "id": 402,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11001896_10153045495253904_3998469295322532626_n.png?oh=6311bfa5409e615900f80b353a31de6f&oe=57DB1D81",
      "text": "#asok #boss #investments",
      "date": "2015-02-24T18:09:06+0000"
    }, {
      "id": 403,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11010572_10153044531203904_2676787893442081023_n.png?oh=146428b0e3577f6d92e006f4b1f954b3&oe=57A06DBB",
      "text": "#asok #boss #investment",
      "date": "2015-02-24T11:33:16+0000"
    }, {
      "id": 404,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/11002629_10153042803353904_3127371474145890935_n.png?oh=72600616c83e37f8d420f16320316149&oe=57DDA3B1",
      "text": "#dilbert #boss #leadership",
      "date": "2015-02-23T16:06:56+0000"
    }, {
      "id": 405,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10990202_10153043370938904_5694973448823491276_n.png?oh=3db2b8a80d65e62235bcabf76dba4403&oe=57ABDF34",
      "text": "#boss #asok #investments",
      "date": "2015-02-23T21:25:47+0000"
    }, {
      "id": 406,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1476344_10153035072008904_6380914088705040641_n.png?oh=ab17b6618094b55aca91fb70e34d5fe4&oe=57A09F53",
      "text": "#dilbert #ceo #elbonians #internet",
      "date": "2015-02-20T14:14:52+0000"
    }, {
      "id": 407,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10801933_10153031788133904_6671844984788370440_n.png?oh=abbfd39de2d12699a7805ace78d1b802&oe=57A1AFFA",
      "text": "#dilbert #elbonians #internet",
      "date": "2015-02-19T14:14:48+0000"
    }, {
      "id": 408,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10647037_10153028928018904_5374132577080120215_n.png?oh=417355a525a83a9003e3d74dcb7b2f98&oe=57A40738",
      "text": "#dilbert #elbonians #internet",
      "date": "2015-02-18T12:23:03+0000"
    }, {
      "id": 409,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1503422_10153026097783904_7498154972382041882_n.png?oh=d72bf7f115c07739daf9505abc40ce34&oe=579A4CF4",
      "text": "#dilbert #ceo #elbonians #internet",
      "date": "2015-02-17T12:59:39+0000"
    }, {
      "id": 410,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10342900_10153023347158904_8377330998025719121_n.png?oh=3c95ea4d1460348417bf8b3b88ef8a04&oe=57A9AC9E",
      "text": "#dilbert #tina #day",
      "date": "2015-02-16T11:46:59+0000"
    }, {
      "id": 411,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1972306_10153020532633904_323007495834455028_n.png?oh=c9492adbd7d87e0e16a789d58d5e913a&oe=57DBFD9D",
      "text": "#ceo #dilbert #media",
      "date": "2015-02-15T11:51:35+0000"
    }, {
      "id": 412,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10922686_10153020441273904_4002586906117581475_n.png?oh=ae9e169f212a4a1126145b59441c2f54&oe=579B8D2F",
      "text": "#dilbert #asok #success",
      "date": "2015-02-15T10:38:45+0000"
    }, {
      "id": 413,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10929947_10153015682628904_7219854616232413538_n.png?oh=6674bace148b9bfdd031b1f673b28a2d&oe=579CAFCD",
      "text": "#dilbert #sales #negotiations #reorg",
      "date": "2015-02-13T14:13:30+0000"
    }, {
      "id": 414,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10387681_10153012929788904_7182066710601733580_n.png?oh=ce1af8178b4024542423e4e4430b2321&oe=57A8713F",
      "text": "#dilbert #sales #anchoring #negotiations",
      "date": "2015-02-12T10:52:16+0000"
    }, {
      "id": 415,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10984301_10153010791488904_4451405523787315341_n.png?oh=fb3e329e3ac32edf90b26cce3ef17afa&oe=57D8503F",
      "text": "#dilbert #ceo",
      "date": "2015-02-11T10:30:03+0000"
    }, {
      "id": 416,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1780807_10153009488703904_8303727309756334410_n.png?oh=5ac46587a68fc0768839ced89edc5660&oe=57E6933F",
      "text": "#asok #ai #elonmask",
      "date": "2015-02-10T18:00:15+0000"
    }, {
      "id": 417,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10599672_10153006406298904_402912462916292199_n.png?oh=9c2f58be4b8064944a43c035b0cd7cd6&oe=5799BFDE",
      "text": "#dilbert #girlfriend #robots #marketing",
      "date": "2015-02-09T10:36:30+0000"
    }, {
      "id": 418,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10552579_10153003966368904_7545016643081955733_n.png?oh=aab70fe2fd552237868e2f39d33a98a6&oe=57E8473C",
      "text": "#wally #boss #job #strategy",
      "date": "2015-02-08T09:58:37+0000"
    }, {
      "id": 419,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10978693_10153002611458904_242236327278258589_n.png?oh=e490a7e4e3b2dff109b4506a10c87066&oe=57A51A22",
      "text": "#dilbert #robot #marketing",
      "date": "2015-02-07T17:54:18+0000"
    }, {
      "id": 420,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10983427_10153000299913904_8159336678072422340_n.png?oh=f0b4e2a4d0c592eaa0982399be7a1eb4&oe=579BFF85",
      "text": "#dilbert #robot #marketing",
      "date": "2015-02-06T14:37:06+0000"
    }, {
      "id": 421,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10407581_10152998511913904_3888019343992843242_n.png?oh=d9dc1cacccf9222cbabfb02cec747894&oe=57D76CBB",
      "text": "#dilbert #robot #marketing",
      "date": "2015-02-05T16:01:51+0000"
    }, {
      "id": 422,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1505478_10152996109428904_4438987448888075848_n.png?oh=493e01449bfcd9efbaf396b2ff9e9822&oe=57A11C60",
      "text": "#dilbert #wally #robots #freewill #marketing",
      "date": "2015-02-04T12:07:03+0000"
    }, {
      "id": 423,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10247402_10152993848488904_5742168778690597436_n.png?oh=13ccc7c28b11fd4b178e0d0370f99a9f&oe=57D54F60",
      "text": "#dilbert #boss #ceo #marketing",
      "date": "2015-02-03T14:23:10+0000"
    }, {
      "id": 424,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10955191_10152991490878904_1365653606663730122_n.png?oh=ac77ede681606fbffb88bc2f5fb25697&oe=57A17CDA",
      "text": "#ceo #boss #catbert #succession #power",
      "date": "2015-02-02T10:01:58+0000"
    }, {
      "id": 425,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10928172_10152990282633904_5512911643835678431_n.png?oh=6e769fce5377c3f239a4b6aca58609d0&oe=579E6202",
      "text": "#boss #dilbert #honesty",
      "date": "2015-02-01T20:10:18+0000"
    }, {
      "id": 426,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1511434_10152987463658904_3029968838641892544_n.png?oh=c46c1047ac885182ece7b1a20b52a3ee&oe=579C050A",
      "text": "#dilbert #garbageman #dolphin #storytelling",
      "date": "2015-01-31T13:37:55+0000"
    }, {
      "id": 427,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10888549_10152984823988904_7944690234071622851_n.png?oh=1e26ec1d2c62e5e72441ac0c0e7f15fe&oe=57E3AA5C",
      "text": "#dogbert #ceo #dolphin",
      "date": "2015-01-30T14:09:11+0000"
    }, {
      "id": 428,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1970882_10152982260988904_788982557996011238_n.png?oh=d3492ba9cbe6f897c7c05d40b5658896&oe=57D64844",
      "text": "#dilbert #ceo",
      "date": "2015-01-29T14:30:07+0000"
    }, {
      "id": 429,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1506549_10152979123773904_4739492395100944371_n.png?oh=7ff3271c51e4cf86a68a14a387e46064&oe=57A30C1E",
      "text": "#dilbert #wally #success #networking",
      "date": "2015-01-28T11:01:55+0000"
    }, {
      "id": 430,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10487522_10152976760123904_7525152535769433142_n.png?oh=9dd0086ecc1037be069158cc8827f158&oe=57AB38F3",
      "text": "#dilbert #boss #money #god",
      "date": "2015-01-27T11:27:06+0000"
    }, {
      "id": 431,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1610867_10152974914193904_6046171316156860751_n.png?oh=e30c2fb4d054753a20743c121775cf0b&oe=57E5758B",
      "text": "#boss #dilbert #project #phase",
      "date": "2015-01-26T14:55:01+0000"
    }, {
      "id": 432,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1012980_10152974500583904_2393363962468482897_n.png?oh=5212a187fcd815343462ff608ae78695&oe=57ACFD06",
      "text": "#dilbert #wally #meetings #work #tipsntricks",
      "date": "2015-01-26T10:53:08+0000"
    }, {
      "id": 433,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1907933_10152974852753904_8076302136242740487_n.png?oh=d17cd27a2f5fb96f7016cd7dd07ec631&oe=57AAF83E",
      "text": "#dilbert #statistics",
      "date": "2015-01-26T14:13:44+0000"
    }, {
      "id": 434,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1012982_10152968304793904_3426749600169935365_n.png?oh=62908c63eaa8f12885cd631322df2c09&oe=57E73565",
      "text": "#dilbert #boss #engagement",
      "date": "2015-01-23T10:26:28+0000"
    }, {
      "id": 435,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10940461_10152966501363904_9159310209438400070_n.png?oh=de1d80449e4254451ed837904631e450&oe=57E16EAC",
      "text": "#dilbert #wally #market #innovations",
      "date": "2015-01-22T12:00:06+0000"
    }, {
      "id": 436,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/960236_10152964555178904_737420974476484132_n.png?oh=ed18765bd9ed946856a13f051ec05f0d&oe=57A71999",
      "text": "#dilbert #boss #ceo #market",
      "date": "2015-01-21T11:29:21+0000"
    }, {
      "id": 437,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10929200_10152962503328904_5513127547221340409_n.png?oh=4faf4d8832c15c34edb8402d6c41079e&oe=57A68436",
      "text": "#catbert #ceo #boss #management",
      "date": "2015-01-20T11:44:50+0000"
    }, {
      "id": 438,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/13198_10152960395828904_3828311290114211710_n.png?oh=42c77fce56f0476c061ec091cebb8701&oe=57A44C7B",
      "text": "#dilbert #boss #managers",
      "date": "2015-01-19T11:26:21+0000"
    }, {
      "id": 439,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10931504_10152957911053904_1514904349856972231_n.png?oh=cbfcfca957c480c212cc5103229c408d&oe=57A4D092",
      "text": "#dilbert #boss #catbert #growth #challenge",
      "date": "2015-01-18T10:51:41+0000"
    }, {
      "id": 440,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10155890_10152956743998904_7697046674302912153_n.png?oh=c7a7a25fee4567aeed473c456df98ab4&oe=57D6E11B",
      "text": "#boss #hr #fierce",
      "date": "2015-01-17T19:11:45+0000"
    }, {
      "id": 441,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10917323_10152954009888904_1331779893005472845_n.png?oh=dd5e3d8f4277098e1a6a94fea103a39d&oe=57A3BB85",
      "text": "#ceo #boss #dilbert #alice #asok #motivation #leadership",
      "date": "2015-01-16T11:46:34+0000"
    }, {
      "id": 442,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10351897_10152952383048904_7944776738742510768_n.png?oh=796ddb6b08cf93d2c9517434dc8e6b0e&oe=57AADF9A",
      "text": "#dilbert #catbert #boss #wally #harrypotter #hr",
      "date": "2015-01-15T14:35:42+0000"
    }, {
      "id": 443,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10931074_10152950142918904_6067434851655957813_n.png?oh=58cbc857838522bd2dc0c9a1b85254b3&oe=57A1B89F",
      "text": "#dilbert #wally #work",
      "date": "2015-01-14T13:26:57+0000"
    }, {
      "id": 444,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10888596_10152947835463904_321869146093234045_n.png?oh=19e2701300f929267b21598070a192fe&oe=579F682C",
      "text": "#dilbert #boss #leadership",
      "date": "2015-01-13T10:50:00+0000"
    }, {
      "id": 445,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10922759_10152945622798904_7361028689434606125_n.png?oh=b580ee8d1e24bb8d8eb526a2f0be5ff0&oe=579E7198",
      "text": "#dilbert #catbert #selfconfidence",
      "date": "2015-01-12T10:12:07+0000"
    }, {
      "id": 446,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10929169_10152943589748904_4094684338069677503_n.png?oh=392f934b6a38a3348f2dae05a22569da&oe=57A3E518",
      "text": "#wally #asok #boss #taper\nOne more trick from Wally",
      "date": "2015-01-11T12:44:39+0000"
    }, {
      "id": 447,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10394777_10152942007993904_7495643263878338078_n.png?oh=81a2d73af4ce2de141f4494a77857c3f&oe=57E1E53A",
      "text": "#alice #topper",
      "date": "2015-01-10T17:32:57+0000"
    }, {
      "id": 448,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10858116_10152940234673904_1751635270241798268_n.png?oh=8cd3fe72de5dcdf4d7ff5504dfc0552d&oe=579ADEC8",
      "text": "#dilbert #dating",
      "date": "2015-01-09T20:44:19+0000"
    }, {
      "id": 449,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10347612_10152940233683904_6053583132789252724_n.png?oh=f952262ec40ac6e41885a8c90520ed3f&oe=57D8DED0",
      "text": "#dilbert #tina #efficiency",
      "date": "2015-01-09T20:43:58+0000"
    }, {
      "id": 450,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10426619_10152935684073904_4991700946897033978_n.png?oh=19f08664177c250ee4a138b0966e3895&oe=57A32B62",
      "text": "#dilbert #geek #style",
      "date": "2015-01-07T21:24:24+0000"
    }, {
      "id": 451,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10897844_10152935681928904_1637618260073065244_n.png?oh=8caa936d796c4d039467ec75ba1c4e28&oe=579A6A1E",
      "text": "#dilbert #dating",
      "date": "2015-01-07T21:23:23+0000"
    }, {
      "id": 452,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10906481_10152926163308904_3551650341883274017_n.png?oh=87dccb72b16fae1b5d1b73304e467dc1&oe=57E18D78",
      "text": "#dilbert #dating #testing",
      "date": "2015-01-05T14:56:31+0000"
    }, {
      "id": 453,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10922416_10152926049943904_6830293642356043581_n.png?oh=52e8111c5fca5110e44fb8d9b905a1f0&oe=57DE876D",
      "text": "#boss #carol #work",
      "date": "2015-01-05T14:50:32+0000"
    }, {
      "id": 454,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10801986_10152912871278904_5156992239565885847_n.png?oh=bad04eca9753d446e99d07f6e08d9126&oe=57E0024A",
      "text": "#dilbert #dating #engineers #job",
      "date": "2015-01-03T16:05:29+0000"
    }, {
      "id": 455,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10402981_10152912869908904_211971324216486418_n.png?oh=9cc8058bdf99ff57b02385e3203679f4&oe=57D85FE9",
      "text": "#dilbert #dating  #engineers",
      "date": "2015-01-03T16:04:01+0000"
    }, {
      "id": 456,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10888676_10152912869898904_8433101845696456187_n.png?oh=ef0d112f0514e44924f0d04299011d5b&oe=57A805EC",
      "text": "#dilbert #dating #engineers",
      "date": "2015-01-03T16:04:01+0000"
    }, {
      "id": 457,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10891605_10152894488228904_1027607797208927949_n.png?oh=da793039011ae51b98a9da177a8cb847&oe=57A9E0CE",
      "text": "#dilbert #dogbert #dating",
      "date": "2014-12-31T16:57:23+0000"
    }, {
      "id": 458,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1932246_10152889809688904_5393491399437111726_n.png?oh=2deca5ac97ecb98bf54f0fe9e72d2777&oe=57E16210",
      "text": "#dilbert #tina #dating",
      "date": "2014-12-30T12:51:40+0000"
    }, {
      "id": 459,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1926870_10152887069648904_7866576433346392908_n.png?oh=8273b2bd75ffdd39c86456f3e1a37d71&oe=57A6AF37",
      "text": "#dilbert #dogbert #routine #success",
      "date": "2014-12-29T10:36:30+0000"
    }, {
      "id": 460,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10888566_10152885567638904_1215522810596060120_n.png?oh=3519c36c9357c2539922dbfc286a19e4&oe=57A79F65",
      "text": "#dilbert #ceo #productivity",
      "date": "2014-12-28T18:51:48+0000"
    }, {
      "id": 461,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10888757_10152885596738904_6764379037663574779_n.png?oh=028e3d6984f09c0f6869e898353ecc40&oe=579B0E82",
      "text": "#dilbert #ceo #boss #product #retention",
      "date": "2014-12-28T19:05:45+0000"
    }, {
      "id": 462,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10888370_10152880142888904_6351764238451263502_n.png?oh=c22f938c5df02243b6489bbbadb8cd44&oe=579FEAD5",
      "text": "#dilbert #ted #ux",
      "date": "2014-12-26T16:01:52+0000"
    }, {
      "id": 463,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10309701_10152876998598904_5696163899739222068_n.png?oh=59dc4be5695a0fe6eaf3ca7a1231a67d&oe=57A6E59B",
      "text": "#boss #hr #budget",
      "date": "2014-12-25T15:26:56+0000"
    }, {
      "id": 464,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10540552_10152873958813904_4545145177857337725_n.png?oh=fa5fb05e203191cf9f3cd31dbb658738&oe=57A72AA9",
      "text": "#dilbert #alice #tina #smalltalks",
      "date": "2014-12-24T15:44:18+0000"
    }, {
      "id": 465,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10570514_10152871143628904_700985808864835623_n.png?oh=94851181f63d922d0b3b16c8525ec3e9&oe=57DCDA0D",
      "text": "#carol #dilbert #career #passsion",
      "date": "2014-12-23T11:03:12+0000"
    }, {
      "id": 466,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/253292_10152868969973904_1998153812634064964_n.png?oh=c143bc13139edfca949559de42899572&oe=57A6075F",
      "text": "#dilbert #boss #leadership",
      "date": "2014-12-22T11:41:27+0000"
    }, {
      "id": 467,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10351802_10152867318808904_3669754565155998152_n.png?oh=d38c73ec96bd34b2ffa70d17db58f1af&oe=579ED5CC",
      "text": "#dilbert #perfectionism #bias",
      "date": "2014-12-21T18:46:25+0000"
    }, {
      "id": 468,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10455449_10152867386138904_2263718127261487296_n.png?oh=6c94cdfb0d4de86285cb14f721321a2d&oe=57A1335B",
      "text": "#tina #dilbert #rumors",
      "date": "2014-12-21T19:22:41+0000"
    }, {
      "id": 469,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10347646_10152861834488904_7334562122515089572_n.png?oh=1b6b0bec66ff1b552ac6dc4987a2df5f&oe=57E18349",
      "text": "#dilbert #carol #boss #traffic",
      "date": "2014-12-19T11:12:02+0000"
    }, {
      "id": 470,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10849884_10152860182043904_40456701880390409_n.png?oh=b814be453d5cc6be7c87990809cb3599&oe=57A80FE1",
      "text": "#dilbert #marketing #engineers",
      "date": "2014-12-18T16:38:24+0000"
    }, {
      "id": 471,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10857787_10152857797993904_490503575436564271_n.png?oh=6441a3f5218ec96b59b04188d0a21828&oe=579B2570",
      "text": "#dilbert #wally #strategy",
      "date": "2014-12-17T17:24:39+0000"
    }, {
      "id": 472,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10858633_10152855062358904_884651625036536900_n.png?oh=ccd9ab7960c4b225a79c62d6bf3d42a8&oe=57DA3525",
      "text": "#boss #finances",
      "date": "2014-12-16T14:15:21+0000"
    }, {
      "id": 473,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10391015_10152852488438904_5644186045137256447_n.png?oh=3c60a94abba7117d2f3e1868186c9225&oe=57E2B4D5",
      "text": "#dilbert #finances",
      "date": "2014-12-15T10:19:03+0000"
    }, {
      "id": 474,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10868193_10152848591553904_5139568016629303809_n.png?oh=4b1f55144a84789616eec3bc512842c1&oe=57E24BB4",
      "text": "#boss #dilbert #power",
      "date": "2014-12-13T12:27:35+0000"
    }, {
      "id": 475,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10457512_10152847054958904_6657176344808760474_n.png?oh=ec7fdcdc289ebc5dc6f8ed86874b7fb3&oe=57DB2534",
      "text": "#wally #analysis",
      "date": "2014-12-12T17:04:30+0000"
    }, {
      "id": 476,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1620932_10152844893723904_1677920886178385617_n.png?oh=7ddd0ca797758133192572be09df6ae5&oe=57D96048",
      "text": "#dilbert #wally #alice",
      "date": "2014-12-11T16:14:06+0000"
    }, {
      "id": 477,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10858088_10152842584478904_8445823058658689304_n.png?oh=016e0ae631c83e31ee830f67b7244728&oe=57A05F4B",
      "text": "#dilbert #wally #boss #assignments",
      "date": "2014-12-10T13:51:47+0000"
    }, {
      "id": 478,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10009890_10152840261318904_2562585341740776881_n.png?oh=157006ae4f0e3f4ad52867cfc90e3993&oe=57AA28BF",
      "text": "work and family dilemma\n#dilbert #carol #family #work",
      "date": "2014-12-09T11:42:37+0000"
    }, {
      "id": 479,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10430869_10152837822948904_1849392223062887628_n.png?oh=6101ff6b8669402054882aeb621ab858&oe=57E1AD02",
      "text": "#boss #wally #dilbert #cloud",
      "date": "2014-12-08T10:47:00+0000"
    }, {
      "id": 480,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1926659_10152833961808904_5673655254394864104_n.png?oh=30340df8af9d1f8f24f6f68e2c1ced07&oe=57D54497",
      "text": "#ceo #dlibert #coauthor",
      "date": "2014-12-06T15:39:19+0000"
    }, {
      "id": 481,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1507198_10152832112543904_653744993450869653_n.png?oh=1f7db588f519735907a49decb0f91744&oe=57A1FB07",
      "text": "#dilbert #dinosaur #smartwatch",
      "date": "2014-12-05T17:18:54+0000"
    }, {
      "id": 482,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10801674_10152829549588904_2719767487088082594_n.png?oh=7f3829fb527d0db5609a79ce4f471743&oe=57D95CA8",
      "text": "#dogbert #dinosaur",
      "date": "2014-12-04T10:45:04+0000"
    }, {
      "id": 483,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10501721_10152828216073904_2327581604477909466_n.png?oh=e57c7472fd7a41304cb6c8d5d20d1e3e&oe=57ACEEB3",
      "text": "#alice #dinosaur\nДинозавр Боб — редкий, но давнишний герой http://search.dilbert.com/comic/Bob%20The%20Dinosaur",
      "date": "2014-12-03T17:40:12+0000"
    }, {
      "id": 484,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10451851_10152826174598904_1560348462176920727_n.png?oh=e6078212a7e32be33e439dafe447a33b&oe=57E67119",
      "text": "#dilbert #boss #criticism",
      "date": "2014-12-02T14:49:27+0000"
    }, {
      "id": 485,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10801618_10152823605713904_3444583340288985283_n.png?oh=7f4181ed2f9f212f416ec55d8f823dde&oe=57A891AA",
      "text": "#wally #boss #report",
      "date": "2014-12-01T12:28:09+0000"
    }, {
      "id": 486,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10635990_10152823483293904_4623846934760048091_n.png?oh=23c37e389c8685be538c234bfce5ca9e&oe=57D6C506",
      "text": "#dilbert #boss #feedback",
      "date": "2014-12-01T10:41:49+0000"
    }, {
      "id": 487,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10502515_10152820606073904_5453070625141034186_n.png?oh=5d4fec39779974460e0e4ec8477c7e86&oe=579AFF4A",
      "text": "#dilbert #alice #vacation #afterglow",
      "date": "2014-11-29T22:28:36+0000"
    }, {
      "id": 488,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10671354_10152817641513904_8536404669793574983_n.png?oh=39fffdf6b4226a6923b80b8fa4f0a3eb&oe=57A1506A",
      "text": "#dilbert #engineer",
      "date": "2014-11-28T10:53:24+0000"
    }, {
      "id": 489,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10382153_10152815610548904_501237107555245377_n.png?oh=6fb592a81f590595ce3c7a390cfcb1b2&oe=57E3E3D9",
      "text": "#boss #dilbert #failure #plan",
      "date": "2014-11-27T10:46:13+0000"
    }, {
      "id": 490,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10628207_10152813797448904_5870473410777589928_n.png?oh=b9e5041b8c08211e8311e177d3f38521&oe=579A84A2",
      "text": "#boss #dilbert #deadline #management",
      "date": "2014-11-26T13:05:15+0000"
    }, {
      "id": 491,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10407596_10152811943843904_2507249736205029060_n.png?oh=ed8ed8f0bb324118bc285b7ad4b0dce3&oe=57A6F32E",
      "text": "#dilbert #project #credibility",
      "date": "2014-11-25T13:28:27+0000"
    }, {
      "id": 492,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10367589_10152809588413904_965008272430795653_n.png?oh=1fe3accc5c56e614dea91d85ce37a4e5&oe=57DFEB07",
      "text": "#dilbert #ceo #bid #rfp #subcontract",
      "date": "2014-11-24T10:24:03+0000"
    }, {
      "id": 493,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10478546_10152818747173904_7996323845317559298_n.png?oh=5415c7068d0f6c7a925373eaba42b86d&oe=57A5ABAB",
      "text": "#boss #wally #childday",
      "date": "2014-11-28T23:18:43+0000"
    }, {
      "id": 494,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1509740_10152805275523904_700564062023553179_n.png?oh=936567c82c4ff68c61ca2281124b73f2&oe=579E1A89",
      "text": "#dilbert #boss #problem",
      "date": "2014-11-22T14:29:31+0000"
    }, {
      "id": 495,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10547622_10152803150418904_6762231506615059614_n.png?oh=59ac55f9f1c4cded5cf72e427147c3a1&oe=57E0594A",
      "text": "#dilbert #ceo #rehire",
      "date": "2014-11-21T12:23:29+0000"
    }, {
      "id": 496,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/1455971_10152801454063904_4391531617272657882_n.png?oh=3918428606c30cfb5624f52f640aec3d&oe=57D83A33",
      "text": "#dilbert #ceo #catbert",
      "date": "2014-11-20T17:09:39+0000"
    }, {
      "id": 497,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10523339_10152799177908904_5854446026403753284_n.png?oh=9d2c820934832fc0b91e4ba69f2a7d0a&oe=57DA4DAF",
      "text": "#dogbert #wally #asok #paychain",
      "date": "2014-11-19T12:45:01+0000"
    }, {
      "id": 498,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/10386770_10152797629063904_3062468275676833086_n.png?oh=09b7be2ee656f6885997f76ca970539a&oe=57E48905",
      "text": "#dilbert #catbert #coceo",
      "date": "2014-11-18T16:15:24+0000"
    }, {
      "id": 499,
      "imageUrl": "https://scontent.xx.fbcdn.net/v/t1.0-9/983826_10152796420503904_3706257023281707182_n.png?oh=7b0b6e8edb85b195238f4ee6a8c31fb8&oe=57ABD13B",
      "text": "#dogbert #coceo #board",
      "date": "2014-11-17T23:07:52+0000"
    }]';
});