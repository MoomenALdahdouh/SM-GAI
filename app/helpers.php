<?php


use App\Models\Notification;
use Carbon\Carbon;

function custom_response($status, $message, $data, $statusCode = 200)
{
    return response()->json(['status' => $status, 'message' => $message, 'data' => $data], $statusCode);
}

function cal_percentage($number, $percent)
{
    return ($percent / 100) * $number;
}

function store_notification(\App\Models\Customer $customer, $title, $description, $notification_data, $type, $privacy)
{
    $date = Carbon::now();
    $formattedDate = $date->format('Y-m-d');

    Notification::create(
        [
            "title" => $title,
            "description" => $description,
            "data" => $notification_data,
            "privacy" => $privacy,
            "date" => $formattedDate,
            "type" => $type,
            "customer_id" => $customer->id,
        ]
    );

    if ($customer)
        if ($customer->fcm)
            send_notification($customer, $title, $description, $notification_data);
}


function store_collection_notification($customerToken, $customerId, $title, $description, $notification_data, $type)
{
    $date = Carbon::now();

    foreach ($customerId as $id) {
        Notification::create(
            [
                "title" =>$title,
                "details" => $description,
                "type" => $type,
                "customer_id" => $id,
            ]
        );
    }

    if ($customerToken)
    send_notification(new \App\Models\Customer(), $title, $description, $notification_data, $customerToken);
}

function send_notification(\App\Models\Customer $customer, $title, $description, $notification_data, $tokens = null)
{

    $SERVER_API_KEY = '	AAAAbvNhm48:APA91bEdyuYco4W2WFdFxFPnvBn58XxV7Qs73WbS_33QknuwwNiRMAirAsQfgHIx_9PVsDOhsGAObCEAW6FxOCHJ-vjVpeMpg0Cd6mXrWu2ApkiKvunndzwxSRCbkMKsLZhuukR81r1U';

    if ($customer)
        $token_1 = $customer->fcm;

    $data = [


        "registration_ids" => $tokens ?? [
                $token_1
            ],

        "notification" => [

            "title" => $title,

            "data" => $notification_data,

            "body" => $description,

            "sound" => "default" // required for sound on ios

        ],

        "data" => $notification_data

    ];
    $dataString = json_encode($data);

    $headers = [

        'Authorization: key=' . $SERVER_API_KEY,

        'Content-Type: application/json',

    ];

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');

    curl_setopt($ch, CURLOPT_POST, true);

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);

    $response = curl_exec($ch);

}

