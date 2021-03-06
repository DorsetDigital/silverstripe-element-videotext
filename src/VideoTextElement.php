<?php

namespace DorsetDigital\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\FieldType\DBField;


class VideoTextElement extends BaseElement
{

    private static $singular_name = 'Text & Video Block';
    private static $plural_name = 'Text & Video Blocks';
    private static $description = 'Adds a block of text with accompanying video';
    private static $table_name = 'DorsetDigital_Elements_VideoText';
    private static $db = [
        'Content' => 'HTMLText',
        'VideoPosition' => 'Varchar(10)',
        'VideoWidth' => 'Varchar(10)',
        'VideoEmbed' => 'Text'
    ];

    private static $inline_editable = false;

    private static $casting = [
        "VideoEmbed" => 'HTMLText',
    ];

    private static $sizes = [
        'col-md-6' => '1/2 page width',
        'col-md-4' => '1/3 page width',
        'col-md-3' => '1/4 page width',
        'col-md-2' => '1/6 page width'
    ];


    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldsToTab('Root.Main', [
            HTMLEditorField::create('Content'),
            DropdownField::create('VideoPosition')
                ->setSource(['after' => 'After Content', 'before' => 'Before Content']),
            DropdownField::create('VideoWidth')
                ->setSource($this->config()->get('sizes'))
                ->setDescription('Relative size on larger screens.  On smaller screens the video will flow before or after the text content, instead of sitting next to it.')
        ]);
        return $fields;
    }

    public function getType()
    {
        return 'Video & Text';
    }


}
