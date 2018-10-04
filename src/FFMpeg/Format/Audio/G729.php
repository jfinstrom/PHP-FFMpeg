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
 * The G.729 audio format
 */
class G729 extends DefaultAudio
{
    public function __construct()
    {
        $this->audioCodec = 'g729';
    }
    /**
     * {@inheritDoc}
     */
    public function getAvailableAudioCodecs()
    {
        return array('g729');
    }
}
