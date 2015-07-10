<?php
Log::dump("Test page");
View::setReplaceValue("htmlTitle", "FW - test page");

dd(memory_get_peak_usage(true));
dd(memory_get_peak_usage());
//Core::log("aaaa",'proba');

//$arr = Core::$oDb->db_query("SELECT * FROM `users` LIMIT 0 , 30 ;",1,1);
//$arr =  Core::$oDb->db_query("SELECT * FROM `cds` LIMIT 0 , 30 ;");
//print "<pre>";var_dump($arr);print "</pre>";
//$arr = array(array(1,2,3,4));
//print  view::template('system/table', array('data' => $arr));

//var_dump(router::$URNPart);
//var_dump(File::getSubDirNames (Settings::$filePathControlers));

Registry::setData("key","jivko");
print Registry::getData("key");

Cookie::set("jivko","jivko145");
print Cookie::get("jivko");

//Core::$oDb->db_updateData("users", array ("id" => 1), array("name" => 'jivko jechev'),1);
//Core::$oDb->db_setData("users",array("name" => 'jivko jechev 123'),1);
//Core::$oDb->db_deleteData("users",array("id" => '33'),1);
//$res = Core::$oDb->db_getData("users",array("id" => '32'),array('*'),1);
//Log::dump($res);

view::setReplaceValue("replacetest", "new replace string");
view::setReplaceValue("81dc9bdb52d04dc20036dbd8313ed055", "new replace string");

//view::template("article");

//Core::$oSession->SessionProba = "yes";

view::template('system/plainText',array('data'=>'plain text view'));

//throw new Exception("ra4no sazdadena gre6ka", 500);

//ChatController::test();

$db = Core::$oDb;

$data = $db->db_query("select * from users;",array(),1,1);
dd($data);