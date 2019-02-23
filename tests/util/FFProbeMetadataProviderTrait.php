<?php

declare(strict_types=1);

namespace MediaToolsTest\Util;

trait FFProbeMetadataProviderTrait
{
    /**
     * Return example of ffprobe result.
     *
     * @return array
     */
    public function getExampleFFProbeData(): array
    {
        return [
            'streams' => [
                0 => [
                    'index'                => 0,
                    'codec_name'           => 'h264',
                    'codec_long_name'      => 'H.264 / AVC / MPEG-4 AVC / MPEG-4 part 10',
                    'profile'              => 'Main',
                    'codec_type'           => 'video',
                    'codec_time_base'      => '81/2968',
                    'codec_tag_string'     => 'avc1',
                    'codec_tag'            => '0x31637661',
                    'width'                => 320,
                    'height'               => 180,
                    'coded_width'          => 320,
                    'coded_height'         => 180,
                    'has_b_frames'         => 2,
                    'sample_aspect_ratio'  => '1:1',
                    'display_aspect_ratio' => '16:9',
                    'pix_fmt'              => 'yuv420p',
                    'level'                => 40,
                    'color_range'          => 'tv',
                    'color_space'          => 'smpte170m',
                    'color_transfer'       => 'bt709',
                    'color_primaries'      => 'smpte170m',
                    'chroma_location'      => 'left',
                    'refs'                 => 1,
                    'is_avc'               => 'true',
                    'nal_length_size'      => '4',
                    'r_frame_rate'         => '120/1',
                    'avg_frame_rate'       => '1484/81',
                    'time_base'            => '1/90000',
                    'start_pts'            => 0,
                    'start_time'           => '0.000000',
                    'duration_ts'          => 5467500,
                    'duration'             => '60.750000',
                    'bit_rate'             => '39933',
                    'bits_per_raw_sample'  => '8',
                    'nb_frames'            => '1113',
                    'disposition'          => [
                        'default'          => 1,
                        'dub'              => 0,
                        'original'         => 0,
                        'comment'          => 0,
                        'lyrics'           => 0,
                        'karaoke'          => 0,
                        'forced'           => 0,
                        'hearing_impaired' => 0,
                        'visual_impaired'  => 0,
                        'clean_effects'    => 0,
                        'attached_pic'     => 0,
                        'timed_thumbnails' => 0,
                    ],
                    'tags' => [
                        'creation_time' => '2018-07-04T14:51:24.000000Z',
                        'language'      => 'und',
                        'handler_name'  => 'VideoHandler',
                    ],
                ],
                1 => [
                    'index'                => 1,
                    'codec_name'           => 'h264',
                    //'codec_long_name'      => 'H.264 / AVC / MPEG-4 AVC / MPEG-4 part 10',
                    //'profile'              => 'Main',
                    'codec_type'           => 'video',
                    //'codec_time_base'      => '81/2968',
                    //'codec_tag_string'     => 'avc1',
                    //'codec_tag'            => '0x31637661',
                    'width'                => 1024,
                    'height'               => 768,
                    //'coded_width'          => 1024,
                    //'coded_height'         => 768,
                    'has_b_frames'         => 2,
                    //'sample_aspect_ratio'  => '1:1',
                    'display_aspect_ratio' => '16:9',
                    //'pix_fmt'              => 'yuv420p',
                    'level'                => 40,
                    'color_range'          => 'tv',
                    'color_space'          => 'smpte170m',
                    'color_transfer'       => 'bt709',
                    'color_primaries'      => 'smpte170m',
                    'chroma_location'      => 'left',
                    'refs'                 => 1,
                    //'is_avc'               => 'true',
                    'nal_length_size'      => '4',
                    'r_frame_rate'         => '120/1',
                    //'avg_frame_rate'       => '1484/81',
                    //'time_base'            => '1/90000',
                    'start_pts'            => 0,
                    'start_time'           => '0.000000',
                    //'duration_ts'          => 5467500,
                    'duration'             => '60.750000',
                    //'bit_rate'             => '39933',
                    'bits_per_raw_sample'  => '8',
                    // Some container does not have this info
                    //'nb_frames'            => '1113',
                    'disposition'          => [
                        'default'          => 1,
                        'dub'              => 0,
                        'original'         => 0,
                        'comment'          => 0,
                        'lyrics'           => 0,
                        'karaoke'          => 0,
                        'forced'           => 0,
                        'hearing_impaired' => 0,
                        'visual_impaired'  => 0,
                        'clean_effects'    => 0,
                        'attached_pic'     => 0,
                        'timed_thumbnails' => 0,
                    ]
                ],
                2 => [
                    'index'            => 1,
                    'codec_name'       => 'aac',
                    'codec_long_name'  => 'AAC (Advanced Audio Coding)',
                    'profile'          => 'LC',
                    'codec_type'       => 'audio',
                    'codec_time_base'  => '1/22050',
                    'codec_tag_string' => 'mp4a',
                    'codec_tag'        => '0x6134706d',
                    'sample_fmt'       => 'fltp',
                    'sample_rate'      => '22050',
                    'channels'         => 1,
                    'channel_layout'   => 'mono',
                    'bits_per_sample'  => 0,
                    'r_frame_rate'     => '0/0',
                    'avg_frame_rate'   => '0/0',
                    'time_base'        => '1/22050',
                    'start_pts'        => 0,
                    'start_time'       => '0.000000',
                    'duration_ts'      => 1355766,
                    'duration'         => '61.485986',
                    'bit_rate'         => '84255',
                    'max_bit_rate'     => '84255',
                    'nb_frames'        => '1325',
                    'disposition'      => [
                        'default'          => 1,
                        'dub'              => 0,
                        'original'         => 0,
                        'comment'          => 0,
                        'lyrics'           => 0,
                        'karaoke'          => 0,
                        'forced'           => 0,
                        'hearing_impaired' => 0,
                        'visual_impaired'  => 0,
                        'clean_effects'    => 0,
                        'attached_pic'     => 0,
                        'timed_thumbnails' => 0,
                    ],
                    'tags' => [
                        'creation_time' => '2018-07-04T14:51:24.000000Z',
                        'language'      => 'eng',
                        'handler_name'  => 'Mono',
                    ],
                ],
            ],
            'format' => [
                'filename'         => '/tmp/big_buck_bunny_low.m4v',
                'nb_streams'       => 3,
                'nb_programs'      => 0,
                'format_name'      => 'mov,mp4,m4a,3gp,3g2,mj2',
                'format_long_name' => 'QuickTime / MOV',
                'start_time'       => '0.000000',
                'duration'         => '61.533000',
                'size'             => '983115',
                'bit_rate'         => '127816',
                'probe_score'      => 100,
                'tags'             => [
                    'major_brand'       => 'mp42',
                    'minor_version'     => '512',
                    'compatible_brands' => 'isomiso2avc1mp41',
                    'creation_time'     => '2018-07-04T14:51:24.000000Z',
                    'title'             => 'big_buck_bunny',
                    'encoder'           => 'HandBrake 1.1.0 2018042400',
                ],
            ],
        ];
    }
}
