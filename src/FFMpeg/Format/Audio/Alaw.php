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
 * The Ulaw audio format
 */
class Alaw extends DefaultAudio
{
    public function __construct()
    {
        $this->audioCodec = 'pcm_alaw';
    }
    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('pcm_alaw');
    }
}
