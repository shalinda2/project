<?php
/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Content
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Twilio\Rest\Content\V2;

use Twilio\Options;
use Twilio\Values;

abstract class ContentAndApprovalsOptions
{
    /**
     * @param string $sortByDate Whether to sort by ascending or descending date updated
     * @param string $sortByContentName Whether to sort by ascending or descending content name
     * @param \DateTime $dateCreatedAfter Filter by >=[date-time]
     * @param \DateTime $dateCreatedBefore Filter by <=[date-time]
     * @param string $contentName Filter by Regex Pattern in content name
     * @param string $content Filter by Regex Pattern in template content
     * @param string[] $language Filter by array of valid language(s)
     * @param string[] $contentType Filter by array of contentType(s)
     * @param string[] $channelEligibility Filter by array of ChannelEligibility(s), where ChannelEligibility=<channel>:<status>
     * @return ReadContentAndApprovalsOptions Options builder
     */
    public static function read(
        
        string $sortByDate = Values::NONE,
        string $sortByContentName = Values::NONE,
        \DateTime $dateCreatedAfter = null,
        \DateTime $dateCreatedBefore = null,
        string $contentName = Values::NONE,
        string $content = Values::NONE,
        array $language = Values::ARRAY_NONE,
        array $contentType = Values::ARRAY_NONE,
        array $channelEligibility = Values::ARRAY_NONE

    ): ReadContentAndApprovalsOptions
    {
        return new ReadContentAndApprovalsOptions(
            $sortByDate,
            $sortByContentName,
            $dateCreatedAfter,
            $dateCreatedBefore,
            $contentName,
            $content,
            $language,
            $contentType,
            $channelEligibility
        );
    }

}

class ReadContentAndApprovalsOptions extends Options
    {
    /**
     * @param string $sortByDate Whether to sort by ascending or descending date updated
     * @param string $sortByContentName Whether to sort by ascending or descending content name
     * @param \DateTime $dateCreatedAfter Filter by >=[date-time]
     * @param \DateTime $dateCreatedBefore Filter by <=[date-time]
     * @param string $contentName Filter by Regex Pattern in content name
     * @param string $content Filter by Regex Pattern in template content
     * @param string[] $language Filter by array of valid language(s)
     * @param string[] $contentType Filter by array of contentType(s)
     * @param string[] $channelEligibility Filter by array of ChannelEligibility(s), where ChannelEligibility=<channel>:<status>
     */
    public function __construct(
        
        string $sortByDate = Values::NONE,
        string $sortByContentName = Values::NONE,
        \DateTime $dateCreatedAfter = null,
        \DateTime $dateCreatedBefore = null,
        string $contentName = Values::NONE,
        string $content = Values::NONE,
        array $language = Values::ARRAY_NONE,
        array $contentType = Values::ARRAY_NONE,
        array $channelEligibility = Values::ARRAY_NONE

    ) {
        $this->options['sortByDate'] = $sortByDate;
        $this->options['sortByContentName'] = $sortByContentName;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['contentName'] = $contentName;
        $this->options['content'] = $content;
        $this->options['language'] = $language;
        $this->options['contentType'] = $contentType;
        $this->options['channelEligibility'] = $channelEligibility;
    }

    /**
     * Whether to sort by ascending or descending date updated
     *
     * @param string $sortByDate Whether to sort by ascending or descending date updated
     * @return $this Fluent Builder
     */
    public function setSortByDate(string $sortByDate): self
    {
        $this->options['sortByDate'] = $sortByDate;
        return $this;
    }

    /**
     * Whether to sort by ascending or descending content name
     *
     * @param string $sortByContentName Whether to sort by ascending or descending content name
     * @return $this Fluent Builder
     */
    public function setSortByContentName(string $sortByContentName): self
    {
        $this->options['sortByContentName'] = $sortByContentName;
        return $this;
    }

    /**
     * Filter by >=[date-time]
     *
     * @param \DateTime $dateCreatedAfter Filter by >=[date-time]
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter(\DateTime $dateCreatedAfter): self
    {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Filter by <=[date-time]
     *
     * @param \DateTime $dateCreatedBefore Filter by <=[date-time]
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore(\DateTime $dateCreatedBefore): self
    {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * Filter by Regex Pattern in content name
     *
     * @param string $contentName Filter by Regex Pattern in content name
     * @return $this Fluent Builder
     */
    public function setContentName(string $contentName): self
    {
        $this->options['contentName'] = $contentName;
        return $this;
    }

    /**
     * Filter by Regex Pattern in template content
     *
     * @param string $content Filter by Regex Pattern in template content
     * @return $this Fluent Builder
     */
    public function setContent(string $content): self
    {
        $this->options['content'] = $content;
        return $this;
    }

    /**
     * Filter by array of valid language(s)
     *
     * @param string[] $language Filter by array of valid language(s)
     * @return $this Fluent Builder
     */
    public function setLanguage(array $language): self
    {
        $this->options['language'] = $language;
        return $this;
    }

    /**
     * Filter by array of contentType(s)
     *
     * @param string[] $contentType Filter by array of contentType(s)
     * @return $this Fluent Builder
     */
    public function setContentType(array $contentType): self
    {
        $this->options['contentType'] = $contentType;
        return $this;
    }

    /**
     * Filter by array of ChannelEligibility(s), where ChannelEligibility=<channel>:<status>
     *
     * @param string[] $channelEligibility Filter by array of ChannelEligibility(s), where ChannelEligibility=<channel>:<status>
     * @return $this Fluent Builder
     */
    public function setChannelEligibility(array $channelEligibility): self
    {
        $this->options['channelEligibility'] = $channelEligibility;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Content.V2.ReadContentAndApprovalsOptions ' . $options . ']';
    }
}

