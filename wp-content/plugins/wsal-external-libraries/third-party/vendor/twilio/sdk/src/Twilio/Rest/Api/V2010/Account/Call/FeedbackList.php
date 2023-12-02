<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */
namespace WSAL_Vendor\Twilio\Rest\Api\V2010\Account\Call;

use WSAL_Vendor\Twilio\ListResource;
use WSAL_Vendor\Twilio\Version;
class FeedbackList extends ListResource
{
    /**
     * Construct the FeedbackList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The unique sid that identifies this account
     * @param string $callSid The unique string that identifies this resource
     */
    public function __construct(Version $version, string $accountSid, string $callSid)
    {
        parent::__construct($version);
        // Path Solution
        $this->solution = ['accountSid' => $accountSid, 'callSid' => $callSid];
    }
    /**
     * Constructs a FeedbackContext
     */
    public function getContext() : FeedbackContext
    {
        return new FeedbackContext($this->version, $this->solution['accountSid'], $this->solution['callSid']);
    }
    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() : string
    {
        return '[Twilio.Api.V2010.FeedbackList]';
    }
}