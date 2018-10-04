<?php
/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) James Finstrom <jfinstrom@sangoma.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace FFMpeg\Format\Audio;
/**
 * The GSM audio format
 */
class Gsm extends DefaultAudio
{
    public function __construct()
    {
        $this->audioCodec = 'gsm';
    }
    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('gsm');
    }
}
