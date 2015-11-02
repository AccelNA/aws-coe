<?php
     require '/home/ec2-user/vendor\autoload.php';
     use Aws\Common\Enum\Region;
     use Aws\DynamoDb\Enum\Type;

     $bucket='user-profile-bucket';  #Replace with your Bucket name 
     $tableName = "usr_reg"; #Replace with your Database table name
     $config = array(
        'key'    => 'AKIAITVNGGCJNTLL7EHA',
        'secret' => 'Fx+Pjl/B6Tc+Js02qaZSt9GkVvh3q2Fa8yQXSAtL',
        'profile' => 'default',
        'region' => Region::US_EAST_1 #replace with your desired region     
        );
?>
