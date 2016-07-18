<?php
/**
 * Created by PhpStorm.
 * User: etema
 * Date: 12/23/2014
 * Time: 11:22 AM
 */
//CUploadfile error code
define( 'ER_UP_FILE_NOT_EXISTS',           2000, true );//File not found
define( 'ER_UP_FILE_INVALID_TYPE',         2001, true );//file type invalid
define( 'ER_UP_FILE_EXCEEDED_SIZE',        2002, true );//Exceeded filesize limit.
define( 'ER_UP_FILE_EXISTS',               2003, true );//file exists
define( 'ER_UP_FILE_UNDEFINED',            2004, true );//undefined error found

define( 'ER_FILE_NOT_FOUND'               ,2100, true );//When file is not exists

define( 'ER_COMMENT_MODULE_NOT_FOUND'     ,2200, true );//when comment modules is not exists

define( 'ER_UNKNOWN',                      3000, true );//show unknown error

define( 'ER_ACCESS_DENIED',                403 , true );//Access denied
define( 'ER_ACCESS_STRING_INVALID',        410 , true );//error in access level string
define( 'ER_ACCESS_CLASS_NOT_FOUND',       411 , true );//class selected not foun
define( 'ER_ACCESS_ACTION_NOT_FOUND',      412 , true );//actiom selected not foun
define( 'ER_ACCESS_MODULE_NOT_FOUND',      413 , true );//module selected not foun
define( 'ER_ACCESS_CURD_NOT_FOUND',        414 , true );//CURD selected not foun
define( 'ER_ACCESS_LEVEL_NOT_FOUN',        415 , true );//AccessLevel not found in session or other
define( 'ER_USER_NOT_ACCESS',              416 , true );//user can not delete current user
define( 'ER_DELETE_USER_SELF',             417 , true );//user can not delete self
define( 'ER_CANT_CHANGE_ACCESS_LEVEL',     418 , true );//user can not change access level *
define( 'ER_DEACTIVE_USER_SELF',           419 , true );

#Delete a access from accesslevelForm.php
define( 'ER_ACCESS_CANT_DELETE',           450 , true );//can not delete this access level error

define( 'ER_INVALID_MODULE',               4000, true );//error in module uploaded.
define( 'ER_VERSION_MODULE',               4001, true );//last version found

define( 'ER_SERVER_NOT_FOUND',             4100, true );//Server not found in server table
define( 'ER_SERVER_INVALID_TO_THIS_ACTION',4101, true );//server selected is invalid for this action
define( 'ER_SERVER_INVALID_CONNECTION_STR',4102, true );//server connection string is invalid

/**********packageForm.php************/
define( 'ER_PK_TITLE_EXISTS'              ,4200, true );//when package title exists
define( 'ER_PK_TITLE_NOT_EXISTS'          ,4201, true );//package title not found

#groupUserForm.php#
define( 'ER_G_INVALID'                    ,4300, true );//group param added is invalid
define( 'ER_G_EXISTS'                     ,4301, true );//duplicate name found

#groupStore Errors
define( 'ER_G_NAME_INVALID'               ,4302, true );//whene group name set by operator is empty or not valid

#Terms of service error
define( 'ER_TERMS_OF_SERVICE'             ,4400, true );//whene terms not accepted

#CAPTCHA
define( 'ER_CAPTCHA'                      ,4500, true );//captcha is not true

#Params
define( 'ER_PARAMS_REQUIRED'              ,4600, true );//when required params not found

#XML component
define( 'ER_XML_INVALID'                  ,4700, true );//When xml file in not standard or have an error
define( 'ER_XML_ATTRIBUTES_NOT_FOUND'     ,4701, true );//When attribute not found
define( 'ER_XML_INVALID_XPATH'            ,4702, true );//xpath is invalid or empty

#Store contact
define( 'ER_STORE_CONTACT_INVALID_NAME'   ,4800, true );//When name is not valid
define( 'ER_STORE_CONTACT_INVALID_ASSIGN' ,4801, true );//When assign is not valid
define( 'ER_STORE_USERNAME_INVALID'       ,4802, true );//username not valid
define( 'ER_STORE_ID_INVALID'             ,4803, true );
define( 'ER_STORE_NOT_FOUND'              ,4804, true );//store not found
define( 'ER_STORE_ID_IS_EXISTS'           ,4805, true );//this id is exists
define( 'ER_STORE_LOGO_SIZE_INVALID'      ,4806, true );//store logo size must be 200x200

#geoForm.php
define( 'ER_GEO_INVALID_COUNTRY_CODE'     ,4900, true );//
define( 'ER_GEO_INVALID_REGION_CODE'      ,4901, true );

#product module productGroupFrom.php


#profileProductForm.php
define( 'ER_PP_PRODUCT_NOT_FOUND'         ,5000, true );//if product not found in database
define( 'ER_PP_STORE_NOT_FOUND'           ,5001, true );//if store not found in database

#recoveryForm.php
define( 'ER_RECOVERY_INVALID_IDENTIFY'    ,5100, true );//if identify sent from use is not valid
define( 'ER_RECOVERY_INVALID_PART'        ,5101, true );//part not selected
define( 'ER_RECOVERY_MULTI_EMAIL'         ,5102, true );//if duplicate email found
define( 'ER_RECOVERY_EMAIL_NOT_FOUND'     ,5103, true );//email not found
define( 'ER_RECOVERY_USERNAME_NOT_FOUND'  ,5104, true );//username not found
define( 'ER_RECOVERY_INVALID_CODE'        ,5105, true );//code is invalid
define( 'ER_RECOVERY_EXPIRE'              ,5106, true );//your time is out

#package limit parameters
define( 'ER_PACKAGE_LIMIT_STORE_COUNT'    ,5200, true );//limited in create store
define( 'ER_PACKAGE_LIMIT_MP_COUNT'       ,5201, true );//limited in select product by user
define( 'ER_PACKAGE_LIMIT_VARIANT'        ,5202, true );//limited in new variant by user
define( 'ER_PACKAGE_LIMIT_UPDATE_PRODUCT' ,5203, true );//limited in update product
define( 'ER_PACKAGE_MULTI_PRICE_NOT_FOUND',5204, true );
define( 'ER_PACKAGE_TIME_OUT'             ,5205, true );//package time is out and user must be update service

define( 'ER_REBATE_INVALID_NAME'          ,5300, true );//invalid name
define( 'ER_REBATE_INVALID_END_TIME'      ,5301, true );//invalid end-time
define( 'ER_REBATE_IS_NOT_STARTED'        ,5302, true );
define( 'ER_REBATE_TIME_IS_OUT'           ,5303, true );
define( 'ER_REBATE_NOT_ACCEPTABLE'        ,5304, true );
define( 'ER_REBATE_NOT_AVAILABLE'         ,5305, true );
define( 'ER_REBATE_ONCE_USED'             ,5306, true );
define( 'ER_REBATE_TIME_OUT'              ,5307, true );

define( 'ER_INVOICE_INVALID_TYPE'         ,5400, true );
define( 'ER_INVOICE_INVALID_PRICE'        ,5401, true );
define( 'ER_INVOICE_INVALID_PARAM'        ,5402, true );

define( 'ER_PGNAME_INVALID'               ,5500, true );//product group name is invalid
define( 'ER_PGNAME_ALLOW_NOT_REMOVE'      ,5501, true );//you do not have allow to delete this group.

define( 'ER_DUPLICATE_EMAIL'              ,5600, true );//duplicate email found

define( 'ER_BANK_AMOUNT_INVALID'          ,5700, true );//amount number is invalid
define( 'ER_BANK_AMOUNT_IS_ZERO'          ,5701, true );//amount number is zero

//Banks errors
define( 'ER_BANK_VERIFICATION_1'          ,5702, true );
define( 'ER_BANK_VERIFICATION_3'          ,5703, true );
define( 'ER_BANK_VERIFICATION_4'          ,5704, true );
define( 'ER_BANK_VERIFICATION_6'          ,5705, true );
define( 'ER_BANK_VERIFICATION_7'          ,5706, true );
define( 'ER_BANK_VERIFICATION_8'          ,5707, true );
define( 'ER_BANK_VERIFICATION_9'          ,5708, true );
define( 'ER_BANK_VERIFICATION_10'         ,5709, true );
define( 'ER_BANK_VERIFICATION_11'         ,5710, true );
define( 'ER_BANK_VERIFICATION_12'         ,5711, true );
define( 'ER_BANK_VERIFICATION_13'         ,5712, true );
define( 'ER_BANK_VERIFICATION_14'         ,5713, true );
define( 'ER_BANK_VERIFICATION_15'         ,5714, true );
define( 'ER_BANK_VERIFICATION_16'         ,5715, true );
define( 'ER_BANK_VERIFICATION_17'         ,5716, true );
define( 'ER_BANK_VERIFICATION_18'         ,5717, true );
define( 'ER_BANK_AMOUNT_NOT_EQUAL'        ,5718, true );

define( 'ER_FILTER_TYPE_INVALID'          ,5800, true );
define( 'ER_FILTER_ID_INVALID'            ,5801, true );

define( 'ER_GLOBAL_PARAM_WHERE_NOT_FOUND' ,5900, true );
define( 'ER_GLOBAL_PARAM_ASSIGNED_INVALID',5901, true );
define( 'ER_GLOBAL_PARAM_CALL_NAME_INVALID',5902, true );
define( 'ER_GLOBAL_PARAM_NAME_INVALID'    ,5903, true );

define( 'ER_NOTIFICATION_STORE_NOT_FOUND' ,5950, true);
define( 'ER_NOTIFICATION_PARAM_NOT_FOUND' ,5951, true );

define( 'ER_EMAIL_NOT_VAIL'               ,6000, true );//if email is not vail
define( 'ER_EMAIL_ID_IS_EXISTS'           ,6001, true );
define( 'ER_EMAIL_ID_IS_NOT_EXISTS'       ,6002, true );

define( 'ER_STATISTIC_PATH_NOT_FOUND'     ,6100, true );//path is empty or null
define( 'ER_STATISTIC_IP_NOT_FOUND'       ,6101, true );//ip not found

define( 'ER_COMMENTS_NAME_EXISTS'         ,6150, true );//comment name is duplicated
define( 'ER_COMMENTS_NAME_NOT_FOUND'      ,6151, true );//group name not found
define( 'ER_COMMENTS_POINT_ITEM_NAME_INVALID',6152,true);
define( 'ER_COMMENTS_PATH_INVALID'        ,6153, true );
define( 'ER_COMMENTS_TITLE_EMPTY'         ,6154, true );
define( 'ER_COMMENTS_MSG_EMPTY'           ,6155, true );
define( 'ER_COMMENTS_ID_INVALID'          ,6156, true );

define( 'ER_TELEGRAM_INVALID_SETTING'     ,6200, true );

define( 'ER_PHONE_CONTACT_GROUP_NOT_EMPTY',6300, true );

define( 'ER_OFFER_EXISTS'                 ,6350, true );