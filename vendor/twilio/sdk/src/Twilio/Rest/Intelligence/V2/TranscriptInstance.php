<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Intelligence
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Intelligence\V2;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;
use Twilio\Rest\Intelligence\V2\Transcript\SentenceList;
use Twilio\Rest\Intelligence\V2\Transcript\OperatorResultList;
use Twilio\Rest\Intelligence\V2\Transcript\MediaList;


/**
 * @property string|null $accountSid
 * @property string|null $serviceSid
 * @property string|null $sid
 * @property \DateTime|null $dateCreated
 * @property \DateTime|null $dateUpdated
 * @property string $status
 * @property array|null $channel
 * @property bool|null $dataLogging
 * @property string|null $languageCode
 * @property string|null $customerKey
 * @property \DateTime|null $mediaStartTime
 * @property int|null $duration
 * @property string|null $url
 * @property bool|null $redaction
 * @property array|null $links
 */
class TranscriptInstance extends InstanceResource
{
    protected $_sentences;
    protected $_operatorResults;
    protected $_media;

    /**
     * Initialize the TranscriptInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $sid A 34 character string that uniquely identifies this Transcript.
     */
    public function __construct(Version $version, array $payload, string $sid = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'serviceSid' => Values::array_get($payload, 'service_sid'),
            'sid' => Values::array_get($payload, 'sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'status' => Values::array_get($payload, 'status'),
            'channel' => Values::array_get($payload, 'channel'),
            'dataLogging' => Values::array_get($payload, 'data_logging'),
            'languageCode' => Values::array_get($payload, 'language_code'),
            'customerKey' => Values::array_get($payload, 'customer_key'),
            'mediaStartTime' => Deserialize::dateTime(Values::array_get($payload, 'media_start_time')),
            'duration' => Values::array_get($payload, 'duration'),
            'url' => Values::array_get($payload, 'url'),
            'redaction' => Values::array_get($payload, 'redaction'),
            'links' => Values::array_get($payload, 'links'),
        ];

        $this->solution = ['sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return TranscriptContext Context for this TranscriptInstance
     */
    protected function proxy(): TranscriptContext
    {
        if (!$this->context) {
            $this->context = new TranscriptContext(
                $this->version,
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the TranscriptInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Fetch the TranscriptInstance
     *
     * @return TranscriptInstance Fetched TranscriptInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): TranscriptInstance
    {

        return $this->proxy()->fetch();
    }

    /**
     * Access the sentences
     */
    protected function getSentences(): SentenceList
    {
        return $this->proxy()->sentences;
    }

    /**
     * Access the operatorResults
     */
    protected function getOperatorResults(): OperatorResultList
    {
        return $this->proxy()->operatorResults;
    }

    /**
     * Access the media
     */
    protected function getMedia(): MediaList
    {
        return $this->proxy()->media;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Intelligence.V2.TranscriptInstance ' . \implode(' ', $context) . ']';
    }
}
