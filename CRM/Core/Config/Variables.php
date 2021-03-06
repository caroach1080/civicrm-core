<?php
/*
 +--------------------------------------------------------------------+
 | CiviCRM version 4.7                                                |
 +--------------------------------------------------------------------+
 | Copyright CiviCRM LLC (c) 2004-2015                                |
 +--------------------------------------------------------------------+
 | This file is a part of CiviCRM.                                    |
 |                                                                    |
 | CiviCRM is free software; you can copy, modify, and distribute it  |
 | under the terms of the GNU Affero General Public License           |
 | Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
 |                                                                    |
 | CiviCRM is distributed in the hope that it will be useful, but     |
 | WITHOUT ANY WARRANTY; without even the implied warranty of         |
 | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
 | See the GNU Affero General Public License for more details.        |
 |                                                                    |
 | You should have received a copy of the GNU Affero General Public   |
 | License and the CiviCRM Licensing Exception along                  |
 | with this program; if not, contact CiviCRM LLC                     |
 | at info[AT]civicrm[DOT]org. If you have questions about the        |
 | GNU Affero General Public License or the licensing of CiviCRM,     |
 | see the CiviCRM license FAQ at http://civicrm.org/licensing        |
 +--------------------------------------------------------------------+
 */

/**
 * Variables class contains definitions of all the core config settings that are allowed on
 * CRM_Core_Config. If you want a config variable to be present in run time config object,
 * it need to be defined here first.
 *
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2015
 * $Id$
 *
 */
class CRM_Core_Config_Variables extends CRM_Core_Config_Defaults {

  /**
   * The debug level for civicrm.
   * @var int
   */
  public $debug = 0;
  public $backtrace = 0;

  /**
   * The directory where Smarty and plugins are installed.
   * @var string
   */
  public $smartyDir = NULL;
  public $pluginsDir = NULL;

  /**
   * The root directory of our template tree.
   * @var string
   */
  public $templateDir = NULL;

  /**
   * The resourceBase of our application. Used when we want to compose
   * url's for things like js/images/css
   * @var string
   */
  public $resourceBase = NULL;

  /**
   * The directory to store uploaded files
   */
  public $uploadDir = NULL;

  /**
   * The directory to store uploaded image files
   */
  public $imageUploadDir = NULL;

  /**
   * The directory to store uploaded  files in custom data
   */
  public $customFileUploadDir = NULL;

  /**
   * The url that we can use to display the uploaded images
   */
  public $imageUploadURL = NULL;

  /**
   * The local path to the default extension container
   */
  public $extensionsDir;

  /**
   * The url for resources defined by extensions
   */
  public $extensionsURL = NULL;

  /**
   * Are we generating clean url's and using mod_rewrite
   * @var string
   */
  public $cleanURL = FALSE;

  /**
   * List of country codes limiting the country list.
   * 1228 is an id for United States.
   * @var string
   */
  public $countryLimit = array('1228');

  /**
   * Id of default state/province for contact.
   * 1046 is an id for Washington(country:United States).
   * @var int
   */
  public $defaultContactStateProvince;

  /**
   * List of country codes limiting the province list.
   * 1228 is an id for United States.
   * @var string
   */
  public $provinceLimit = array('1228');

  /**
   * ISO code of default country for contact.
   * 1228 is an id for United States.
   * @var int
   */
  public $defaultContactCountry = '1228';

  /**
   * ISO code of default currency.
   * @var int
   */
  public $defaultCurrency = 'USD';

  /**
   * Locale for the application to run with.
   * @var string
   */
  public $lcMessages = 'en_US';

  /**
   * String format for date+time
   * @var string
   */
  public $dateformatDatetime = '%B %E%f, %Y %l:%M %P';

  /**
   * String format for a full date (one with day, month and year)
   * @var string
   */
  public $dateformatFull = '%B %E%f, %Y';

  /**
   * String format for a partial date (one with month and year)
   * @var string
   */
  public $dateformatPartial = '%B %Y';

  /**
   * String format for a year-only date
   * @var string
   */
  public $dateformatYear = '%Y';

  /**
   * Display format for time
   * @var string
   */
  public $dateformatTime = '%l:%M %P';

  /**
   * Input format for time
   * @var string
   */
  public $timeInputFormat = 1;

  /**
   * Input format for date plugin
   * @var string
   */
  public $dateInputFormat = 'mm/dd/yy';

  /**
   * Month and day on which fiscal year starts.
   *
   * @var array
   */
  public $fiscalYearStart = array(
    'M' => 01,
    'd' => 01,
  );

  /**
   * String format for monetary amounts
   * @var string
   */
  public $moneyformat = '%c %a';

  /**
   * String format for monetary values
   * @var string
   */
  public $moneyvalueformat = '%!i';

  /**
   * Format for monetary amounts
   * @var string
   */
  public $currencySymbols = '';

  /**
   * Format for monetary amounts
   * @var string
   */
  public $defaultCurrencySymbol = '$';

  /**
   * Monetary decimal point character
   * @var string
   */
  public $monetaryDecimalPoint = '.';

  /**
   * Monetary thousands separator
   * @var string
   */
  public $monetaryThousandSeparator = ',';

  /**
   * Default user framework. This basically makes Drupal 7 the default
   */
  public $userFramework = 'Drupal';
  public $userFrameworkVersion = 'Unknown';
  public $userFrameworkUsersTableName = 'users';
  public $userFrameworkClass = 'CRM_Utils_System_Drupal';
  public $userHookClass = 'CRM_Utils_Hook_Drupal';

  /**
   * @var string|CRM_Core_Permission_Base
   */
  public $userPermissionClass = 'CRM_Core_Permission_Drupal';

  /**
   * @var NULL|CRM_Core_Permission_Temp
   */
  public $userPermissionTemp = NULL;

  public $userFrameworkURLVar = 'q';
  public $userFrameworkDSN = NULL;
  public $userFrameworkBaseURL = NULL;
  public $userFrameworkResourceURL = NULL;
  public $userFrameworkFrontend = FALSE;
  public $userFrameworkLogging = FALSE;

  public $maxFileSize = 2;

  /**
   * The custom locale strings. Note that these locale strings are stored
   * in a separate column in civicrm_domain
   * @var array
   */
  public $localeCustomStrings = NULL;

  /**
   * Map Provider
   *
   * @var string
   */
  public $mapProvider = NULL;

  /**
   * Map API Key
   *
   * @var string
   */
  public $mapAPIKey = NULL;

  /**
   * Geocoding Provider
   *
   * @var string
   */
  public $geoProvider = NULL;

  /**
   * Geocoding API Key
   *
   * @var string
   */
  public $geoAPIKey = NULL;

  /**
   * How should we get geo code information if google map support needed
   *
   * @var string
   */
  public $geocodeMethod = '';

  /**
   * Whether database-level logging should be performed
   * @var boolean
   */
  public $logging = FALSE;

  /**
   * Whether public pages should display "empowered by CiviCRM"
   *
   * @var boolean
   */
  public $empoweredBy = TRUE;

  /**
   * Array of enabled add-on components (e.g. CiviContribute, CiviMail...)
   *
   * @var array
   */
  public $enableComponents = array(
    'CiviContribute',
    'CiviPledge',
    'CiviMember',
    'CiviEvent',
    'CiviMail',
    'CiviReport',
  );
  public $enableComponentIDs = array(1, 6, 2, 3, 4, 8);

  /**
   * Should payments be accepted only via SSL?
   *
   * @var boolean
   */
  public $enableSSL = FALSE;

  /**
   * Fatal error handler
   *
   * @var string
   */
  public $fatalErrorHandler = NULL;

  /**
   * Legacy encoding for file encoding conversion
   *
   * @var string
   */
  public $legacyEncoding = 'Windows-1252';

  /**
   * Field separator for import/export csv file
   *
   * @var string
   */
  public $fieldSeparator = ',';

  /**
   * Some search settings
   */
  public $includeWildCardInName = 1;
  public $includeEmailInName = 1;
  public $includeNickNameInName = 0;

  public $smartGroupCacheTimeout = 5;

  public $defaultSearchProfileID = NULL;

  /**
   * Dashboard timeout
   */
  public $dashboardCacheTimeout = 1440;

  /**
   * Flag to indicate if acl cache is NOT to be reset
   */
  public $doNotResetCache = 0;

  /**
   * Optimization related variables
   */
  public $includeAlphabeticalPager = 1;
  public $includeOrderByClause = 1;

  /**
   * determine whether the call is from cms or civicrm
   */
  public $inCiviCRM = FALSE;

  /**
   * Component registry object (of CRM_Core_Component type)
   */
  public $componentRegistry = NULL;

  /**
   * PDF receipt as attachment is disabled by default (CRM-8350)
   */
  public $doNotAttachPDFReceipt = FALSE;

  /**
   * Path to wkhtmltopdf if available
   */
  public $wkhtmltopdfPath = FALSE;

  /**
   * Allow second-degree relations permission to edit contacts
   */
  public $secondDegRelPermissions = FALSE;


  /**
   * Allow second-degree relations permission to edit contacts
   */
  public $wpBasePage = NULL;

  /**
   * Provide addressSequence.
   *
   * @param
   *
   * @return string
   */
  public function addressSequence() {
    $addressFormat = CRM_Core_BAO_Setting::getItem(CRM_Core_BAO_Setting::SYSTEM_PREFERENCES_NAME,
      'address_format'
    );

    return CRM_Utils_Address::sequence($addressFormat);
  }

  /**
   * Provide cached default currency symbol.
   *
   * @param
   *
   * @return string
   */
  public function defaultCurrencySymbol($defaultCurrency = NULL) {
    static $cachedSymbol = NULL;
    if (!$cachedSymbol || $defaultCurrency) {
      if ($this->defaultCurrency || $defaultCurrency) {
        $this->currencySymbols = CRM_Core_PseudoConstant::get('CRM_Contribute_DAO_Contribution', 'currency', array(
          'labelColumn' => 'symbol',
          'orderColumn' => TRUE,
        ));
        $currency = $defaultCurrency ? $defaultCurrency : $this->defaultCurrency;
        $cachedSymbol = CRM_Utils_Array::value($currency, $this->currencySymbols, '');
      }
      else {
        $cachedSymbol = '$';
      }
    }
    return $cachedSymbol;
  }

  /**
   * Provide cached default currency symbol.
   *
   * @param
   *
   * @return string
   */
  public function defaultContactCountry() {
    static $cachedContactCountry = NULL;

    if (!empty($this->defaultContactCountry) &&
      !$cachedContactCountry
    ) {
      $countryIsoCodes = CRM_Core_PseudoConstant::countryIsoCode();
      $cachedContactCountry = CRM_Utils_Array::value($this->defaultContactCountry,
        $countryIsoCodes
      );
    }
    return $cachedContactCountry;
  }

  /**
   * Provide cached default country name.
   *
   * @param
   *
   * @return string
   */
  public function defaultContactCountryName() {
    static $cachedContactCountryName = NULL;
    if (!$cachedContactCountryName && $this->defaultContactCountry) {
      $countryCodes = CRM_Core_PseudoConstant::country();
      $cachedContactCountryName = $countryCodes[$this->defaultContactCountry];
    }
    return $cachedContactCountryName;
  }

  /**
   * Provide cached country limit translated to names.
   *
   * @param
   *
   * @return array
   */
  public function countryLimit() {
    static $cachedCountryLimit = NULL;
    if (!$cachedCountryLimit) {
      $countryIsoCodes = CRM_Core_PseudoConstant::countryIsoCode();
      $country = array();
      if (is_array($this->countryLimit)) {
        foreach ($this->countryLimit as $val) {
          // CRM-12007
          // some countries have disappeared and hence they might be in country limit
          // but not in the country table
          if (isset($countryIsoCodes[$val])) {
            $country[] = $countryIsoCodes[$val];
          }
        }
      }
      else {
        $country[] = $countryIsoCodes[$this->countryLimit];
      }
      $cachedCountryLimit = $country;
    }
    return $cachedCountryLimit;
  }

  /**
   * Provide cached province limit translated to names.
   *
   * @param
   *
   * @return array
   */
  public function provinceLimit() {
    static $cachedProvinceLimit = NULL;
    if (!$cachedProvinceLimit) {
      $countryIsoCodes = CRM_Core_PseudoConstant::countryIsoCode();
      $country = array();
      if (is_array($this->provinceLimit)) {
        foreach ($this->provinceLimit as $val) {
          // CRM-12007
          // some countries have disappeared and hence they might be in country limit
          // but not in the country table
          if (isset($countryIsoCodes[$val])) {
            $country[] = $countryIsoCodes[$val];
          }
        }
      }
      else {
        $country[] = $countryIsoCodes[$this->provinceLimit];
      }
      $cachedProvinceLimit = $country;
    }
    return $cachedProvinceLimit;
  }

}
// end CRM_Core_Config
