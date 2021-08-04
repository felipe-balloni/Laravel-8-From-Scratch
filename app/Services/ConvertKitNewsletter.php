<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class ConvertKitNewsletter
{

    /**
     * @param string $email
     * @param array $tags
     * @return array|mixed
     */
    public function subscribe(string $email, array $tags, string $list = null) {

        $list ??= config('services.convertkit.form_id');

        return Http::post(
            config('services.convertkit.url') . '/v3/forms/' . $list . '/subscribe',
            [
                'api_key' => config('services.convertkit.key'),
                'email' => $email,
                'tag' => $tags,
            ]
        )->json();

    }

}