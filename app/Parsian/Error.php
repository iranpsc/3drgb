<?php

namespace App\Parsian;

use Illuminate\Support\Facades\Log;

class Error
{
    /**
     * @var int The error code.
     */
    private $code;

    /**
     * Error constructor.
     * @param string $code The error code.
     */
    public function __construct(int $code)
    {
        $this->code = $code;
    }

    /**
     * Get the error code.
     *
     * @return int The error code.
     */
    public function code(): int
    {
        return $this->code;
    }

    /**
     * Get the error message.
     *
     * @return string The error message.
     */
    public function message(): string
    {
        Log::info('Parsian error code is: ' . $this->code);
        return match ($this->code) {
            -138 => 'تراکنش ناموفق می باشد',
            -127 => 'آدرس IP معتبر نمی باشد',
            58 => 'انجام تراکنش مربوطه توسط پایانه ی انجام دهنده مجاز نمی باشد',
            -1531 => 'تایید تراکنش ناموفق امکان پذیر نمی باشد',
            default => 'خطای ناشناخته',
        };
    }
}
