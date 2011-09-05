<?php
require_once "context/AbstractConnectionProvider.php";
require_once "restclient/RestClient.php";

class RestDataConnectionProvider extends AbstractConnectionProvider {
    function establish(ConnectionConfiguration $connConfig) {
        $restConnection = new RestApiClient($this->buildEndpoint($connConfig), $connConfig->getSessionId());
        $restConnection->setCompressionEnabled(getConfig("enableGzip"));
        $restConnection->setUserAgent(getWorkbenchUserAgent());
        $restConnection->setExternalLogReference($_SESSION['restDebugLog']); //TODO: maybe replace w/ its own log?? //TODO: move into ctx
        $restConnection->setLoggingEnabled(getConfig("debug") == true);
        $restConnection->setProxySettings(getProxySettings());

        return $restConnection;
    }


    protected function getEndpointType() {
        return "Soap/u"; // pretend we are Partner, because this is later converted...//TODO: change this, its dumb
    }
}

?>
