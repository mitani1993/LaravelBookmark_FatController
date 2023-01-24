<?php

namespace App\Lib\LinkPreview;

use Dusterio\LinkPreview\Client;

final class LinkPreview
{
    public function get(string $url): array
    {
        $previewClient = new Client($url);
        return $previewClient->getPreview('general')->toArray();
    }
}
