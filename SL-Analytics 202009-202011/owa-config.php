<?php

//
// Open Web Analytics - An Open Source Web Analytics Framework
//
// Copyright 2006 Peter Adams. All rights reserved.
//
// Licensed under GPL v2.0 http://www.gnu.org/copyleft/gpl.html
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
// $Id$
//

/**
 * OWA Configuration
 * 
 * @author      Peter Adams <peter@openwebanalytics.com>
 * @copyright   Copyright &copy; 2006 Peter Adams <peter@openwebanalytics.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GPL v2.0
 * @category    owa
 * @package     owa
 * @version		$Revision$	      
 * @since		owa 1.0.0
 */
 
/**
 * DATABASE CONFIGURATION
 *
 * Connection info for databases that will be used by OWA. 
 *
 */

define('OWA_DB_TYPE', 'mysql'); // options: mysql
define('OWA_DB_NAME', 'owa'); // name of the database
define('OWA_DB_HOST', 'localhost'); // host name of the server housing the database
define('OWA_DB_USER', 'slowa'); // database user
define('OWA_DB_PASSWORD', 'r1V7I9nLSGFMs8WeKKEZ'); // database user's password

/**
 * AUTHENTICATION KEYS AND SALTS
 *
 * Change these to different unique phrases.
 */
define('OWA_NONCE_KEY', 'Ru#,c5R_qziiTCd. /V:1m2Tk$Jj/MZkyXBgcI{o{>$M?a`bvFF8OvtFa90Dt)T%');  
define('OWA_NONCE_SALT', 'r^cz[D~YQcI>q)ILkl#?T`9=)8t^Qqvr0S5.$CoLdA2}YjOMq].)2)>3 Ac2U*LG');
define('OWA_AUTH_KEY', 'U  Klf&mfP4`Q!2s8p#^^&_wb!XIHQBEHA!xc/d!W5NO:sV]X:}WQ[G2eYC7o[Za');
define('OWA_AUTH_SALT', 'b^>YmO!~>N_]+C6I=K^,ujF7~j3O3//mwO<>QAf8[1(j<9bY#+h;e-fjvL_MP$?<');

/** 
 * PUBLIC URL
 *
 * Define the URL of OWA's base directory e.g. http://www.domain.com/path/to/owa/ 
 * Don't forget the slash at the end.
 */
 
define('OWA_PUBLIC_URL', 'https://www.saelinklaw.com/SL-Analytics/');  

/** 
 * OWA ERROR HANDLER
 *
 * Overide OWA error handler. This should be done through the admin GUI, but 
 * can be handy during install or development. 
 * 
 * Choices are: 
 *
 * 'production' - will log only critical errors to a log file.
 * 'development' - logs al sorts of useful debug to log file.
 */

//define('OWA_ERROR_HANDLER', 'development');

/** 
 * LOG PHP ERRORS
 *
 * Log all php errors to OWA's error log file. Only do this to debug.
 */

//define('OWA_LOG_PHP_ERRORS', true);
 
/** 
 * OBJECT CACHING
 *
 * Override setting to cache objects. Caching will increase performance. 
 */

//define('OWA_CACHE_OBJECTS', true);

/**
 * CONFIGURATION ID
 *
 * Override to load an alternative user configuration
 */
 
//define('OWA_CONFIGURATION_ID', '1');


?>