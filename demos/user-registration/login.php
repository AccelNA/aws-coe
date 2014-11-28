<?php
session_start();
require 'vendor/autoload.php';
require 'config.php';


use Aws\DynamoDb\DynamoDbClient;
use Aws\Common\Enum\Region;
use Aws\DynamoDb\Enum\Type;
use Aws\DynamoDb\Enum\AttributeAction;
use Aws\DynamoDb\Enum\ReturnValue;
use Aws\DynamoDb\Enum\KeyType;
use Aws\S3\S3Client;


$client = DynamoDbClient::factory($config);
$s3 = S3Client::factory($config);

$actionMessage=null;
$errorMessage=null;

$actionMessage = @$_GET['act'];

if($_SERVER['REQUEST_METHOD'] == "POST")
    {
    
     $usrId    = @$_POST['userid'];
     $password = md5(@$_POST['password']);
    
    $response = $client->getItem(array(
    "TableName" =>"usr_reg",
    "Key" => array(
        "useremail" => array( Type::STRING => $usrId),
        "password"  => array( Type::STRING => $password)
    )
        
    ));
   
   if(count($response)>0){ 
           $_SESSION['userId'] =$response['Item']['Id']['N'];
           $_SESSION['username'] =$response['Item']['name']['S'];
   }
   else{
       $errorMessage = "Invalid username or password";
   }
    }
    
    
 include('includes/header.php') ?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                       <?php if(@count($_SESSION['userId'])==0){ ?>
                        <h1 class="page-header">
                            Login Here
                        </h1>
                        
                        <h4 style="color: red"><?php if(isset($errorMessage)) echo $errorMessage; ?></h4>
                        
                       <?php } ?> 
                    </div>
                </div>
                <!-- /.row -->
               <?php  if(@count($_SESSION['userId'])==0){  ?>
                <div class="row">
                    <div class="col-lg-4">

                                          
                        <form role="form" method="post" id="loginForm">

                            <div class="form-group">
                                <label>User Email</label>
                                <input class="form-control" name="userid">
                            </div>

                              <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password">
                            </div>
                         <button type="submit" class="btn btn-primary">Sign In</button>
                        </form>
                       
                    </div>
                </div>
                <!-- /.row -->
               <?php } else{ ?>
                <div class="container-fluid">

                <!-- /.row -->

                <div class="row">
					<div class="col-sm-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h3 class="panel-title">View</h3>
							</div>
							<div class="panel-body">  
								<div class="fl">
                                                                 <img  src="https://s3.amazonaws.com/userprofilebucket/<?php echo @$response['Item']['profileImagename']['S'] ?>" max-width="150" height="150">
								</div>
								<div class="fl pl-10">
									<?php echo @$_SESSION['username'] ?><br>
									<?php echo @$response['Item']['useremail']['S'] ?>
								</div>
							</div>
						</div>
					</div>
				</div>
                <!-- /.row -->

            </div>
               <?php } ?>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php include('includes/footer.php') ?>
