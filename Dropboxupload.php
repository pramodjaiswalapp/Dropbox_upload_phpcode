<?php
/**
 * Pramod
 * Upload file on dropbox
 * Use access token of dropbox app
 */
require_once getcwd().'/vendor/autoload.php';

use Alorel\Dropbox\Operation\AbstractOperation;
use Alorel\Dropbox\Operation\Files\Download; 
use Alorel\Dropbox\Operation\Files\Upload;
use Alorel\Dropbox\Options\Builder\UploadOptions;
use Alorel\Dropbox\Parameters\WriteMode;
AbstractOperation::setDefaultAsync(false);
AbstractOperation::setDefaultToken('rx3ITDSVlAsAAAAAAAAAUTmgKCjLUoD-dkn41mpe_oxPaUytFCmSQ_1DDzsFvMyZ');//Access token
    


//    $op = new Upload();
//    $path = getcwd().'/map_view.png'; //Path where your file
//    
//    $op->raw(
//        $path,
//        'data',
//        (new UploadOptions())
//            ->setClientModified(new DateTime('2000-01-01'))
//            ->setMute(true)
//            ->setWriteMode(WriteMode::add())
//    );
    $req_url =  "https://www.dropbox.com/oauth2/authorize?response_type=token&client_id=vq2w9eehb5jnpfv&redirect_uri=http://localhost/dropbox/Dropboxupload.php";
    ?>
<a href=<?=$req_url?>>Authorized</a>
   