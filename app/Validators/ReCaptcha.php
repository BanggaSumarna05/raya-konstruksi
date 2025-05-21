<?php

namespace App\Validators;

use GuzzleHttp\Client;

class ReCaptcha
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        $client = new Client;
        $response = $client->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'form_params' =>
                [
                    'secret' => '6LcPescpAAAAANrRTOkbTGKCGNP7SOei--7ktbJv',
                    'response' => $value
                ]
            ]
        );

        $body = json_decode((string)$response->getBody());
        return $body->success;
    }
    public function rules()
    {
        return [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'message' => 'required|max:1000',
            'g-recaptcha-response' => 'required|recaptcha'
        ];
    }
    public function messages()
    {
        return [
            //...
            'g-recaptcha-response.required' => 'Your custom message',
            'g-recaptcha-response.recaptcha' => 'Please prove that you are not a robot'
        ];
    }
}
