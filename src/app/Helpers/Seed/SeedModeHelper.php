<?php

namespace App\Helpers\Seed;

class SeedModeHelper {

    /**
     * Returns string of selected seed mode.
     * @return string
     */
    public static function getSeedMode() {
        return config('database.seeding.current_mode');
    }

    /**
     * Returns index of selected seed mode.
     * @return int
     */
    public static function getSeedModeIndex() {
        return config('database.seeding.modes')[SeedModeHelper::getSeedMode()];
    }

    /**
     * Checks if current seed mode is set to full seed.
     * @return bool
     */
    public static function isFullSeed() {
        return SeedModeHelper::getSeedMode() == 'full';
    }

    /**
     * Checks if current seed mode is set to fast seed.
     * @return bool
     */
    public static function isFastSeed() {
        return SeedModeHelper::getSeedMode() == 'fast';
    }

    /**
     * Checks if current seed mode is set to basic seed.
     * @return bool
     */
    public static function isBasicSeed() {
        return SeedModeHelper::getSeedMode() == 'basic';
    }

}