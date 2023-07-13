<?php

namespace Spaaro\Requests;

trait Message
{
    private $otpRoute = "ws/send-message";

    public function sendMessage(string $message, string $mobile)
    {
        return $this->post($this->otpRoute, [
            'message' => $message,
            'mobile_number' => spaaroFixPhone($mobile),
        ]);
    }
}
