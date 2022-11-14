<?php

namespace App\Services;


class Newsletter
{
    public function subscribe(string $email , string $list=null)
    {
        if(!isset($list))
            $list=config('services.mailchimp.lists.subscribers');



        //    $response = $mailchimp->ping->get();
        //    $response = $mailchimp->lists->getListMembersInfo("58dda789c5");
        return $this->client()->lists->addListMember($list, [
            "email_address" => $email,
            "status" => "subscribed",
        ]);

    }

    public function client()
    {
//        $mailchimp = new ApiClient();

//        return $mailchimp->setConfig([
//            'apiKey' => config('services.mailchimp.key'),
//            'server' => 'us21'
//        ]);
    }
}
