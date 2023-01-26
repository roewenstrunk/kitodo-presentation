<?php

/**
 * (c) Kitodo. Key to digital objects e.V. <contact@kitodo.org>
 *
 * This file is part of the Kitodo and TYPO3 projects.
 *
 * @license GNU General Public License version 3 or later.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

// Define metadata elements.
// @see http://dfg-viewer.de/en/profile-of-the-metadata/
return [
    'type' => [
        'format' => [
            [
                'format_root' => 'IIIF2',
                'xpath' => '$.metadata.[?(@.label==\'Manifest Type\')].value',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 1,
        'index_indexed' => 0,
        'index_boost' => 1.00,
        'is_sortable' => 1,
        'is_facet' => 1,
        'is_listed' => 1,
        'index_autocomplete' => 0,
    ],
    'title' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => 'concat(./mods:titleInfo/mods:nonSort," ",./mods:titleInfo/mods:title)',
                'xpath_sorting' => './mods:titleInfo/mods:title',
            ],
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:sourceDesc/teihdr:msDesc/teihdr:head/teihdr:note[@type="caption"]',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'IIIF2',
                'xpath' => '$[label]',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt class=\"tx-dlf-metadata-title\">|</dt>\nvalue.required = 1\nvalue.wrap = <dd class=\"tx-dlf-metadata-title\">|</dd>",
        'index_tokenized' => 1,
        'index_stored' => 1,
        'index_indexed' => 1,
        'index_boost' => 2.00,
        'is_sortable' => 1,
        'is_facet' => 0,
        'is_listed' => 1,
        'index_autocomplete' => 1,
    ],
    'volume' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:part/mods:detail/mods:number',
                'xpath_sorting' => './mods:part[@type="host"]/@order',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 1,
        'index_indexed' => 0,
        'index_boost' => 1.00,
        'is_sortable' => 1,
        'is_facet' => 0,
        'is_listed' => 1,
        'index_autocomplete' => 0,
    ],
    'author' => [
        'format' => [
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:sourceDesc/teihdr:msDesc/teihdr:head/teihdr:name',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'IIIF2',
                'xpath' => "$.metadata.[?(@.label=='Author')].value",
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt class=\"tx-dlf-metadata-author\">|</dt>\nvalue.required = 1\nvalue.split.token.char = 31\nvalue.split.cObjNum = 1\nvalue.split.1.1 = CASE\nvalue.split.1.1.key.data = register:SPLIT_COUNT\nvalue.split.1.1.0 = LOAD_REGISTER\nvalue.split.1.1.0.tx_dlf_metadata_author_name.current = 1\nvalue.split.1.1.1 = LOAD_REGISTER\nvalue.split.1.1.1.tx_dlf_metadata_author_uri.current = 1\nvalue.postCObject = TEXT\nvalue.postCObject.value = {register:tx_dlf_metadata_author_name}\nvalue.postCObject.value.insertData = 1\nvalue.postCObject.value.stdWrap.typolink.parameter = {register:tx_dlf_metadata_author_uri} _blank external\nvalue.postCObject.value.stdWrap.typolink.parameter.insertData = 1\nvalue.postCObject.value.stdWrap.typolink.title = {register:tx_dlf_metadata_author_name}\nvalue.postCObject.value.stdWrap.typolink.ifNotEmpty = 1\nvalue.wrap = <dd class=\"tx-dlf-metadata-author\">|</dd>",
        'index_tokenized' => 1,
        'index_stored' => 1,
        'index_indexed' => 1,
        'index_boost' => 2.00,
        'is_sortable' => 1,
        'is_facet' => 1,
        'is_listed' => 1,
        'index_autocomplete' => 1,
    ],
    'place' => [
        'format' => [
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:sourceDesc/teihdr:msDesc/teihdr:head/teihdr:origPlace',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'IIIF2',
                'xpath' => "$.metadata.[?(@.label=='Place of publication')].value",
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 1,
        'index_stored' => 1,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 1,
        'is_facet' => 1,
        'is_listed' => 1,
        'index_autocomplete' => 0,
    ],
    'year' => [
        'format' => [
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:sourceDesc/teihdr:msDesc/teihdr:head/teihdr:origDate',
                'xpath_sorting' => './teihdr:fileDesc/teihdr:sourceDesc/teihdr:msDesc/teihdr:head/teihdr:origDate/@when',
            ],
            [
                'format_root' => 'IIIF2',
                'xpath' => "$.metadata.[?(@.label=='Date of publication')].value",
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 1,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 1,
        'is_facet' => 1,
        'is_listed' => 1,
        'index_autocomplete' => 0,
    ],
    'language' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:language/mods:languageTerm',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 1,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'collection' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:classification',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:sourceDesc/teihdr:msDesc/teihdr:msIdentifier/teihdr:collection',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'IIIF2',
                'xpath' => "$.metadata.[?(@.label=='Collection')].value",
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 1,
        'index_stored' => 0,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 1,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'owner' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:name[./mods:role/mods:roleTerm="own"]/mods:displayForm',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:publicationStmt/teihdr:publisher',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'IIIF2',
                'xpath' => "$.metadata.[?(@.label=='Owner')].value",
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 1,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'purl' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:identifier[@type="purl"]',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:publicationStmt/teihdr:idno[@type="purl"]',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt>|</dt>\nvalue.required = 1\nvalue.setContentToCurrent = 1\nvalue.typolink.parameter.current = 1\nvalue.wrap = <dd>|</dd>",
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'urn' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:identifier[@type="urn"]',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:publicationStmt/teihdr:idno[@type="urn"]',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'IIIF2',
                'xpath' => "$.metadata.[?(@.label=='URN')].value",
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt>|</dt>\nvalue.required = 1\nvalue.setContentToCurrent = 1\nvalue.typolink.parameter.current = 1\nvalue.typolink.parameter.prepend = TEXT\nvalue.typolink.parameter.prepend.value = http://nbn-resolving.de/\nvalue.wrap = <dd>|</dd>",
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'opac_id' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:identifier[@type="opac"]',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:publicationStmt/teihdr:idno[@type="opac"]',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'union_id' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:identifier[@type="ppn"]',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:publicationStmt/teihdr:idno[@type="mmid"]',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'record_id' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:recordInfo/mods:recordIdentifier',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:publicationStmt/teihdr:idno[@type="recordIdentifier"]',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'IIIF2',
                'xpath' => "$['@id']",
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'prod_id' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:identifier[@type="kitodo"]',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'teiHeader',
                'xpath' => './teihdr:fileDesc/teihdr:publicationStmt/teihdr:idno[@type="kitodo"]',
                'xpath_sorting' => '',
            ],
            [
                'format_root' => 'IIIF2',
                'xpath' => "$.metadata.[?(@.label=='Kitodo')].value",
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'coordinates' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:subject/mods:cartographics/mods:coordinates',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 1,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'license' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:accessCondition[@type="use and reproduction"]/@xlink:href',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 1,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 1,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'terms' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:accessCondition[@type="local terms of use"]/@xlink:href',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 1,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 1,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'restrictions' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:accessCondition[@type="restriction on access"]/@xlink:href',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 1,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'out_of_print' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:accessCondition[@type="out of print work"]',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 1,
        'index_boost' => 1.00,
        'is_sortable' => 0,
        'is_facet' => 1,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'rights_info' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:accessCondition[@type="info"]',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => '',
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'description' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:recordInfo/mods:recordInfoNote',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt>|</dt>\nvalue.required = 1\nvalue.wrap = <dd>|</dd>",
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'identifier' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:identifier',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt>|</dt>\nvalue.required = 1\nvalue.wrap = <dd>|</dd>",
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'object_name' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:relatedItem/mods:titleInfo[not(@displayLabel="alternative")]/mods:title',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt>|</dt>\nvalue.required = 1\nvalue.wrap = <dd>|</dd>",
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'object_alternative_names' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:relatedItem/mods:titleInfo[@displayLabel="alternative"]/mods:title',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt>|</dt>\nvalue.required = 1\nvalue.wrap = <dd>|</dd>",
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'object_location' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:relatedItem[@type="original"]/mods:location/mods:physicalLocation',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt>|</dt>\nvalue.required = 1\nvalue.wrap = <dd>|</dd>",
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'geonames' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:relatedItem/mods:location/mods:url[@displayLabel="geonames"]',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt>|</dt>\nvalue.required = 1\nvalue.wrap = <dd>|</dd>",
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'wikidata' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:relatedItem/mods:location/mods:url[@displayLabel="wikidata"]',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt>|</dt>\nvalue.required = 1\nvalue.wrap = <dd>|</dd>",
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ],
    'wikipedia' => [
        'format' => [
            [
                'format_root' => 'mods',
                'xpath' => './mods:relatedItem/mods:location/mods:url[@displayLabel="wikipedia"]',
                'xpath_sorting' => '',
            ],
        ],
        'default_value' => '',
        'wrap' => "key.wrap = <dt>|</dt>\nvalue.required = 1\nvalue.wrap = <dd>|</dd>",
        'index_tokenized' => 0,
        'index_stored' => 0,
        'index_indexed' => 0,
        'index_boost' => 0.00,
        'is_sortable' => 0,
        'is_facet' => 0,
        'is_listed' => 0,
        'index_autocomplete' => 0,
    ]
];
