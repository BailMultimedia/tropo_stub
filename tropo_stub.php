<?php

/**
 * @param float $timeout
 */
function answer($timeout = 30.0){}

/**
 * @param $text
 * @param array $options {
 *     @type string|array $allowSignals
 *     @type int $attempts
 *     @type bool $bargein
 *     @type string $choices
 *     @type int $interdigitTimeout
 *     @type float $minConfidence
 *     @type string $mode
 *     @type string $onBadChoice
 *     @type string $onChoice
 *     @type string $onError
 *     @type string $onEvent
 *     @type string $onHangup
 *     @type string $onSignal
 *     @type string $onTimeout
 *     @type string $recognizer
 *     @type float $sensitivity
 *     @type float #speechCompleteTimeout
 *     @type float $speechIncompleteTimeout
 *     @type string $terminator
 *     @type float $timeout
 *     @type string $voice
 * }
 * @return TropoAskEvent
 */
function ask($text, $options = array()){
    return new TropoAskEvent();
}

/**
 * @param $destination
 * @param array $options
 */
function call($destination, $options = array()){}

/**
 * @param $conferenceId
 * @param array $options
 */
function conference($conferenceId, $options = array()){}

/**
 *
 */
function hangup(){}

/**
 * @param $message
 */
function _log($message){}

/**
 * @param $text
 * @param array $options
 */
function message($text, $options = array()){}

/**
 * @param $text
 * @param array $options
 * @return TropoRecordEvent
 */
function record($text, $options = array()){
    return new TropoRecordEvent();
}

/**
 * @param $destination
 */
function redirect($destination){}

/**
 *
 */
function reject(){}

/**
 * @param $text
 * @param array $options
 * @return TropoEvent
 */
function say($text, $options = array()){}

/**
 * @param $url
 * @param array $options
 */
function startCallRecording($url, $options = array()){}

/**
 *
 */
function stopCallRecording(){}

/**
 * @param $destination
 * @param array $options
 * @return TropoTransferEvent
 */
function transfer($destination, $options = array()){
    return new TropoTransferEvent();
}

/**
 * @param $milliseconds
 * @param array $options
 */
function wait($milliseconds, $options = array()){}

/**
 * Class TropoEvent
 */
abstract class TropoEvent{
    /**
     * @var
     */
    public $value;
    /**
     * @var string
     */
    public $name;
}

/**
 * Class TropoChoice
 */
class TropoChoice{
    /**
     * @var
     */
    public $concept;
    /**
     * @var
     */
    public $interpretation;
    /**
     * @var string
     */
    public $utterance;
    /**
     * @var float
     */
    public $confidence;
    /**
     * @var
     */
    public $xml;
    /**
     * @var array
     */
    public $tag;
}

/**
 * Class TropoTransferEvent
 */
class TropoTransferEvent extends TropoEvent{
    /**
     * @var TropoOutgoingCall
     */
    public $value;
    /**
     * @var
     */
    public $connectedDuration;
    /**
     * @var
     */
    public $duration;
}

/**
 * Class TropoRecordEvent
 */
class TropoRecordEvent extends TropoEvent{
    /**
     * @var string
     */
    public $recordURI;
}

/**
 * Class TropoAskEvent
 */
class TropoAskEvent extends TropoEvent{
    /**
     * @var int
     */
    public $attempt;
    /**
     * @var TropoChoice
     */
    public $choice;
    /**
     * @var string
     */
    public $utterance;
}

/**
 * Class TropoCall
 */
class TropoCall
{
    /**
     * @var
     */
    public $methods;
    /**
     * @var
     */
    public $callerID;
    /**
     * @var
     */
    public $network;
    /**
     * @var
     */
    public $sessionId;
    /**
     * @var
     */
    public $callerName;
    /**
     * @var
     */
    public $initialText;
    /**
     * @var
     */
    public $answerTime;
    /**
     * @var
     */
    public $calledID;
    /**
     * @var
     */
    public $channel;
    /**
     * @var
     */
    public $calledName;
    /**
     * @var
     */
    public $id;

    /**
     *
     */
    function isActive(){}

    /**
     *
     */
    function isIncoming(){}

    /**
     *
     */
    function state(){}

    /**
     * @param $header
     * @return string
     */
    function getHeader($header){
        return '';
    }
}

/**
 * Class TropoOutgoingCall
 */
class TropoOutgoingCall extends TropoCall{
    /**
     * @var
     */
    public $userType;
}

$currentCall = new TropoCall();
