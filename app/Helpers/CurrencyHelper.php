<?php

namespace App\Helpers;

class CurrencyHelper
{
    /**
     * Convert USD ($) amount to INR (₹)
     *
     * @param float $usdAmount
     * @return float
     */
    public static function convertUsdToInr(float $usdAmount): float
    {
        $rate = (float) env('USD_TO_INR_RATE', 83.50);
        return round($usdAmount * $rate, 2);
    }

    /**
     * Format an INR amount with currency symbol
     *
     * @param float $amount
     * @return string
     */
    public static function formatInr(float $amount): string
    {
        return '₹' . number_format($amount, 2);
    }

    /**
     * Convert INR amount to paise (integer) for Razorpay API
     *
     * @param float $inrAmount
     * @return int
     */
    public static function toPaise(float $inrAmount): int
    {
        return (int) round($inrAmount * 100);
    }
}
