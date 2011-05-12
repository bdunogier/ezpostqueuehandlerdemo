<?php
class MyPostQueueHandler
{
    /**
     * Asynchronous publishing post process test
     *
     * @param int $contentObjectId the content object id (integer)
     * @param int $contentObjectVersion
     * @param int $status the publishing proccess status (as one of the ezpContentPublishingProcess::STATUS_* constants)
     *
     * @return void
     **/
    public static function test( $contentObjectId, $contentObjectVersion, $status )
    {
        $contentObject = eZContentObjectVersion::fetchVersion( $contentObjectVersion, $contentObjectId );

        echo "- Post processing for object {$contentObjectId}.{$contentObjectVersion}: status $status\n";
        echo "  Object name: " . $contentObject->attribute( 'name' ) . "\n";
    }
}
?>