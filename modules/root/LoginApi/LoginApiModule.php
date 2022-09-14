<?php
/**
 * HelloWorldModule class file.
 *
 * @author LimeSurvey GmbH  <info@limesurvey.org>
 * @link http://www.limesurvey.org.com/
 * @copyright 2007-2019  The LimeSurvey Project Team / Carsten Schmitz
 * @license GNU General Public License See COPYRIGHT.php for copyright notices and details.
 */

 class LoginApiModule extends CWebModule
 {



   public $defaultController='LoginApi';

   public function init()
   {
     parent::init();
     Yii::setPathOfAlias('LoginApi',dirname(__FILE__));

     
   }

 }
