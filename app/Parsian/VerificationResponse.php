<?php

namespace App\Parsian;

use App\Parsian\Error;
use Illuminate\Support\Facades\Log;

class VerificationResponse
{
    /**
     * @var int The status code of the response.
     */
    private $status;

    /**
     * @var string The refference id associated with the response.
     */
    private $refference_id;

    /**
     * @var string The card hash associated with the response.
     */
    private $card_hash;

    /**
     * VerificationResponse constructor.
     *
     * @param $result The response data.
     */
    public function __construct($result)
    {
        $this->status = $result->ConfirmPaymentResult->Status;
        $this->refference_id = $result->ConfirmPaymentResult->RRN;

        if ($this->success()) {
            Log::info('Confirmat payment result properties are:' . implode('|', get_class_vars($result->ConfirmPaymentResult)));
            // $this->card_hash = $result->ConfirmPaymentResult->HashCardNumber;
        }
    }

    /**
     * Get the status code of the response.
     *
     * @return int The response status code.
     */
    public function status(): int
    {
        return $this->status;
    }

    /**
     * Get the refference id associated with the response.
     *
     * @return string The response refference id.
     */
    public function cardHash(): string
    {
        return $this->card_hash;
    }

    /**
     * Get the refference id associated with the response.
     *
     * @return string The response refference id.
     */
    public function refferenceId(): string
    {
        return $this->refference_id;
    }

    /**
     * Check if the response indicates success.
     *
     * @return bool True if the response is successful, false otherwise.
     */
    public function success(): bool
    {
        return $this->status === 0 && $this->refference_id > 0;
    }

    /**
     * Get the error associated with the response.
     *
     * @return Error The response error.
     */
    public function error(): Error
    {
        return new Error($this->status);
    }
}
