<?php

use Illuminate\Http\Request;

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/page/{page}', function(Request $request, $page){
    return response()->json(['page' => $page, 'param' => $request->all(), 'headers' => $request->headers->all()]);
});
