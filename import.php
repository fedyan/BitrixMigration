<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$arResult = Array (
    "0" => Array (
        "IBLOCK_TYPE_ID" => "mind",
        "~IBLOCK_TYPE_ID" => "mind",
        "LID" => "ru",
        "~LID" => "ru",
        "NAME" => "iMind",
        "~NAME" => "iMind",
        "SECTION_NAME" => "",
        "~SECTION_NAME" => "",
        "ELEMENT_NAME" => "",
        "~ELEMENT_NAME" => "",
        "ID" => "mind",
        "~ID" => "mind",
        "SECTIONS" => "Y",
        "~SECTIONS" => "Y",
        "EDIT_FILE_BEFORE" => "",
        "~EDIT_FILE_BEFORE" => "",
        "EDIT_FILE_AFTER" => "",
        "~EDIT_FILE_AFTER" => "",
        "IN_RSS" => "N",
        "~IN_RSS" => "N",
        "SORT" => "500",
        "~SORT" => "500",
        "IBLOCKS" => Array (
            "ru_tariff" => Array (
                "ID" => "11",
                "TIMESTAMP_X" => "31.03.2014 20:16:39",
                "IBLOCK_TYPE_ID" => "mind",
                "LID" => "s1",
                "CODE" => "ru_tariff",
                "NAME" => "Тарифы",
                "ACTIVE" => "Y",
                "SORT" => "50",
                "LIST_PAGE_URL" => "#SITE_DIR#/mind/index.php?ID=#IBLOCK_ID#",
                "DETAIL_PAGE_URL" => "#SITE_DIR#/mind/detail.php?ID=#ID#",
                "SECTION_PAGE_URL" => "#SITE_DIR#/mind/list.php?SECTION_ID=#ID#",
                "PICTURE" => "",
                "DESCRIPTION" => "",
                "DESCRIPTION_TYPE" => "text",
                "RSS_TTL" => "24",
                "RSS_ACTIVE" => "Y",
                "RSS_FILE_ACTIVE" => "N",
                "RSS_FILE_LIMIT" => "",
                "RSS_FILE_DAYS" => "",
                "RSS_YANDEX_ACTIVE" => "N",
                "XML_ID" => "",
                "TMP_ID" => "10356720537a22540d3b05a40cafd23b",
                "INDEX_ELEMENT" => "Y",
                "INDEX_SECTION" => "Y",
                "WORKFLOW" => "N",
                "BIZPROC" => "N",
                "SECTION_CHOOSER" => "L",
                "LIST_MODE" => "",
                "RIGHTS_MODE" => "S",
                "SECTION_PROPERTY" => "N",
                "VERSION" => "1",
                "LAST_CONV_ELEMENT" => "0",
                "SOCNET_GROUP_ID" => "",
                "EDIT_FILE_BEFORE" => "",
                "EDIT_FILE_AFTER" => "",
                "SECTIONS_NAME" => "Разделы",
                "SECTION_NAME" => "Раздел",
                "ELEMENTS_NAME" => "Тарифы",
                "ELEMENT_NAME" => "Тариф",
                "EXTERNAL_ID" => "",
                "LANG_DIR" => "/",
                "SERVER_NAME" => "imindru.lab.ru",
                "ELEMENT_CNT" => "4",
                "PROPS" => Array (
                    "PRICE" => Array (
                        "ID" => "16",
                        "~ID" => "16",
                        "TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "~TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Цена всего",
                        "~NAME" => "Цена всего",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "20",
                        "~SORT" => "20",
                        "CODE" => "PRICE",
                        "~CODE" => "PRICE",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "N",
                        "~PROPERTY_TYPE" => "N",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "L",
                        "~LIST_TYPE" => "L",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                    "POPULAR" => Array (
                        "ID" => "18",
                        "~ID" => "18",
                        "TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "~TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Популярный тариф",
                        "~NAME" => "Популярный тариф",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "30",
                        "~SORT" => "30",
                        "CODE" => "POPULAR",
                        "~CODE" => "POPULAR",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "L",
                        "~PROPERTY_TYPE" => "L",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "C",
                        "~LIST_TYPE" => "C",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                    "FREE" => Array (
                        "ID" => "19",
                        "~ID" => "19",
                        "TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "~TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Бесплатно",
                        "~NAME" => "Бесплатно",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "40",
                        "~SORT" => "40",
                        "CODE" => "FREE",
                        "~CODE" => "FREE",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "L",
                        "~PROPERTY_TYPE" => "L",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "C",
                        "~LIST_TYPE" => "C",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                    "MAX_USERS" => Array (
                        "ID" => "20",
                        "~ID" => "20",
                        "TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "~TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Max количество участников",
                        "~NAME" => "Max количество участников",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "10",
                        "~SORT" => "10",
                        "CODE" => "MAX_USERS",
                        "~CODE" => "MAX_USERS",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "N",
                        "~PROPERTY_TYPE" => "N",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "L",
                        "~LIST_TYPE" => "L",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                    "VIDEO" => Array (
                        "ID" => "64",
                        "~ID" => "64",
                        "TIMESTAMP_X" => "2014-03-31 20:24:53",
                        "~TIMESTAMP_X" => "2014-03-31 20:24:53",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Видео на экране",
                        "~NAME" => "Видео на экране",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "200",
                        "~SORT" => "200",
                        "CODE" => "VIDEO",
                        "~CODE" => "VIDEO",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "S",
                        "~PROPERTY_TYPE" => "S",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "L",
                        "~LIST_TYPE" => "L",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                    "CONF" => Array (
                        "ID" => "65",
                        "~ID" => "65",
                        "TIMESTAMP_X" => "2014-03-31 20:24:53",
                        "~TIMESTAMP_X" => "2014-03-31 20:24:53",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Конференция",
                        "~NAME" => "Конференция",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "300",
                        "~SORT" => "300",
                        "CODE" => "CONF",
                        "~CODE" => "CONF",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "S",
                        "~PROPERTY_TYPE" => "S",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "L",
                        "~LIST_TYPE" => "L",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                    "MEETINGS" => Array (
                        "ID" => "66",
                        "~ID" => "66",
                        "TIMESTAMP_X" => "2014-03-31 20:24:53",
                        "~TIMESTAMP_X" => "2014-03-31 20:24:53",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Мероприятия",
                        "~NAME" => "Мероприятия",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "400",
                        "~SORT" => "400",
                        "CODE" => "MEETINGS",
                        "~CODE" => "MEETINGS",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "L",
                        "~PROPERTY_TYPE" => "L",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "L",
                        "~LIST_TYPE" => "L",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                    "PRICE_MONTH" => Array (
                        "ID" => "67",
                        "~ID" => "67",
                        "TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "~TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Цена за месяц",
                        "~NAME" => "Цена за месяц",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "21",
                        "~SORT" => "21",
                        "CODE" => "PRICE_MONTH",
                        "~CODE" => "PRICE_MONTH",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "N",
                        "~PROPERTY_TYPE" => "N",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "L",
                        "~LIST_TYPE" => "L",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                    "PRICE_YEAR" => Array (
                        "ID" => "68",
                        "~ID" => "68",
                        "TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "~TIMESTAMP_X" => "2014-03-31 20:23:04",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Цена за год",
                        "~NAME" => "Цена за год",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "22",
                        "~SORT" => "22",
                        "CODE" => "PRICE_YEAR",
                        "~CODE" => "PRICE_YEAR",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "N",
                        "~PROPERTY_TYPE" => "N",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "L",
                        "~LIST_TYPE" => "L",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                    "DAYS" => Array (
                        "ID" => "69",
                        "~ID" => "69",
                        "TIMESTAMP_X" => "2014-03-31 20:24:53",
                        "~TIMESTAMP_X" => "2014-03-31 20:24:53",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Количество дней",
                        "~NAME" => "Количество дней",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "90",
                        "~SORT" => "90",
                        "CODE" => "DAYS",
                        "~CODE" => "DAYS",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "S",
                        "~PROPERTY_TYPE" => "S",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "L",
                        "~LIST_TYPE" => "L",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                    "ECONOM" => Array (
                        "ID" => "79",
                        "~ID" => "79",
                        "TIMESTAMP_X" => "2014-04-01 16:03:34",
                        "~TIMESTAMP_X" => "2014-04-01 16:03:34",
                        "IBLOCK_ID" => "11",
                        "~IBLOCK_ID" => "11",
                        "NAME" => "Экономите",
                        "~NAME" => "Экономите",
                        "ACTIVE" => "Y",
                        "~ACTIVE" => "Y",
                        "SORT" => "500",
                        "~SORT" => "500",
                        "CODE" => "ECONOM",
                        "~CODE" => "ECONOM",
                        "DEFAULT_VALUE" => "",
                        "~DEFAULT_VALUE" => "",
                        "PROPERTY_TYPE" => "S",
                        "~PROPERTY_TYPE" => "S",
                        "ROW_COUNT" => "1",
                        "~ROW_COUNT" => "1",
                        "COL_COUNT" => "30",
                        "~COL_COUNT" => "30",
                        "LIST_TYPE" => "L",
                        "~LIST_TYPE" => "L",
                        "MULTIPLE" => "N",
                        "~MULTIPLE" => "N",
                        "XML_ID" => "",
                        "~XML_ID" => "",
                        "FILE_TYPE" => "",
                        "~FILE_TYPE" => "",
                        "MULTIPLE_CNT" => "5",
                        "~MULTIPLE_CNT" => "5",
                        "TMP_ID" => "",
                        "~TMP_ID" => "",
                        "LINK_IBLOCK_ID" => "0",
                        "~LINK_IBLOCK_ID" => "0",
                        "WITH_DESCRIPTION" => "N",
                        "~WITH_DESCRIPTION" => "N",
                        "SEARCHABLE" => "N",
                        "~SEARCHABLE" => "N",
                        "FILTRABLE" => "N",
                        "~FILTRABLE" => "N",
                        "IS_REQUIRED" => "N",
                        "~IS_REQUIRED" => "N",
                        "VERSION" => "1",
                        "~VERSION" => "1",
                        "USER_TYPE" => "",
                        "~USER_TYPE" => "",
                        "USER_TYPE_SETTINGS" => "",
                        "~USER_TYPE_SETTINGS" => "",
                        "HINT" => "",
                        "~HINT" => "",
                    ),
                ),
            ),
        ),
    ),
);

include("BitrixMigration.php");

$bm = new BitrixMigration('restore.php');
$bm->import($arResult);

?>